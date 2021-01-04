<?php
    class Works extends Db{
        public $db = 'Works';
        function Add($data){
            $work = new Works;
            $work->name = "đi chơi";
            $work->start = "2020-12-1";
            $work->end = "2020-12-4";
            $work->status = 1;
            return $this->insert($work);
        }
        function List(){
            $sql = "SELECT * FROM work";
            $result = $this->query($this->db,$sql);
            return $result;
        }
        function Delete($data){
            $sql = "DELETE FROM work WHERE ID = ".$data;
            $result = $this->query($this->db,$sql);
            if($result == false){
                return "false";
            }else{
                return "true";
            }
        }
        function Work($data){
            $sql = "SELECT * FROM work WHERE id =".$data;
            $result = $this->query($this->db,$sql);
            return $result;
        }
        function Update($data){
            $sql = "UPDATE work SET name = '".$data["name"]."',start = '".$data["start"]."',end = '".$data["end"]."',status = ".$data["status"]." WHERE id=".$data["id"];
            $result = $this->query($this->db,$sql);
            if($result == false){
                return "false";
            }else{
                return "true";
            }
        }
    }
?>