<div class="heading text-center mt-5">
    <h3 class="font-weigh">Danh sách khóa học</h3>
</div>
<div class="container-fluid course-list d-flex justify-content-evenly flex-dec flex-wrap mt-5">
    <?php
    $query_course = mysqli_query($conn, "SELECT * FROM courses ");
    if (mysqli_num_rows($query_course) > 0) {
        while ($fetch_course = mysqli_fetch_assoc($query_course)) {
    ?>
            <a href="/product/detail.php?id=<?= $fetch_course['id'] ?>" class="text-dark text-decoration-none">
                <div class="card-product mb-5">
                    <form action="./code.php" method="post">
                        <div class="card-img">
                            <img src="../../admin/uploads/<?= $fetch_course['image'] ?>" alt="">
                        </div>
                        <div class="card-info">
                            <p class="text-title"><?= $fetch_course['name'] ?></p>
                            <p class="text-body"><?= $fetch_course['description'] ?></p>
                        </div>
                        <div class="card-footer">
                            <span class="text-title"><?= $fetch_course['price'] ?>VNĐ</span>

                            <input type="hidden" name="course_name" value="<?php echo $fetch_course['name'] ?>">
                            <input type="hidden" name="course_image" value="<?php echo $fetch_course['image'] ?>">
                            <input type="hidden" name="course_price" value="<?php echo $fetch_course['price'] ?>">
                            <input type="hidden" name="course_description" value="<?php echo $fetch_course['description'] ?>">

                            <div class="card-button">
                                <button class="btn btn-primary" type="submit" name="saveCourse">Đăng Ký Học</button>
                            </div>
                        </div>
                    </form>
                </div>
            </a>
    <?php
        }
    }



    ?>

</div>