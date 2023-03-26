<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exclui.css">
    <title>Excluir o registro</title>
</head>
<body>
    <h1>Excluir registros</h1>
    <div>
        <?php
            if (isset($_GET["id"])&&isset($_GET["nome"])&&isset($_GET["numero"])) {

                $id = $_GET["id"];
                $nome = $_GET["nome"];
                $numero = $_GET["numero"];

                echo "<form method='get' action='exclui.php'>";
                echo "id $id<input type='hidden' name='idExclui' value=$id><br><br>";
                echo "nome $nome<br><br>";
                echo "número $numero<br><br>";
                echo "<input type='submit' value='excluir'>";
                echo "</form>";
            }

            if (isset($_GET["idExclui"])) {
                $idExclui = $_GET["idExclui"];

                $conexao = mysqli_connect("localhost", "root", "", "agenda");

                $sql = "DELETE FROM telefones WHERE `telefones`.`idTelefone` = $idExclui";

                $resultado = mysqli_query($conexao, $sql);
                mysqli_close($conexao);
                header("Location: index.php?");
            }
        ?>
    </div>
</body>
</html>
