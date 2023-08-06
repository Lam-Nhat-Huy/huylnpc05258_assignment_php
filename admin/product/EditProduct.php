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
                    Chỉnh Sửa Sản Phẩm
                    <a href="./index.php?pages=product&action=list" class="btn btn-danger float-end">Trở Về</a>
                </h4>
            </div>
            <div class="card-body">
                <?php
                $course_id = mysqli_real_escape_string($conn, $_GET['id']);
                $query = "SELECT * FROM courses WHERE id = $course_id";
                $sql = mysqli_query($conn, $query);

                while ($select_course = mysqli_fetch_array($sql)) {
                ?>
                    <form action="./admin/core/CodeAdminLogin.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="course_id" value="<?= $select_course['id'] ?>">
                        <div class="mb-3">
                            <label for="">Name: </label>
                            <input type="text" class="form-control" name="name" value="<?= $select_course['name'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="">Hình Ảnh: </label>
                            <input type="text" class="form-control" name="image" value="<?= $select_course['image'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="">Giá: </label>
                            <input type="text" class="form-control" name="price" value="<?= $select_course['price'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="">Mô tả: </label>
                            <input type="text" class="form-control" name="description" value="<?= $select_course['description'] ?>">
                        </div>
                        <div class="col-md-12 mb-5">
                            <label class="form-label">Thể loại</label>
                            <select class="form-select" name="category_id" required aria-label=".form-select-sm example">
                                <?php
                                $select_category_id = mysqli_query($conn, "SELECT * FROM category");
                                if (mysqli_num_rows($select_category_id) > 0) {
                                    while ($row = mysqli_fetch_array($select_category_id)) {
                                ?>
                                        <option value="<?= $row['id'] ?>"><?= $row['category_name'] ?> </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>

                        </div>
                        <div class="mb-3">
                            <button type="submit" name="updateCourse" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>

                <?php
                }

                ?>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('./admin/includes/Footer.php') ?>