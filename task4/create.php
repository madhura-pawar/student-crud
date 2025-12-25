<?php
require_once __DIR__ . '/db/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $course = $_POST['course'];

  $sql = "INSERT INTO students (name, email, course) VALUES (:name, :email, :course)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    ':name' => $name,
    ':email' => $email,
    ':course' => $course
  ]);
}

header("Location: index.php");
exit();
