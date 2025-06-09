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

  <img src="images/p30.webp" alt="Styled Example" class="fancy-image">
  <p>
    <b>Tulip plant care</b> <br><br>

    <b>Planting Media:</b><br>
<b>Soil:</b> Tulips prefer well-drained, loamy or sandy soil with a pH of 6.0 to 6.5. <br>
<b>Amendments:</b> For heavy clay soils, improve drainage by adding organic matter like compost or well-rotted manure, 
or consider adding horticultural grit. <br>
<b>Containers:</b> Use containers with good drainage holes and a soil mix that isn't overly peat-based. <br>
<b>Care:</b><br>
<b>Planting Time:</b>
Plant tulip bulbs in late fall (September to November). <br>
<b>Sunlight:</b>
Tulips generally need 6 hours of sunlight per day, but some varieties tolerate light shade. <br>
<b>Watering:</b>
Keep the soil moist but not soggy. Water when the top inch of soil feels dry. <br>
<b>Fertilizing nd puring:</b>
As soon as the garden awakens in early spring, old leaves should be removed from the beds to allow the soil to breathe.<br>
 When the first leaves of the tulip have fully formed, it is advisable to give a small amount of mineral complete fertilizer.<br> 
 And then it is time to enjoy. Almost no plant with such beauty is as uncomplicated as the tulip. After flowering, simply remove the flower head,<br>
  but wait until the leaves are completely wilted before cutting them. That way, chances are good for a second flush next year.<br>
  <b>Deadheading:</b>
Remove spent flowers to prevent seed production, but leave the foliage intact to allow the bulb to store energy for next year's bloom. <br>
<b>After Blooming:</b>
Let the foliage die back naturally, then dig up the bulbs (6 weeks after blooming) to store for replanting in the fall. <br>
<b>Potted Tulips:</b><br>
<b>Aftercare:</b> Follow the same care guidelines as in-ground tulips: water regularly, ensure good drainage, and provide adequate sunlight.<br>
<b>Winter Protection:</b> Mulch potted tulips to protect them from winter cold.<br>
<b>Spring Replanting:</b> Remove any leftover roots, trim old stems, and replant with fresh soil. 






  </p>
</body>
</html>


