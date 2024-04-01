<?php

// Conectando ao banco de dados
$config = parse_ini_file('db.ini');
$link = new mysqli('localhost', $config['username'], $config['password'], $config['db']);

// Verificando a conexão
if ($link->connect_errno) {
    die("Erro ao conectar ao banco de dados: " . $link->connect_error);
}

// Verificando se o ID do profissional foi enviado
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Preparando a consulta SQL para remover o profissional
    $query = "DELETE FROM profissionais WHERE id = ?";
    
    // Preparando a declaração
    if ($stmt = $link->prepare($query)) {
        // Vinculando parâmetros
        $stmt->bind_param("i", $id);
        
        // Executando a declaração
        if ($stmt->execute()) {
            echo "Profissional removido com sucesso.";
        } else {
            echo "Erro ao remover profissional: " . $stmt->error;
        }
        
        // Fechando a declaração
        $stmt->close();
    } else {
        echo "Erro na preparação da declaração: " . $link->error;
    }
} else {
    echo "ID do profissional não fornecido.";
}

// Fechando a conexão com o banco de dados
$link->close();

?>
