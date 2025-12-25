<?php
require_once __DIR__ . '/db/config.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM students WHERE id = :id");
$stmt->execute([':id' => $id]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Student</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
  <h1>Edit Student</h1>

  <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $student['id'] ?>">

    <label>Name</label>
    <input type="text" name="name" value="<?= $student['name'] ?>" required>

    <label>Email</label>
    <input type="email" name="email" value="<?= $student['email'] ?>" required>

    <label>Course</label>
    <input type="text" name="course" value="<?= $student['course'] ?>" required>

    <button type="submit">Update</button>
  </form>
</div>

</body>
</html>
