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

// Chỉnh sửa thông tin
if (isset($_POST['editUser'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $query_user = mysqli_query($conn, "UPDATE users SET username='$username', email='$email' WHERE id=$user_id");
    if ($query_user) {
        header('Location: /index.php?pages=users&action=list');
    }
}

// Xóa tài khoản admin
if (isset($_POST['deleteUser'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['deleteUser']);
    $query = "DELETE FROM users WHERE id = $user_id";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        header('Location: /index.php?pages=users&action=list');
    }
}

// Thêm khóa học
if (isset($_POST['addCourse'])) {
    $name =  mysqli_real_escape_string($conn, $_POST['name']);
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $price =  mysqli_real_escape_string($conn, $_POST['price']);
    $description =  mysqli_real_escape_string($conn, $_POST['description']);
    $category_id =  mysqli_real_escape_string($conn, $_POST['category_id']);

    $targetDirectory = "../uploads/"; // Thay đổi đường dẫn tùy theo thư mục lưu trữ của bạn

    $targetPath = $targetDirectory . $image;
    move_uploaded_file($image_tmp, $targetPath);

    if (!empty($name) or !empty($image) or !empty($price) or !empty($description) or !empty($category_id)) {
        $query_course = mysqli_query($conn, "INSERT INTO courses (name, image, price, description, category_id) VALUES ('$name', '$image', '$price', '$description', '$category_id')");
        header('Location: /index.php?pages=product&action=list');
    } else {
    }
}

// Xóa khóa học

if (isset($_POST['updateCourse'])) {
    $course_id =  mysqli_real_escape_string($conn, $_POST['course_id']);
    $name =  mysqli_real_escape_string($conn, $_POST['name']);
    $image =  mysqli_real_escape_string($conn, $_POST['image']);
    $price =  mysqli_real_escape_string($conn, $_POST['price']);
    $description =  mysqli_real_escape_string($conn, $_POST['description']);
    $category_id =  mysqli_real_escape_string($conn, $_POST['category_id']);


    $query_course = mysqli_query($conn, "UPDATE courses SET `name`='$name',`image`='$image', `price`='$price', `description`='$description', `category_id` = '$category_id' WHERE id= $course_id");
    if ($query_course) {
        header('Location: /index.php?pages=product&action=list');
    }
}

// Xóa khóa học

if (isset($_POST['deleteCourse'])) {
    $course_id = mysqli_real_escape_string($conn, $_POST['deleteCourse']);

    $query = "SELECT image FROM courses WHERE id = $course_id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $imagePath = $row['image'];

    $query = "DELETE FROM courses WHERE id = $course_id";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        header('Location: /index.php?pages=product&action=list');
    }
}


// Thêm phân loại
if (isset($_POST['addCategory'])) {
    $category_name = mysqli_real_escape_string($conn, $_POST['category_name']);
    $category_note = mysqli_real_escape_string($conn, $_POST['category_note']);

    $query_category = mysqli_query($conn, "INSERT INTO category (category_name, category_note) VALUES ('$category_name', '$category_note')");

    if ($query_category) {
        header("Location: /index.php?pages=category&action=list");
    } else {
        header("Location: /index.php?pages=category&action=add");
    }
}

// chỉnh sửa phân loại


if (isset($_POST['updateCategory'])) {
    $category_id =  mysqli_real_escape_string($conn, $_POST['category_id']);
    $category_name =  mysqli_real_escape_string($conn, $_POST['category_name']);
    $category_note =  mysqli_real_escape_string($conn, $_POST['category_note']);

    $query_course = mysqli_query($conn, "UPDATE category SET category_name='$category_name', category_note = '$category_note'  WHERE id= $category_id");
    if ($query_course) {
        header('Location: /index.php?pages=category&action=list');
    }
}
