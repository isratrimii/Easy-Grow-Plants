<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['add_to_wishlist'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);

   $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
   $check_wishlist_numbers->execute([$p_name, $user_id]);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if($check_wishlist_numbers->rowCount() > 0){
      $message[] = 'already added to wishlist!';
   }elseif($check_cart_numbers->rowCount() > 0){
      $message[] = 'already added to cart!';
   }else{
      $insert_wishlist = $conn->prepare("INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES(?,?,?,?,?)");
      $insert_wishlist->execute([$user_id, $pid, $p_name, $p_price, $p_image]);
      $message[] = 'added to wishlist!';
   }

}

if(isset($_POST['add_to_cart'])){

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);
   $p_qty = $_POST['p_qty'];
   $p_qty = filter_var($p_qty, FILTER_SANITIZE_STRING);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if($check_cart_numbers->rowCount() > 0){
      $message[] = 'already added to cart!';
   }else{

      $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
      $check_wishlist_numbers->execute([$p_name, $user_id]);

      if($check_wishlist_numbers->rowCount() > 0){
         $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE name = ? AND user_id = ?");
         $delete_wishlist->execute([$p_name, $user_id]);
      }

      $insert_cart = $conn->prepare("INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES(?,?,?,?,?,?)");
      $insert_cart->execute([$user_id, $pid, $p_name, $p_price, $p_qty, $p_image]);
      $message[] = 'added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>


 <!-- Elfsight AI Chatbot | Untitled AI Chatbot -->
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<div class="elfsight-app-16a613fd-65c2-46c6-86b4-d77350a7baf9" data-elfsight-app-lazy></div>






   
<?php include 'header.php'; ?>

<div class="home-bg">

   <section class="home">

      <div class="content">
         <span>Take care of your plants..🌱</span>
         <h3>Planting roots of happiness</h3>
         <a href="about.php" class="btn">about us</a>
      </div>

   </section>

</div>

<section class="home-category">

   <h1 class="title">shop by category</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pothos.jpg" alt="">
         <h3>pothos</h3>
         <p>Indoor Plant.</p>
         <a href="category.php?category=pothos" class="btn">pothos</a>
      </div>

      <div class="box">
         <img src="images/cactus.webp" alt="">
         <h3>cactus</h3>
         <p>Outdoor Plant.</p>
         <a href="category.php?category=cactus" class="btn">cactus</a>
      </div>

      <div class="box">
         <img src="images/orchid.webp" alt="">
         <h3>orchid</h3>
         <p>Outdoor Plant.</p>
         <a href="category.php?category=orchid" class="btn">orchid</a>
      </div>

      <div class="box">
         <img src="images/succulent.webp" alt="">
         <h3>succulent</h3>
         <p>Outdoor Plant.</p>
         <a href="category.php?category=succulent" class="btn">succulent</a>
      </div>

       <div class="box">
         <img src="images/101.webp" alt="">
         <h3>air plant</h3>
         <p>Indoor Plant.</p>
         <a href="category.php?category=air_plant" class="btn">air plant</a>
      </div>

      <div class="box">
         <img src="images/snakeplant.jpg" alt="">
         <h3>snake plant</h3>
         <p>Indoor Plant.</p>
         <a href="category.php?category=snake_plant" class="btn">snake plant</a>
      </div>

      <div class="box">
         <img src="images/rubberplant.webp" alt="">
         <h3>rubber plant</h3>
         <p>Indoor Plant.</p>
         <a href="category.php?category=rubber_plant" class="btn">rubber plant</a>
      </div>

      <div class="box">
         <img src="images/tulip.avif" alt="">
         <h3>tulip</h3>
         <p>Outdoor Plant.</p>
         <a href="category.php?category=tulip" class="btn">tulip</a>
      </div>

      <div class="box">
         <img src="images/lily.webp" alt="">
         <h3>lily</h3>
         <p>Outdoor Plant.</p>
         <a href="category.php?category=lily" class="btn">lily</a>
      </div>

      <div class="box">
         <img src="images/154.jpg" alt="">
         <h3>aglonema</h3>
         <p>Indoor Plant.</p>
         <a href="category.php?category=aglonema" class="btn">aglonema</a>
      </div>

      <div class="box">
         <img src="images/rose.webp" alt="">
         <h3>rose plant</h3>
         <p>Outdoor Plant.</p>
         <a href="category.php?category=rose_plant" class="btn">rose plant</a>
      </div>

      <div class="box">
         <img src="images/dracena.jpg" alt="">
         <h3>dracena plant</h3>
         <p>Indoor Plant.</p>
         <a href="category.php?category=dracena_plant" class="btn">dracena plant</a>
      </div>

      <div class="box">
         <img src="images/bamboo.jpg" alt="">
         <h3>Bamboo plant</h3>
         <p>Indoor Plant.</p>
         <a href="category.php?category=bamboo_plant" class="btn">bamboo plant</a>
      </div>

      <div class="box">
         <img src="images/philo.webp" alt="">
         <h3>philodendron</h3>
         <p>Indoor Plant.</p>
         <a href="category.php?category=philodendron" class="btn">philodendron</a>
      </div>
       <div class="box">
         <img src="images/katamukut.webp" alt="">
         <h3>euphorbia mili</h3>
         <p>Outdoor Plant.</p>
         <a href="category.php?category=euphorbia_mili" class="btn">euphorbia mili</a>
      </div>

      <div class="box">
         <img src="images/788.jpg" alt="">
         <h3>Bonsai</h3>
         <p>Outdoor Plant.</p>
         <a href="category.php?category=bonsai" class="btn">bonsai</a>
      </div>

      <div class="box">
         <img src="images/spider.webp" alt="">
         <h3>spider plant</h3>
         <p>Indoor Plant.</p>
         <a href="category.php?category=spider_plant" class="btn">spider plant</a>
      </div>

      <div class="box">
         <img src="images/nanok.jpg" alt="">
         <h3>nanok</h3>
         <p>Indoor Plant.</p>
         <a href="category.php?category=nanok" class="btn">nanok</a>
      </div>

      <div class="box">
         <img src="images/kalanchoe.jpg" alt="">
         <h3>kalanchoe</h3>
         <p>Outdoor Plant.</p>
         <a href="category.php?category=kalanchoe" class="btn">kalanchoe</a>
      </div>

      <div class="box">
         <img src="images/1007.webp" alt="">
         <h3>caladium</h3>
         <p>Outdoor Plant.</p>
         <a href="category.php?category=caladium" class="btn">caladium</a>
      </div>

      <div class="box">
         <img src="images/calathea.jpg" alt="">
         <h3>calathea</h3>
         <p>Outdoor Plant.</p>
         <a href="category.php?category=calathea" class="btn">calathea</a>
      </div>

      <div class="box">
         <img src="images/fern.jpg" alt="">
         <h3>Fern</h3>
         <p>Outdoor Plant.</p>
         <a href="category.php?category=fern" class="btn">fern</a>
      </div>

      <div class="box">
         <img src="images/1475.jpg" alt="">
         <h3>peperomia</h3>
         <p>Indoor Plant.</p>
         <a href="category.php?category=peperomia" class="btn">peperomia</a>
      </div>

      <div class="box">
         <img src="images/zz.jpg" alt="">
         <h3>ZZ PLANT</h3>
         <p>Indoor Plant.</p>
         <a href="category.php?category=zz_plant" class="btn">zz plant</a>
      </div>

       

      <div class="box">
         <img src="images/tools.webp" alt="">
         <h3>plant tools</h3>
         <p>Necessery.</p>
         <a href="category.php?category=plant_tools" class="btn">plant tools</a>
      </div>

      <div class="box">
         <img src="images/1587.webp" alt="">
         <h3>planter</h3>
         <p>Necessery.</p>
         <a href="category.php?category=planter" class="btn">planter</a>
      </div>

      <div class="box">
         <img src="images/fertilizer.webp" alt="">
         <h3>fertilizer</h3>
         <p>Necessery.</p>
         <a href="category.php?category=fertilizer" class="btn">fertilizer</a>
      </div>

      <div class="box">
         <img src="images/media.jpg" alt="">
         <h3>media</h3>
         <p>Necessery.</p>
         <a href="category.php?category=media" class="btn">media</a>
      </div>

      <div class="box">
         <img src="images/medicine.webp" alt="">
         <h3>plant medicine</h3>
         <p>Necessery.</p>
         <a href="category.php?category=plant_medicine" class="btn">medicine</a>
      </div>


   </div>

</section>

<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

   <?php
      $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
      $select_products->execute();
      if($select_products->rowCount() > 0){
         while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <form action="" class="box" method="POST">
      <div class="price">$<span><?= $fetch_products['price']; ?></span>/-</div>
      <a href="view_page.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
      <div class="name"><?= $fetch_products['name']; ?></div>
      <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
      <input type="hidden" name="p_name" value="<?= $fetch_products['name']; ?>">
      <input type="hidden" name="p_price" value="<?= $fetch_products['price']; ?>">
      <input type="hidden" name="p_image" value="<?= $fetch_products['image']; ?>">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

</section>







<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>