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

  <img src="images/p25.jpg" alt="Styled Example" class="fancy-image">
  <p>
    <b>Orchid plant care</b> <br>
     <b>Light:</b>
Orchids need bright, indirect light. Avoid direct sunlight, which can scorch the leaves. <br><br>
<b>Watering:</b>
Water sparingly, allowing the potting mix to dry out completely between waterings. Overwatering can lead to root rot. <br> <br>
<b>Humidity:</b>
Orchids thrive in humid environments. Maintain humidity by placing a tray of water near the orchid, misting the leaves, or using a humidifier. <br> <br>
<b>Temperature:</b>
Most orchids prefer temperatures between 60-85°F during the day and 55-65°F at night. <br><br>
<b>Fertilizing:</b>
Use a balanced, water-soluble fertilizer specifically designed for orchids. Fertilize during the growing season and reduce fertilization during dormancy. <br><br>
<h4>Orchid Media:</h4>
<b>Bark:</b> A common and effective media, offering excellent drainage and aeration. <br>
<b>Sphagnum Moss:</b> Retains moisture, providing a constant supply to the roots. <br>
<b>Perlite:</b> A lightweight, porous material that improves drainage and aeration.<br> 
<b>Other Options: </b> can also use other components like perlite, gravel, or charcoal, depending on the specific orchid species. <br><br>
<b>Repotting:</b>
Repot orchids every 1-2 years or when the potting mix breaks down. 
Check for root rot and address it promptly. <br><br>


    
  </p>
</body>
</html>


