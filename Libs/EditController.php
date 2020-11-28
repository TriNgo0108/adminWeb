<?php 
namespace Libs;

class EditController{
    
    // public function view(){
    //     include_once './views/edit.php';        
    // }
    public function type($type){
        include_once './views/edit.php';
    }
    public function page($type,$numPage){
        include_once './views/edit.php';
    }
}
?>