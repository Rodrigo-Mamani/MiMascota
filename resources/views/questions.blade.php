@extends('layouts.app')

@section('content')
<div class="row d-flex justify-content-center mt-5">
              <div class="col-7 my-5" style="background-color:white">
                    <h6 style="text-align: center"><a class="link" href="{{ route('home') }}">Volver al inicio</a></h6>
                  <div class="pregunta" id="preguntas">Preguntas frecuentes:</div><br>

                  <h4 class="pregunta">¿Qué es "Mi mascota"?<br></h4>
                  <p class="respuesta" class="respuesta">R: Es una red social multifuncional dirigida y desarrollada para las personas que quieren dar a conocer a sus mascotas o que simplemente busquen a alguien que comparta su interés por los animales.<br></p>

                  <h4 class="pregunta">¿Para qué sirve?<br></h4>
                  <p class="respuesta">R: Mi mascota funciona como cualquier red social, divertite subiendo fotos y videos de tu mascota, ganar seguidores, y conocer a las mascotas de los demás!<br></p>

                  <h4 class="pregunta">¿Cómo creo una cuenta en Mi mascota?<br></h4>
                  <p class="respuesta">R: Podés ser parte de nuestra comunidad haciendo click en Registrarme y llenando el formulario.<br></p>

                  <h4 class="pregunta">¿Cómo recupero mi contraseña?<br></h4>
                  <p class="respuesta">R: Si no podés ingresar tu contraseña porque la olvidaste o por cualquier otra razón, no te preocupes! Podes cambiarla ingresando <a class="texto-link" href="#">en este link!</a><br></p>

                  <h4 class="pregunta">¿Cómo elimino mi cuenta de Mi mascota?<br></h4>
                  <p class="respuesta">R: Si Mi mascota no es lo que esperabas, o no querías crear esta cuenta, solo tenés que ir a Configuración > Desactivar mi cuenta, e ingresar tu contraseña. Si te arrepentís y querés volver, vamos a guardar tus datos durante 60 días después de haberla desactivado. <br></p>

                  <h4 class="pregunta">¿Se me cobrará por usar Mi mascota?<br></h4>
                  <p class="respuesta">R: No, Mi mascota es una red social gratuita y no hay necesidad de realizar compras dentro de la comunidad para una mejor experiencia.

                  <h4 class="pregunta">¿Cómo dejo de recibir noticaciones?<br></h4>
                  <p class="respuesta">R: Ingresando a Configuracion > Notificaciones > Desactivar notificaciones </p>

                  <h4 class="pregunta">¿Quién puede ver mi perfil de Mi mascota?<br></h4>
                  <p class="respuesta">R: En Configuración > Privacidad tenés la opción de tener tu cuenta pública o privada. Tené en cuenta que solo se ocultará el contenido pero tu nombre y foto de perfil seguirán visibles. </p>

                  <h4 class="pregunta">Querés hacer una pregunta o informar de un error?:</h4><br>

                  <textarea placeholder="Dejá tu mensaje acá..." name="comentarios" width="inherit"></textarea><br>
                  <button type="submit">Enviar informe</button>
              </div>
  @endsection

