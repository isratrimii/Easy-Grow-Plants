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

  <img src="images/p27.webp" alt="Styled Example" class="fancy-image">
  <p>
    <b>Air plant care</b> <br>

   <b>Light</b>
Air plants should be kept where they'll receive bright, indirect sunlight or under fluorescent home/office lighting.<br>
Periods of direct sunlight are just fine, but more than a few hours of hot sun will deplete the plants of their moisture. <br>
If your plant will be in a spot with some pretty direct light, try misting them every couple of days to keep them hydrated.<br>

<b>Water</b>
Air plants live on air, right? Uh, not right! While air plants don't grow in soil, they definitely NEED to be watered. <br>
While the plants can survive for long periods of drought, they will not grow or thrive and will eventually die off if water is 
too scarce.<br> Follow the directions below for watering your plants on a regular basis and they will stay alive and well for quite 
some time.<br> The good news is that since these plants are very forgiving, you shouldn't stress over their care schedule. <br>
There's certainly no need to get a babysitter when you go on vacation. <br><br>



  </p>
</body>
</html>


