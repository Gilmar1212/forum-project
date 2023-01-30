<?php
     interface crudCreate{
        public function Create ($teste);
    }

    class Teste implements crudCreate{
        public function Create($teste){
           echo $teste;
        }
    }

    $testando = new Teste();

    $testando->Create("meu ovo");
    echo "fodase";
?>