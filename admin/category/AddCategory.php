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
                    Thêm phân loại
                    <a href="./index.php?pages=category&action=list" class="btn btn-danger float-end">Trở Về</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="./admin/core/CodeAdminLogin.php" method="post" class="needs-validation was-validated">
                    <div class="mb-3">
                        <label for="">Phân loại: </label>
                        <input type="text" class="form-control" name="category_name" required>
                        <div class="invalid-feedback">
                            Phân loại không được để trống.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="">Ghi chú: </label>
                        <input type="text" class="form-control" name="category_note" required>
                        <div class="invalid-feedback">
                            Ghi chú không được để trống.
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="addCategory" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('./admin/includes/Footer.php') ?>