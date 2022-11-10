<?php
    include("../model/connect-db.php");
    class Process_account extends Connect_db {
    public $fetch;
    public function throwsError(){
        try{
            throw new Exception("Error, usuário e senha já existem");
            $register["login"] == $_POST["login"];
            $register["senha"] == $_POST["senha"];
           }catch(Exception $e){
            echo $e->getMessage();
           }
    }
    public function process(){

        $this->fetch = mysqli_query(Process_account::connect(),"SELECT * FROM cadastro");
        while($register = mysqli_fetch_assoc($this->fetch)){
            Process_account::throwsError();
          
           
    
        }
    } 
    }
    
    
?>