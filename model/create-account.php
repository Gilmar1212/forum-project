<?php
  session_start(); 
  
   include_once("../controller/process-account.php");
   include_once("connect-db.php");
    class createAccount extends Connect_db{
        private $login;
        private $senha;
        public function Create(String $login, String $senha){
            
            $this->login = $login;
            $this->senha = $senha;
            var_dump(createAccount::connect());
               
                    
                
               
           
                if(empty($login) && empty($senha)){
                    throw new Exception("Error, o cadastro não pode possuir o valor vazio, por favor preencha corretamente");
                }else{
                    $insert = "INSERT INTO cadastro (`login`,`senha`) VALUES ('".$login."','".$senha."')";
                    mysqli_query(createAccount::connect(), $insert);
                    echo"Cadastro realizado com sucesso";

                }
            }
           
    }
   
    
    $validate = new Process_account();
    // echo $validate->process();
    if(!$validate->process()){
        $create = new createAccount();
        $create ->Create($_POST["login"],$_POST["senha"]);
    }
    session_destroy();
?>