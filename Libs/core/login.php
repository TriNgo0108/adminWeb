<?php
session_start();
if (isset($_REQUEST['submit'])) {
    $curl = curl_init("http://localhost/adminwe/apis/login.php");
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl,CURLOPT_POST,TRUE);
    curl_setopt($curl,CURLOPT_POSTFIELDS,array('email'=>$_POST['email'],'password'=>$_POST['password'],'submit'=>$_POST['submit']));
    
    $admin= json_decode(curl_exec($curl));
    
if(!empty($admin)){
  $_SESSION['id']=$admin->id;
  $_SESSION['email']=$admin->email;
  $_SESSION['username']=$admin->username;
  header("Location: /adminWE/dashboard");
}
else{
   header('Location: /adminWE');
}

  curl_close($curl);
}
?>