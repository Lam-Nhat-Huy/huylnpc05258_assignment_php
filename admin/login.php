<?php include('./includes/HeaderAdminLogin.php'); ?>
<div class="form-container" style="background-image: url('../admin/assets/images/background2.jpg');">

    <form action="./core/CodeAdminLogin.php" method="post">
        <h3>Đăng Nhập</h3>
        <input type="email" name="email" required placeholder="Nhập đầy đủ email" class="box">
        <input type="password" name="password" required placeholder="Nhập đầy đủ mật khẩu" class="box">
        <input type="submit" name="loginUser" class="btn" value="Đăng Nhập">
        <p>Bạn chưa có tài khoản? <a href="register.php">Đăng kí</a></p>
        <a href="">Quên mật khẩu</a>
    </form>

</div>
<?php include('./includes/FooterAdminLogin.php'); ?>