<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controller/controller-login.php" method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="login" name="login" required>
        <input type="password" placeholder="senha" name="senha" required>
        <input type="submit" value="Logar">
    </form>
    <div>
        <a href="view-sign-up.php" title="Cadastre-se">Cadastre-se</a>
    </div>
    <?php include("view-send-topic.php");?>
    <?php include("view-return-topics.php");?>
</body>
</html>