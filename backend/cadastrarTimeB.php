<?php
if($_SERVER["REQUEST_METHOD"] != "POST") return;
$nome = htmlspecialchars($_POST['nome']);


//Validações
if(empty($nome)) return;

//Conectando ao banco de dados
$config = parse_ini_file('db.ini');
$link = new mysqli('localhost', $config['username'], $config['password'], $config['db']);

//Cadastrando o time
$query = "INSERT INTO equipe(nome) ";
    $query = $query . "VALUES('" . $nome . "')";
    $link->query($query);
    echo "Cadastrado com sucesso";
mysqli_close($link);
?>