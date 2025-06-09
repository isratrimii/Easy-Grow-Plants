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

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

<style>
    body {
      font-family: Arial, sans-serif;
      background-color:  #B5DCB7;
      text-align: center;
      padding: 50px;
      font-size: 1.5rem;
    }

    .fancy-image {
      width: 300px;
      background-size: cover;
      background-position: center;
    }

    .fancy-image:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    }

    h1 {
      color: #333;
    }
  </style>
</head>
<body>

  <img src="images/p33.jpg" alt="Styled Example" class="fancy-image">
  <p>
    <b>Dracena plant care</b> <br><br>

    <b>Planting Media:</b><br>
<b>Well-draining soil:</b> Dracaenas prefer a well-draining potting mix that allows excess water to escape.<br> 
<b>Standard potting mixes:</b> Many standard potting mixes available at garden centers or nurseries are suitable. <br>
<b>Perlite or coco coir:</b> Adding perlite or coco coir to the soil can improve drainage and aeration. <br>
<b>Avoid heavy, overly rich soil: </b> don't do well in heavy soils that hold too much moisture.<br> 
<b>Care:</b><br>
<b>Light:</b>
Bright, indirect light is ideal. Avoid direct sunlight, which can scorch the leaves. <br>
<b>Watering:</b>
Water when the top inch or two of soil feels dry. Water thoroughly, allowing excess water to drain out. <br>
<b>Temperature and humidity:</b>
Dracaenas prefer average room temperatures between 65-80°F (18-27°C) and average humidity.<br> 
<b>Fertilizing:</b>
Fertilize once or twice a year during spring and summer with a diluted houseplant fertilizer. <br>
<b>Pruning:</b>
Dracaenas can be pruned to maintain their shape and size. <br>
<b>Repotting:</b>
Repot every 2-3 years or when the plant becomes root-bound, using a pot slightly larger than the previous one. <br>
<b>Pests:</b>
Watch for pests like spider mites or scale, and treat them with insecticidal soap or rubbing alcohol. 



  </p>
</body>
</html>


