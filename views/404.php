<?php
session_start();
include_once './Libs/core/dashboard.php';
if (!isset($_SESSION['id'])) {
    header('Location:/adminWE');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Không tìm thấy trang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <link rel="stylesheet" type="text/css" href="./css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./css/dashboard.css">
    <link rel="icon" type="image/png" href="./img/icon.png">
    <style>
        body>.row {
            flex-wrap: unset;
            margin: unset;
        }

        body {
            background-color: #f5f5f5;
        }
        #e_404{
            max-width: 300px;
            max-height: 300px;
        }
        .center{
            margin-top: 20px;
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="row">
        <?php include_once './views/navbar.php' ?>
        <div class="container col-9 col-sm-9 col-md-9 col-lg-9 rounded pb-2">
            <?php include './views/header.php' ?>
            <div class="container">
                <div class="center">
                    <div >
                        <img  class="img-fluid" id="e_404" src="./img/404.png">
                    </div>
                    <p>Master đi lạc rồi phải không ? Nhấn vào nút dưới để quay lại trang chính nào</p>
                    <a href="/adminWE/dashboard">Nhấn vào đây nè</a>
                </div>
            </div>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2f576cb56b.js" crossorigin="anonymous"></script>
    <script src="./js/aniNumber.js"></script>
    <script src="./js/sublist.js"></script>
    <script src="./js/dropdown.js"></script>
</body>

</html>