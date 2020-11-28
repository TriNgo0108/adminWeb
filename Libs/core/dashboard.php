<?php 
    include_once './models/order.php';
    // call api to count user
    $curl = curl_init("localhost/adminWE/apis/countUser.php");
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    $countUser = json_decode(curl_exec($curl));
    curl_close($curl);
    // call api to count selled product
    $curl = curl_init("localhost/adminWE/apis/selledProduct.php");
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);
    $selledProduct = json_decode(curl_exec($curl));
    curl_close($curl);
    //call api to calculate all value
    $curl = curl_init("localhost/adminWE/apis/allValue.php");
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);
    $allValue = json_decode(curl_exec($curl));
    curl_close($curl);
    //call api to find bestest product
    $curl = curl_init("localhost/adminWE/apis/bestestProduct.php");
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    $bestestProduct = json_decode(curl_exec($curl));
    curl_close($curl);
    // call api to get all orders
    $curl = curl_init("localhost/adminWE/apis/getOrders.php");
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);

    $list = json_decode(curl_exec($curl));
    curl_close($curl);
    $orders=[];
    $index=0;
    foreach($list as $ele){
        $order = new Order($ele->orderDate,$ele->product_name,$ele->price,$ele->quality,$ele->total);
        $orders[$index] = $order;
        $index++;
    }
    $order=null;
?>
