<?php


$user_id = $_SESSION['user_id'];
if (!isset($user_id)) {
    header('Location: ../../../adminAccount/login.php');
}

function validate($inputData)
{
    global $conn;
    return mysqli_real_escape_string($conn, $inputData);
}

// Hàm này dùng để gán thông tin khi submit
function redirect($url, $status)
{
    $_SESSION['status'] = $status;
    header("Location:" . $url);
    exit(0);
}

function alertMessage()
{
    if (isset($_SESSION['status'])) :
?>
        <div class="alert alert-primary text-white" role="alert">
            <?= $_SESSION['status'] ?>
        </div>
<?php
        unset($_SESSION['status']);
    endif;
}
