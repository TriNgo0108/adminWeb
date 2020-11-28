<?php 
    include_once './DBconfig.php';
    include_once './response.php';
    $stmt = $conn->prepare("select sum(quality) from orders");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $selledProduct = $stmt->fetch()['sum(quality)'];
    response(200,'sucess',$selledProduct);

?>