<!DOCTYPE html>
<?php session_start() ;
    
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/addProduct.css">
    <style>
        body>.row {
            flex-wrap: unset;
            margin: unset;
        }

        body {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <div class="row">
        <?php include_once './views/navbar.php' ?>
        <div class="container col-9 col-sm-9 col-md-9 col-lg-9">
            <?php include './views/header.php' ?>
            <h3> Chỉnh sủa sản phẩm </h3>
            <div class="form-group row shadow container">
                <label for="name" class="col-sm-2 col-form-label">Mã sản phẩm</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="code" placeholder="Mã sản phẩm" required>
                </div>
                <button id="searchCode" class="btn col-sm-3">Tìm kiếm <i class="fas fa-search"></i></button>
            </div>
            <div class="container">
            <?php if (isset($page)) echo "<h4>$page</h4>" ?>
                <div class="row">
                    <a class="col" href="#">
                        <div class="product">
                            <div class="product_image">
                                <img src="../img/yourName.jpg" alt="product">
                            </div>
                            <div class="product_infor">
                                <p>Your Name</p>
                                <div class="edit">
                                <p>Chỉnh Sửa</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="col" href="#">
                        <div class="product">
                            <div class="product_image">
                                <img src="../img/yourName.jpg" alt="product">
                            </div>
                            <div class="product_infor">
                                <p>Your Name</p>
                            </div>
                        </div>
                    </a>
                    <a class="col" href="#">
                        <div class="product">
                            <div class="product_image">
                                <img src="../img/yourName.jpg" alt="product">
                            </div>
                            <div class="product_infor">
                                <p>Your Name</p>
                            </div>
                        </div>
                    </a>
                    <a class="col" href="#">
                        <div class="product">
                            <div class="product_image">
                                <img src="../img/yourName.jpg" alt="product">
                            </div>
                            <div class="product_infor">
                                <p>Your Name</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2f576cb56b.js" crossorigin="anonymous"></script>
    <script src="../js/sublist.js"></script>
</body>

</html>