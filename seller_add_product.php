<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['seller_id'])) {
   header('location:seller_login.php');
   exit;
}

$seller_id = $_SESSION['seller_id'];

if (isset($_POST['add_product'])) {
   $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
   $price = filter_var($_POST['price'], FILTER_SANITIZE_STRING);
   $category = filter_var($_POST['category'], FILTER_SANITIZE_STRING);
   $details = filter_var($_POST['details'], FILTER_SANITIZE_STRING);

   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_size = $_FILES['image']['size'];
   $image_folder = 'uploaded_img/' . $image;

   // Check for duplicate product name by same seller
   $check_product = $conn->prepare("SELECT * FROM products WHERE name = ? AND seller_id = ?");
   $check_product->execute([$name, $seller_id]);

   if ($check_product->rowCount() > 0) {
      $message[] = 'Product name already exists!';
   } else {
      $add_product = $conn->prepare("INSERT INTO products (name, category, details, price, image, seller_id) VALUES (?, ?, ?, ?, ?, ?)");
      $add_product->execute([$name, $category, $details, $price, $image, $seller_id]);

      if ($add_product) {
         if ($image_size > 2000000) {
            $message[] = 'Image size is too large!';
         } else {
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Product added successfully!';
         }
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Add Product</title>
   <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>

<?php include 'seller_header.php'; ?>

<section class="add-products">
   <h1 class="title">Add New Product</h1>

   <form action="" method="POST" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <input type="text" name="name" class="box" required placeholder="Enter product name">
            <select name="category" class="box" required>
               <option value="" selected disabled>Select category</option>
               <option value="pothos">Pothos</option>
               <option value="cactus">Cactus</option>
               <option value="orchid">Orchid</option>
               <option value="succulent">Succulent</option>
               <option value="air_plant">Air Plant</option>
               <option value="snake_plant">Snake Plant</option>
               <option value="rubber_plant">Rubber Plant</option>
               <option value="tulip">Tulip</option>
               <option value="lily">Lily</option>
               <option value="aglonema">Aglonema</option>
               <option value="rose_plant">Rose Plant</option>
               <option value="dracena_plant">Dracena Plant</option>
               <option value="bamboo_plant">Bamboo Plant</option>
               <option value="philodendron">Philodendron</option>
               <option value="euphorbia_mili">Euphorbia Mili</option>
               <option value="bonsai">Bonsai</option>
               <option value="spider_plant">Spider Plant</option>
               <option value="nanok">Nanok</option>
               <option value="kalanchoe">Kalanchoe</option>
               <option value="caladium">Caladium</option>
               <option value="calathea">Calathea</option>
               <option value="fern">Fern</option>
               <option value="peperomia">Peperomia</option>
               <option value="zz_plant">ZZ Plant</option>
            </select>
         </div>

         <div class="inputBox">
            <input type="number" min="0" name="price" class="box" required placeholder="Enter product price">
            <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png" required>
         </div>
      </div>

      <textarea name="details" class="box" required placeholder="Enter product details" cols="30" rows="10"></textarea>
      <input type="submit" class="btn" name="add_product" value="Add Product">
   </form>

   <?php
   if (!empty($message)) {
      foreach ($message as $msg) {
         echo '<div class="message">' . $msg . '</div>';
      }
   }
   ?>
</section>

<script src="js/script.js"></script>

</body>
</html>
