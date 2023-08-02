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
                    Danh Sách Sản Phẩm
                    <a href="./index.php?pages=product&action=add" class="btn btn-primary float-end">Thêm Sản Phẩm</a>
                </h4>
            </div>

            <div class="card-body">
                <table class="table ">
                    <thead>
                        <tr class="font-weight-bolder">
                            <td>ID</td>
                            <td>Tên Khóa Học</td>
                            <td>Hình Ảnh</td>
                            <td>Giá</td>
                            <td>Mô Tả</td>
                            <td>Tùy Chọn</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query_course = mysqli_query($conn, "SELECT * FROM courses");
                        if (mysqli_num_rows($query_course) >  0) {
                            while ($fetch_course = mysqli_fetch_assoc($query_course)) {
                        ?>
                                <tr>
                                    <td><?= $fetch_course['id'] ?></td>
                                    <td><?= $fetch_course['name'] ?></td>
                                    <td>
                                        <img src="./admin/uploads/<?= $fetch_course['image'] ?>" alt="" width="100px">
                                    </td>
                                    <td><?= $fetch_course['price'] ?></td>
                                    <td><?= $fetch_course['description'] ?></td>

                                    <td class="d-flex justify-content-evenly">
                                        <a href="./index.php?pages=product&action=edit&id=<?= $fetch_course['id'] ?>" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i>
                                        </a>

                                        <form action="./admin/core/CodeAdminLogin.php" method="post">
                                            <button onclick="return confirm('Bạn có chắc chắn muốn xóa? ')" type="submit" class="btn btn-danger btn-sm" name="deleteCourse" value="<?= $fetch_course['id'] ?>"><i class="fas fa-trash-alt"></i>
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