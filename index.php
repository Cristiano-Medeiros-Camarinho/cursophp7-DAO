<?php 

require_once ("config.php");

/*$sql = new Sql();
$produtos = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($produtos);*/

//Carrega um usuario pelo id
/*$root = new Usuario();
$root->loadById(3);
echo $root;
*/

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de ususarios buscando pelo login
//$search = Usuario::search("ro");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "123");
//echo $usuario;

//Inserindo um novo usuario
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

//Fazendo um update na tabela no banco
$usuario = new Usuario();

$usuario->loadById(13);

$usuario->update("professor", "cafe");

echo $usuario;


 ?>