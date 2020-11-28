<?php 
    namespace Libs;
    class AdminController{
        public function logout(){
            include_once './Libs/core/logout.php';
        }
        public function changePass(){
            include_once './views/changePass.php';
        }
        public function addAccount(){
            include_once './views/addAccount.php';
        }
    }
?>