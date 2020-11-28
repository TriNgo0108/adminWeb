<?php 
    if(isset($_GET['pid'])){
        include './DBconfig.php';
        include './response.php';
        $stmt = $conn ->prepare("select * from product where pid=?");
        $stmt->bindParam(1,$_GET['pid'],PDO::PARAM_INT);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $result = $stmt->fetch();
        response(200,'success',$result);
    }
?>