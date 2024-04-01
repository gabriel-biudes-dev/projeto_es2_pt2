<html>
    <head>   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Principal</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/menu.css">
        <link rel="stylesheet" href="assets/css/index.css">
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
                <li class="nav-item">
                    <a class="nav-link" href="gerenciarProf.php">Gerenciar Profissionais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gerenciarTime.php">Gerenciar Times</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gerenciarProj.php">Gerenciar projetos</a>
                </li>
              </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row justify-content-md-center">
            <div class="col-lg-2 text-center">
                    <a href="cadastroProjeto.php">
                        <div id="opt">
                            <img src="assets/images/do-utilizador.png" class="img-fluid">
                            <p>Cadastrar Projeto</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 text-center">
                    <a href="removerProjeto.php">
                        <div id="opt">
                            <img src="assets/images/do-utilizador.png" class="img-fluid">
                            <p>Remover Projeto</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 text-center">
                    <a href="consultarProjeto.php">
                        <div id="opt">
                            <img src="assets/images/do-utilizador.png" class="img-fluid">
                            <p>Consultar Projeto</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-md-center">
            <div class="col-lg-2 text-center">
                    <a href="alterarProjeto.php">
                        <div id="opt">
                            <img src="assets/images/do-utilizador.png" class="img-fluid">
                            <p>Alterar Projeto</p>
                        </div>
                    </a>
                </div>

         
        </div>
    </body>
</html>
