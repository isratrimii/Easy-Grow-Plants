<?php
@include 'config.php';
session_start();

if (isset($_POST['register'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['nid'], FILTER_SANITIZE_EMAIL);
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];

    $check_email = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $check_email->execute([$email]);

    if ($check_email->rowCount() > 0) {
        $message[] = 'Email already registered!';
    } elseif ($pass !== $cpass) {
        $message[] = 'Passwords do not match!';
    } else {
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
        $insert = $conn->prepare("INSERT INTO users (name, mid, password, role) VALUES (?, ?, ?, 'seller')");
        $insert->execute([$name, $nid, $hashed_pass]);
        $message[] = 'Registered successfully! Please login.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Seller Registration</title>
   <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>
   <section class="form-container">
      <form action="" method="POST">
         <h3>Register as Seller</h3>
         <?php if (!empty($message)) {
            foreach ($message as $msg) {
               echo '<div class="message">' . $msg . '</div>';
            }
         } ?>
         <input type="text" name="name" required placeholder="Enter your name" class="box">
         <input type="number" name="nid" required placeholder="Enter your NID" class="box">

         <input type="password" name="password" required placeholder="Enter password" class="box">
         <input type="password" name="cpassword" required placeholder="Confirm password" class="box">
         <input type="submit" name="register" class="btn" value="Register">
         <p>Already have an account? <a href="seller_login.php">Login</a></p>
      </form>
   </section>
</body>
</html>
