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
                    Chỉnh sửa phân loại
                    <a href="./index.php?pages=category&action=list" class="btn btn-danger float-end">Trở Về</a>
                </h4>
            </div>
            <div class="card-body">
                <?php
                $category_id = mysqli_real_escape_string($conn, $_GET['id']);
                $select_category = mysqli_query($conn, "SELECT * FROM category WHERE id = $category_id");
                if (mysqli_num_rows($select_category) > 0) {
                    while ($row = mysqli_fetch_array($select_category)) {
                ?>
                        <form action="./admin/core/CodeAdminLogin.php" method="post">
                            <input type="hidden" name="category_id" value="<?= $row['id'] ?>">

                            <div class="mb-3">
                                <label for="">Phân loại: </label>
                                <input type="text" class="form-control" name="category_name" value="<?= $row['category_name'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="">Ghi chú: </label>
                                <input type="text" class="form-control" name="category_note" value="<?= $row['category_note'] ?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="updateCategory" class="btn btn-primary">Thêm</button>
                            </div>
                        </form>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include('./admin/includes/Footer.php') ?>