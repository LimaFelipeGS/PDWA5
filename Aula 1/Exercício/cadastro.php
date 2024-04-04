<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Recebido</title>
</head>
<body>
    <h2>Cadastro Recebido</h2>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            echo "<h3>Método GET</h3>";
            echo "<p>Nome: " . $_GET["nome"] . "</p>";
            echo "<p>E-mail: " . $_GET["email"] . "</p>";
            echo "<p>Data de Nascimento: " . $_GET["nascimento"] . "</p>";
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h3>Método POST</h3>";
        echo "<p>Nome: " . $_POST["nome"] . "</p>";
        echo "<p>E-mail: " . $_POST["email"] . "</p>";
        echo "<p>Data de Nascimento: " . $_POST["nascimento"] . "</p>";
        } else {
            echo "<p>Nenhum dado recebido.</p>";
        }
    ?>
</body>
</html>