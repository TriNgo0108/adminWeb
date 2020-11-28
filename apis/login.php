<?php 
if(isset($_REQUEST['submit'])){
  include_once './DBconfig.php';
  include_once './response.php';
    $stmt = $conn->prepare("Select * from admin where email=? and password=?");
    $stmt->bindParam(1, $_POST['email'],PDO::PARAM_STR);
    $stmt->bindParam(2, $_POST['password'],PDO::PARAM_STR);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $row = $stmt->fetch();
     if ($stmt->rowCount()){
            $user['id']=$row['id'];
            $user['email']=$row['email'];
            $user['username']=$row['username'];
            response("200","success",$user);
     }
     else{
         response("400","not found",null);
     }
}
?>
