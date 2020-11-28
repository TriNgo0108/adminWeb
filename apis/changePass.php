<?php 
    if (isset($_POST['submit'])){
    include_once './DBconfig.php';
    include_once './response.php';
    $stmt = $conn->prepare("call changePass(?,?,?)");
    $stmt->bindParam(1,$_POST['oldPassword']);
    $stmt->bindParam(2,$_POST['newPassword']);
    $stmt->bindParam(3,$_POST['id']);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    response(200,'success',$result);
    }
?>