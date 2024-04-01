<html>
    <head>   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Principal</title>
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
                    <form id="form" method="POST" action="backend/cadastrarProfissionalB.php">
                        <h1 style="border-bottom:1px solid black; padding-bottom:5px; text-align:center">Cadastro de Profissional</h1>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Informe o nome" required>
                        </div>
                        <div class="form-group">
                            <label for="genero">Gênero</label>
                            <input type="text" name="genero" class="form-control" id="genero" placeholder="Informe o gênero" required>
                        </div>
                        <div class="form-group">
                            <label for="nascimento">Data de Nascimento</label>
                            <input type="text" name="nascimento" class="form-control" id="nascimento" placeholder="Informe a data de nascimento" required>
                        </div>
                        <div class="form-group">
                            <label for="raca">Raça</label>
                            <input type="text" name="raca" class="form-control" id="raca" placeholder="Informe a raça" required>
                        </div>
                        <div class="form-group">
                            <label for="especialidade">Especialidade</label>
                            <input type="text" name="especialidade" class="form-control" id="especialidade" placeholder="Informe a especialidade" required>
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" class="form-control" id="estado" placeholder="Informe o estado" required>
                        </div>
                        <div class="form-group">
                            <label for="municipio">Município</label>
                            <input type="text" name="municipio" class="form-control" id="municipio" placeholder="Informe o município" required>
                        </div>
                        <div class="form-group">
                            <label for="logradouro">Logradouro</label>
                            <input type="text" name="logradouro" class="form-control" id="logradouro" placeholder="Informe o logradouro" required>
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Informe o bairro" required>
                        </div>
                        <div class="form-group">
                            <label for="numero">Número do endereço</label>
                            <input type="number" name="numero" class="form-control" id="numero" placeholder="Informe o número do endereço" required>
                        </div>
                        <button type="submit" class="btn btn-danger">Cadastrar</button>
                      </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="assets/js/validar.js"></script>
    </body>
</html>
