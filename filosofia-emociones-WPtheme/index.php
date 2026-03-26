<?php
/* Template Name: Home */
get_header();
?>

  <!-- Banner -->
   <section class="bgBlack">
     <div class="container">
       <div id="Banner" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
             <div class="row">
               <img class="img-fluid d-none d-lg-block" src="<?php echo get_template_directory_uri(); ?>/src/img/Banner/escritorio/banner1.jpg">
               <img class="img-fluid d-lg-none" src="<?php echo get_template_directory_uri(); ?>/src/img/Banner/responsivo/banner1r.jpg">
             </div>
           </div>
           <div class="carousel-item">
             <div class="row">
               <img class="img-fluid d-none d-lg-block" src="<?php echo get_template_directory_uri(); ?>/src/img/Banner/escritorio/banner2.jpg">
               <img class="img-fluid d-lg-none" src="<?php echo get_template_directory_uri(); ?>/src/img/Banner/responsivo/banner2r.jpg">
             </div>
           </div>
           <div class="carousel-item">
             <div class="row">
               <img class="img-fluid d-none d-lg-block" src="<?php echo get_template_directory_uri(); ?>/src/img/Banner/escritorio/banner5.jpg">
               <img class="img-fluid d-lg-none" src="<?php echo get_template_directory_uri(); ?>/src/img/Banner/responsivo/banner5r.jpg">
             </div>
           </div>
           <div class="carousel-item">
             <div class="row">
               <img class="img-fluid d-none d-lg-block" src="<?php echo get_template_directory_uri(); ?>/src/img/Banner/escritorio/banner4.jpg">
               <img class="img-fluid d-lg-none" src="<?php echo get_template_directory_uri(); ?>/src/img/Banner/responsivo/banner4r.jpg">
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>

   <!-- Contenido -->
    <section>
      <div class="container py-5">
        <div class="row contenido">
          <p>
            La <strong>Red de Filosofías de las emociones</strong> se conformó en noviembre del año 2023. La integramos
            un pequeño grupo de académicas y académicos de diferentes instituciones de la República. Cada una de las
            personas que integramos esta red participamos en calidad de iguales y las decisiones relativas a nuestra
            organización y a nuestras actividades las tomamos y tomaremos de manera colegiada y democrática.
            El propósito de la RIFE es complejo y se compone de la planeación y ejecución de proyectos dirigidos a la
            investigación, la difusión y la divulgación de las filosofías de las emociones. Este concepto lo entendemos
            de manera amplia, de acuerdo con el conocimiento, intereses y formación particulares de cada persona
            integrante de la red.
            <br>
            <br>
            El fenómeno de las emociones ha sido un importante objeto de reflexión para disciplinas tales como la
            sociología, la psicología o la filosofía política, pero llama la atención la poca o muy parcial atención que
            ha recibido desde otras perspectivas. Aún más lamentable es la carencia de estudios multidisciplinarios que
            examinen las relaciones conceptuales, normativas y prácticas que hay entre diversos tipos de emociones. El
            propósito de la Red es abordar esta carencia en la investigación y la docencia.
          </p>
          <hr>
          <p>
            El Proyecto <strong>Indagaciones sobre la confianza. Controversias, cruces e intersecciones teóricas y prácticas</strong> es
            un proyecto interinstitucional, intergeneracional y multidisciplinario cuyo objetivo consiste en revisar las
            reflexiones sobre el concepto y el fenómeno de la confianza elaboradas desde distintas perspectivas
            filosóficas, especialmente la moral, el feminismo materialista, la bioética y la fenomenología, así como
            desde los enfoques de las ciencias cognitivas y la sociolingüística, con la finalidad de propiciar
            intersecciones que pueden ser inestables e incluso controvertidas.
            Consideramos que precisamente en las controversias entre diversas perspectivas es donde se pueden encontrar
            vetas de desarrollo del concepto para su fortalecimiento y reivindicación, tanto en el ámbito de la vida
            política como de la moral. De manera que buscamos contribuir a la generación de conocimiento y a consolidar
            y expandir las capacidades científico-humanistas de la comunidad académica del país y las habilidades
            interpersonales y sociales de la comunidad, de modo que nos permitan enfrentar la crisis de confianza
            contemporánea en diversos ámbitos interpersonales, políticos y sociales.
          </p>
        </div>
      </div>
    </section>

<?php get_footer(); ?>