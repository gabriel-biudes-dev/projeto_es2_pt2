<?php
// Verifica se os dados foram submetidos via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $id_profissional = $_POST['id_profissional'];
    $acao = $_POST['acao'];
    $id_equipe = $_POST['id_equipe'];

    //Conexão com o banco de dados
    $config = parse_ini_file('db.ini');
    $link = new mysqli('localhost', $config['username'], $config['password'], $config['db']);

    // Verifica a conexão
    if ($link->connect_error) {
        die("Erro de conexão: " . $link->connect_error);
    }

    // Verifica se o profissional existe
    $query_verifica_profissional = "SELECT id FROM profissionais WHERE id = ?";
    $stmt = $link->prepare($query_verifica_profissional);
    $stmt->bind_param("i", $id_profissional);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows == 0) {
        die("O profissional com o ID fornecido não foi encontrado.");
    }
    $stmt->close();

    // Verifica se a equipe existe
    $query_verifica_equipe = "SELECT id FROM equipe WHERE id = ?";
    $stmt = $link->prepare($query_verifica_equipe);
    $stmt->bind_param("i", $id_equipe);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows == 0) {
        die("A equipe com o ID fornecido não foi encontrada.");
    }
    $stmt->close();

    // Atualiza o campo idTime do profissional de acordo com a ação escolhida
    if ($acao == "adicionar") {
        $query_atualiza_time = "UPDATE profissionais SET idTime = ? WHERE id = ?";
    } elseif ($acao == "remover") {
        $query_atualiza_time = "UPDATE profissionais SET idTime = NULL WHERE id = ?";
    }

    // Prepara a declaração
    $stmt = $link->prepare($query_atualiza_time);
    if ($stmt === false) {
        die("Erro na preparação da declaração: " . $link->error);
    }

    // Liga os parâmetros à declaração
    if ($acao == "adicionar") {
        $stmt->bind_param("ii", $id_equipe, $id_profissional);
    } elseif ($acao == "remover") {
        $stmt->bind_param("i", $id_profissional);
    }

    // Executa a declaração
    if ($stmt->execute()) {
        echo "Ação realizada com sucesso.";
    } else {
        echo "Erro ao executar a ação: " . $stmt->error;
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $link->close();
}
?>
