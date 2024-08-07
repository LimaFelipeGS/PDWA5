<?php

// Conexão ao banco de dados
$hostname = "localhost";
$database = "db_api";
$username = "username";
$password = "password";

$conexao = mysqli_connect($hostname, $username, $password, $database);
if (mysqli_connect_errno()) {
    die("Falha na conexão: " . mysqli_connect_error());
}

//Ação da aplicação através de POST ou GET
$action = $_REQUEST["action"];
//Variável que recebe os valores da ação executada
$return = array();

//Laço que executa a lógica da aplicação
if($action === "mostrar-dados") {
    
    //Seleciona alguns dados da tabela de carros
    $query = "SELECT id_carro, 
                     modelo, 
                     marca, 
                     ano, 
                     valor 
                FROM carros";
    
    //Preparação e executa a variável consulta que executa o query declarado anteriormente
    $consulta = $conexao->prepare($query);
    $consulta->execute();

    //Laço que grava todos os valores da ação no return
    while($data = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $return[] = array(
            "id"     => $data["id_carro"],
            "modelo" => $data["modelo"],
            "marca"  => $data["marca"],
            "ano"    => $data["ano"],
            "valor"  => $data["valor"]
        );
    }
}

//Retorna a ação executada em formato JSON
die(json_encode($return));
?>