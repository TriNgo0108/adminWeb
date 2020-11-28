<?php
include_once './DBconfig.php';
include_once './response.php';
$target_dir = "../img/upload/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$message='';
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    $message = "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    $message = "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $message = "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
// if ($_FILES["image"]["size"] > 500000) {
//   $message = "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  //$message = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $message = "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    $stmt = $conn->prepare("call addProduct(?,?,?,?,?)");
    $stmt->bindParam(1,$_POST['type'],PDO::PARAM_INT);
    $target_file = str_replace('..','',$target_file);
    $imageURL = 'http://localhost/adminWE'.$target_file;
    $stmt->bindParam(2,$imageURL);
    $stmt->bindParam(3,$_POST['name']);
    $stmt->bindParam(4,$_POST['price'],PDO::PARAM_INT);
    $stmt->bindParam(5,$_POST['description']);
    $stmt->execute();
  } else {
    $message = "Sorry, there was an error uploading your file.";
  }
  
}
response(200,"success",$uploadOk);
?>