<?php
namespace vendor\myframe;
class Application
{
    private $id = null;
    public function run()
    {
        $url = $_SERVER['REQUEST_URI'];
        $data = explode("/", $url);

        $className = ucfirst($data[2]) . 'Controller';//SiteController
        $className = "controllers\\" . $className;//controllers\SiteController
        $functionName = $data[3];
        if(isset($data[4])){
            $this->id = $data[4];
        }
        $obj = new $className();
        if (is_null($this->id)) {
            $obj->{$functionName}();
        }else{
            $obj->{$functionName}($this->id);
        }
    }
}