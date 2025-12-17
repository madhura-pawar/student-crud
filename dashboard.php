<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <?php
include("config.php"); // DB connection

// Total students count fetch
$sql = "SELECT COUNT(*) as total FROM students";  // students table ka naam check karo
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

$total_students = $data['total'];
?>

<div class="row mt-4">

  <div class="col-md-4 col-sm-6 mb-3">
    <div class="card shadow text-center">
      <div class="card-body">
        <h5>Total Students</h5>
        <p class="fs-4"><?php echo $total_students; ?></p>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6 mb-3">
    <div class="card shadow text-center">
      <div class="card-body">
        <h5>Add Student</h5>
        <a href="../create.php" class="btn btn-primary">Add</a>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6 mb-3">
    <div class="card shadow text-center">
      <div class="card-body">
        <h5>View Students</h5>
        <a href="../index.php" class="btn btn-success">View</a>
      </div>
    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
