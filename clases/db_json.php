<?php

require_once("db.php");
class DB_JSON extends BaseDatos{

    public function traerTodos(){
        $baseJson=file_get_contents("usuarios.json");
        $usuarios=json_decode($baseJson,true);
        return $usuarios;
    }



    public function guardarUsuario(Usuario $usuario){

        $file = file_get_contents("usuarios.json");

        if(empty($file)){
            return 1;
        }

        $users = explode(PHP_EOL, $file);
        // El ultimo dato que genera siempre es un PHP_EOL, asi que lo sacamos con array_pop()
        array_pop($users);

        $lastUser = $users[count($users) - 1];
        $lastUser = json_decode($lastUser, true);

        $usuario->setId($lastUser["id"] + 1);

        $jsonUsuario=json_encode($usuario);
        file_put_contents("usuarios.json",$jsonUsuario . PHP_EOL, FILE_APPEND);
        return $usuario;
        //FILE_APPEND es para que no se sobreescriba el archivo "usuarios.json".
    }

    public function buscarPorEmail($email){
            $arrayUsuarios=$this->traerTodos();
            foreach($arrayUsuarios as $usuario){
            if($usuario["email"]==$email){
                return $usuario;
            }
            return false;
        }
    }

    public function buscarPorUsername($username){
            $arrayUsuarios=$this->traerTodos();
            foreach($arrayUsuarios as $usuario){
            if($usuario["username"]==$username){
                return $usuario;
            }return false;
        }
    }
}
?>
