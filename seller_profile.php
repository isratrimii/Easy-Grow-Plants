<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['seller_id'])) {
   header('location:seller_login.php');
   exit;
}

$seller_id = $_SESSION['seller_id'];

if (isset($_POST['update_profile'])) {
   $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);

   // Update name
   $update_name = $conn->prepare("UPDATE users SET name = ? WHERE id = ? AND role = 'seller'");
   $update_name->execute([$name, $seller_id]);
   $_SESSION['seller_name'] = $name;

   // If password fields are filled
   if (!empty($_POST['old_pass']) && !empty($_POST['new_pass']) && !empty($_POST['confirm_pass'])) {
      $old_pass = $_POST['old_pass'];
      $new_pass = $_POST['new_pass'];
      $confirm_pass = $_POST['confirm_pass'];

      $get_user = $conn->prepare("SELECT * FROM users WHERE id = ? AND role = 'seller'");
      $get_user->execute([$seller_id]);
      $user = $get_user->fetch(PDO::FETCH_ASSOC);

      if (!password_verify($old_pass, $user['password'])) {
         $message[] = 'Old password is incorrect!';
      } elseif ($new_pass !== $confirm_pass) {
         $message[] = 'New passwords do not match!';
      } else {
         $hashed_new_pass = password_hash($new_pass, PASSWORD_DEFAULT);
         $update_pass = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
         $update_pass->execute([$hashed_new_pass, $seller_id]);
         $message[] = 'Password updated successfully!';
      }
   }

   $message[] = 'Profile updated!';
}

// Optional: handle delete account
if (isset($_POST['delete_account'])) {
   $delete_seller = $conn->prepare("DELETE FROM users WHERE id = ? AND role = 'seller'");
   $delete_seller->execute([$seller_id]);

   session_unset();
   session_destroy();
   header('location:seller_registration.php');
   exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Seller Profile</title>
   <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>

<?php include 'seller_header.php'; ?>

<section class="form-container">
   <form action="" method="POST">
      <h3>Update Profile</h3>
      <?php
      $select = $conn->prepare("SELECT * FROM users WHERE id = ? AND role = 'seller'");
      $select->execute([$seller_id]);
      $seller = $select->fetch(PDO::FETCH_ASSOC);
      ?>

      <?php
      if (!empty($message)) {
         foreach ($message as $msg) {
            echo '<div class="message">' . $msg . '</div>';
         }
      }
      ?>

      <input type="text" name="name" value="<?= htmlspecialchars($seller['name']); ?>" class="box" required>
      <input type="email" value="<?= htmlspecialchars($seller['email']); ?>" class="box" readonly disabled>

      <hr style="margin: 15px 0;">
      <h4>Change Password (optional)</h4>
      <input type="password" name="old_pass" class="box" placeholder="Enter current password">
      <input type="password" name="new_pass" class="box" placeholder="Enter new password">
      <input type="password" name="confirm_pass" class="box" placeholder="Confirm new password">

      <input type="submit" name="update_profile" class="btn" value="Update Profile">
      <input type="submit" name="delete_account" class="delete-btn" value="Delete Account" onclick="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
   </form>
</section>

</body>
</html>
