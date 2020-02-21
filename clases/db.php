<?php
abstract class BaseDatos
{
  
  abstract function traerTodos();
  abstract function guardarUsuario(Usuario $usuario);
  abstract function buscarPorEmail($email);
  abstract function buscarPorUsername($username);
}
?>