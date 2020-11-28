<?php 
    if (isset($_POST['submit'])){
        include_once './DBconfig.php';
        include_once './response.php';
        try{
            $stmt = $conn->prepare("call addAccount(?,?,?)");
            $stmt->bindParam(1,$_POST['email']);
            $stmt->bindParam(2,$_POST['password']);
            $stmt->bindParam(3,$_POST['username']);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $result = $stmt->errorInfo();
            response(200,'success',$result);
        }
        catch(Exception $e){
            response(400,"bad request",$e->getMessage());
        }
    }
?>