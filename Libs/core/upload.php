<?php
  if (isset($_POST['submit'])){
    
    // Create a cURL handle
    $curl = curl_init("localhost/adminwe/apis/upload.php") ;
    // Create a CURLFile object
    $cfile = new CURLFile($_FILES['image']['tmp_name'],$_FILES['image']['type'],$_FILES['image']['name']);
    $data = array('image' => $cfile,'name'=>$_POST['name'],'price'=>$_POST['price'],'description'=>$_POST['description'],'type'=>$_POST['type'],'submit'=>$_POST["submit"]);
    curl_setopt($curl, CURLOPT_POST,1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    // Execute the handle
    $result=json_decode(curl_exec($curl));
    curl_close($curl);
    setcookie("uploadStatus", $result, time() + 5, "/adminWE");
    header('Location: /adminWE/add');
  }
?>