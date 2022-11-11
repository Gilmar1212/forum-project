<?php
    include("../model/connect-db.php");
    class Process_account extends Connect_db {
    public $fetch;
    //Validate errors of equals login and password and empty input
    public function throwsErrorCreation(){
        
        $this->fetch = mysqli_query(Process_account::connect(),"SELECT * FROM cadastro");
        while($register = mysqli_fetch_assoc($this->fetch)){
            if( $register["login"] == $_POST["login"]&& $register["senha"] == $_POST["senha"] || $register["login"] == $_POST["login"] || $register["senha"] == $_POST["senha"])
            throw new Exception("Error, usuário e senha já existem");
    }
    
    if(empty($login) && empty($senha)){
        throw new Exception("Error, o cadastro não pode possuir o valor vazio, por favor preencha corretamente");
    }
    }
    }
    
    
?>