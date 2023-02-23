<?php
   include_once("../../controller/controller-process-account.php");
   include_once("../../connection/connect-db.php");
    class createAccount extends Connect_db{
        private $login;
        private $senha;
        private $repeteSenha;
        public function Sign_up(String $login, String $senha, String $repeteSenha){            
            $this->login = $login;
            $this->senha = $senha;
            $this->repeteSenha = $repeteSenha;
             if($repeteSenha == $senha){
                $insert = "INSERT INTO cadastro (`login`,`senha`) VALUES ('".$login."','".$senha."')";
                    mysqli_query(createAccount::connect(), $insert);
                    echo"<script>alert('Cadastro realizado com sucesso');window.location.href='../../index.php'</script>";
             }            
            }    
    }
   
    $validate = new Process_account();
    $validate->throwsErrorCreation($_POST['login'],$_POST['senha'],$_POST['confirmar-senha']);

    $create = new createAccount();
    $create->Sign_up($_POST['login'],$_POST['senha'],$_POST['confirmar-senha']);
  
?>