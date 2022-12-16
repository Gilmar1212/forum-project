<?php
    include("../../connection/connect-db.php");
    class Process_account extends Connect_db {
    public $fetch;
    //Validate errors of equals login and password and empty input
    public function throwsErrorCreation(){
        $this->fetch = mysqli_query(Process_account::connect(),"SELECT * FROM cadastro");
        while($register = mysqli_fetch_assoc($this->fetch)){
            if( $register["login"] == $_POST["login"]){
                throw new Exception("Error, usuário já existe, por favor insira um novo usuário");
            }
    }
    
    if(empty($_POST["login"]) && empty($_POST["senha"])){
         throw new Exception("Error, o cadastro não pode possuir o valor vazio, por favor preencha corretamente");
    }
    }
    }
    
    
?>