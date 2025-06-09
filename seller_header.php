<?php


if (!isset($_SESSION['seller_id'])) {
    header('location:seller_login.php');
    exit;
}

$seller_name = $_SESSION['seller_name'] ?? 'Seller';
?>

<header class="header">

   <div class="flex">

      <a href="seller_products.php" class="logo">Seller <span>Dashboard</span></a>

      <nav class="navbar">
         <a href="seller_products.php">My Products</a>
         <a href="seller_add_product.php">Add Product</a>
         <a href="seller_profile.php">Profile</a>
         <a href="seller_orders.php">Sales</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div class="user-box">
            <p>Welcome, <span><?= htmlspecialchars($seller_name); ?></span></p>
            <a href="seller_logout.php" class="delete-btn" onclick="return confirm('Logout now?');">Logout</a>
         </div>
      </div>

   </div>

</header>
