<!DOCTYPE html>
<html>
    <head>
        <title>MiMascota! © - Inicio</title>
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
                            <h1 class="tihome">MiMascota!</h1>

                            <form class="d-flex ml-auto form-inline my-2 my-lg-0">
                              <input class="form-control mr-sm-2" type="search" placeholder="buscar" aria-label="search">
                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                                      <i class="icon ion-md-search"></i>
                              </button>
                            </form>
                          </nav>

        </div>
        <div class="container">

              <div class="barra-navegacion">
                  <ul class="nav nav-tabs my-3 my-lg-0">
                      <li class="nav-item">
                        <a class="d-flex nav-link active" href="home.php"><i class="icon ion-md-home mr-1"></i><div class="items-barra"> Home </div></a>
                      </li>
                      <li class="nav-item">
                        <a class="d-flex nav-link" href="#"><i class="icon ion-md-notifications mr-1"></i><div class="items-barra"> Notificaciones </div></a>
                      </li>
                      <li class="nav-item">
                        <a class="d-flex nav-link" href="#"><i class="icon ion-md-mail-unread mr-1"></i><div class="items-barra"> Mensajes </div></a>
                      </li>
                      <li class="nav-item">
                        <a class="d-flex nav-link" href="#"><i class="icon ion-md-person mr-1"></i><div class="items-barra"> Solicitudes </div></a>
                      </li>
                      <li class="nav-item">
                        <a class="d-flex nav-link" href="questions.php"><i class="icon ion-md-help mr-1"></i><div class="items-barra"> Preguntas frecuentes </div></a>
                      </li>
                      <li class="nav-item">
                          <a class="d-flex nav-link" href="#"><i class="icon ion-md-settings mr-1"></i><div class="items-barra"> Configuraciones </div></a>
                        </li>
                        <li class="nav-item">
                          <a class="d-flex nav-link" href="login.php"><i class="icon ion-md-log-out mr-1"></i><div class="items-barra"> Salir </div></a>
                        </li>
                    </ul>
              </div>




            <div class="row d-flex justify-content-center">


                    <section class="seccion-1 col-12 col-md-6 col-lg-6">

                                  <div class="my-3">
                                              <article class="articulo-2 justify-content-center mb-3">
                                                <div class="row justify-content-center">
                                                    <input class="col-10 form-control" type="text" placeholder="Escribe algo interesante...">
                                                    <div class="col-4 m-2">
                                                        <button type="button" class="btn btn-secondary btn-sm" style="border: solid rgb(138, 2, 2) 1px;">Seleccionar foto/video</button>
                                                    </div>
                                                      <div class="col-5 m-2">
                                                          <button type="submit">Compartir publicación</button>
                                                      </div>

                                                </div>

                                          </article>
                                    </div>
                                    <div class="my-3">
                                              <div class="row justify-content-center">
                                                  <img class="col-12" src="imagenes/perro-2.jpg" alt="">
                                                  <button id="close" type="button" class="close" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>

                                              <div>
                                                <strong><i class="icon ion-md-thumbs-up"></i><?=rand(1,100)?>
                                              <i class="icon ion-md-chatbubbles"></i><?=rand(1,100)?></strong>
                                              <i>(hace <?=rand(1,2)?> hora/s)</i>
                                              </div>

                                              <div class="d-flex justify-content-center">
                                                  <div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta quia ipsa cupiditate, maiores, cum accusantium perspiciatis praesentium quas quis quaerat at deserunt aut hic optio. Dolorum explicabo molestias facilis suscipit?</div>

                                              </div>
                                            </div>
                                            <div class="my-3">
                                              <div class="row justify-content-center">
                                                <img class="col-12" src="imagenes/perro-3.jpg" alt="">
                                                <button id="close" type="button" class="close" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>

                                            <div>
                                              <strong><i class="icon ion-md-thumbs-up"></i><?=rand(1,100)?>
                                            <i class="icon ion-md-chatbubbles"></i><?=rand(1,100)?></strong>
                                              <i>(hace <?=rand(2,3)?> hora/s)</i>
                                            </div>

                                            <div class="d-flex justify-content-center">
                                                <div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta quia ipsa cupiditate, maiores, cum accusantium perspiciatis praesentium quas quis quaerat at deserunt aut hic optio. Dolorum explicabo molestias facilis suscipit?</div>

                                            </div>
                                          </div>
                                          <div class="my-3">


                                            <div class="row justify-content-center">
                                              <img class="col-12" src="imagenes/lagartija.jpg" alt="">
                                              <button id="close" type="button" class="close" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>

                                          <div>
                                            <strong><i class="icon ion-md-thumbs-up"></i><?=rand(1,100)?>
                                          <i class="icon ion-md-chatbubbles"></i><?=rand(1,100)?></strong>
                                          <i>(hace <?=rand(3,4)?> hora/s)</i>
                                          </div>

                                          <div class="d-flex justify-content-center">
                                              <div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta quia ipsa cupiditate, maiores, cum accusantium perspiciatis praesentium quas quis quaerat at deserunt aut hic optio. Dolorum explicabo molestias facilis suscipit?</div>

                                          </div>
                                        </div>
                                        <div class="my-3">


                                          <div class="row justify-content-center">
                                            <img class="col-12" src="imagenes/perro.jpg" alt="">
                                            <button id="close" type="button" class="close" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>

                                        <div>
                                          <strong><i class="icon ion-md-thumbs-up"></i><?=rand(1,100)?>
                                        <i class="icon ion-md-chatbubbles"></i><?=rand(1,100)?></strong>
                                        <i>(hace <?=rand(4,5)?> hora/s)</i>
                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta quia ipsa cupiditate, maiores, cum accusantium perspiciatis praesentium quas quis quaerat at deserunt aut hic optio. Dolorum explicabo molestias facilis suscipit?</div>

                                        </div>
                                  </div>
                                  <button class="col-12">Ver más publicaciones</button>




                        </section>


                        <section class="seccion-2 col-12 col-md-3 col-lg-3">

                            <article class="d-flex justify-content-center my-3">
                                <h5 class="w-100 text-left">Fotos
                                <div class="row d-flex">
                                  <div class="col-3 bg-dark border border-danger" style="height: 50px;"></div>
                                  <div class="col-3 bg-dark border border-danger" style="height: 50px;"></div>
                                  <div class="col-3 bg-dark border border-danger" style="height: 50px;"></div>
                                  <div class="col-3 bg-dark border border-danger" style="height: 50px;"></div>
                                </div>
                              </h5>
                           </article>
                            <article class="d-flex justify-content-center my-3">
                                <h5 class="w-100 text-left">Videos
                                    <div class="row d-flex">
                                        <div class="col-3 bg-dark border border-danger" style="height: 50px;"></div>
                                        <div class="col-3 bg-dark border border-danger" style="height: 50px;"></div>
                                        <div class="col-3 bg-dark border border-danger" style="height: 50px;"></div>
                                        <div class="col-3 bg-dark border border-danger" style="height: 50px;"></div>
                                      </div>
                                </h5>
                          </article>
                          <article class="d-flex justify-content-center my-3">
                              <h5 class="w-100 text-left">Calendario
                                  <div class="row d-flex">
                                      <img class="col-12 my-1 bg-dark border border-danger" src="imagenes/calendario.jpg" alt="">
                                    </div>
                              </h5>
                          </article>
                              <article class="d-flex justify-content-center my-3">
                                  <h5 class="w-100 text-left">Cuidadores y adiestradores</h5>
                          </article>
                          <article class="d-flex justify-content-center my-3">
                              <h5 class="w-100 text-left">Hospitales y veterinarias</h5>
                      </article>
                      <article class="d-flex justify-content-center my-3">
                         <h5 class="w-100 text-left">Tiendas</h5>
                      </article>
                      <article class="d-flex justify-content-center my-3">
                          <h5 class="w-100 text-left">Peluquerías caninas</h5>
                      </article>
                      <article class="d-flex justify-content-center my-3">
                         <h5 class="w-100 text-left">Cobertura médica</h5>
                      </article>

                      </section>




            </div>
        </div>

    </body>
