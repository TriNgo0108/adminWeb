<?php 
    include_once './DBconfig.php';
    include_once './response.php';

    $stmt = $conn->prepare("select * from orders o join product p on o.pid=p.pid group by p.pid order by sum(quality) desc limit 1");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    
?>