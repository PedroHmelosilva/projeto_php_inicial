<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>gerenciamento de banco de dados</title>
</head>
<body>
    <h1>Manipulando os primeiros bancos de dados</h1>
    <div>
        <?php
            $conexao = mysqli_connect("localhost", "root", "", "agenda");

            $resultado = mysqli_query($conexao,"SELECT * FROM `telefones`");
            echo "<table border=1 style=background-color:#e7e7e7;>";
            echo "<tr style=background-color:#20202035;>";
            echo "<td>ID</td>";
            echo "<td>Nome</td>";
            echo "<td>Número</td>";
            echo "</tr>";

            while($linha = mysqli_fetch_array($resultado)){
                /*echo "ID: ".$linha["idTelefone"]."<br>";
                echo "Nome: ".$linha["nome"]."<br>";
                echo "Número: ".$linha["numero"]."<br>";
                echo "<br>";*/

                echo "<tr>";
                echo "<td>".$linha["idTelefone"]."</td>";
                echo "<td>".$linha["nome"]."</td>";
                echo "<td>".$linha["numero"]."</td>";
                echo "</tr>";
            }

            mysqli_close($conexao);
        ?>
    </div>
    <main>
        <br>
        <h3>Registros</h3>
        <br>
        <a href="procura.php">Procurar e alterar</a>
        <a href="insere.php">Inserir</a>
        <a href="procuraexclui.php">Procurar e excluir</a>
    </main>
</body>
</html>