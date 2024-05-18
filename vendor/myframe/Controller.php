<?php

namespace vendor\myframe;

class Controller
{
    public function view()
    {
        include 'views/layout/main.php';
        include "views/".$.".php";
        include 'views/layout/footer.php';
    }
}