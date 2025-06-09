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

  <img src="images/85.avif" alt="Styled Example" class="fancy-image">
  <p>
    <b>Plant soil process:</b> <br>
    ✅ 1. Understand What Cactus Soil Needs <br>
Cacti grow in arid environments, so they need a fast-draining, gritty soil that mimics desert conditions.<br>

Ideal Features: <br>
Excellent drainage<br>

Low moisture retention<br>

Aeration for root health<br>

Slightly acidic to neutral pH (5.5–7)<br><br>

✅ 2. Best Cactus Soil Mix (DIY Recipe)<br>
You can make your own cactus soil using this basic DIY mix:<br>

🌱 Homemade Cactus Soil Mix: <br>

1. 40% sand<br>
2. 30% soil<br>
3. 10% vermi-compost <br>
4. 20% perlight, Bonemeal, chacol <br>

🧪<b> Optional:</b> Add small amounts of charcoal or coconut coir to improve soil structure and prevent rot. <br><br>

✅ 3. Choosing the Right Pot<br>
Use a terracotta or clay pot with a drainage hole.<br>

These materials allow soil to dry faster and prevent overwatering.<br><br>

✅ 4. Planting or Repotting Steps<br>
Wear gloves (some cacti have sharp spines).<br>

Gently remove the cactus from its old pot.<br>

Loosen any compacted soil or trim dead roots if needed.<br>

Fill the new pot 1/3 full with your cactus mix.<br>

Place the cactus and fill in around it with more soil.<br>

Don’t water immediately — wait 3–5 days to let any damaged roots heal.<br><br>

✅ 5. Watering & Aftercare<br>
Water only when the soil is completely dry — typically every 2–4 weeks.<br>

In winter (dormant season), reduce watering even more.<br>

Never let the cactus sit in soggy soil. It leads to root rot, a common killer of cacti.<br><br>
    <b>For better undertending: </b> <br>

    <video width="320" height="240" controls>
  <source src="images/v2.mp4" type="video/mp4">
 
Your browser does not support the video tag.
</video>
    


   
    
  </p>
</body>
</html>


