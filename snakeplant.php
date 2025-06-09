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

  <img src="images/p28.webp" alt="Styled Example" class="fancy-image">
  <p>
    <b>Snake plant care</b> <br><br>


<b>Light:</b> Snake plants prefer bright, indirect light. They can tolerate low light but may grow slower and lose their variegation.<br> 
<b>Watering:</b> Water sparingly, only when the top inch or two of soil is dry. Overwatering can lead to root rot. <br>
<b>Temperature: </b> grow best in warm temperatures, ideally between 70°F and 90°F. <br>
<b>Fertilizing:</b> Fertilize sparingly, once a month during the growing season (spring and summer) with a balanced liquid fertilizer. <br>
<b>Humidity:</b> Snake plants do not require high humidity and can tolerate dry air.<br> 
<b>Repotting:</b> Repot when the roots become root-bound, usually every 2-3 years. <br><br>
<b>Additional Tips:</b><br>
<b>Wipe leaves:</b> Occasionally wipe the leaves with a damp cloth to remove dust. <br>
<b>Consider location: </b> snake plants in a location away from drafts and direct sunlight, especially if they are in a warm spot, 
according to The Spruce and Gardeners' World. 


  </p>
</body>
</html>


