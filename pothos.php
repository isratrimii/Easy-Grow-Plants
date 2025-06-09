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

  <img src="images/85.avif" alt="Styled Example" class="fancy-image">
  <p>
    <b>Plant soil process:</b> <br>
    ✅ 1. Choose the Right Soil Mix <br>
Pothos prefer light, well-draining soil that retains some moisture but doesn't stay soggy.<br>

Ideal Soil Mix: <br>

    1. 40% soil <br>
    2. 30% coco coir <br>
    3. 20% vermi-compost, leaf compost <br>
    4. 10% perlite (Not so Necessery)<br>
    Mix them.
You can also use a ready-made indoor plant mix, just add some perlite for better aeration.<br><br>

✅ 2. Select a Pot with Drainage<br>
Always use a pot with drainage holes to prevent waterlogging.<br>

If the pot doesn't have holes, add a layer of gravel or pebbles at the bottom (not ideal, but helps a little).<br><br>

✅ 3. Prepare the Soil<br>
Mix your soil components thoroughly in a bucket or container.<br>

Make sure it’s slightly moist (not wet) before planting.<br><br>

✅ 4. Planting or Repotting Steps: <br>

Gently remove the pothos from its current container.<br>

Loosen the roots a bit if they’re tightly bound.<br>

Place some soil at the bottom of the new pot.<br>

Position the plant in the center.<br>

Fill around the sides with your soil mix.<br>

Press down lightly and water until it drains out the bottom.<br><br>

✅ 5. Watering & Soil Maintenance<br>
Water only when the top 1–2 inches of soil feel dry.<br>

Avoid overwatering — pothos don’t like soggy roots.<br>

Check for yellowing leaves — a sign of too much water or poor drainage.<br>

Refresh the top layer of soil every 6–12 months if not repotting.<br><br>

    <b>For better undertending: </b> <br>

    <video width="320" height="240" controls>
  <source src="images/v1.mp4" type="video/mp4">
 
Your browser does not support the video tag.
</video>
    
  </p>
</body>
</html>


