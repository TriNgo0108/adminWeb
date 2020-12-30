<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if (isset($_SESSION)){
        header("Location: /adminWE/dashboard");
    }
 ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="icon" type="image/png" href= <?php echo Base_URL."img/icon.png"?>>
    <style>
        body {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <div class="row pt-2">
        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
            <img class="img-fluid" src="./img/background.jpg">
        </div>
        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
            <div class="">
                <img class="img-fluid" src="./img/admin-logo.png">
                <form method="POST" action="/adminWE/login">
                    <div class="form-group">
                        <div class="input-group">
                            <i class="fas fa-at"></i>
                            <label for="emailAdmin">Email address</label>
                        </div>
                        <input type="email" class="form-control" id="emailAdmin" name="email"
                            placeholder="Nhập email của bạn">
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <i class="fas fa-key"></i>
                            <label for="passAdmin">Password</label>
                        </div>
                        <input type="password" class="form-control" name="password" id="passAdmin" placeholder="Mật Khẩu của bạn">
                    </div>
                    <div class="right">
                        <input type="submit" name="submit" value="Đăng nhập" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2f576cb56b.js" crossorigin="anonymous"></script>
</body>

</html>