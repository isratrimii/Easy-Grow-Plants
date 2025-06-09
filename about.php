<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/800.jpg" alt="">
         <h3>why choose us?</h3>
         <p>We believe in providing the best plant care services with the highest level of customer service.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/801.webp" alt="">
         <h3>what we provide?</h3>
         <p>We always ensure to provide healthy plants, healthy plant tips.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/900.webp" alt="">
         <p>Received my bamboo plant in great condition. The pot was sturdy, and it looks amazing in my balcony.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rifat Jahan</h3>
      </div>

      <div class="box">
         <img src="images/901.webp" alt="">
         <p>I am really grateful for the company. Specially their plant care option is so nice.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>A.H.M Saifuddin</h3>
      </div>

      <div class="box">
         <img src="images/903.avif" alt="">
         <p>Absolutely thrilled with my snake plant! It arrived fresh, vibrant, and well-packaged. I’ve placed it near my kitchen window, and it’s thriving.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nusrat Jahan</h3>
      </div>

      <div class="box">
         <img src="images/904.jpg" alt="">
         <p>I ordered a rubber plant for my office desk. Delivery was quick, and it came with a neat care guide. A perfect low-maintenance addition.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Farhana Chowdhury</h3>
      </div>

      <div class="box">
         <img src="images/905.avif" alt="">
         <p>The bonsai I bought was a gift for my mom. She loved it! Healthy, well-shaped, and a great conversation starter.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Maisha Rahman</h3>
      </div>

      <div class="box">
         <img src="images/906.jpg" alt="">
         <p>Loved the wide selection of indoor plants. I got a pothos and a ZZ plant—both doing fantastic!.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shurovi Yeasmin</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>