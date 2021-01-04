<?php
class Controller{
    function model($model){
        require_once "./mvc/model/".$model.".php";
        return new $model;
    }
    function view($view,$data){
        if(is_array($data) && count($data)>0){
            foreach($data as $key => $value){
                $$key = $value;
            }
        }
        require_once "./mvc/view/".$view.".php";
    }
}
?>