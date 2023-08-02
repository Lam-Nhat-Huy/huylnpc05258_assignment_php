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
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Chỉnh sửa thông tin
                    <a href="./index.php?pages=users&action=list" class="btn btn-danger float-end">Trở Về</a>
                </h4>
            </div>
            <div class="card-body">
                <?php
                $user_id = mysqli_real_escape_string($conn, $_GET['id']);
                $query = "SELECT * FROM users WHERE id = $user_id";
                $sql = mysqli_query($conn, $query);
                while ($select_user = mysqli_fetch_array($sql)) {
                ?>
                    <form action="./admin/core/CodeAdminLogin.php" method="post">
                        <input type="hidden" name="user_id" value="<?= $select_user['id'] ?>">
                        <div class="mb-3">
                            <label for="">Họ Và Tên: </label>
                            <input type="text" class="form-control" name="username" value="<?= $select_user['username'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="">Email: </label>
                            <input type="email" class="form-control" name="email" value="<?= $select_user['email'] ?>">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="editUser" class="btn btn-primary">Lưu</button>
                        </div>
                    </form><?php
                        }
                            ?>
            </div>
        </div>
    </div>
</div>


<?php include('./admin/includes/Footer.php') ?>