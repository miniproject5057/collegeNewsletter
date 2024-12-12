<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome, User!</h1>
    <p>This is the user dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
