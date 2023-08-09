<?php include 'includes/headerLogined.php'; ?>

<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM courses WHERE id = $id");
    $select_course = mysqli_fetch_array($sql);
}

?>
<div class="container " style="margin-top: 146px;">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="../../admin/uploads/<?= $select_course['image'] ?>" /></div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM courses WHERE category_id =" . $select_course['category_id']);
                        if (mysqli_num_rows($sql) > 0) {
                            for ($i = 0; $i < 5; $i++) {
                                $rows = mysqli_fetch_array($sql);
                        ?>
                                <li><a data-target="#pic-5" data-toggle="tab"><img src="../../admin/uploads/<?= $rows['image'] ?>" /></a></li>
                        <?php
                            }
                        }
                        ?>
                    </ul>

                </div>
                <div class="details col-md-6">
                    <h3 class="product-title"><?= $select_course['name'] ?></h3>
                    <p class="product-description"><?= $select_course['description'] ?></p>
                    <p class="vote">Phân loại: <strong></strong></p>

                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">41 đánh giá</span>
                    </div>
                    <p class="vote"><strong>91%</strong> người mua thích khóa học này</p>
                    <h4 class="price">Giá khóa học: <span><?= $select_course['price'] ?>VNĐ</span></h4>
                    <div class="action">
                        <form action="" method="post">
                            <button class="btn btn-primary" type="submit" name="addCourse">Học thử</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>