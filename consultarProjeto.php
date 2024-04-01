<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do projeto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h3 id="menu">Cadastro de Projetos</h3>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Página Principal</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <h1 style="border-bottom:1px solid black; padding-bottom:5px; text-align:center">Informações do Projeto</h1>
                <form id="form-info-projeto" method="POST" action="consultarProjeto.php">
                    <div class="form-group">
                        <label for="id">ID do Projeto</label>
                        <input type="number" name="id" class="form-control" id="id" placeholder="Informe o ID do projeto" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Mostrar Informações</button>
                </form>
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $id = $_POST['id'];
                        
                        //Conexão com o banco de dados
                        $config = parse_ini_file('backend/db.ini');
                        $link = new mysqli('localhost', $config['username'], $config['password'], $config['db']);

                        //Verifica a conexão
                        if ($link->connect_error) {
                            die("Erro de conexão: " . $link->connect_error);
                        }

                        //Query para buscar informações do projeto
                        $sql = "SELECT * FROM projeto WHERE id = $id";
                        $result = $link->query($sql);

                        if ($result->num_rows > 0) {
                            // Exibindo os dados do projeto
                            $row = $result->fetch_assoc();
                            echo "<div class='mt-4'>";
                            echo "<p><strong>ID:</strong> " . $row["id"] . "</p>";
                            echo "<p><strong>Nome do Projeto:</strong> " . $row["nome"] . "</p>";
                            echo "<p><strong>Nome do Cliente:</strong> " . $row["cliente"] . "</p>";
                            echo "<p><strong>Data de Início:</strong> " . $row["inicio"] . "</p>";
                            echo "<p><strong>Data de Término:</strong> " . $row["fim"] . "</p>";
                            echo "<p><strong>Valor do Projeto:</strong> " . $row["valor"] . "</p>";
                            echo "<p><strong>Time:</strong> " . $row["idTime"] . "</p>";
                            echo "</div>";
                        } else {
                            echo "<p class='text-danger mt-4'>Nenhum projeto encontrado com o ID informado.</p>";
                        }
                        $link->close();
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
