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

  <img src="images/p40.jpg" alt="Styled Example" class="fancy-image">
  <p>
    <b>Kalanchoe plant care</b> <br><br>

    <b>Plant Media:</b><br>
<b>Soil:</b> Kalanchoes need well-draining soil to prevent root rot. A cactus or succulent potting mix is ideal, or you can create your own by mixing regular potting mix with gritty gravel. 
<b>Pot:</b> Clay pots with drainage holes are recommended to ensure proper drainage. <br>
<b>Watering:</b><br>
<b>Frequency:</b> Water when the top few inches of the soil are dry. Allow the soil to dry out completely between waterings. <br>
<b>Winter:</b> Water sparingly during winter when the plant is dormant. <br>
<b>Drainage:</b> Ensure excess water drains away from the pot to prevent root rot. <br>
<b>Light:</b><br>
<b>Bright, Indirect Light: </b> thrive in bright, indirect sunlight. <br>
<b>Avoid Direct Sun:</b> While they can tolerate some direct sunlight, especially in cooler climates or during cooler parts of the day, too much direct sun can burn the leaves. <br>
<b>Indoor Conditions:</b> If growing indoors, place the plant near a window that receives bright, indirect light. <br>
<b>Temperature:</b><br>
<b>Warm Temperatures:</b> Kalanchoes prefer warm temperatures, ideally between 60-85°F (15-30°C). <br>
<b>Protect from Cold: </b> drafts and move the plant indoors if temperatures drop below 60°F. <br>
<b>Fertilizing:</b><br>
<b>Balanced Fertilizer:</b>
Use a balanced, water-soluble fertilizer once a month during the growing season (spring and summer).<br>
<b>Reduced Feeding in Winter:</b>
Reduce or stop fertilization during the winter months when the plant is dormant. <br>
<b>Pest and Disease Control:</b><br>
<b>Pests:</b> Monitor for pests like aphids, mealybugs, and spider mites. <br>
<b>Overwatering:</b> Overwatering can lead to root rot and other fungal diseases. <br>
<b>Propagating Kalanchoe:</b><br>
<b>Easy Propagation:</b> Kalanchoe is easily propagated by stem or leaf cuttings.<br>
<b>Let Cuttings Dry:</b> Allow cuttings to dry out for a few days before planting them in a small pot of well-draining soil.  

  
  </p>
</body>
</html>


