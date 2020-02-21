<?php
require_once("db.php");
class Auth{
    private $db;

    public function __construct(BaseDatos $db)
    {
        $this->db=$db;
    }

    public function login($usuario){
        $_SESSION["email"]=$usuario["email"];
        setcookie("email",$usuario["email"],time()+3600);
    }

    public function logout(){
        session_destroy();
        setcookie("email","",time()-1);
    }


}
?>
