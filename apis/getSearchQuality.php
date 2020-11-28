<?php 
    if (isset($_GET['name'])){
        include_once './DBconfig.php';
        include_once './response.php';
        $stmt = $conn ->prepare("call getCountSearch(?)");
        $stmt->bindParam(1,$_GET['name']);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $result = $stmt->fetch();
        response(200,'success',$result);
    }
?>