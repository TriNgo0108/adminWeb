<!DOCTYPE html>
<?php session_start();
if (!isset($_SESSION['id'])) {
    header('Location: /adminWE');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href=<?php echo Base_URL . "css/header.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo Base_URL . "css/navbar.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo Base_URL . "css/changePass.css" ?>>
    <link rel="icon" type="image/png" href= <?php echo Base_URL."img/icon.png"?>>
    <style>
        body>.row {
            flex-wrap: unset;
            margin: unset;
        }

        body {
            background-color: #f5f5f5;
        }

        .text-white {
            width: 400px;

            border-radius: 10px;
        }

        .text-white>p {
            font-size: x-large;
        }
    </style>
</head>

<body>
    <div class="popup">
        <div class="poup__content">
            <p>Thêm tài khoản thành công</p>
        </div>
    </div>
    <div class="row">
        <?php include_once './views/navbar.php' ?>
        <div class="container col-9 col-sm-9 col-md-9 col-lg-9 rounded">
            <?php include './views/header.php' ?>
            <form class="bg-white col-10 col-sm-10 col-md-10 col-lg-10">
                <h3>Thêm tài khoản quản trị</h3>
                <div class="form-group row">
                    <label for="newuser" class="col-sm-3 col-form-label">Nhập username</label>
                    <div class="col-sm-9">
                        <input type="text" name="newuser" class="form-control" id="newuser" placeholder="Nhập username" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Nhập email</label>
                    <div class="col-sm-9">
                        <input type="text" name="email" class="form-control" id="email" placeholder="Nhập email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Password" class="col-sm-3 col-form-label">Nhập mật khẩu</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Nhập lại mật khẩu mới" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rePassword" class="col-sm-3 col-form-label">Nhập lại mật khẩu</label>
                    <div class="col-sm-9">
                        <input type="password" name="repassword" class="form-control" id="repassword" placeholder="Nhập lại mật khẩu mới" required>
                        <p id="error" style="display:none; color:#ff9933">Mật khẩu không khớp</p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 last">
                        <button type="button" id="button" class="btn pr-1 pl-1" name="submit" value="submit">
                            Thêm tài khoản
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2f576cb56b.js" crossorigin="anonymous"></script>
    <script src=<?php echo Base_URL . "js/sublist.js" ?>></script>
    <script src=<?php echo Base_URL . "js/dropdown.js" ?>></script>
    <script src=<?php echo Base_URL . "js/addAccount.js" ?>></script>
</body>

</html>