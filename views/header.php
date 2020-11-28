<header>
    <div class="row sticky-top">
        <div class="offset-md-8 offset-8 offset-lg-8 offset-sm-8 col-4 col-sm-4 col-md-4 col-lg-4">
            <div class="dropdownlist">
                <img class="img-fluid" src="http://localhost/adminWE/img/avatar1.png" alt="logo">
                <p id="username"><?php echo $_SESSION['username'] ?></p>
                <div class="dropdown-content">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <img class="img-fluid" src="http://localhost/adminWE/img/avatar1.png" alt="logo">
                        </div>
                        <div class="col-7 col-sm-7 col-md-7 col-lg-7">
                            <?php echo "<p>".$_SESSION['username']."</p>";
                                echo "<p>".$_SESSION['email']."</p>";
                            ?>

                        </div>
                    </div>
                    <hr class="bg-white">
                    <a href="/adminWE/admin/changePass"><i class="fas fa-key"></i>Đổi mật khẩu</a>
                    <a href="/adminWE/admin/addAccount"><i class="fas fa-user-plus"></i>Thêm tài khoản</a>
                    <a href="/adminWE/logout"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>
</header>