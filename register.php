<?php
if ($_POST){

  if (!$_POST["nombre"]) {
    $errores["nombre"]="El campo no puede ser vacio";
  } elseif (strlen($_POST["nombre"])<3|| strlen($_POST["nombre"])>14) {
    $errores["nombre"]="Debe tener entre 3 y 14 caracteres";
  } else {
    $nombre=$_POST["nombre"];
  }


  if (!$_POST["apellido"]) {
    $errores["apellido"]="El campo no puede ser vacio";
  } elseif (strlen($_POST["apellido"])<3|| strlen($_POST["apellido"])>14) {
    $errores["apellido"]="Debe tener entre 3 y 14 caracteres";
  } else {
    $apellido=$_POST["apellido"];
  }


  if (!$_POST["email"]) {
    $errores["email"]="El campo no puede ser vacio";
  } elseif (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
    $errores["email"]="El email no tiene el formato correcto";
  } else {
    $email=$_POST["email"];
  }

  if (!$_POST["password"]) {
    $errores["password"]="El campo no puede ser vacio";
  } elseif (strlen($_POST["password"])<8|| strlen($_POST["password"])>16) {
    $errores["password"]="La contraseña debe tener entre 8 y 16 caracteres";
  } elseif ($_POST["password"]!=$_POST["confirmarPassword"]){
    $errores["password"]="Las contraseñas no coinciden";
  }

  if (count($errores)==0) {
    header("location:home.php");exit;
  }

}




 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>MiMascota! © - Registrarse</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-with, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <link href = "https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css"  rel = "stylesheet" >


    </head>
    <body>
        <div class="container-fluid">


                      <nav class="border-bottom border-success d-flex navbar navbar-expand-lg">
                            <h1>MiMascota!</h1>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          </nav>

        </div>
        <div class="container">
            <div class="barra-navegacion">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="#"><i class="icon ion-md-checkmark-circle-outline"></i><div class="items-barra"> Registrate </div></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="icon ion-md-arrow-back"></i><div class="items-barra mr-1"> Atrás </div></a>
                      </li>
                  </ul>
            </div>

            <div class="row d-flex justify-content-center">
                <form action="register.php" method="post" enctype="multipart/form-data">
                    <legend class="titulo-form">Registrate!</legend>
                                <div class="form-row justify-content-center align-self-center mt-5 ml-5 mr-5">

                                            <div class="form-row">
                                                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                      <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                                                      <span id='register_name_errorloc' class='error'><?=isset($errores["nombre"])?$errores["nombre"]:""?></span>
                                                  </div>
                                                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                    <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                                                    <span id='register_name_errorloc' class='error'><?=isset($errores["apellido"])?$errores["apellido"]:""?></span>
                                                  </div>
                                            </div>

                                            <div class="form-group col-md-8">
                                                  <label style="font-weight: 700;" for="inputEmail4">Email</label>
                                                  <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Usuario@gmail.com">
                                                  <span id='register_name_errorloc' class='error'><?=isset($errores["email"])?$errores["email"]:""?></span>
                                            </div>
                                            <div class="form-group col-md-8">
                                                  <label style="font-weight: 700;" for="inputPassword4">Contraseña</label>
                                                  <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Escribe algo que recuerdes">
                                                  <span id='register_password_errorloc' class='error'><?=isset($errores["password"])?$errores["password"]:""?></span>
                                            </div>
                                            <div class="form-group col-md-8">
                                                  <label style="font-weight: 700;" for="inputPassword4">Confirmar contraseña</label>
                                                  <input type="password" name="confirmarPassword" class="form-control" id="inputPassword4" placeholder="Repite la contraseña">
                                                  <span id='register_password_errorloc' class='error'><?=isset($errores["confirmarPassword"])?$errores["confirmarPassword"]:""?></span>

                                            </div>
                                </div>

                              <div class="row justify-content-center">
                                      <div class="col-8">
                                          <div class="row">
                                                  <div class="form-group">

                                                            <input type="checkbox" name="confirm" id="gridCheck">
                                                            <label for="confirm">
                                                              Acepto los términos y condiciones
                                                            </label>

                                                        </div>
                                          </div>
                                      </div>
                                            <button href="home.php" type="submit" class="col-8 btn btn-dark" style="margin-bottom: 50px;">Registrarse</button>
                              </div>

              </form>
              <a class="texto-link" href="login.html">¿Ya tienes una cuenta? Haz click aquí</a>
            </div>
        </div>
    </body>
