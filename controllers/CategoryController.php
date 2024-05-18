<?php

namespace Controllers;

use vendor\myframe\views;

class CategoryController
{
    public $views;
    public function __construct()
    {
        $this->views = new views();
    }
    public function list()
    {
        $this->views->view('/category/list');
    }

    public function add()
    {
        include 'views/layout/main.php';
        include 'views/category/add.php';
        include 'views/layout/footer.php';
    }
    public function update($id)
    {
        echo "bu category add ". $id;
    }
}