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

  <img src="images/p26.jpg" alt="Styled Example" class="fancy-image">
  <p>
    <b>Succulent plant care</b> <br>

    <b>Well-draining soil:</b>
Succulents need a porous and well-draining soil to prevent root rot. <br> <br>
<b>succulent mixes:</b>
These mixes are specifically designed for succulents and often include components like perlite, sand, and vermiculite to enhance drainage. <br><br>
<b>DIY mixes:</b>
You can create your own succulent mix by combining potting soil with sand, perlite, or pumice in a 2:2:1 ratio. <br><br>
<b>Avoid:</b>
Heavy, clay-like soils or containers without drainage holes, as these can lead to soggy conditions and root rot. <br><br>
<h4>Care:</h4><br>
<b>Watering:</b> Succulents are drought-tolerant and require infrequent watering. Water thoroughly when the soil is dry, and allow excess water to drain away. <br>
<b>Light:</b> Most succulents thrive in bright, indirect sunlight, typically 4-6 hours daily.<br> 
<b>Temperature: </b> prefer warm temperatures, typically between 55°F and 75°F, with cooler nights. <br>
<b>Humidity:</b> Succulents generally prefer low humidity levels. <br>
<b>Fertilizing: </b> don't require frequent fertilization, but you can provide a balanced fertilizer diluted to half or a quarter strength during the spring and summer. <br>
<b>Repotting: </b> succulents when they become root-bound, typically every 2-3 years. <br>
<b>Dusting:</b> Clean off dust from succulent leaves to help them thrive. <br><br>
<h4>Troubleshooting:</h4>
<b>Wrinkled or drying leaves:</b>Indicates the plant is too dry and needs more water.
<b>Yellow or soft stems:</b> May indicate the plant is overwatered and needs well-draining soil. <br> <br>



    
  </p>
</body>
</html>


