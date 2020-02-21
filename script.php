<?php
require_once ('clases/db_json.php');
require_once ('clases/db_sql.php');
require_once ('clases/usuario.php');
$dbSQL = new DB_SQL();
$dbJson = new DB_JSON();
$usuarios = $dbJson->traerTodos();
foreach($usuarios as $usuario){
  $usuario=new Usuario($usuario['username'], $usuario['email'], $usuario['password'], $usuario['id']);
  $dbSQL->guardarUsuario($usuario);
};


/*
foreach ($usuariosJson as $usuarioJson) {
  $usuario = new Usuario($usuarioJson["username"],$usuarioJson["email"],$usuarioJson);
  $usuario = $dbSql->guardarUsuario($usuario);
}
*/
 ?>
