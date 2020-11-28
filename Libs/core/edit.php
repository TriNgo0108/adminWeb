<?php 
    include './models/product.php';
    function computePagination($totalProduct,$numPage){
        $totalPage = ceil($totalProduct / 8) - 1;
        if (isset($numPage)){
            $p =  $numPage > $totalPage ? 0 : $numPage;
        }
        else $p = 0;
        $p_start = $p * 8;
        $p_next = $p + 1 > $totalPage ? 0 : $p + 1;
        $p_pre = $p - 1 < 0 ? 0 : $p -1;
        return array('pageNo'=>$p,'pagePre'=>$p_pre,'pageNext'=>$p_next,'pageStart'=>$p_start);
    }
    // call api to get quality of one type.
    $curl= curl_init("localhost/adminWE/apis/getQuality.php?Tid=".$type_no);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    $quality = json_decode(curl_exec($curl));
    curl_close($curl);
    $numPage = $numPage ?? 0;
    $pagination = computePagination($quality->quality,$numPage);
    // $curl = curl_init();
    // $url ="localhost/adminWE/apis/getProduct.php?Tid=$type_no&start=".$pagination['pageNext']."&limit=".$pagination['pageNext']+8;
    // curl_setopt($curl,CURLOPT_URL,$url);
    $curl = curl_init("localhost/adminWE/apis/getProducts.php?Tid=$type_no&start=$pagination[pageStart]&limit=8");
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    $list_product = json_decode(curl_exec($curl));
    curl_close($curl);
    $index=0;
    $products=[];
    foreach ($list_product as $ele){
        $product = new Product($ele->pid, null,$ele->imageURL,$ele->product_name);
        $products[$index] = $product;
        $index++;
    }
    $list_product=null;
?>