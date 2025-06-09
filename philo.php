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

  <img src="images/p35.jpg" alt="Styled Example" class="fancy-image">
  <p>
    <b>philodendrone plant care</b> <br><br>
    <b>Plant Media:</b><br>
<b>Well-draining potting mix:</b> Philodendrons prefer a mix that allows water to drain freely, preventing root rot. <br>
<b>Organic matter: </b> organic matter like peat moss or shredded leaves can improve aeration and nutrient supply. <br>
<b>Consider pH:</b> Philodendrons generally prefer slightly acidic soil. <br>
<b>Alternatives: </b> plant mixes, such as those for azaleas and hydrangeas, can be suitable. <br>
<b>Avoid:</b> Clay or heavy soils that don't drain well.<br> 
<b>Care:</b><br>
<b>Light: </b> Indirect light is ideal, but some philodendrons can tolerate low light. Avoid direct sunlight, which can scorch leaves.<br> 
<b>Watering: </b> consistently moist soil, but avoid overwatering, which can lead to root rot. Water when the top inch of soil feels dry. <br>
<b>Humidity:</b> Philodendrons prefer high humidity, but can tolerate normal home temperatures. Mist leaves occasionally or use a humidifier. <br>
<b>Fertilizing: </b> with a balanced liquid fertilizer once a month during the growing season. <br>
<b>Temperature: </b> temperatures range from 65 to 80 degrees Fahrenheit. <br>
<b>Pruning:</b> Regularly prune philodendrons to encourage new growth and prevent leggy plants. <br>
<b>Support: </b> philodendrons may require a trellis or moss pole. 

    
  
  </p>
</body>
</html>


