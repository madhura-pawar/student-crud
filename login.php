<?php
session_start();
include("config.php");

$message = "";

if (isset($_POST['login'])) {

    $email    = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            header("Location: dashboard.php");
            exit;

        } else {
            $message = "❌ Wrong Password";
        }

    } else {
        $message = "❌ Email Not Registered";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<?php
if ($message != "") {
    echo "<p style='color:red;font-weight:bold;'>$message</p>";
}
?>

<form method="POST">
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit" name="login">Login</button>
</form>

<a href="register.php">Create New Account</a>

</body>
</html>