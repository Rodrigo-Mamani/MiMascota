<!DOCTYPE html>
<?php $nacionalidad=["Nacionalidad","Argentina","Brasil","Canada","Chile","Ecuador","EEUU","España","Mexico","Peru","Venezuela"]; ?>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <link href = "https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css"  rel = "stylesheet" >
        <title>MiMascota! © - Mi perfil</title>
</head>
<body>
        <div class="container-fluid">


                      <nav class="border-bottom border-success d-flex navbar navbar-expand-lg">
                      <a href="home.php"><img class="logo" src="imagenes/logo.jpg" width="81px"></a>
                            <h1>MiMascota!</h1>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          </nav>

        </div>
        <div class="container">
            <div class="barra-navegacion">
                <ul class="nav nav-tabs my-3 my-lg-0">
                    <li class="nav-item">
                      <a class="d-flex nav-link" href="home.php"><i class="icon ion-md-home mr-1"></i><div class="items-barra"> Home </div></a>
                    </li>
                    <li class="nav-item">
                      <a class="d-flex nav-link" href="#"><i class="icon ion-md-notifications mr-1"></i><div class="items-barra"> Notificaciones </div></a>
                    </li>
                    <li class="nav-item">
                      <a class="d-flex nav-link" href="#"><i class="icon ion-md-mail-unread mr-1"></i><div class="items-barra"> Mensajes </div></a>
                    </li>
                    <li class="nav-item">
                      <a class="d-flex nav-link" href="#"><i class="icon ion-md-person-add mr-1"></i><div class="items-barra"> Solicitudes </div></a>
                    </li>
                    <li class="nav-item">
                      <a class="d-flex nav-link" href="questions.php"><i class="icon ion-md-help mr-1"></i><div class="items-barra"> Preguntas frecuentes </div></a>
                    </li>
                    <li class="nav-item">
                      <a class="d-flex nav-link active" href="perfil(PRUEBA).php"><i class="icon ion-md-contact mr-1"></i><div class="items-barra"> Mi perfil </div></a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex nav-link" href="login.php"><i class="icon ion-md-log-out mr-1"></i><div class="items-barra"> Salir </div></a>
                    </li>
                  </ul>
            </div>

  <img src="imagenes/logo.jpg">
  <input type="file"><a href="perfil.php"> <button type="button">Actualizar avatar</button></a>
<div class="row d-flex justify-content-center">
  </html>


      <h5 class="w-100 text-left">Acerca de mí:</h5>
<textarea class="info" placeholder="Escribe algo sobre ti..." name="info"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</textarea><br>
<a href="perfil(PRUEBA).php"><button type="button">Actualizar info</button></a>
</div>

<div>
<label for="edad">Ingresa tu edad:</label><br>
<input type="number" name="edad" value="" placeholder="XX"><br>
</div>

<div>
<br><label for="Género">Selecciona tu sexo:</label><br>
    <input type="radio" name="Género" value="M">Masculino<br>
    <input type="radio" name="Género" value="F">Femenino<br>
    <input type="radio" name="Género" value="O">Otro<br>
</div>

<div>
<a href="perfil(PRUEBA).php"><button type="button">Actualizar datos</button></a>

</div>
<article class="d-flex justify-content-center my-3">
</div>
<div class="container">
  <h5 class="w-100 text-left">Amigos</h5>
<h2>
  <img src="imagenes/logo.jpg" width="50px">
  <img src="imagenes/logo.jpg" width="50px">
  <img src="imagenes/logo.jpg" width="50px">
  <img src="imagenes/logo.jpg" width="50px">
  <img src="imagenes/logo.jpg" width="50px">
 <a class="texto-link" href="perfil.php">+<?=rand(1,99)?></a></h2>
</article>
<article class="d-flex justify-content-center my-3">
<h5 class="w-100 text-left">Fotos</h5>
</article>
<article class="d-flex justify-content-center my-3">
<h5 class="w-100 text-left">Videos</h5>
</article>
</div>
</body>
</html>
