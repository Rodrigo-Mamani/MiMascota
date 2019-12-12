<?php
$usuario="";
$mail="";
$contrasenia="";
$errores=[];
if($_POST){
  // validacion del usuario //
    if(!$_POST["usuario"]){
      $errores["usuario"]= "El campo no puede estar vacio";
    }
    elseif(strlen($_POST["usuario"])<3 || strlen($_POST["usuario"]) >15){
      $errores["usuario"]="El campo debe tener entre 3 y 15 letras";
    }
    else{
    $usuario=$_POST["usuario"];
    }
  // validacion del email //
    if(!$_POST["correo"]){
        $errores["correo"]="El campo no puede estar vacio";
    }
    elseif(!filter_var($_POST["correo"],FILTER_VALIDATE_EMAIL)){
        $errores["correo"]="Asegurate que éste campo sea un email";
    }
    else{
        $mail=$_POST["correo"];
    }
  //  validacion de contrasenia //
    if(!$_POST["contrasenia"]){
      $errores["contrasenia"]="El campo no puede estar vacio";
    }
    elseif(strlen($_POST["contrasenia"])<4 || strlen($_POST["contrasenia"])>15){
      $errores["contrasenia"]="El campo debe tener entre 4 y 15 caracteres";
    }
    else{
      $contrasenia=$_POST["contrasenia"];
    }
    if(count($errores)==0){
      header('location:home.html');
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
                        <a href="home.html"><img class="logo" src="imagenes/logo.jpg" width="81px"></a>
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
                      <a class="d-flex nav-link" href="home.php"><i class="icon ion-md-home mr-1"></i><div class="items-barra"> Home </div></a>
                    </li>

                  </ul>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="login m-5">
                        <form action='' method='post'>
                             <fieldset>
                                <legend>Usuario</legend>
                                <input type='text' name='usuario' value=<?=$usuario?>>
                                <span id='register_text_errorloc' class='error'><?=isset($errores["usuario"])?$errores["usuario"]:""?></span>
                                <legend>Email</legend>
                                <input type='email' name='correo' value=<?=$mail?>>
                                <span id='register_email_errorloc' class='error'><?=isset($errores["correo"])?$errores["correo"]:""?></span>
                                <legend>Contraseña</legend>
                                <input type='password' name='contrasenia'>
                                <span id='register_password_errorloc' class='error'><?=isset($errores["contrasenia"])?$errores["contrasenia"]:""?></span>
                             </fieldset>
                             <input class='recordar' type='radio' name='recordarme'>Recordarme<br>
                             <a class='texto-link' href='questions.html'>¿Olvidó su contraseña?</a><br>
                             <button type='submit'>Iniciar sesión</button><br>
                        </form>
                        <a class='texto-link' href='register.php'>¿Aun no estas registrado? Registrate ahora</a>
                        </div>

            </div>
        </div>
    </body>
