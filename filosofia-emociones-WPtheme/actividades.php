<?php
/* Template Name: Actividades */
get_header();
?>

     <!-- Contenido -->
    <section id="seminarios">
        <div class="container">
          <div class="row py-5">
            <h4>
                Seminarios
            </h4>
            <hr class="stroke">
          </div>
              <div class="seminarios">
                  <div class="card">
                    <a class="col-12">
                      <img src="<?php echo get_template_directory_uri(); ?>/src/img/actividades/seminarios/Miguel_Zapata_9_de_marzo_2026.JPG" class="img-fluid" alt="...">
                    </a>
                    <div class="card-body p-0">
                      <a class="" href="/" data-bs-toggle="modal" data-bs-target="#ModalSeminarios1">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/ver_mas_modal.svg">
                      </a>
                  </div>
                </div>
                <div class="card">
                    <a class="col-12">
                      <img src="<?php echo get_template_directory_uri(); ?>/src/img/actividades/seminarios/AlaideAffidamento.jpg" class="img-fluid" alt="...">
                    </a>
                </div>
                <div class="card">
                    <a class="col-12">
                      <img src="<?php echo get_template_directory_uri(); ?>/src/img/actividades/seminarios/FernandaConfianza_en_Spinoza.jpg" class="img-fluid" alt="...">
                    </a>
                </div>
                <div class="card">
                    <a class="col-12">
                      <img src="<?php echo get_template_directory_uri(); ?>/src/img/actividades/seminarios/MayteLa confianza_en_politica.jpg" class="img-fluid" alt="...">
                    </a>
                </div>
                <div class="card">
                    <a class="col-12">
                      <img src="<?php echo get_template_directory_uri(); ?>/src/img/actividades/seminarios/SusanaAtmosferaEmocional.jpg" class="img-fluid" alt="...">
                    </a>
                </div>
            </div>
            <div class="row seminarios-arrows py-3 d-flex justify-content-center"></div>
        </div>

        <!-- Modales -->
        <div class="modal fade" id="ModalSeminarios1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered  modal-lg">
            <div class="modal-content bgBlanco rounded-0 semblanza">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                  <div class="card-body p-3">
                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/Oc830-PTUXM?si=eP57Y_hC2DAHQNln" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h5 class="card-title py-3">Seminario Confianza</h5>
                    <p class="card-text">
                      Como parte de nuestro seminario mensual el Dr.Miguel Zapata presenta la conferencia “Confianzas mutuas entre ciencia y sociedad”
                    </p>
                    <h5>Reseña:</h5>
                    <p>
                      En Desconfianzas mutuas entre Ciencia y Sociedad: El Caso de la vacuna AstraZeneca, el Dr. Miguel Zapata analiza las reacciones de desconfianza frente a la vacuna AstraZeneca para examinar las actitudes y narrativas que impactan en la comunicación de la ciencia y en las relaciones de confianza entre la sociedad y las comunidades científica. Su argumento parte de que la desconfianza es mutua, lo que no ha sido suficientemente estudiado por la sociología de la ciencia. La pregunta importante es ¿Por qué las comunidades científicas desconfían del público? y ¿Cómo puede la sociedad confiar en una comunicación científica que se hace desde allí? En el caso de la vacuna, la motivación de la desconfianza puede apreciarse en claros fallos de comunicación, que no toman en cuenta factores como sesgos cognitivos, incertidumbres y contradicciones dentro de la misma comunidad científica, así como el contexto social, cargado política y valorativamente, en el que tiene lugar toda producción científica. Sin embargo, se ha preferido interpretar la desconfianza social en términos de ignorancia e irracionalidad, lo cual, afirma Zapata, es una mala estrategia, que erosiona más las relaciones de confianza e, incluso, incurre en injusticias epistémicas.
                    </p>
                </div>
            </div>
          </div>
        </div>
    </section>
    <section id="conversatorios" class="bgCafe">
      <div class="container">
        <div class="row py-5">
          <h4>
            Conversatorios y talleres
          </h4>
          <hr class="stroke">
        </div>
        <div class="conversatorios">
          <div class="card">
              <a class="col-12">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/actividades/seminarios/La_confianza_cartel.jpg" class="img-fluid" alt="...">
              </a>
          </div>
          <div class="card">
              <a class="col-12">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/actividades/seminarios/La_confianza_programa.jpg" class="img-fluid" alt="...">
              </a>
          </div>
          <!-- <div class="card">
            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/P9R8Bkzf_XA?si=DITBAm1pyqCnPFGC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s
                content.
              </p>
            </div>
          </div> -->
        </div>
        <div class="row conversatorios-arrows py-3 d-flex justify-content-center"></div>
      </div>
    </section>
        <section id="conferencias">
          <div class="container">
            <div class="row py-5">
              <h4>
                Conferencias
              </h4>
              <hr class="stroke">
            </div>
            <div class="conferencias">
              <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/conferencias/CarlosPeredaIndagaciones.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-lg-6">
                    <div class="card-body">
                      <h5 class="card-title">Reseña</h5>
                      <p class="card-text">En la conferencia inaugural del proyecto “Indagaciones sobre confianza. Controversias, cruces e intersecciones teóricas y prácticas”, el Dr. Carlos Pereda examina la confianza como un fenómeno multidimensional. Su análisis distingue entre la confianza prerreflexiva (básica y personal) y la reflexiva, la cual surge ante su ruptura, derivando en respuestas viciosas o virtuosas. Asimismo, Pereda categoriza la confianza en general,  interpersonal e institucional, subrayando sus particularidades y vínculos transversales. </p>
                      <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                    </div>
                  </div>
                </div>
              </div>
                            <div class="row py-3 d-flex justify-content-center"><button class="slick-prev custom-arrow slick-arrow"
                  style="display: block;"><img src="<?php echo get_template_directory_uri(); ?>/src/img/scroll_carrusel_retroceder.svg"></button><button
                  class="slick-next custom-arrow slick-arrow" style="display: block;"><img
                    src="<?php echo get_template_directory_uri(); ?>/src/img/scroll_carrusel_avanzar.svg"></button></div>
            </div>
          </div>
        </section>
        <section id="catedras" class="bgCafe">
      <div class="container">
        <div class="row py-5">
          <h4>
            Cátedras
          </h4>
          <hr class="stroke">
        </div>
        <div class="catedras">
          <div class="card">
            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/hCIigYmOvR8?si=JqY3cRS3N7K4zHWh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="card-body">
              <h5 class="card-title">Cátedra Interuniversitaria “Indagaciones sobre la confianza”</h5>
              <p class="card-text"><small class="text-body-secondary">3 de Febrero del 2026</small></p>
              <p class="card-text descripcion">
Primera sesión de la Cátedra Interuniversitaria “Indagaciones sobre la confianza”<br>
Bienvenida y presentación del temario y de los integrantes del proyecto
              </p>
            </div>
          </div>
          <div class="card">
            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/3fXw0q1_zrQ?si=4hX0REGnfvhSbIV8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="card-body">
              <h5 class="card-title">Cátedra Interuniversitaria “Indagaciones sobre la confianza”</h5>
              <p class="card-text"><small class="text-body-secondary">10 de Febrero del 2026</small></p>
              <p class="card-text descripcion">
Primera sesión de la Cátedra Interuniversitaria “Indagaciones sobre la confianza”
              </p>
            </div>
          </div>
          <div class="card">
            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/hkXHR6z-h-A?si=m33Z7p4Qdo3WOEeh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="card-body">
              <h5 class="card-title">Cátedra Interuniversitaria “Indagaciones sobre la confianza”</h5>
              <p class="card-text"><small class="text-body-secondary">17 de Febrero del 2026</small></p>
              <p class="card-text descripcion">
Segunda sesión de la Cátedra Interuniversitaria “Indagaciones sobre la confianza”<br>
Módulo 1 Confianza y Filosofía Moral
              </p>
            </div>
          </div>
          <div class="card">
            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/P9R8Bkzf_XA?si=1UHV9Ua6XRR8EBuT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="card-body">
              <h5 class="card-title">Cátedra Interuniversitaria “Indagaciones sobre la confianza”</h5>
              <p class="card-text"><small class="text-body-secondary">24 de Febrero del 2026</small></p>
              <p class="card-text descripcion">
Quinta sesión de la Cátedra Interuniversitaria “Indagaciones sobre la confianza”<br>
Módulo 2. Confianza, feminismos y afectos en el capitalismo tardío
              </p>
            </div>
          </div>
          <div class="card">
            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/OZ_3ZjlRkSA?si=MGhYgzW-rOLaXWzA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="card-body">
              <h5 class="card-title">Cátedra Interuniversitaria “Indagaciones sobre la confianza”</h5>
              <p class="card-text"><small class="text-body-secondary">3 de marzo del 2026</small></p>
              <p class="card-text descripcion">
Cuarta sesión de la Cátedra Interuniversitaria “Indagaciones sobre la confianza”<br>
Módulo 2. Confianza, feminismos y afectos en el capitalismo tardío
              </p>
            </div>
          </div>
          <div class="card">
            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/0bZpsQQvnak?si=rGqc2RJgjraHwP-J" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="card-body">
              <h5 class="card-title">Cátedra Cátedra Interuniversitaria “Indagaciones sobre la confianza”</h5>
              <p class="card-text"><small class="text-body-secondary">10 de marzo del 2026</small></p>
              <p class="card-text descripcion">
Quinta sesión de la Cátedra Interuniversitaria “Indagaciones sobre la confianza”<br>
Módulo 3. Fenomenología de la Confianza

              </p>
            </div>
          </div>
        </div>
        <div class="row catedras-arrows py-3 d-flex justify-content-center"></div>
      </div>
    </section>

<?php get_footer(); ?>