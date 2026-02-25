<?php
session_start();
include 'db.php';
include_once 'config.php';

// Check karo ki form submit hua hai ya nahi
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        
        $user = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        header("Location: " . BASE_URL . "dashboard/");
        exit();

    } else {
        echo "Invalid Login";
    }

} else {
    echo "Access Denied";
}
?>