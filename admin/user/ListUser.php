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
                    Tài Khoản Của Tôi
                    <a href="" class="btn btn-primary float-end">Thêm Người Dùng</a>
                </h4>
            </div>

            <div class="card-body">
                <table class="table ">
                    <thead>
                        <tr class="font-weight-bolder">
                            <td>ID</td>
                            <td>Tên người dùng</td>
                            <td>Email</td>
                            <td>Tùy Chọn</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select_user = mysqli_query($conn, "SELECT * FROM users");
                        if (mysqli_num_rows($select_user) > 0) {
                            while ($fetch_user = mysqli_fetch_array($select_user)) {
                        ?>
                                <tr style="vertical-align: middle;">
                                    <td><?= $fetch_user['id'] ?></td>
                                    <td><?= $fetch_user['username'] ?></td>
                                    <td><?= $fetch_user['email'] ?></td>
                                    <td class="d-flex justify-content-evenly">
                                        <a href="./index.php?pages=users&action=edit&id=<?= $fetch_user['id'] ?>" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                        <form action="./admin/core/CodeAdminLogin.php" method="post">
                                            <button onclick="return confirm('Bạn có chắc chắn muốn xóa? ')" type="submit" class="btn btn-danger btn-sm" name="deleteUser" value="<?= $fetch_user['id'] ?>"><i class="fas fa-trash-alt"></i>
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