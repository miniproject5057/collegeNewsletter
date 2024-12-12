<?php
session_start();
if (!isset($_SESSION['student'])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Dashboard</title>
</head>
<body>
    <h1>Welcome, Student!</h1>
    <p>This is the student dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
