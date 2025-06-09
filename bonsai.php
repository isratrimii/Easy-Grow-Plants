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

  <img src="images/p37.jpg" alt="Styled Example" class="fancy-image">
  <p>
    <b>Bonsai plant care</b> <br><br>

    <b>Bonsai Plant Media:</b><br>
<b>Purpose:</b>
Bonsai plants require a specific mix of materials for their growing medium because they are grown in small pots with limited space for roots to expand. <br>
<b>Ingredients:</b>
<b>Akadama:</b> A clay-based soil that is widely used in bonsai and provides good drainage and water retention, according to Bonsai Plaza. <br>
<b>Pumice and Lava Rock:</b> These volcanic rocks help to improve drainage and aeration in the soil mix. <br>
<b>Organic Matter (optional): </b> bonsai mixes may include organic matter, such as compost or peat moss, to provide nutrients and improve water retention. <br>
<b>Coarse Sand or Grit: </b> materials can be added to help improve drainage and aeration. <br>
<b>Important Considerations:</b><br>
<b>Drainage:</b> Bonsai roots need to be able to breathe, so a well-draining medium is crucial to prevent root rot.<br> 
<b>Water Retention: </b> soil should also be able to retain enough moisture to keep the tree healthy. <br>
<b>Airflow: </b> airflow around the roots is necessary for root health and growth. <br>
<b>Bonsai Care:</b><br>
<b>Watering:</b>
Water when the topsoil feels dry and ensure that the soil does not dry out completely. <br>
<b>Fertilizing:</b>
Use a bonsai-specific fertilizer, usually every 1-2 weeks during the growing season, to replenish nutrients in the small pots. <br>
<b>Pruning:</b>
Regular pruning is essential for shaping the tree and promoting dense branch structure. <br>
<b>Positioning:</b>
Bonsai trees need bright, indirect sunlight, and their position may need to be adjusted seasonally to prevent overheating or cold damage. <br>
<b>Humidity:</b>
Many bonsai trees, especially indoor varieties, benefit from increased humidity, which can be achieved through misting or a humidifier. <br>
<b>Wiring:</b>
Wiring is a technique used to shape the branches and trunk of a bonsai tree. <br>
<b>Additional Tips:</b><br>
<b>Troubleshooting:</b>
If your bonsai tree is experiencing problems, consult resources like BonsaiDirect for troubleshooting advice. <br>
<b>Indoor Bonsai:</b>
Indoor bonsai trees require specific care, including bright, indirect light, consistent watering, and sometimes increased humidity, according to Westland Horticulture. <br>
<b>Outdoor Bonsai:</b>
Outdoor bonsai trees, especially in the summer, need more frequent watering, as the soil dries out quicker in the heat. 



  
  </p>
</body>
</html>


