<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Bem vindo <?=$_SESSION['login']?></h2>
<form action="../controller/controller-update.php" method="POST">
        <input type="password" name="update-pass" placeholder="Senha">
        <input type="submit" value="Modificar">
</form>
</body>
</html>
