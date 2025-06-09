<?php
@include 'config.php';
session_start();

if (isset($_POST['login'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = $_POST['password'];

    $select = $conn->prepare("SELECT * FROM users WHERE email = ? AND role = 'seller'");
    $select->execute([$email]);

    if ($select->rowCount() > 0) {
        $row = $select->fetch(PDO::FETCH_ASSOC);
        if (password_verify($pass, $row['password'])) {
            $_SESSION['seller_id'] = $row['id'];
            $_SESSION['seller_name'] = $row['name'];
            header('location:seller_products.php');
        } else {
            $message[] = 'Incorrect password!';
        }
    } else {
        $message[] = 'No seller account found with that email!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Seller Login</title>
   <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>
   <section class="form-container">
      <form action="" method="POST">
         <h3>Seller Login</h3>
         <?php if (!empty($message)) {
            foreach ($message as $msg) {
               echo '<div class="message">' . $msg . '</div>';
            }
         } ?>
         <input type="email" name="email" required placeholder="Enter your email" class="box">
         <input type="password" name="password" required placeholder="Enter your password" class="box">
         <input type="submit" name="login" class="btn" value="Login">
         <p>Don't have an account? <a href="seller_registration.php">Register</a></p>
      </form>
   </section>
</body>
</html>
