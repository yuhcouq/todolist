<?php
class Db{
    public $conn;
    protected $host = "localhost";  
    protected $dbname="todolist"; 
    protected $username = "root";
    protected $password = "";
    
    function __construct(){
        $this->conn = new PDO("mysql:host=$this->host; dbname=$this->dbname; charset=utf8", $this->username, $this->password);
    }

    function query($db,$sql){
        $result = $this->conn->query($sql);
        if(is_object($result)){
            $data = array();
            foreach($result as $k => $rs){
                $db = new $db;
                foreach($rs as $key => $value ){
                    $db->$key = $value;
                }
                    array_push($data,$db);
            }
            if(count($data)==1){
                return $data[0];
            }
            return $data;
        }else{
            return $result;
        }
    }
    function insert($data){
        $s1 = "";
        $s2 = "";
        $i = 0;
        foreach($data as $key => $value){
            if($key != "host" && $key != "dbname" && $key != "username" && $key != "password" && $key != "conn" && $key != "db"){
                $value = "'".$value."'";
                if($i == 0){
                    $s1 .= $key;
                    $s2 .= $value;
                }else{
                    $s1 .= ",".(String) $key;
                    $s2 .= ",".(String) $value;
                }
                $i++;
            }
        }
        $sql = "INSERT INTO ".strtolower(rtrim($data->db, "s"))." (".$s1.") VALUES (".$s2.")";
        $result = $this->conn->query($sql);
        if($result == false){
            return false;
        }else{
            return true;
        }

    }
    function count($data){
        if(is_array($data)){
            return count($data);
        }elseif(is_object($data)){
            return 1;
        }else{
            return 0;
        }
    }
}
?>