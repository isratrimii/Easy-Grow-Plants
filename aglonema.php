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

  <img src="images/p32.jpg" alt="Styled Example" class="fancy-image">
  <p>
    <b>Aglonema plant care</b> <br><br>

    <b>Plant Media:</b><br>
<b>Soil Mix:</b> A well-draining mix is crucial. A popular choice is a combination of coco coir, perlite, and compost. <br>
<b>Perlite:</b> Adds drainage and aeration, preventing waterlogging. <br>
<b>Compost: </b> organic matter and nutrients. <br>
<b>Drainage: </b> pots with drainage holes or add a layer of lava rocks to the bottom of pots without drainage to prevent root rot. <br>
<b>Care:</b><br>
<b>Light:</b> Bright to medium indirect light is ideal. Aglaonema can tolerate low light, but growth may slow. <br>
<b>Temperature:</b> Maintain temperatures between 65-75°F (18-24°C). <br>
<b>Watering: </b> when the top inch of soil feels dry. Allow excess water to drain. <br>
<b>Humidity: </b> enjoys higher humidity. Consider using a pebble tray, humidifier, or grouping plants together. <br>
<b>Fertilizing: </b> monthly during spring and summer with a diluted houseplant fertilizer. <br>
<b>Repotting:</b> Repot in spring if the plant becomes root-bound, using a pot that is 2" larger than the previous one. <br>
<b>Toxicity: </b> is mildly toxic to pets and humans. <br>
<b>Additional Tips:</b><br>
<b>Avoid direct sunlight:</b> Direct sun can scorch the leaves. <br>
<b>Avoid drafty areas:</b> Aglaonema plants are sensitive to drafts.<br> 
<b>Allow soil to dry out between waterings:</b> Overwatering can cause yellowing leaves.<br> 
<b>Consider using a humidifier or pebble tray:</b> Aglaonema plants thrive in humid environments. <br>
<b>Keep an eye out for common issues:</b> Wilting leaves may indicate underwatering, while yellowing leaves can be a sign of overwatering. 




  </p>
</body>
</html>


