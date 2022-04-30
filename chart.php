<?php

$pdo = new PDO('mysql:host=localhost;dbname=chart;charset=utf8', 'root', '');

$sql = "SELECT vendedores.nome, vendas.vendas FROM vendas JOIN vendedores ON vendedores.id = vendas.id_vendedores";

$statement = $pdo->prepare($sql);

$statement->execute();


while ($results = $statement->fetch(PDO::FETCH_ASSOC)) {
    $result[] = $results;
}

echo json_encode($result);
