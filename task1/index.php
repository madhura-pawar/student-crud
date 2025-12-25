<?php
require_once __DIR__ . '/db/config.php';

$stmt = $pdo->query("SELECT * FROM students ORDER BY id DESC");
$students = 
$stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Student CRUD</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
  <h1>Student Management</h1>

  <div class="card">
    <h2>Add Student</h2>
    <form action="create.php" method="POST">
      <label>Name</label>
      <input type="text" name="name" required>

      <label>Email</label>
      <input type="email" name="email" required>

      <label>Course</label>
      <input type="text" name="course" required>

      <button type="submit">Add</button>
    </form>
  </div>

  <div class="card">
    <h2>Students</h2>

    <?php if (empty($students)) : ?>
      <p>No students found.</p>
    <?php else : ?>

    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Action</th>
      </tr>

      <?php foreach ($students as $student) : ?>
      <tr>
        <td><?= htmlspecialchars($student['name']) ?></td>
        <td><?= htmlspecialchars($student['email']) ?></td>
        <td><?= htmlspecialchars($student['course']) ?></td>
        <td>
          <a href="edit.php?id=<?= $student['id'] ?>">Edit</a> |
          <a href="delete.php?id=<?= $student['id'] ?>">Delete</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>

    <?php endif; ?>
  </div>
</div>

</body>
</html>
