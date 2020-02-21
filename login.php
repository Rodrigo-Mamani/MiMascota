<?php
require_once("soporte.php");
$email="";
if($_POST){
  
  $errores=[];


  // validacion del email //
    // busco si el email esta registrado //

    $usuario = $db->buscarPorEmail($_POST['email']);
      if($usuario !== null){
      // si es distinto de null, significa que esta registrado //
          $email = $_POST['email'];
          // verifico si la contraseña ingresada coincide con la de usuario //
          if(password_verify($_POST['password'], $usuario['password']) == true){
              // si la contrasenia es correcta, inicio sesion //
              if($_POST['recordarme'] != NULL){
                $auth->login($usuario, true); //true
              }else{
                $auth->login($usuario);
                //si no son correctos, muestro los errores //
                }
              }else {
                $errores['password'] = "La contraseña es incorrecta";
              }
      }else {
        $errores['email'] = "El email no esta registrado";
      }
  //  validacion de contrasenia vacia//
    if(!$_POST["password"]){
      $errores["password"]="El campo no puede estar vacio";
    }
    if(empty($_POST["email"])){
      $errores["email"]="El campo no puede estar vacio";
  }

    if(count($errores) == 0){
      header('location:home.php');
      // derivo al home y corto la ejecucion del codigo //
      exit;
    }
}






 ?>




<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <link href = "https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css"  rel = "stylesheet" >
        <title>MiMascota! © - La red social de nuestras mascotas.</title>
</head>
<body>
        <div class="container-fluid">


                      <nav class="border-bottom border-success d-flex navbar navbar-expand-lg">
                        <a href="home.php"><img class="logo" src="imagenes/logo.jpg" width="81px"></a>
                            <h1 class="tilogin">MiMascota!</h1>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          </nav>

        </div>
        <div class="container">
            <div class="barra-navegacion">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="d-flex nav-link active" href="login.php"><i class="icon ion-md-log-in mr-1"></i><div class="items-barra"> Loguin </div></a>
                      </li>
                      <li class="nav-item">
                          <a class="d-flex nav-link" href="register.php"><i class="icon ion-md-checkmark-circle-outline mr-1"></i><div class="items-barra"> Registrate </div></a>
                        </li>
                    <li class="nav-item">
                      <a class="d-flex nav-link disabled" href="home.php"><i class="icon ion-md-home mr-1"></i><div class="items-barra"> Home </div></a>
                    </li>

                  </ul>
            </div>
            

            <div class="row d-flex justify-content-center">
                <div class="login m-5">
                        <form action='' method='post'>
                             <fieldset>

                                <legend>Email</legend>
                                <input type='email' name='email' value="<?=$email?>">
                                <span id='register_email_errorloc' style="color:red"><?=isset($errores["email"])?$errores["email"]:""?></span>
                                <legend>Contraseña</legend>
                                <input type='password' name='password'>
                                <span id='register_password_errorloc' style="color:red"><?=isset($errores["password"])?$errores["password"]:""?></span>
                             </fieldset>
                             <input class='recordar' type='radio' name='recordarme'>Recordarme<br>
                             <a class='texto-link' href='questions.php'>¿Olvidó su contraseña?</a><br>
                             <button type='submit'>Iniciar sesión</button><br>
                        </form>
                        <a class='texto-link' href='register.php'>¿Aun no estas registrado? Registrate ahora</a>
                        </div>

            </div>
        </div>
    </body>
