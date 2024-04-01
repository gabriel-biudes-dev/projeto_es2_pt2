<?php
if($_SERVER["REQUEST_METHOD"] != "POST") return;
$nome = htmlspecialchars($_POST['nome']);
$nascimento = htmlspecialchars($_POST['nascimento']);
$genero = htmlspecialchars($_POST['genero']);
$raca = htmlspecialchars($_POST['raca']);
$especialidade = htmlspecialchars($_POST['especialidade']);
$estado = htmlspecialchars($_POST['estado']);
$municipio = htmlspecialchars($_POST['municipio']);
$logradouro = htmlspecialchars($_POST['logradouro']);
$bairro = htmlspecialchars($_POST['bairro']);
$numero = intval(htmlspecialchars($_POST['numero']));

//Validações
if(empty($nome) || empty($estado) || empty($municipio) || empty($logradouro) || empty($bairro) || empty($numero) || empty($raca) || empty($especialidade) || empty($genero) || empty($nascimento)){
  echo "<script>alert('Há campos não preenchidos');</script>";
  return;
}
if($numero == 0){
  echo "<script>alert('O número do endereço é inválido');</script>";
  return;
}

//Conectando ao banco de dados
$config = parse_ini_file('db.ini');
$link = new mysqli('localhost', $config['username'], $config['password'], $config['db']);

function checkdata($link, $table, $column, $data){
  if(gettype($data) == 'string') $query = "SELECT * FROM " . $table . " WHERE " . $column . " = '" . $data . "'";
  else $query = "SELECT * FROM " . $table . " WHERE " . $column . " = " . $data;
  $result = mysqli_query($link, $query);
  return $result;
}

//Lendo o estado
$ufbd = checkdata($link, 'estado', 'nome', $estado);
if(mysqli_num_rows($ufbd) == 0){
  echo "<script>alert('Estado não cadastrado');</script>";
  return;
}
$ufsigla = mysqli_fetch_row($ufbd)[0];

//Lendo a cidade
$cidadebd = checkdata($link, 'cidade', 'nome', $municipio);
if(mysqli_num_rows($cidadebd) == 0){
  echo "<script>alert('Cidade não cadastrada');</script>";
  return;
}
$cidadetemp = mysqli_fetch_row($cidadebd);
$cidadeid = $cidadetemp[0];
$cidadeuf = $cidadetemp[2];
if($cidadeuf != $ufsigla){
  echo "<script>alert('Erro no estado');</script>";
  return;
}

//Lendo o bairro
$bairrobd = checkdata($link, 'bairro', 'nome', $bairro);
if(mysqli_num_rows($bairrobd) == 1) $bairroid = mysqli_fetch_row($bairrobd)[0];
else{
  $query = "INSERT INTO bairro(nome) VALUES('" . $bairro . "')";
  $link->query($query);
  $bairrobd = checkdata($link, 'bairro', 'nome', $bairro);
  $bairroid = mysqli_fetch_row($bairrobd)[0];
}

//Lendo o logradouro
$logradourobd = checkdata($link, 'logradouro', 'nome', $logradouro);
if(mysqli_num_rows($logradourobd) == 1) $logradouroid = mysqli_fetch_row($logradourobd)[0];
else{
  $query = "INSERT INTO logradouro(nome) VALUES('" . $logradouro . "')";
  $link->query($query);
  $logradourobd = checkdata($link, 'logradouro', 'nome', $logradouro);
  $logradouroid = mysqli_fetch_row($logradourobd)[0];
}

//Separando o nome do sobrenome
$arr = explode(" ", $nome);
if(sizeof($arr) < 2){
  echo "<script>alert('É necessário informar o nome e o sobrenome');</script>";
  return;
}
$pnome = $arr[0];
$sobrenome = "";
for($i = 0; $i < sizeof($arr); $i++){
  if($i > 0) $sobrenome = $sobrenome . " " . $arr[$i];
}
$sobrenome = substr($sobrenome, 1);

//Processando o endereço
$query = "SELECT * FROM endereco WHERE idCidade = " . $cidadeid . " AND idLogradouro = " . $logradouroid . " AND idBairro = " . $bairroid;
$result = mysqli_query($link, $query);
if(mysqli_num_rows($result) > 0) $enderecoid = mysqli_fetch_row($result)[0];
else{
  $query2 = "INSERT INTO endereco(idCidade, idLogradouro, idBairro) VALUES('" . $cidadeid . "', '" . $logradouroid . "', '" . $bairroid . "')";
  $link->query($query2);
  $query3 = "SELECT * FROM endereco WHERE idCidade = " . $cidadeid . " AND idLogradouro = " . $logradouroid . " AND idBairro = " . $bairroid;
  $result2 = mysqli_query($link, $query3);
  $enderecoid = mysqli_fetch_row($result2)[0];
}
//Cadastrando o profissional
$query = "INSERT INTO profissionais(nome, sobrenome, nroCasa, idEndereco, genero, raca, especialidade, nascimento) ";
    $query = $query . "VALUES('" . $pnome . "', '" . $sobrenome . "', " . strval($numero) . ", " . $enderecoid . ", '" . $genero . "', '" . $raca . "', '" . $especialidade . "', '" . $nascimento .  "')";
    $link->query($query);
    echo "<script>alert('Cadastrado com sucesso');</script>";
mysqli_close($link);
?>