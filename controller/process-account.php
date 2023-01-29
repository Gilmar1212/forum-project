<?php
    include("../../connection/connect-db.php");
    class Process_account extends Connect_db {
    public $fetch;
    //Validate errors of equals login and password and empty input
    public function throwsErrorCreation($login,$senha,$repete_senha){
        $this->fetch = mysqli_query(Process_account::connect(),"SELECT * FROM cadastro");
        while($register = mysqli_fetch_assoc($this->fetch)){
     if( $register["login"] == $login){
        throw new Exception("Error, Login já existe");
    }            
    if($senha !== $repete_senha){
        throw new Exception("Error, Senha e repete senha não são iguais");
    }
    if(empty($login) && empty($senha) && empty($repete_senha)){
        throw new Exception("Error, o cadastro não pode possuir o valor vazio, por favor preencha corretamente");
    }       
    if( $register["login"] == $login){
        echo "Error, Login já existe";
    }            
    if($senha !== $repete_senha){
        echo "Error, Senha e repete senha não são iguais";
    }
    if(empty($login) && empty($senha) && empty($repete_senha)){
        echo "Error, o cadastro não pode possuir o valor vazio, por favor preencha corretamente";
    }       
    }
    }
    }
    
?>