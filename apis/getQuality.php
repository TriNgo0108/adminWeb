<?php 
    if (isset($_GET['Tid'])){
        include_once './DBconfig.php';
        include_once './response.php';
        $stmt = $conn ->prepare("call getQuality(?)");
        $stmt->bindParam(1,$_GET['Tid'],PDO::PARAM_INT);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $result = $stmt->fetch();
        response(200,'success',$result);
    }
?>