<?php
// Verifica se os dados foram submetidos via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $id = $_POST['id'];
    $campo = $_POST['campo'];
    $novo_valor = $_POST['novo_valor'];

    //Conexão com o banco de dados
    $config = parse_ini_file('db.ini');
    $link = new mysqli('localhost', $config['username'], $config['password'], $config['db']);

    // Verifica a conexão
    if ($link->connect_error) {
        die("Erro de conexão: " . $link->connect_error);
    }

    // Query para atualizar o campo do projeto
    $sql = "UPDATE projeto SET $campo = ? WHERE id = ?";
    
    // Prepara a declaração
    $stmt = $link->prepare($sql);
    if ($stmt === false) {
        die("Erro na preparação da declaração: " . $link->error);
    }

    // Liga os parâmetros à declaração
    $stmt->bind_param("si", $novo_valor, $id);

    // Executa a declaração
    if ($stmt->execute()) {
        echo "Os dados do projeto foram atualizados com sucesso.";
    } else {
        echo "Erro ao atualizar os dados do projeto: " . $stmt->error;
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $link->close();
}
?>
