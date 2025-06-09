<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};
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
    <section class="home-category">
        <h1 class="title">How to keep your plants happy</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/care101.webp" alt="">
         <h3>pothos</h3>
    
         <a href="pothos.php" class="btn">care & tips</a>
      </div>

      <div class="box">
         <img src="images/care102.avif" alt="">

         <h3>cactus</h3>
        
         <a href="cactus.php" class="btn">care & tips</a>
      </div>

      <div class="box">
         <img src="images/care104.webp" alt="">

         <h3>orchid</h3>
        
         <a href="orchid.php" class="btn">care & tips</a>
      </div>

      <div class="box">
         <img src="images/care105.jpg" alt="">

         <h3>sucuulent</h3>
        
         <a href="succulent.php" class="btn">care & tips</a>
      </div>

      <div class="box">
         <img src="images/care109.webp" alt="">

         <h3>air plant</h3>
        
         <a href="airplant.php" class="btn">care & tips</a>
      </div>

      <div class="box">
         <img src="images/care110.webp" alt="">

         <h3>snake plant</h3>
        
         <a href="snakeplant.php" class="btn">care & tips</a>
      </div>

      <div class="box">
         <img src="images/care106.webp" alt="">

         <h3>rubber plant</h3>
        
         <a href="rubberplant.php" class="btn">care & tips</a>
      </div>

      <div class="box">
         <img src="images/care107.avif" alt="">

         <h3>tulip</h3>
        
         <a href="tulip.php" class="btn">care & tips</a>
      </div>

      <div class="box">
         <img src="images/care108.jpg" alt="">

         <h3>lily</h3>
        
         <a href="lily.php" class="btn">care & tips</a>
      </div>

      <div class="box">
         <img src="images/care111.jpg" alt="">

         <h3>aglonema</h3>
        
         <a href="aglonema.php" class="btn">care & tips</a>
      </div>

      <div class="box">
         <img src="images/care112.webp" alt="">

         <h3>rose plant</h3>
        
         <a href="rose.php" class="btn">care & tips</a>
      </div>

      <div class="box">
         <img src="images/care113.jpg" alt="">

         <h3>dracena</h3>
        
         <a href="dracena.php" class="btn">care & tips</a>
      </div>

      <div class="box">
         <img src="images/care114.webp" alt="">

         <h3>bamboo plant</h3>
        
         <a href="bamboo.php" class="btn">care & tips</a>
      </div>

         <div class="box">
         <img src="images/care115.jpg" alt="">

         <h3>philodendrone </h3>
        
         <a href="philo.php" class="btn">care & tips</a>
      </div>

          <div class="box">
         <img src="images/care116.webp" alt="">

         <h3>euphorbia </h3>
        
         <a href="mili.php" class="btn">care & tips</a>
      </div>

      
         <div class="box">
         <img src="images/care117.jpg" alt="">

         <h3>bonsai</h3>
        
         <a href="bonsai.php" class="btn">care & tips</a>
      </div>

      
         <div class="box">
         <img src="images/care118.webp" alt="">

         <h3>spider plant </h3>
        
         <a href="spiderplant.php" class="btn">care & tips</a>
      </div>

          <div class="box">
         <img src="images/care119.webp" alt="">

         <h3>nanok </h3>
        
         <a href="nanok.php" class="btn">care & tips</a>
      </div>

         <div class="box">
         <img src="images/care120.jpg" alt="">

         <h3>kalanchoe </h3>
        
         <a href="kalanchoe.php" class="btn">care & tips</a>
      </div>

         <div class="box">
         <img src="images/care121.webp" alt="">

         <h3>caladium </h3>
        
         <a href="caladium.php" class="btn">care & tips</a>
      </div>

         <div class="box">
         <img src="images/care122.webp" alt="">

         <h3>calathea </h3>
        
         <a href="calathea.php" class="btn">care & tips</a>
      </div>

         <div class="box">
         <img src="images/care123.webp" alt="">

         <h3>fern</h3>
        
         <a href="fern.php" class="btn">care & tips</a>
      </div>

         <div class="box">
         <img src="images/care124.webp" alt="">

         <h3>peperomia</h3>
        
         <a href="peperomia.php" class="btn">care & tips</a>
      </div>

         <div class="box">
         <img src="images/care125.webp" alt="">

         <h3>zz plant </h3>
        
         <a href="zz.php" class="btn">care & tips</a>
      </div>



   </div>
   </section>
</body>
</html>
