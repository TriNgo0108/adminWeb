<?php 
  if(isset($_GET['name'])&& isset($_GET['start']) &&(isset($_GET['limit']))) {
    include './DBconfig.php';
    include './response.php';
    $stmt = $conn -> prepare("call getSearchProduct(?,?,?)");
    $stmt->bindParam(1,$_GET['name']);
    $stmt->bindParam(2,$_GET['start'],PDO::PARAM_INT);
    $stmt->bindParam(3,$_GET['limit'],PDO::PARAM_INT);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $product = $stmt->fetchAll();
    response(200,"success",$product);
  }
?>