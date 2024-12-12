<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $role = $_POST['role'];
    $email_or_username = $_POST['email_or_username'];
    $password = $_POST['password'];
    $hashed_password = hash('sha256', $password);

    if ($role === 'admin') {
        $sql = "SELECT * FROM admin WHERE username = '$email_or_username' AND password = '$hashed_password'";
        $result = $conn->query($sql);

        if ($result->num_rows === 1) {
            $_SESSION['admin'] = $email_or_username;
            header("Location: admin-dashboard.php");
        } else {
            echo "Invalid Admin Credentials";
        }
    } else {
        $sql = "SELECT * FROM users WHERE email = '$email_or_username' AND password = '$hashed_password'";
        $result = $conn->query($sql);

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $_SESSION['user'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            if ($row['role'] === 'student') {
                header("Location: student-dashboard.php");
            } elseif ($row['role'] === 'staff') {
                header("Location: staff-dashboard.php");
            }
        } else {
            echo "Invalid User Credentials";
        }
    }
}
?>
