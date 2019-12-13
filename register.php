<?php

include_once("funciones.php");

    if($_POST) {
        // 1 - Validar
        $errores = validate($_POST);
        // 2 - Crear Usuario
        if(count($errores) == 0) {
            $usuario = createUser($_POST);
        // 3 - Validacion del avatar
            $erroresAvatar = saveAvatar($usuario);
        // 4 - Merge de errores (uno los arrays de errores)
            $errores = array_merge($errores, $erroresAvatar);
        // 5 - vuelvo a validar $errores
            if(count($errores) == 0) {
              
        // 6 - Guardo usuario y lo mando a loguearse
                saveUser($usuario);
                header('Location: login.php');
                exit;
            }
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
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
                    <legend class="titulo-form">Registrate!</legend>
                                <div class="form-row justify-content-center align-self-center mt-5 ml-5 mr-5">


                                            
                                          
                                
                                             
                                            <div class="form-group col-md-8">
                                                  <label style="font-weight: 700;" >Nombre de Usuario</label>
                                                  <input name="username"  class="form-control" placeholder="Nombre de usuario">
                                                  <span id='register_username_errorloc' style="color: red"><?=isset($errores["username"])?$errores["username"]:""?></span>
                                            </div>

                                            <div class="form-group col-md-8">
                                                  <label style="font-weight: 700;" for="inputEmail4">Email</label>
                                                  <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Usuario@gmail.com">
                                                  <span id='register_email_errorloc' style="color: red"><?=isset($errores["email"])?$errores["email"]:""?></span>
                                            </div>
                                            <div class="form-group col-md-8">
                                                  <label style="font-weight: 700;" for="avatar">Cargar foto de perfil</label><br>
                                                  <input type="file" name="avatar">
                                                  <span id='register_avatar_errorloc' style="color: red"><?=isset($errores["avatar"])?$errores["avatar"]:""?></span>
                                                      
                                            </div>
                                            <div class="form-group col-md-8">
                                                  <label style="font-weight: 700;" for="inputPassword4">Contraseña</label>
                                                  <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Escribe algo que recuerdes">
                                                  <span id='register_password_errorloc' style="color: red"><?=isset($errores["password"])?$errores["password"]:""?></span>
                                            </div>
                                            <div class="form-group col-md-8">
                                                  <label style="font-weight: 700;" for="inputPassword4">Confirmar contraseña</label>
                                                  <input type="password" name="confirmarPassword" class="form-control" id="inputPassword4" placeholder="Repite la contraseña">
                                                  <span id='register_password_errorloc' style="color: red"><?=isset($errores["confirmarPassword"])?$errores["confirmarPassword"]:""?></span>

                                            </div>
                                            <div class="form-group col-md-8">
                                                  <label for="confirm">Acepto los términos y condiciones</label>
                                                  <input type="checkbox" name="confirm"><br>
                                                  <span style="color: red"><?=isset($errores["confirm"]) ? $errores["confirm"] : "" ?></span>
                                                  
                                                  
                                            </div>
                                            <div class="form-group col-md-8">
                                                    
                                                      <div class="row justify-content-center mt-5">
                                                            <button href="home.php" name="submit" type="submit" class="col-8 btn btn-dark" style="margin-bottom: 50px;">Registrarse</button>
                                                      </div>
                                                </div>
                                                
                                                
                                </div>

                              
              </form>
              <a class="texto-link" href="login.php">¿Ya tienes una cuenta? Haz click aquí</a>
            </div>
        </div>
    </body>
