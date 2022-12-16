<?php
  
   include_once("../../controller/process-account.php");
   include_once("../../connection/connect-db.php");
    class createAccount extends Connect_db{
        private $login;
        private $senha;
        public function Create(String $login, String $senha){            
            $this->login = $login;
            $this->senha = $senha;

                    $insert = "INSERT INTO cadastro (`login`,`senha`) VALUES ('".$login."','".$senha."')";
                    mysqli_query(createAccount::connect(), $insert);
                    echo"Cadastro realizado com sucesso";
            }    
    }
   
    $validate = new Process_account();
    $validate->throwsErrorCreation($_POST['login'],$_POST['senha']);

    $create = new createAccount();
    $create->Create($_POST['login'],$_POST['senha']);
  
?>