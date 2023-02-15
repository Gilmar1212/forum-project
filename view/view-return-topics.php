<?php
      include_once("../connection/connect-db.php");
     interface getRegisters{
        public function getRegister ();
    }

    class Teste implements getRegisters{

        public $ocurrence_query;

        public function getRegister(){
           $connect = new Connect_db();
           $query_prepare = "SELECT * FROM topicos";
           $this->ocurrence_query = $query_prepare;
           $query_exec = mysqli_query($connect->connect(), $query_prepare);
           while($register = mysqli_fetch_assoc($query_exec)){
            echo $register['nome_topico']."<br>";
           }
        }
    }

    $testando = new Teste();

   echo $testando->getRegister();
?>