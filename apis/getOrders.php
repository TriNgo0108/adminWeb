<?php 
    include_once './DBconfig.php';
    include_once './response.php';
    $stmt = $conn->prepare("select quality,orderDate,product_name,price, price*quality total from orders o join product p on o.pid=p.pid order by orderDate desc ");
    $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->execute();
    $orders = $stmt->fetchAll();
    response(200,'success',$orders);
?>