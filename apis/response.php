<?php 
    function response($status, $status_message,$data){
        header("HTTP/1.1 $status $status_message");
        $response["status"]=$status;
        $response["status_message"]=$status_message;
        $json_response=json_encode($data);
        echo $json_response;
    }
?>