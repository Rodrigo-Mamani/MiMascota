<?php
require_once("db.php");
class Validador{
    private $db;

    public function __construct(BaseDatos $db)
    {
        $this->db=$db;
    }

    public function validar($datos){
        
    if(empty($datos["username"])) {
        //empty determina si una variable está vacía.
        $errores['username'] = "Ingresa un nombre de usuario";
    } elseif(strlen($_POST["username"])<4|| strlen($_POST["username"])>15) {
        $errores['username'] = "El usuario debe contener entre 4 y 15 caracteres";
    }
    //elseif($this->db->buscarPorUsername($username)==true){
      //  $errores['username'] = "El nombre de usuario ya está en uso";
    //}

    if(empty($datos['email'])) {
        $errores['email'] = "Ingresa un mail";
    } elseif(!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = "El formato es inválido";
    }
    //elseif($this->db->buscarPorEmail($email)==true){
      //  $errores['email'] = "El email ya está registrado";
    //}

    if(empty($datos['password'])) {
        $errores['password'] = "Ingresa una contraseña";
    } elseif (strlen($datos['password']) < 5) {
        $errores['password'] = "La contraseña debe tener mínimo 6 caracteres";
    } elseif ($datos['password'] != $datos['confirmarPassword']) {
        $errores['password'] = "Las contraseñas no coinciden";
    }

    if(!isset($datos['confirm'])) {
        $errores['confirm'] = "Debe aceptar los terminos y condiciones";
    }
    $errores=[];
    return $errores;
    }


    public function loginController(){
        if(isset($_COOKIE["email"])){
            $_SESSION["email"]=$_COOKIE["email"];
            return true;
        }else{
            return false;
        }
    }


}

?>
