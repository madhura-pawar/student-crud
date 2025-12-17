<?php
include("config.php");

$message = "";

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        $message = "✅ Register Successfully";
    } else {
        $message = "❌ Registration Failed";
    }
}
?>

<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
<h6>Registration Form<h6>


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-body">
          <?php if($message != "") { echo "<p>$message</p>"; } ?>
          <form  action="register.php" method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit" name="register">Register</button>
</form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="text-center mt-3">
<a href="login.php">Already have account? Login</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
