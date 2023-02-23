<?php
session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Bem vindo <?=$_SESSION['login']?></h2>
<form action="../controller/controller-update.php" method="POST">
        <input type="password" name="update-pass" placeholder="Nova Senha">
        <input type="submit" value="Modificar">
</form>
<?php include_once("../model/model-crud-account/model-delete-account.php");?>
</body>
</html>