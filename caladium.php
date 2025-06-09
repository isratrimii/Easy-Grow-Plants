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

  <img src="images/p41.webp" alt="Styled Example" class="fancy-image">
  <p>
    <b>Caladium plant care</b> <br><br>

    <b>Planting and Media:</b><br>
<b>Soil:</b><br>
Caladiums prefer well-drained, slightly acidic soil rich in organic matter. Use a mix of high-quality potting mix with compost or other organic matter for potted caladiums. 
<b>Potting:</b>
Plant caladium tubers 2 inches deep, with the eyes facing upward, in pots at least 6 inches deep. Ensure pots have ample drainage holes. 
<b>Watering:</b><br>
Keep the soil consistently moist but not soggy, especially in the summer. Water when the top inch of soil feels dry, especially for potted plants. <br>
<b>Care:</b><br>
<b>Sunlight:</b> Caladiums prefer bright, indirect light or dappled shade, as direct sunlight can scorch their leaves. <br>
<b>Temperature and Humidity:</b> Caladiums thrive in warm temperatures (65-85°F) and high humidity. Use a humidifier or frequent misting to increase humidity. <br>
<b>Fertilizer: </b> regularly, especially during the growing season, with a balanced, slow-release fertilizer. <br>
<b>Overwintering:</b> In colder climates, caladium tubers should be dug up and stored indoors during the winter, allowing the foliage to die back after the first frost. <br>
<b>Pruning:</b> Remove yellowed or spent leaves to encourage new growth. <br>
<b>Propagation:</b> Bulbs can be split and propagated every 2 years. <br>
<b>Additional Tips:</b><br>
Use mulch to retain moisture and suppress weeds.<br>
Avoid placing caladiums near vents, which can dehydrate them.<br>
Handle caladiums carefully during repotting, as they have delicate leaves and roots. <br>

  
  </p>
</body>
</html>


