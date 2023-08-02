<?php include('./includes/HeaderAdminLogin.php'); ?>
<div class="form-container" style="background-image: url('../admin/assets/images/background2.jpg');">

    <form action="./core/CodeAdminLogin.php" method="post">
        <h3>Đăng Ký</h3>
        <input type="text" name="username" required placeholder="Nhập đầy đủ họ tên" class="box">
        <input type="email" name="email" required placeholder="Nhập đầy đủ email" class="box">
        <input type="password" name="password" required placeholder="Mật khẩu" class="box">
        <input type="password" name="password_repeat" required placeholder="Nhập lại mật khẩu" class="box">
        <input type="submit" name="saveUser" class="btn" value="Đăng ký">
        <p>Bạn đã có tài khoản? <a href="./login.php">Đăng nhập</a></p>
    </form>

</div>
<?php include('./includes/FooterAdminLogin.php'); ?>