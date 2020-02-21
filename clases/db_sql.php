<?php
require_once("db.php");
class DB_SQL extends BaseDatos{
    private $db;

	public function __construct(){
            $dsn ="mysql:host=localhost; dbname=db_mimascota;charset=utf8mb4;port=3306";
            $user="root";
            $pass="";

            try{
                $this->db = new PDO($dsn,$user,$pass);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo "La conexión a la base de datos fallo:" . $e->getMessage();
            }
        }

    public function traerTodos(){
            $db=$this->db;
            $query=$db->prepare("Select * from 'usuarios'");
            $query->execute();

            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

    public function guardarUsuario(Usuario $usuario){
            $db=$this->db;
		        $query = $db->prepare("INSERT INTO usuarios (id, username, email, password) VALUES (default, :username, :email, :password)");
            $query->bindValue(":username", $usuario->getUsername(),PDO::PARAM_STR);
    		    $query->bindValue(":email",    $usuario->getEmail(),PDO::PARAM_STR);
    		    $query->bindValue(":password", $usuario->getPass(),PDO::PARAM_STR);
            $query->execute();

    		    $id = $db->lastInsertId();
            $usuario->setId($id);

    		    return $usuario;
        }
    public function buscarPorEmail($email){
            $db=$this->db;

            $query = $db->prepare("SELECT * FROM usuarios WHERE email = :email");
            $query->bindValue(":email", $email);

            $query->execute();

            return $query->fetch();
        }

    public function buscarPorUsername($username){
            $db=$this->db;

            $query = $db->prepare("SELECT * FROM usuarios WHERE username = :username");
            $query->bindValue(":username", $username);

            $query->execute();

            return $query->fetch();
        }
}
?>
