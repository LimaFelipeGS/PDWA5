<?php
    $nome_aluno = "Fulano da Silva";
    $email_aluno = "example@email.com";
    $tel_aluno = "12345-6789";

    $sql = "INSERT INTO aluno VALUES (null, '".$nome_aluno."', '".$email_aluno."', '".$tel_aluno."')";

    $hostname = "localhost";
    $database = "schema_pdw";
    $username = "estudante1";
    $password = "estudante1";

	$conexao = mysqli_connect($hostname, $username, $password, $database);
	if (mysqli_connect_errno()) {
    	die("Falha na conexão: " . mysqli_connect_error());
      }

    if(mysql_query($sql,$conexao)){
        $msg = "Gravado com sucesso!";
    }else{
        $msg = "Erro ao gravar!";
    }
    mysql_close($conexao);
?>