<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../model/model-crud-account/model-create-account.php" method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="login" name="login" required>
        <input type="password" placeholder="senha" name="senha" required>
        <input type="password" placeholder="Repita a senha" name="repita-senha" required>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>