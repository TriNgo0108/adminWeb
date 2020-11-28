<?php 
    if (isset($_POST['submit'])){
        include_once './DBconfig.php';
        include_once './response.php';
        try{
            $stmt = $conn->prepare("call updateProduct(?,?,?,?,?)");
            $stmt->bindParam(1,$_POST['id'],PDO::PARAM_INT);
            $stmt->bindParam(2,$_POST['type'],PDO::PARAM_INT);
            $stmt->bindParam(3,$_POST['name']);
            $stmt->bindParam(4,$_POST['price'],PDO::PARAM_INT);
            $stmt->bindParam(5,$_POST['description']);
            $stmt->execute();
            response(200,'success',"OK");
        }
        catch (Exception $e){
                response(400,"bad request","Error");
        }
        
        
    }
?>