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
    }
?>