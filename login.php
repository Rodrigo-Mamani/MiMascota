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
                        <a class="d-flex nav-link active" href="#"><i class="icon ion-md-log-in mr-1"></i><div class="items-barra"> Loguin </div></a>
                      </li>
                      <li class="nav-item">
                          <a class="d-flex nav-link" href="register.html"><i class="icon ion-md-checkmark-circle-outline mr-1"></i><div class="items-barra"> Registrate </div></a>
                        </li>
                    <li class="nav-item">
                      <a class="d-flex nav-link" href="home.html"><i class="icon ion-md-home mr-1"></i><div class="items-barra"> Home </div></a>
                    </li>

                  </ul>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="login m-5">
                        <from action="scrip.php" method="post">
                             <fieldset>
                                <legend>Usuario</legend>
                                <input type="tex" name="usuario">
                                <legend>Email</legend>
                                <input type="email" name="correo">
                                <legend>Contraseña</legend>
                                <input type="password" name="contraseña">
                             </fieldset>
                             <input class="recordar" type="radio" name="recordarme">Recordarme<br>
                             <a class="texto-link" href="questions.html">¿Olvidó su contraseña?</a><br>
                             <button type="submit">Iniciar sesión</button><br>
                        </from>
                        <a class="texto-link" href="register.html">¿Aun no estas registrado? Registrate ahora</a>
                        </div>

            </div>
        </div>
    </body>
