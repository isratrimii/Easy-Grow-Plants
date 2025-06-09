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

  <img src="images/p36.jpg" alt="Styled Example" class="fancy-image">
  <p>
    <b>Euphorbia Mili plant care</b> <br><br>

  <b> Planting Media:</b><br>
<b>Well-draining soil:</b> Euphorbia plants need well-draining soil to prevent root rot. <br>
<b>potting mix:</b> These mixes are specifically formulated for well-draining conditions, which is ideal for euphorbia. <br>
<b>Sandy soil:</b> Mixing sand into standard potting mix can improve drainage. <br>
<b>Perlite or grit:</b> These materials can be added to soil to improve drainage and aeration. <br>
<b>Clay pots: </b> clay pots allow for better drainage compared to glazed pots. <br>
<b>Care Tips:</b><br>
<b>Watering:</b> Water when the top few inches of soil have dried out, and reduce watering in winter.<br> 
<b>Sunlight:</b> Euphorbia plants prefer full sun to partial shade. <br>
<b>Fertilizing:</b> Use a balanced fertilizer monthly during the summer, but avoid over-fertilizing. <br>
<b>Deadheading:</b> Remove spent flower stalks to encourage new growth. <br>
<b>Humidity:</b> Typical household humidity is generally fine, but avoid areas with excessive humidity. <br>
<b>Pest and Disease: </b> for common houseplant pests like mealybugs and spider mites. <br>
<b>Temperature and Humidity:</b><br>
<b>Temperature: </b> plants prefer temperatures between 18–27°C (64–81°F). <br>
<b>Humidity: </b> a humidity level between 30% and 50%. <br>
<b>Additional Notes:</b>
<b>Sap: </b> sap is an irritant, so handle with care. <br>
<b>Variety:</b> There are many different species and cultivars of euphorbia, each with slightly different needs. <br>
<b>Location:</b> Consider the specific needs of your euphorbia when choosing a location, taking into account sunlight, temperature, and humidity. 

  
  </p>
</body>
</html>


