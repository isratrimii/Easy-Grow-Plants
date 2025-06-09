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

  <img src="images/p39.webp" alt="Styled Example" class="fancy-image">
  <br>
    <b>Nanok plant care</b> <br><br>

    <b>Plant Media:</b><br>
<b>Potting Mix:</b> A high-quality potting mix is crucial for Tradescantia Nanouk. <br>
<b>Drainage: </b> soil should drain well to prevent root rot. <br>
<b>Amendments: </b>sand, or orchid bark can improve drainage. <br>
<b>Organic Matter:</b> Adding organic matter like peat moss can help retain moisture. <br>
<b>Soil pH:</b> A slightly acidic soil pH (around 6.0) is ideal for vibrant foliage. <br>
<b>Care:</b><br>
<b>Light:</b> Tradescantia Nanouk prefers bright, indirect light, but can tolerate some direct sun. <br>
<b>Watering:</b> Water when the top inch of soil feels dry to the touch. <br>
<b>Temperature: </b> temperature between 55-75°F (13-24°C). <br>
<b>Humidity:</b> Moderate humidity is generally fine. <br>
<b>Fertilizing:</b> Use a balanced, water-soluble fertilizer once a month during the growing season (spring and summer). <br>
<b>Pruning:</b> Regularly trim stems to encourage bushier growth. <br>
<b>Propagating:</b> Tradescantia Nanouk can be easily propagated from stem cuttings in water or soil. <br>
<b>Pests and Diseases:</b> Keep an eye out for common pests like spider mites or mealybugs. <br>
<b>Repotting:</b><br>
<b>Frequency:</b> Repot every year or two, depending on the plant's growth. <br>
<b>Soil:</b> Use a fresh potting mix with good drainage. <br>
<b>Troubleshooting:</b><br>
<b>Yellowing leaves:</b> May indicate overwatering or too much fertilizer.<br>
<b>Brown leaf tips:</b> May indicate underwatering.<br>
<b>Leggy growth:</b> Prune to promote bushier growth. 





  
  </p>
</body>
</html>


