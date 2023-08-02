<?php
require_once('../../config/config.php');

// Đăng Ký Tài Khoản Admin
if (isset($_POST['saveUser'])) {
    $name = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $password_repeat = mysqli_real_escape_string($conn, md5($_POST['password_
    repeat']));

    $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email='$email' AND password='$password'");
    if (mysqli_num_rows($select) > 0) {
        header("Location: ../register.php");
    } else {
        mysqli_query($conn, "INSERT INTO `users` (username, email, password) VALUES ('$name', '$email', '$password')");
        header('Location: ../login.php');
    }
}


//Đăng Nhập Tài Khoản Admin
if (isset($_POST['loginUser'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'");
    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        header('Location: /index.php?pages=users&action=dashboard');
    } else {
        header('Location: ../login.php');
    }
}
