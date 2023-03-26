<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="altera.css">
    <title>Alterar dados</title>
</head>
<body>
    <h1>Aqui poderá alterar os dados que quiser</h1>
    <div>
       <?php
            if (isset($_GET["id"])&&isset($_GET["nome"])&&isset($_GET["numero"])) {
                $id = $_GET["id"];
                $nome = $_GET["nome"];
                $numero = $_GET["numero"];

                echo "<form method='get' action='altera.php'>";
                echo "ID: $id <input type='hidden' name='novoid' value=$id>";
                echo "<br><br>Nome: <input type='text' name='novonome' value=$nome>";
                echo "<br><br>Número: <input type='text' name='novonumero' value=$numero>";
                echo "<br><br><input type='submit' value='gravar'>";
                echo "</form>";
            }

            if (isset($_GET["novoid"])&&isset($_GET["novonome"])&&isset($_GET["novonumero"])) {
                $novoid = $_GET["novoid"];
                $novonome = $_GET["novonome"];
                $novonumero = $_GET["novonumero"];

                $conexao = mysqli_connect("localhost", "root", "", "agenda");

                $sql = "UPDATE `telefones` SET `nome` = '$novonome', `numero` = '$novonumero' WHERE `telefones`.`idTelefone` = $novoid;";

                $resultado = mysqli_query($conexao,$sql);
                mysqli_close($conexao);
                header("Location: index.php");
            }
        ?> 
    </div>
</body>
</html>