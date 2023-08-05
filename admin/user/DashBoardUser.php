<?php include('./admin/includes/Header.php') ?>

<div class="row">
    <?php
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE id='$user_id'");
    $fecth = mysqli_fetch_array($sql);
    ?>
    <div class="info d-flex justify-content-center">
        <p style="margin-right: 10px;">Tên người dùng: <strong class="info-admin"><?= $fecth['username'] ?></strong></p>
        <p>Tài khoản: <strong class="info-admin"><?= $fecth['email'] ?></strong></p>
    </div>
</div>

<div class="row">
    <?php
    $sql = mysqli_query($conn, "SELECT * FROM users");
    if (mysqli_num_rows($sql) > 0) {
        $countUsers = mysqli_num_rows($sql);
    }
    ?>
    <div class="card shadow-lg">
        <div class="card-header">
            <h4>Bảng Điều Khiển</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Tài khoản hiện có là: </h5>
            <p class="card-text">
            <h5><strong><?php echo $countUsers; ?></strong></h5>
            </p>
            <a href="/index.php?pages=users&action=list" class="btn btn-primary">Kiểm tra</a>
        </div>
    </div>
</div>

<div class="row mt-5">
    <?php
    $sql = mysqli_query($conn, "SELECT * FROM courses");
    if (mysqli_num_rows($sql) > 0) {
        $countCourse = mysqli_num_rows($sql);
    }
    ?>
    <div class="card shadow-lg">
        <div class="card-header">
            <h4>Bảng Điều Khiển</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Tài khoản hiện có là: </h5>
            <p class="card-text">
            <h5><strong><?php echo $countCourse; ?></strong></h5>
            </p>
            <a href="/index.php?pages=product&action=list" class="btn btn-primary">Kiểm tra</a>
        </div>
    </div>
</div>


<?php include('./admin/includes/Footer.php') ?>