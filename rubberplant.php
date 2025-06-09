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

  <img src="images/p29.avif" alt="Styled Example" class="fancy-image">
  <p>
    <b>Rubber plant care</b> <br><br>

    <b>Light and Location:</b><br>
Rubber plants prefer bright, indirect light, ideally near an east-facing window. <br>
Avoid placing them in harsh, direct sunlight, which can scorch the leaves. <br>
They can tolerate some direct sunlight, but it's best to shield them from the hottest midday sun. <br>
<b>Watering:</b><br>
Water thoroughly, allowing the water to drain completely from the pot. <br>
Let the soil dry out slightly between waterings. <br>
If the plant is in a saucer, empty out any excess water after watering. <br>
<b>Potting Mix:</b><br>
Use a well-draining houseplant potting mix.<br>
Avoid soil mixes that are too heavy or retain moisture.<br>
Consider using a peat-free houseplant compost or a specialized "ficus" compost. <br>
<b>Temperature and Humidity:</b><br>
Rubber plants prefer warm, consistent temperatures, ideally between 60-75°F (15-24°C). <br>
They can tolerate lower temperatures, but prolonged exposure to cold can stress the plant.<br> 
They prefer moderate humidity, but can tolerate the dry air common in homes. <br>
Mist the leaves occasionally or use a humidifier to increase humidity if needed. <br>
<b>Fertilizing:</b><br>
Fertilize regularly with a balanced, water-soluble houseplant fertilizer during the growing season (spring and summer).<br>
Fertilize every two weeks or according to package instructions.<br>
Reduce fertilization frequency if the plant is in lower light.<br> 
<b>Other Care Tips:</b><br>
Wipe the leaves with a damp cloth to remove dust and keep them shiny. <br>
Consider supporting the plant with a stake or prune it in spring to rejuvenate. <br>
Repot in late winter or early spring if needed, using a pot that is slightly larger than the previous one. <br>
Avoid moving the plant too frequently, as they are sensitive to changes in their environment. <br>
Keep the plant away from drafts and sudden temperature changes. <br>
<b>Propagating:</b><br>
Rubber plants can be propagated by stem or tip cuttings or air layering. 

  
  </p>
</body>
</html>


