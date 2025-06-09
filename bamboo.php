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
    <b>Bamboo plant care</b> <br><br>

     <b>Growing Media for Bamboo Plants</b><br>
<b>Soil-Based Media (for potted or ground bamboo)</b><br>
<b>Type:</b> Well-draining, loamy soil enriched with organic matter.<br>

<b>pH:</b> Neutral to slightly acidic (6.0–6.5).<br>

<b>Potting Mix: </b> mix of garden soil, compost, and sand or perlite in a 2:1:1 ratio.<br><br>

<b>Water-Based Media (for Lucky Bamboo – Dracaena sanderiana)</b><br>
<b>Container:</b> Glass or ceramic vase.<br>

<b>Water Type: </b> or distilled (chlorine- and fluoride-free).<br>

<b>Support: </b> or marbles to hold the stalks upright.<br><br>

<b>Bamboo Plant Care</b><br>
<b>Light</b>
<b>Indoor Bamboo:</b> Bright, indirect light. Avoid direct sunlight which can scorch leaves.<br>

<b>Outdoor Bamboo:</b> Full sun to partial shade depending on the species.<br>

<b> Watering</b><br>
<b>Soil Bamboo: </b> the soil evenly moist, not soggy. Water more in hot weather.<br>

<b>Lucky Bamboo in Water:</b> Change water every 7–10 days and ensure roots are submerged.<br>

<b> Temperature & Humidity</b><br>
<b>Ideal Temp:</b> 65–95°F (18–35°C).<br>

<b>Humidity:</b> Prefers high humidity. Mist regularly indoors if air is dry.<br>

<b> Fertilization</b><br>
<b>Soil Bamboo:</b> Use a balanced liquid fertilizer (e.g., 10-10-10) monthly during the growing season.<br>

<b>Lucky Bamboo:</b> Use a very diluted houseplant fertilizer every 1–2 months.<br>

<b>Pruning & Maintenance</b><br>
Trim yellow or dead leaves/stalks.<br>

Cut back overgrown stems to encourage bushier growth.<br>

For lucky bamboo, shape stalks by rotating toward the light or using wire training.<br>

<b>Repotting</b><br>
Every 1–2 years when roots outgrow the container.


  </p>
</body>
</html>


