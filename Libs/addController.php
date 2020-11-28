<?php 
 namespace Libs;
 class AddController{
    public function view(){
        include_once('./views/add.php');
    }
    public function addProduct(){
        include_once('./Libs/core/upload.php');
    }
 }
?>