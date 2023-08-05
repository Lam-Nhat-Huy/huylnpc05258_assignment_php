<?php
include('../config/config.php');
include('../config/functions.php');

// Chức năng đăng ký user
if (isset($_POST['registerUser'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $password_repeat = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email='$email' AND password='$password'");
    if (mysqli_num_rows($select) > 0) {
        header("Location: ./index.php");
    } else {
        mysqli_query($conn, "INSERT INTO `users` (username, email, password) VALUES ('$name', '$email', '$password')");
        header('Location: ./index.php');
    }
}






// Chức năng đăng nhập user
if (isset($_POST['loginUser'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'") or die('query failed');
    if (mysqli_num_rows($select_user) > 0) {
        $fetch_user = mysqli_fetch_assoc($select_user);
        $_SESSION['user_id'] = $fetch_user['id'];
        header('Location: indexLogined.php');
    } else {
        header('Location: index.php');
    }
}


// Thêm khóa học vào giỏ hàng
if (isset($_POST['saveCourse'])) {
    $course_name = $_POST['course_name'];
    $course_image = $_POST['course_image'];
    $course_price = $_POST['course_price'];
    $course_description = $_POST['course_description'];
    $select_course = mysqli_query($conn, "SELECT * FROM course_list WHERE course_id = '$user_id'");
    if (mysqli_num_rows($select_course) > 0) {
        mysqli_query($conn, "INSERT INTO course_list (course_id, name, image, price, description) VALUES ('$user_id', '$course_name', '$course_image', '$course_price', '$course_description')");
        header('Location: indexLogined.php');
    } else {
        mysqli_query($conn, "INSERT INTO course_list (course_id, name, image, price, description) VALUES ('$user_id', '$course_name', '$course_image', '$course_price', '$course_description')");
        header('Location: indexLogined.php');
    }
}


// Xóa khóa học khỏi giỏ hàng

if (isset($_POST['deleteCourse'])) {
    $course_id = mysqli_real_escape_string($conn, $_POST['deleteCourse']);
    $query = "DELETE FROM course_list WHERE id = $course_id";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        header('Location: indexLogined.php');
    }
}
