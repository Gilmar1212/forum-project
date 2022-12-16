<?php
session_start();
 echo "<h2>Login Realizado com sucesso</h2>";
    echo "<h2>Bem vindo ".$_SESSION['login']."</h2>";
?>