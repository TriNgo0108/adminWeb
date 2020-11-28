<?php 
    include_once './DBconfig.php';
    include_once './response.php';
    $stmt = $conn ->prepare("Call getAllUser");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $User = $stmt->fetchAll();
    response(200,"success",$User);
?>