<?php
session_start();

if($_SESSION['role'] != 'admin'){
    die("Access Denied");
}

echo "Admin Panel";
?>