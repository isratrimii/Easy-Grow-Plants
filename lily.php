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

  <img src="images/p31.avif" alt="Styled Example" class="fancy-image">
  <p>
    <b>Lily plant care</b> <br><br>

    <b>Planting and Soil:</b><br>
<b>Sunlight:</b>
Lilies prefer full sun to partial shade, with 6-8 hours of sunlight being ideal. <br>
<b>Soil:</b>
They need well-draining soil that is rich in organic matter and slightly acidic to neutral in pH (6.0-7.0). Amend the soil with compost or well-aged manure for fertility.<br> 
<b>Planting Depth:</b>
Plant lily bulbs 6-9 inches deep to shade the roots and stabilize tall stems. <br>
<b>Raised Beds:</b>
Consider building raised beds if drainage is an issue. <br>
<b>Watering:</b><br>
<b>Consistency: </b> prefer consistently moist soil, but avoid overwatering. <br>
<b>Watering Schedule: </b> regularly, especially during dry periods, and adjust based on rainfall.<br> 
<b>Mulch: </b> around the plant to retain moisture and keep the soil cool. <br>
<b>Fertilizing:</b><br>
<b>High-Potassium:</b> Apply a high-potassium liquid fertilizer every few weeks from planting to six weeks after blooming.<br>
<b>Compost and Manure:</b> Use compost or well-aged manure to improve soil fertility. <br>
<b>Maintenance:</b><br>
<b>Mulching:</b> Apply mulch to keep the soil cool and retain moisture.<br>
<b>Deadheading:</b> Remove faded flowers to encourage energy for future blooms.<br>
<b>Leaf Removal:</b> Do not remove leaves until they have died down and turned brown in the fall.<br>
<b>Staking:</b> Stake tall lilies to prevent toppling over.<br>
<b>Winter Protection:</b> Add mulch in the fall to protect bulbs from freezing. 




  </p>
</body>
</html>


