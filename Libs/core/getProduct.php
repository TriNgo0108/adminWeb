<?php 
    if (isset($pid)){
        include_once './models/product.php';
        $curl = curl_init("localhost/adminWE/apis/getProduct.php?pid=$pid");
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
        $p = json_decode(curl_exec($curl));
        $product = new Product($p->pid,$p->pTid,$p->imageURL,$p->product_name,$p->price,$p->about);
        curl_close($curl);
    }
?>