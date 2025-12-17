<?php
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <!-- Left : Brand -->
    <a class="navbar-brand" href="dashboard.php">Student CRUD</a>

    <!-- Toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Center : Username -->
    <div class="mx-auto text-white fw-bold d-none d-lg-block">
      Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>
    </div>

    <!-- Right : Links -->
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-danger text-white px-3" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>

  </div>
</nav>