<?php 
    include_once './DBconfig.php';
    include_once './response.php';
    $stmt = $conn->prepare("call Allvalue");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $allValue = $stmt->fetch()['total'];
    response(200,'success',$allValue);
?>