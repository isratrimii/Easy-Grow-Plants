<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['seller_id'])) {
    header('location:seller_login.php');
    exit;
}

$seller_id = $_SESSION['seller_id'];



$customer_id = $_SESSION['user_id']; // from customer session

$get_orders = $conn->prepare("
SELECT 
   o.*, 
   u.name AS customer_name,
   u.email AS customer_email
FROM orders o
JOIN users u ON o.user_id = u.id
");





?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Seller Orders</title>
   <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>
    


<?php include 'seller_header.php'; ?>

<section class="orders">
   <h1 class="title">Your Sales & Customer Details</h1>

   <div class="box-container">

   <?php
   $get_orders = $conn->prepare("
   SELECT 
      o.*, 
      p.name AS product_name,
      u.name AS customer_name,
      u.email AS customer_email
   FROM seller_orders o
   JOIN products p ON o.product_id = p.id
   JOIN users u ON o.customer_id = u.id
   WHERE o.seller_id = ?
   ORDER BY o.order_date DESC
");
$get_orders->execute([$seller_id]);

 

   if ($get_orders->rowCount() > 0) {
      while ($order = $get_orders->fetch(PDO::FETCH_ASSOC)) {
   ?>
      <div class="box">
         <p><strong>Product:</strong> <?= htmlspecialchars($order['product_name']) ?></p>
         <p><strong>Customer:</strong> <?= htmlspecialchars($order['customer_name']) ?> (<?= htmlspecialchars($order['customer_email']) ?>)</p>
         <p><strong>Quantity:</strong> <?= $order['quantity'] ?></p>
         <p><strong>Total Price:</strong> ₹<?= $order['total_price'] ?></p>
         <p><strong>Order Date:</strong> <?= $order['order_date'] ?></p>
      </div>
   <?php
      }
   } else {
      echo '<p class="empty">No orders found for your products yet!</p>';
   }
   ?>

   </div>
</section>

</body>
</html>
