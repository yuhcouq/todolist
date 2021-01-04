<?php
class Work extends Controller{
    public $model;
    function __construct(){
        $this->model = $this->model("Works");
    }

    function AddPost(){
        if($_POST["id"] == 0){
            $this->model->name = $_POST["name"];
            $this->model->start = $_POST["start"];
            $this->model->end = $_POST["end"];
            $this->model->status = $_POST["status"];
            $this->view("ListWork",["status" => ["Thêm",$this->model->insert($this->model)],"work" => $this->model->List()]);
        }else{
            $this->view("ListWork",["status" => ["Cập nhật",$this->model->Update($_POST)],"work" => $this->model->List()]);
        }
        
    }

    function List(){
        $data = $this->model->List();
        $this->view("ListWork",['work' => $data]);
    }

    function TimeLine(){
        $data = $this->model->List();
        $this->view("TimeLine",['work' => $data]);
    }

    function Add(){
        $this->view("AddWork",[]);
    }

    function Delete($id){
        $this->view("ListWork",["status" => ["Xóa",$this->model->Delete($id)],"work" => $this->model->List()]);
    }
    function Update($id){
        $this->view("AddWork",["work" => $this->model->work($id)]);
    }
}
?>