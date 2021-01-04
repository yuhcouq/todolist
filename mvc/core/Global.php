<?php
    function url($data){
        if($_SERVER['HTTP_HOST'] =="localhost" || $_SERVER['HTTP_HOST']=="127.0.0.1"){
            return "/todolist".$data;
        }else{
            return $data;
        }
    }
?>