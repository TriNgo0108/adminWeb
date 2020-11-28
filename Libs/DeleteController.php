<?php 
namespace Libs;
class DeleteController{
    public function view(){
        include_once './views/delete.php';
    }
    public function type($type){
        include_once './views/delete.php';
    }
    public function page($type,$numPage){
        include_once './views/delete.php';
    }
}
?>