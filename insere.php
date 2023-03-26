<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="insere.css">
    <title>Inserindo um valor para o banco de dados</title>
</head>
<body>
    <h1>Insira os seus dados aqui</h1>
    <div>
        <form method="get" action="insere.php">
            Nome: <input type="text" name="nome"><br><br>
            Número: <input type="text" name="numero"><br><br>
            <input type="submit" value="Gravar">
        </form>
    </div>
    <?php
        if (isset($_GET["nome"]) && isset($_GET["numero"])){
            $nome = $_GET["nome"];
            $numero = $_GET["numero"];

            $conexao = mysqli_connect("localhost","root","","agenda");

            $sql = "INSERT INTO `telefones`(`idTelefone`, `nome`, `numero`) VALUES (NULL, '$nome', '$numero');";

            $resultado = mysqli_query($conexao,$sql);
            mysqli_close($conexao);

            header("Location: index.php?");
        }
    ?>
</body>
</html>