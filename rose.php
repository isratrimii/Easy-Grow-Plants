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

  <img src="images/p33.jpg" alt="Styled Example" class="fancy-image">
  <p>
    <b>Rose plant care</b> <br><br>

    <b>Soil and Media:</b><br>
<b>Ideal Soil:</b>
Loam soil is considered ideal for roses, as it is a balanced mix of sand, silt, and clay, providing good drainage and nutrient retention.<br> 
<b>Soil Preparation:</b>
If your soil is not well-draining, amend it with compost or well-rotted manure to improve drainage and fertility. <br>
<b>Potting Media:</b>
When growing roses in pots, use a mix of John Innes No. 3 and multipurpose compost, ensuring good drainage. <br>
<b>Watering:</b><br>
<b>Watering Needs:</b>
Roses need consistent moisture but should not be overwatered. Aim for deep watering once or twice a week, allowing the soil to dry slightly between waterings. <br>
<b>Watering Technique:</b>
Water directly at the base of the plant, avoiding wetting the leaves to prevent fungal diseases. <br>
<b>Mulching:</b>
Apply a layer of mulch around the base of the plant to conserve moisture, reduce stress, and suppress weeds. <br>
<b>Light:</b><br>
<b>Sunlight:</b>
Roses require at least 6 hours of direct sunlight per day for optimal flowering and growth.<br>
<b>Sunlight Placement:</b>
In hot climates, provide afternoon shade to protect the plant from heat stress. <br>
<b>Pruning and Deadheading:</b><br>
<b>Pruning:</b> Prune roses regularly to encourage new growth and remove dead, diseased, or weak branches. <br>
<b>Deadheading: </b>Remove spent blooms to encourage the plant to produce more flowers. <br>
<b>Fertilizing:</b><br>
<b>Fertilizer:</b>
Use a balanced fertilizer in early spring and again after the first bloom cycle. <br>
<b>Natural Fertilizers:</b>
Compost and natural fertilizers are preferred over artificial fertilizers, as they provide slow-release nutrients and promote healthy plant growth. <br>
<b>Other Care Tips:</b>
<b>Pest and Disease Control:</b>
Regularly inspect your rose plants for pests and diseases, and take appropriate action if necessary. <br>
<b>Air Circulation:</b>
Ensure good air circulation around your roses by providing adequate spacing between plants. 


  </p>
</body>
</html>


