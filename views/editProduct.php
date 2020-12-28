<!DOCTYPE html>
<?php session_start();
include_once './Libs/core/getProduct.php';
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
  <link rel="stylesheet" type="text/css" href=<?php echo Base_URL . "css/addProduct.css" ?>>
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
      width: 300px;
      text-align: center;
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
      <p>Cập nhật sản phẩm thành công</p>
    </div>
  </div>
  <div class="row">
    <?php include_once './views/navbar.php' ?>
    <div class="container col-9 col-sm-9 col-md-9 col-lg-9 rounded">
      <?php include './views/header.php' ?>
      <form class="bg-white" method="POST">
        <h3>Chỉnh sửa sản phẩm </h3>
        <div class="row">
          <div class="product_image">
            <img src=<?php echo $product->getImageURL();  ?> alt="product">
          </div>
          <div class="wrapper col-8 col-sm-8 col-md-8 col-lg-8">
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Tên sản phẩm</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Tên sản phẩm" value="<?php echo $product->getproductName(); ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="price" class="col-sm-2 col-form-label">Giá</label>
              <div class="col-sm-5">
                <input type="text" name="price" class="form-control" id="price" placeholder="Giá sản phẩm" value=<?php echo $product->getPrice() ?> required>
              </div>
            </div>
            <div class="form-group row">
              <label for="description" class="col-sm-2 col-form-label">Mô Tả</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description" placeholder="Mô tả sản phẩm" required><?php echo $product->getAbout() ?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="type">Loại</label>
              <div class="col-sm-10">
                <select class="col-sm-10 form-control" id="type" name="type" required>
                  <?php
                  switch ($product->getpTid()) {
                    case 1:
                  ?>
                      <option id="game" value="1" selected>Game</option>
                      <option id="figure" value="2">Figure</option>
                      <option id="manga" value="3">Manga</option>
                      <option id="dvd" value="4">DVD</option>
                    <?php break;
                    case 2:
                    ?>
                      <option id="game" value="1">Game</option>
                      <option id="figure" value="2" selected>Figure</option>
                      <option id="manga" value="3">Manga</option>
                      <option id="dvd" value="4">DVD</option>
                    <?php break;
                    case 3: ?>
                      <option id="game" value="1">Game</option>
                      <option id="figure" value="2">Figure</option>
                      <option id="manga" value="3" selected>Manga</option>
                      <option id="dvd" value="4">DVD</option>
                    <?php break;
                    case 4:
                    ?>
                      <option id="game" value="1">Game</option>
                      <option id="figure" value="2">Figure</option>
                      <option id="manga" value="3">Manga</option>
                      <option id="dvd" value="4" selected>DVD</option>
                  <?php break;
                  }
                  ?>
                </select>
              </div>
              <input type="hidden" id="id" value=<?php echo $product->getPid() ?>>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <button type="button" class="btn pr-1 pl-1" id="button" name="submit" value="submit">
                  <i class="fas fa-plus"></i>
                  Cập nhật
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/2f576cb56b.js" crossorigin="anonymous"></script>
  <script src=<?php echo Base_URL . "js/sublist.js" ?>></script>
  <script src=<?php echo Base_URL . "js/dropdown.js" ?>></script>
  <script src=<?php echo Base_URL . "js/editProduct.js" ?>></script>
</body>

</html>