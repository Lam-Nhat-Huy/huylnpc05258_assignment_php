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
                    Phân loại
                    <a href="./index.php?pages=category&action=add" class="btn btn-primary float-end">Thêm</a>
                </h4>
            </div>

            <div class="card-body">
                <table class="table ">
                    <thead>
                        <tr class="font-weight-bolder">
                            <td>ID</td>
                            <td>Thể loại</td>
                            <td>Ghi chú</td>
                            <td>Ngày tạo</td>
                            <td>Ngày sửa</td>
                            <td>Tùy Chọn</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select_category = mysqli_query($conn, "SELECT * FROM category ");
                        if (mysqli_num_rows($select_category) > 0) {
                            while ($row = mysqli_fetch_array($select_category)) {
                        ?>
                                <tr style="vertical-align: middle;">
                                    <td>
                                        <?= $row['id'] ?>
                                    </td>
                                    <td>
                                        <?= $row['category_name'] ?>
                                    </td>
                                    <td>
                                        <?= $row['category_note'] ?>
                                    </td>
                                    <td>
                                        <?= $row['create_at'] ?>
                                    </td>
                                    <td>
                                        <?= $row['update_at'] ?>
                                    </td>
                                    <td class="d-flex justify-content-evenly">
                                        <a href="./index.php?pages=category&action=edit&id=<?= $row['id'] ?>" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i>
                                        </a>

                                        <form action="./admin/core/CodeAdminLogin.php" method="post">
                                            <button onclick="return confirm('Bạn có chắc chắn muốn xóa? ')" type="submit" class="btn btn-danger btn-sm" name="deleteCategory" value="<?= $row['id'] ?>"><i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include('./admin/includes/Footer.php') ?>