<?php

@include 'config.php';
session_start();

// Use seller session instead of admin
$seller_id = $_SESSION['seller_id'];

if (!isset($seller_id)) {
   header('location:login.php');
   exit;
}

// Add product
if (isset($_POST['add_product'])) {
   $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
   $price = filter_var($_POST['price'], FILTER_SANITIZE_STRING);
   $category = filter_var($_POST['category'], FILTER_SANITIZE_STRING);
   $details = filter_var($_POST['details'], FILTER_SANITIZE_STRING);

   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_size = $_FILES['image']['size'];
   $image_folder = 'uploaded_img/' . $image;

   $select_products = $conn->prepare("SELECT * FROM `products` WHERE name = ? AND seller_id = ?");
   $select_products->execute([$name, $seller_id]);

   if ($select_products->rowCount() > 0) {
      $message[] = 'Product name already exists!';
   } else {
      $insert_products = $conn->prepare("INSERT INTO `products` (name, category, details, price, image, seller_id) VALUES (?, ?, ?, ?, ?, ?)");
      $insert_products->execute([$name, $category, $details, $price, $image, $seller_id]);

      if ($insert_products) {
         if ($image_size > 2000000) {
            $message[] = 'Image size is too large!';
         } else {
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'New product added!';
         }
      }
   }
}

// Delete product
if (isset($_GET['delete'])) {
   $delete_id = $_GET['delete'];

   // Verify ownership
   $check_owner = $conn->prepare("SELECT * FROM `products` WHERE id = ? AND seller_id = ?");
   $check_owner->execute([$delete_id, $seller_id]);
   if ($check_owner->rowCount() == 0) {
      $message[] = 'Unauthorized deletion attempt!';
   } else {
      $fetch = $check_owner->fetch(PDO::FETCH_ASSOC);
      unlink('uploaded_img/' . $fetch['image']);

      $delete_product = $conn->prepare("DELETE FROM `products` WHERE id = ?");
      $delete_product->execute([$delete_id]);

      $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE pid = ?");
      $delete_wishlist->execute([$delete_id]);

      $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE pid = ?");
      $delete_cart->execute([$delete_id]);

      header('location:seller_products.php');
      exit;
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Seller Products</title>
   <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>

<?php include 'seller_header.php'; ?>

<section class="add-products">
   <h1 class="title">Add New Product</h1>
   <form action="" method="POST" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <input type="text" name="name" class="box" required placeholder="Product name">
            <select name="category" class="box" required>
               <option value="" selected disabled>Select category</option>
               <option value="pothos">Pothos</option>
               <option value="cactus">Cactus</option>
               <!-- Add more categories -->
            </select>
         </div>
         <div class="inputBox">
            <input type="number" name="price" class="box" required placeholder="Price" min="0">
            <input type="file" name="image" class="box" accept="image/*" required>
         </div>
      </div>
      <textarea name="details" class="box" required placeholder="Product details" cols="30" rows="10"></textarea>
      <input type="submit" class="btn" value="Add Product" name="add_product">
   </form>
</section>

<section class="show-products">
   <h1 class="title">Your Products</h1>
   <div class="box-container">
      <?php
         $products = $conn->prepare("SELECT * FROM `products` WHERE seller_id = ?");
         $products->execute([$seller_id]);
         if ($products->rowCount() > 0) {
            while ($product = $products->fetch(PDO::FETCH_ASSOC)) {
      ?>
      <div class="box">
         <div class="price"><?= $product['price']; ?>/-</div>
         <img src="uploaded_img/<?= $product['image']; ?>" alt="">
         <div class="name"><?= $product['name']; ?></div>
         <div class="cat"><?= $product['category']; ?></div>
         <div class="details"><?= $product['details']; ?></div>
         <div class="flex-btn">
            <a href="seller_update_product.php?update=<?= $product['id']; ?>" class="option-btn">Update</a>
            <a href="seller_products.php?delete=<?= $product['id']; ?>" class="delete-btn" onclick="return confirm('Delete this product?');">Delete</a>
         </div>
      </div>
      <?php
            }
         } else {
            echo '<p class="empty">No products yet!</p>';
         }
      ?>
   </div>
</section>

<script src="js/script.js"></script>
</body>
</html>
