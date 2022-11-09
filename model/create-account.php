<?php
   
   include_once("connect-db.php");
    class createAccount extends Connect_db{
        private String $login;
        private String $senha;

        public function Create(String $login, String $senha){
            
            $this->login = $login;
            $this->senha = $senha;
            var_dump(createAccount::connect());
                $insert = "INSERT INTO cadastro (`login`,`senha`) VALUES ('".$login."','".$senha."')";
                    
                
                mysqli_query(createAccount::connect(), $insert);
           
                if($login = NULL && $senha = NULL || $login = " " && $senha = " "){
                    throw new Exception("Error, o cadastro não pode possuir o valor vazio, por favor preencha corretamente");
                }else{
                    echo"Cadastro realizado com sucesso";
                }
                $query = "SELECT * FROM cadastro";
                $result = mysqli_query(createAccount::connect(),$query);
                while($registro = mysqli_fetch_assoc($result)){
                    echo $registro['login'];
                }
            }
           
    }
   
    $create = new createAccount();

    $create ->Create($_POST["login"],$_POST["senha"]);
?>