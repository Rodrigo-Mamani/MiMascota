<?php
class Usuario{
    private $username;
    private $email;
    private $pass;

    public function __construct($username,$email,$pass,$id = null){
      if ($id == null ) {
        $this->setPass($pass);
      } else {
        $this->pass=$pass;
      }
        $this->username=$username;
        $this->email=$email;
    }
    public function getUsername(){
        return $this->username;
    }
    public function setUsername($username){
        $this->username=$username;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getPass(){
        return $this->pass;
    }
    public function setPass($pass){
        $this->pass=password_hash($pass, PASSWORD_DEFAULT);
    }
    public function setId($id){
        $this->id=$id;
    }

    public function guardarAvatar(){
      $errores =[];
        $email=$this->email;
        if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK)
		    {
    			$nombre=$_FILES["avatar"]["name"];
    			$archivo=$_FILES["avatar"]["tmp_name"];
    			$ext = pathinfo($nombre, PATHINFO_EXTENSION);
    			if ($ext != "jpg" && $ext != "png" && $ext != "jpeg")
          {
    				return "Error";
    			}
          //ruta del archivo
    			$miArchivo = dirname(__FILE__);
    			$miArchivo = $miArchivo . "/../imagenes/";
    			$miArchivo = $miArchivo . "perfil" . $email . "." . $ext;

    			move_uploaded_file($archivo, $miArchivo);
    		} else {
          $errores["avatar"]="Hubo un error al procesar la imagen";
        }
      return $errores;
    }
}
?>
