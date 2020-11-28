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
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <link rel="stylesheet" type="text/css" href="./css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./css/dashboard.css">
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
        <div class="container col-9 col-sm-9 col-md-9 col-lg-9 rounded pb-2">
            <?php include './views/header.php' ?>
            <div class="container">
                <h3>Tổng quan</h3>
                <div class="row">
                    <div class="col-sm-6 col-lg-3 text-white mt-2 ml-2 pt-4 pb-4 first">
                        <i class="fas fa-user"></i>
                        <p class="count"><?php echo $countUser ?></p>
                        <p>Tài khoản đã đăng ký</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-white mt-2 ml-2 pt-4 pb-4 second">
                        <i class="fas fa-shopping-cart"></i>
                        <p class="count"><?php echo $selledProduct ?></p>
                        <p>sản phẩm đã bán</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-white mt-2 ml-2 pt-4 pb-4 third">
                        <i class="fas fa-dollar-sign"></i>
                        <p class="count"><?php echo $allValue?></p>
                        <p>Tổng thu nhập</p>
                    </div>
                </div>
            </div>
            <h3 class="mt-5">Sản phẩm bán nhiều nhất</h3>
            <div class="container">
                <div class="row mr-5">
                    <div class="col-7 col-sm-7 col-md-7 col-lg-7">
                        <div class="row pt-1 pb-1">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 ">
                                <img class="img-fluid" src=<?php echo $bestestProduct->imageURL?>>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <div class=row>
                                    <div class="col">
                                        <p>Tên sản phẩm:</p>
                                        <p>Loại sản phẩm:</p>
                                        <p>Số Lượng đã bán:</p>
                                        <p>Giá:</p>
                                    </div>
                                    <div class="col">
                                        <p><?php echo $bestestProduct->product_name ?></p>
                                        <p><?php echo $bestestProduct->type_name ?></p>
                                        <p><?php echo $bestestProduct->sum ?></p>
                                        <p><?php echo $bestestProduct->price?>đ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="mt-5">Đơn hàng gần đây</h3>
            <div class="container bg-white">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Thời gian</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($orders as $order){
                                    echo "<tr>";
                                    echo "<th scope=\"row\">".$order->getOrderDate()."</th>";
                                    echo "<td>".$order->getProductName()."</td>";
                                    echo "<td>".$order->getQuality()."</td>";
                                    echo "<td>".$order->getPrice()."</td>";
                                    echo "<td>".$order->getTotal()."</td>";
                                    echo "</tr>";      
                                }
                            ?>
                            <!-- <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>SSSSSSS</td>
                                <td>111</td>
                                <td>1111111</td>
                            </tr> -->
                        </tbody>
                    </table>
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