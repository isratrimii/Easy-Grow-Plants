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
      background-color:#B5DCB7;
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

  <img src="images/p45.jpg" alt="Styled Example" class="fancy-image">
  <p>
    <b>ZZ plant care</b> <br><br>

    <b>Potting Mix:</b><br>
<b>Well-draining:</b>
ZZ plants are susceptible to root rot if their roots are constantly wet, so a well-draining mix is essential. <br>
<b>Recommended Mixes:</b>
Miracle-Gro Tropical Potting Mix, or a mix of perlite, peat moss, and sand or vermiculite can be used. <br>
<b>Light:</b> <br>
<b>Bright Indirect Light:</b>
ZZ plants thrive in bright, indirect light, but can also tolerate low light conditions. <br>
<b>Avoid Direct Sunlight:</b>
Too much direct sunlight can scorch the leaves, so avoid placing them in direct sunlight for extended periods. <br>
<b>Watering:</b><br>
<b>Allow Soil to Dry:</b>
ZZ plants prefer infrequent watering, and the soil should be allowed to dry out completely between waterings.<br>
<b>Water Thoroughly:</b>
When you do water, water thoroughly until water drains from the bottom of the pot.<br>
<b>Discard Excess Water:</b>
Remove any excess water from the saucer after watering to prevent root rot. <br>
<b>Fertilizing:</b><br>
<b>Minimal Need:</b>
ZZ plants generally don't require much fertilizer, especially if they are in a well-draining mix.<br>
<b>Optional Fertilization:</b>
If you choose to fertilize, use a balanced, water-soluble fertilizer diluted to half-strength every 2-3 months during the growing season (spring and summer). <br>
<b>Humidity:</b>
<b>Average Humidity:</b> ZZ plants do not require extra humidity and can tolerate average indoor humidity levels. <br>
<b>Temperature:</b><br>
<b>Average Room Temperature:</b> ZZ plants prefer average room temperatures between 65°F and 85°F (18°C and 30°C). <br>
<b>Pruning:</b>
<b>Prune as Needed:</b> You can prune ZZ plants by cutting the stems back to the soil line if desired. <br>
<b>Other Considerations:</b><br>
<b>Toxic to Pets and Humans:</b> ZZ plants contain calcium oxalate crystals, which can be irritating to pets and humans if ingested. <br>
<b>Low-Maintenance:</b> ZZ plants are generally low-maintenance and can be grown by beginners. 

   
  
  </p>
</body>
</html>


