<?php 
    include_once './models/user.php';
    $curl = curl_init("localhost/adminWE/apis/getUsers.php");
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);

    $list = json_decode(curl_exec($curl));
    curl_close($curl);
    $users=[];
    $index=0;
    foreach($list as $ele){
        $user = new User($ele->uid,$ele->username,$ele->email,$ele->phone);
        $users[$index] = $user;
        $index++;
    }
    $user=null;
?>