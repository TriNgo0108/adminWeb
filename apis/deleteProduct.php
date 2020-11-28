<?php 
    if(isset($_POST['pid'])){
        include_once './DBconfig.php';
        include_once './response.php';
        try {
            $stmt = $conn->prepare("delete from product where pid = ?");
            $stmt->bindParam(1,$_POST['pid'],PDO::PARAM_INT);
            $stmt->execute();
            response(200,'success','OK');
        }
        catch (Exception $e){
            response(400,"bad request",$e->getMessage());
        }

    }
?>