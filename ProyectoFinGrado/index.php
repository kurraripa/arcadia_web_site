<?php
session_start();
?>
<!DOCTYPE html>
<html>

    <?php
    include 'includes/cabecera.php';
    ?>
    <script src="javaScript/slideTexto.js"></script>
    <aside id="slideFotos">
        <div class="container" id="cajaPadre">       
            <div id="slides">
                <ul>
                    <li class="slide">
                        <h3>INVESTIGACIÓN Y ENSAYOS CLÍNICOS</h3>
                        <p>Participar en alguno de nuestros ensayos clínicos puede ofrecerle nuevas posibilidades de tratamiento así como colaborar con el avance de la medicina.</p>
                    </li>
                    <li class="slide">
                        <h3>LA CLÍNICA: COMPROMISO CON EL PACIENTE</h3>
                     <p>Ofrecemos al paciente el mejor trato médico y humano posible.</p>
                    </li>
                    <li class="slide">
                        <h3>LA TECNOLOGÍA MÉDICA MÁS AVANZADA, A TU SERVICIO</h3>
                      <p>Invertimos en material de vanguardia para conseguir tratamientos más precisos, intervenciones menos invasivas, y poner en marcha ensayos clínicos de alto nivel.</p>
                    </li>
                     <li class="slide">
                        <h3>REVISIÓN INTEGRAL Y PERSONALIZADA EN MENOS DE 24 HORAS</h3>
                      <p>Experiencia y alta tecnología en nuestros chequeos médicos para lograr un óptimo estado de salud.</p>
                    </li>
                </ul>
                <div id="circles">
                <div id="circle"></div>
                 <div id="circle"></div>
                  <div id="circle"></div>
                  <div id="circle"></div>
            </div>
            </div>
            
            
        </div>
    </aside>
    <div class="container">            
        <main>
            <div id="lineaSuperior">
                <h3><span>NOVEDADES</span></h3>
            </div>
            <article id="novedades">
                <section class="col-md-6">
                    <figure><img src="imagenes/hospital.jpg"></figure>
                       <h4>Apertura de las nuevas instalaciones.</h4>
                       <p>Recientemente fueron inauguradas las nuevas instalaciones de oncología, las cuales incorporan la última tecnología y procedimientos en el tratamiento del cáncer</p>
                </section>
                <section class="col-md-6">
                    <figure><img src="imagenes/escaner.jpg"></figure>
                    <h4>Arcadia gana el premio nacional de medicina</h4>
                    <p>El pasado fin de semana esta clínica recibió el Premio Nacional de Medicina otorgado por el Ministerio de Sanidad, acreditandonos como una institución pionera en el sistema sanitario nacional.</p>
                </section>
            </article>
        </main>          
    </div>

    <?php
    include "./includes/pie.html";
    ?>

</html>