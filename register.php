<?php

$username="";
$email="";
$errores=[];

//validación
if ($_POST){

  if (!$_POST["username"]) {
    $errores["username"]="El campo no puede ser vacio";
  } elseif (strlen($_POST["username"])<3|| strlen($_POST["username"])>14) {
    $errores["username"]="Debe tener entre 3 y 14 caracteres";
  } else {
    $username=$_POST["username"];
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


  if($_FILES){
    if($_FILES["imagen"]["error"] !=0){
      $errores["imagen"]="Error al cargar imagen";
    } else{
      $ext=pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION);
      if($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
        $errores["imagen"]="La imagen debe ser jpg, jpeg o png <br>";
      }
    }
    if($_FILES["imagen"]["error"] ==0){
      move_uploaded_file($_FILES["imagen"]["tmp_name"],"usuarios.json/imagen.$ext");
    }
  }

  

  if (count($errores)==0) {
      $json=file_get_contents("usuarios.json");
      $datosUsuario=json_decode($json,true);
      $datosUsuario=[$username,$email];
      $jsonFinal=json_encode($datosUsuario);
      file_put_contents("usuarios.json",$jsonFinal,FILE_APPEND);
      header("location:login.php");exit;
      
      
      
    
  }


}


//registración







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
                      <a href="home.html"><img class="logo" src="imagenes/logo.jpg" width="81px"></a>
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


                                            
                                          
                                
                                             
                                            <div class="form-group col-md-8">
                                                  <label style="font-weight: 700;" >Nombre de Usuario</label>
                                                  <input name="username" class="form-control" >
                                                  <span id='register_username_errorloc' class='error'><?=isset($errores["username"])?$errores["username"]:""?></span>
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
                                            <div class="form-group col-md-8">
                                            <label style="font-weight: 700;">Cargar foto de perfil</label><br>
                                                  <input type="file" name="imagen">

                                            </div>
                                            <div class="form-group col-md-8">
                                            <input type="checkbox" name="confirm" id="gridCheck">
                                                            <label for="confirm">Acepto los términos y condiciones</label>
                                                            <span id='register_checkbox_errorloc' class='error'><?=isset($errores["confirm"])?$errores["confirm"]:""?></span>
                                                            <div class="row justify-content-center mt-5">
                                                            <button href="home.php" type="submit" class="col-8 btn btn-dark" style="margin-bottom: 50px;">Registrarse</button>
                                                            </div>
                                                </div>
                                                
                                </div>

                              
              </form>
              <a class="texto-link" href="login.php">¿Ya tienes una cuenta? Haz click aquí</a>
            </div>
        </div>
    </body>
