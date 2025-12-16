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
<head>
    <title>Register</title>
</head>
<body>

<h2>Register</h2>

<?php
if ($message != "") {
    echo "<p style='color:green;font-weight:bold;'>$message</p>";
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit" name="register">Register</button>
</form>

<a href="login.php">Already have account? Login</a>

</body>
</html>