<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover Projeto</title>
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
                <h1 style="border-bottom:1px solid black; padding-bottom:5px; text-align:center">Remover Projeto</h1>
                <form id="form-remover-profissional" method="POST" action="backend/removerProjetoB.php">
                    <div class="form-group">
                        <label for="id">ID do Projeto</label>
                        <input type="number" name="id" class="form-control" id="id" placeholder="Informe o ID do projeto a ser removido" required>
                    </div>
                    <button type="submit" class="btn btn-danger">Remover</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
