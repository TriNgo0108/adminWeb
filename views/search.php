<!DOCTYPE html>
<?php session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href=<?php echo Base_URL . "css/header.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo Base_URL . "css/navbar.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo Base_URL . "css/addProduct.css" ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo Base_URL . "css/delete.css" ?>>
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
    <div class="pop_up">
        <div class="pop_up_content">
            <div class="pop_up_text">
                Bạn có chắc xóa sản phẩm này không ?
            </div>
            <div class="pop_up_button">
                <button type="button" class="btn" id="yes">Xóa</button>
                <button type="button" class="btn" id="no">Hủy</button>
            </div>
        </div>
    </div>
    <div class="row">
        <?php include_once './views/navbar.php' ?>
        <div class="container col-9 col-sm-9 col-md-9 col-lg-9 rounded mr-2">
            <?php include './views/header.php' ?>
            <form id="search" action="/adminWE/search" method="POST">
            <div class="form-group row shadow pt-2">
                <label for="name" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" id="code" placeholder="Tên sản phẩm" required>
                </div>
                <button type="submit" id="searchCode" class="btn col-sm-3">Tìm kiếm <i class="fas fa-search"></i></button>
            </div>
            </form>
            <h3> Tìm kiếm sản phẩm <?php echo $_POST['name'] ?> </h3>
            <div class="container">
                <div class="row">
                    <?php
                    include_once './Libs/core/search.php';
                    $index = 0;
                    foreach ($products as $product) {
                        
                    ?>
                        <div class="col">
                            <div class="product_infor">
                                <p><?php echo $product->getProductName(); ?></p>
                            </div>
                            <div class="product">
                                <div class="product_image">
                                    <img src=<?php echo $product->getImageURL(); ?> alt="product">
                                </div>
                                <div class="overlay">
                                    <div class="row">
                                        <div class="col text-white">
                                            <a href=<?php echo "/adminWE/product/".$product->getPid(); ?>>Chỉnh sửa</a>
                                        </div>
                                        <div class="col bg-danger text-white delete">
                                            <p>Xóa</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id=<?php echo $index  ?>  value=<?php echo $product->getPid()  ?>>
                        </div>
                    <?php
                        $index++;
                    }
                    ?>
                </div>
                <div class="row">
                    <a href=<?php echo "/adminWE/search/$pagination[pagePre]" ?>>
                        Trang trước
                    </a>
                    <a href=<?php echo "/adminWE/search/$pagination[pageNext]" ?>>
                        Trang sau
                    </a>

                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2f576cb56b.js" crossorigin="anonymous"></script>
    <script src=<?php echo Base_URL . "js/sublist.js" ?>></script>
    <script src=<?php echo Base_URL . "js/dropdown.js" ?>></script>
    <script src=<?php echo Base_URL . "js/searchProduct.js" ?>></script>
</body>

</html>