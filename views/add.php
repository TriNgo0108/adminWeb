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
  <title>Thêm sản phẩm</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./css/header.css">
  <link rel="stylesheet" type="text/css" href="./css/navbar.css">
  <link rel="stylesheet" type="text/css" href="./css/addProduct.css">
  <link rel="icon" type="image/png" href="./img/icon.png">
  <style>
    body>.row {
      flex-wrap: unset;
      margin: unset;
    }

    body {
      background-color: #f5f5f5;
    }
    .text-white{
      width: 300px;
      text-align: center;
      border-radius: 10px;
    }
    .text-white > p{
      font-size: x-large;
    }
  </style>
</head>

<body>
  <div class="row">
    <?php include_once './views/navbar.php' ?>
    <div class="container col-9 col-sm-9 col-md-9 col-lg-9 rounded">
      <?php include './views/header.php' ?>
      <?php
      if (isset($_COOKIE["uploadStatus"])) {
        if ($_COOKIE["uploadStatus"] == 0) {

          echo "<div class=\"bg-danger text-white\">";
          echo "<p>Có lỗi khi tải lên, vui lòng thử !</p>";
          echo "</div>";
        } else {
          echo "<div class=\"bg-success text-white\">";
          echo "<p><i class=\"fas fa-check-circle\"></i>Tải lên thành công</p>";
          echo "</div>";
        }
      }
      ?>
      <form class="bg-white" method="POST" action="/adminWE/add/upload" enctype="multipart/form-data">
        <h3> Thêm sản phẩm mới </h3>
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Tên sản phẩm</label>
          <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="name" placeholder="Tên sản phẩm" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="price" class="col-sm-2 col-form-label">Giá</label>
          <div class="col-sm-5">
            <input type="text" name="price" class="form-control" id="price" placeholder="Giá sản phẩm" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="description" class="col-sm-2 col-form-label">Mô Tả</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="description" id="description" placeholder="Mô tả sản phẩm" required></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" for="type">Loại</label>
          <div class="col-sm-10">
            <select class="col-sm-10 form-control" id="type" name="type" required>
              <option id="game" value="1">Game</option>
              <option id="figure" value="2">Figure</option>
              <option id="manga" value="3">Manga</option>
              <option id="dvd" value="4">DVD</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="image" class="col-sm-2 col-form-label">Hình ảnh sản phẩm</label>
          <input type="file" name="image" class="col-sm-10" id="image" required>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <button type="submit" class="btn pr-1 pl-1" name="submit" value="submit">
              <i class="fas fa-plus"></i>
              Thêm sản phẩm
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
  <script src="./js/sublist.js"></script>
  <script src="./js/dropdown.js"></script>
</body>

</html>