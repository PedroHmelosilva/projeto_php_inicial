<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="procuraexclui.css">
    <title>Procura para excluir</title>
</head>
<body>
    <h1>Excluir registros</h1>
    <div>
        <form action="procuraexclui.php" method="get">
            <p>Procurar: <input type="number" name="id"></p><br>
            <input type="submit" value="Buscar">
        </form>
        <?php
            if (isset($_GET["id"])) {
                $id = $_GET["id"];

                $conexao = mysqli_connect("localhost", "root", "", "agenda");

                $sql = "SELECT * FROM `telefones` WHERE `idTelefone` = $id";

                $resultado = mysqli_query($conexao,$sql);

                if ($linha = mysqli_fetch_array($resultado)) {
                    header("Location: exclui.php?id=".$linha["idTelefone"]."&nome=".$linha["nome"]."&numero=".$linha["numero"]);
                } else {
                    echo "<p>Registro não encontrado.</p>";
                }
            }
        ?>
    </div>
</body>
</html>