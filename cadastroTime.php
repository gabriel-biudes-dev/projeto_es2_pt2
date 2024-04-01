<html>
    <head>   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Time</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/menu.css">
        <link rel="stylesheet" href="assets/css/cadastro.css">
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
                    <!-- Chamada de serviço -->
                    <form id="form" method="POST" action="backend/cadastrarTimeB.php">
                        <h1 style="border-bottom:1px solid black; padding-bottom:5px; text-align:center">Cadastro de Time</h1>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Informe o nome" required>
                        </div>
                        <button type="submit" class="btn btn-danger">Cadastrar</button>
                      </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="assets/js/validar.js"></script>
    </body>
</html>