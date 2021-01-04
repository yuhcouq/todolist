<?php
class App{
    protected $controller = "Home";
    protected $action = "Show";
    protected $params = [];
    function __construct(){
        $arr = $this->Urlproccess();
        $check = 0 ;
        //controller
        if(file_exists("./mvc/controller/".$arr[0].".php")){
            $this->controller = $arr[0];
            unset($arr[0]);
            require_once "./mvc/controller/".$this->controller.".php";
            //action
            if(isset($arr[1])){
                if(method_exists($this->controller,$arr[1])){
                    //check path ok
                    $check = 1;
                    $this->action = $arr[1];
                    unset($arr[1]);
                    //param
                    $this->params = $arr?array_values($arr):[];
                }
            }
        }

        //kiem tra duong dan
        if($check == 0){
            $this->controller = "Home";
            require_once "./mvc/controller/".$this->controller.".php";
        }
        $this->controller = new $this->controller;
        call_user_func_array([$this->controller,$this->action],$this->params);
    }

    function Urlproccess(){
        if(isset($_GET["url"])){
            return explode("/",filter_var(trim($_GET["url"],"/")));
        }
    }
}
?>