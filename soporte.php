<?php
require_once("clases/auth.php");
require_once("clases/validador.php");
require_once("clases/db.php");
require_once("clases/db_sql.php");
require_once("clases/db_json.php");

$dbType='mysql';
switch ($dbType) {
  case 'mysql':
    $db=new DB_SQL();
    break;

  case 'json':
    $db=new DB_JSON("usuarios.json");
    break;
}
$auth=new Auth($db);
$validador=new Validador($db);
?>