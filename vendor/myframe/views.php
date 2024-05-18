<?php

namespace vendor\myframe;

class views
{
    public function view($render)
    {
        include 'views/layout/main.php';
        include "views/".$render.".php";
        include 'views/layout/footer.php';
    }

}