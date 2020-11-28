<?php 
    include_once './DBconfig.php';
    include_once './response.php';
    $stmt = $conn->prepare("call bestestProduct");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $bestestProduct= $stmt->fetch();
    response(200,'sucess',$bestestProduct);
?>