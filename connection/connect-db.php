<?php
    
    
    class Connect_db{
    public $servername;
    public $username;
    public $pass;
    public $db;

    public function connect(){

        $this->servername = "localhost";
        $this->username = "root";
        $this->pass = "";
        $this->db = "db_forum";
        
        $construct = new mysqli($this->servername , $this->username, $this->pass,$this->db);
        return $construct;
    }
    
    public function select(String $column, String $table, $where,$where_value){
        if($where &&  $where_value){
            $query = mysqli_query(Connect_db::connect(),"SELECT $column FROM $table  WHERE id_usuario = $where_value");
            
        return $query;
        }else{
            $query = mysqli_query(Connect_db::connect(),"SELECT $column FROM $table");
        return $query;
        }
        
    }   
    }
?>