<?php
    include_once("controller/controller-get-registers.php");

    $testando = new returnRegisters();

   echo $testando->getRegister();
?>