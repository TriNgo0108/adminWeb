<?php

namespace Libs;
class HomeController
{
    public function index()
    {
        include_once('./views/login.php');
    }
    public function view($params)
    {
        echo $params;
    }
    public function dashboard()
    {
        include_once('./views/dashboard.php');
    }
    // public function add(){
    //     include_once('./views/add.php');
    // }
    // public function edit(){
    //     include_once('./views/edit.php');
    // }
    // public function delete(){
    //     include_once('./views/detele.php');
    // }
    public function login()
    {
        include_once('./Libs/core/login.php');
    }
}
