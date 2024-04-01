<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Time</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h3 id="menu">Controle de Estoque</h3>
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
                <h1 style="border-bottom:1px solid black; padding-bottom:5px; text-align:center">Alterar Time</h1>
                <form id="form-alterar-time" method="POST" action="backend/alterarTimeB.php">
                    <div class="form-group">
                        <label for="id_profissional">ID do Profissional</label>
                        <input type="number" name="id_profissional" class="form-control" id="id_profissional" placeholder="Informe o ID do profissional" required>
                    </div>
                    <div class="form-group">
                        <label for="acao">Ação</label>
                        <select name="acao" class="form-control" id="acao" required>
                            <option value="adicionar">Adicionar ao Time</option>
                            <option value="remover">Remover do Time</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_equipe">ID da Equipe</label>
                        <input type="number" name="id_equipe" class="form-control" id="id_equipe" placeholder="Informe o ID da equipe" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
