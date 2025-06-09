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

  <img src="images/p38.jpg" alt="Styled Example" class="fancy-image">
  <p>
    <b>Spider plant care</b> <br><br>

    <b>Media (Soil):</b><br>
<b>General-purpose potting mix:</b> This is a suitable option for spider plants. <br>
<b>Tropical plant potting mix: </b> Miracle-Gro potting mixes are designed for tropical plants and can be a good choice, especially if you want to avoid gnats. <br>
<b>Well-draining: </b> soil needs to drain well to prevent root rot. <br>
<b>Care:</b><br>
<b>Light:</b>
Spider plants prefer moderate to bright indirect sunlight. Avoid direct sunlight, as it can burn the leaves. <br>
<b>Watering:</b>
Water when the top inch or two of soil feels dry, but avoid overwatering. They like moist but not soggy soil. <br>
<b>Fertilizing:</b>
Apply a balanced, water-soluble fertilizer monthly during the growing season (spring to fall). <br>
<b>Humidity:</b>
Spider plants do well in average humidity, but occasional misting can be beneficial. <br>
<b>Temperature:</b>
They prefer cool to average temperatures and can tolerate warmer conditions. <br>
<b>Transplanting:</b>
Spider plants grow quickly and can become pot-bound, so plan to repot them every other year. <br>
<b>Propagation:</b>
Spider plants easily propagate through the plantlets that develop on the stems. 



  
  </p>
</body>
</html>


