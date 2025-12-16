<?php
require_once __DIR__ . '/db/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $course = $_POST['course'];

  $sql = "UPDATE students SET name=:name, email=:email, course=:course WHERE id=:id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    ':name' => $name,
    ':email' => $email,
    ':course' => $course,
    ':id' => $id
  ]);
}

header("Location: index.php");
exit();