<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição de dados</title>
</head>
<body>
<h2>Dados Recebidos</h2>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
        echo "<h3>Método GET</h3>";
        echo "<p>Nome: " . $_GET["nome"] . "</p>";
        echo "<p>Sexo: " . $_GET["sexo"] . "</p>";
        echo "<p>Data de Nascimento: " . $_GET["nascimento"] . "</p>";
        echo "<p>Nacionalidade: " . $_GET["nacionalidade"] . "</p>";
        if (isset($_GET["esportes"])) {
            echo "<p>Esportes Praticados: " . implode(", ", $_GET["esportes"]) . "</p>";
        }
        echo "<p>Observações: " . $_GET["observacoes"] . "</p>";
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Método POST</h3>";
        echo "<p>Nome: " . $_POST["nome"] . "</p>";
        echo "<p>Sexo: " . $_POST["sexo"] . "</p>";
        echo "<p>Data de Nascimento: " . $_POST["nascimento"] . "</p>";
        echo "<p>Nacionalidade: " . $_POST["nacionalidade"] . "</p>";
        f (isset($_POST["esportes"])) {
            echo "<p>Esportes Praticados: " . implode(", ", $_POST["esportes"]) . "</p>";
        }
        echo "<p>Observações: " . $_POST["observacoes"] . "</p>";
        } else {
        echo "<p>Nenhum dado recebido.</p>";
        }
    ?>
</body>
</html>