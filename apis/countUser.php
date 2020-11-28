<?php 
    include_once './DBconfig.php';
    include_once './response.php';
    $stmt = $conn->prepare("select count(uid) from customer");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $countUser = $stmt->fetch()['count(uid)'];
    response(200,'success',$countUser);
?>