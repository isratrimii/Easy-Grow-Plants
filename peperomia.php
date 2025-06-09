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
      background-color: #B5DCB7;
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

  <img src="images/p44.jpg" alt="Styled Example" class="fancy-image">
  <p>
    <b>Peperomia plant care</b> <br><br>

    <b>Plant Media:</b><br>
<b>Potting Mix:</b> Peperomias need a well-draining potting mix that holds moisture well. An orchid potting medium or a mix of coco coir and perlite can be suitable. <br>
<b>Soil pH:</b> They prefer a slightly acidic pH, around 6.0 to 6.5. <br>
<b>Drainage:</b> Ensure the pot has good drainage to prevent root rot. <br>
<b>Care:</b><br>
<b>Light:</b> Bright, indirect light is ideal, avoiding direct sunlight which can scorch leaves. <br>
<b>Watering:</b> Water when the top inch or two of soil is dry. Avoid overwatering. <br>
<b>Humidity:</b> Peperomias enjoy high humidity, which can be increased with misting, pebble trays, or humidifiers. <br>
<b>Temperature:</b> Maintain temperatures between 18-25°C (65-77°F). <br>
<b>Fertilizing:</b> Fertilize with a balanced liquid fertilizer every two to four weeks during the growing season. <br>
<b>Repotting:</b> Repotting is usually needed every 2 years or when the plant becomes root-bound. <br>
<b>Pruning:</b> Pruning can be done to maintain shape, remove leggy growth, or rejuvenate an overgrown plant. <br>
<b>Pest Control:</b> Watch for sap-sucking pests like aphids, mealybugs, and spider mites, and treat them with soap solution or neem oil. 

  
  </p>
</body>
</html>


