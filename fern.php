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

  <img src="images/p43.jpg" alt="Styled Example" class="fancy-image">
  <p>
    <b>Fern plant care</b> <br><br>
    <b>Soil and Potting Mix:</b><br>
<b>Well-draining:</b> Ferns need soil that drains well to prevent root rot, so avoid heavy clay soils. <br>
<b>Moist but not soggy:</b> Maintain a consistently moist soil, but ensure excess water drains away. <br>
<b>Organic matter:</b> Ferns benefit from soil rich in organic matter, like compost or leaf mold. <br>
<b>Suggested mix:</b> A good mix for ferns is 50% potting soil, 25% compost or aged manure, 10% perlite or sand,<br>
 10% peat moss or coconut coir, and 5% leaf mold or well-rotted pine bark. <br>
<b>Watering:</b><br>
<b>Water thoroughly:</b>
Water fern plants until water drains from the bottom of the pot, indicating the soil is saturated. <br>
<b>Avoid splashing leaves:</b>
When watering, aim water at the base of the plant to avoid splashing the fronds, which can lead to fungal diseases. <br>
<b>Consistent moisture:</b>
Keep the soil consistently moist, but not soggy, to prevent underwatering or overwatering stress. <br>
<b>Misting:</b><br>
Mist ferns regularly, especially those that prefer high humidity, to maintain moisture in the air. <br>
<b>Light:</b><br>
<b>Bright, indirect light:</b>
Ferns prefer bright, indirect light, which can be achieved with filtered sunlight or by placing them away from direct sunlight.<br>
<b>Avoid direct sun:</b>
Direct sunlight can burn delicate fern fronds, especially during hot summer months. <br>
<b>Humidity:</b>
High humidity: Ferns thrive in high humidity, ideally between 50-70%.<br>
<b>Increase humidity:</b> Use a humidifier, mist the leaves, or create a pebble tray with water to raise humidity levels. <br>
<b>Temperature:</b><br>
<b>Moderate temperatures:</b>
Ferns prefer moderate temperatures, around 65-70°F (18-21°C) during the day and 10°F (6°C) cooler at night. <br>
<b>Avoid temperature extremes:</b>
Keep ferns away from drafts, fireplaces, or air vents to prevent temperature fluctuations. <br>
<b>Fertilization:</b><br>
<b>Fertilize during growing season:</b>
Fertilize ferns with a balanced, water-soluble fertilizer every 4-6 weeks during the growing season (spring and summer).<br>
<b>Use a weak solution:</b>
Use a half-strength fertilizer to avoid over-fertilizing, which can harm the fern. <br>
<b>Other Care Tips:</b><br>
<b>Prune dead fronds:</b> Remove dead or brown fronds to encourage new growth. <br>
<b>Repotting:</b> Repot ferns as needed, usually every 1-2 years, using fresh soil and a pot that's slightly larger. <br>
<b>Pest and disease:</b> Monitor for pests and diseases and treat promptly if necessary. <br>


  
  </p>
</body>
</html>


