<?php
if($_SERVER["REQUEST_METHOD"] != "POST") return;
$nome = htmlspecialchars($_POST['nome']);
$nomeCliente = htmlspecialchars($_POST['nomeCliente']);
$objetivo = htmlspecialchars($_POST['objetivo']);
$data_inicio = htmlspecialchars($_POST['dinicio']);
$data_termino = htmlspecialchars($_POST['dtermino']);
$valor = htmlspecialchars($_POST['valor']);
$time = htmlspecialchars($_POST['time']);

//Conectando ao banco de dados
$config = parse_ini_file('db.ini');
$link = new mysqli('localhost', $config['username'], $config['password'], $config['db']);

//Cadastrando o projeto
$query = "INSERT INTO projeto(nome, cliente, inicio, fim, valor, idTime) ";
    $query = $query . "VALUES('" . $nome . "', '" . $nomeCliente . "', '" . $data_inicio . "', '" . $data_termino . "', " . $valor . ", " . $time . ")";
    $link->query($query);
    echo "Cadastrado com sucesso";
mysqli_close($link);
?>