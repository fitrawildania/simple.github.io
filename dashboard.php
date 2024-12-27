<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body>
<div class="container mt-5">
    <h3>Welcome, <?php echo $_SESSION['user']; ?></h3>
    <a href="crud.php" class="btn btn-primary">Manage Data</a>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>
</body>
</html>
