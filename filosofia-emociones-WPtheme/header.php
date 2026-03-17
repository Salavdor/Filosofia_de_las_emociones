<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/src/img/logo_header.png">
    </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link me-3" href="<?php echo home_url('/quienes-somos'); ?>">Quiénes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3" href="<?php echo home_url('/actividades'); ?>">Actividades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3" href="<?php echo home_url('/publicaciones'); ?>">Publicaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3" href="<?php echo home_url('/contacto'); ?>">Contacto</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-3 d-md-none d-lg-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               <span class="navbar-toggler-icon"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg-end">
              <li><a class="dropdown-item" href="<?php echo home_url(); ?>">Inicio</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="<?php echo home_url('/quienes-somos'); ?>">Quiénes somos</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="<?php echo home_url('/actividades'); ?>">Actividades</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item ps-4" href="<?php echo home_url('/actividades'); ?>#seminarios">Seminarios</a></li>
              <li><a class="dropdown-item ps-4" href="<?php echo home_url('/actividades'); ?>#conversatorios">Conversatorios</a></li>
              <li><a class="dropdown-item ps-4" href="<?php echo home_url('/actividades'); ?>#conferencias">Confrerencias</a></li>
              <li><a class="dropdown-item ps-4" href="<?php echo home_url('/actividades'); ?>#catedras">Cátedras</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="<?php echo home_url('/publicaciones'); ?>">Publicaciones</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item ps-4" href="<?php echo home_url('/publicaciones'); ?>#articulos">Artículos</a></li>
              <li><a class="dropdown-item ps-4" href="<?php echo home_url('/publicaciones'); ?>#libros">Libros</a></li>
              <li><a class="dropdown-item ps-4" href="<?php echo home_url('/publicaciones'); ?>#capitulos">Capítulos</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="<?php echo home_url('/contacto'); ?>">Contacto</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li class="d-flex justify-content-end p-2">
                <a class="" href="https://www.facebook.com/profile.php?id=61588512137103" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/src/img/FB.svg"></a>
                <a class="" href="https://www.youtube.com/channel/UCD1Sn1IfLL-Y46AS5F3nUaA" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/src/img/YT.svg"></a>
                <a class="" href="https://www.instagram.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/src/img/IG.svg"></a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
  </div>
</nav>

<section class="breadcrumb-container">
  <div class="container py-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page"> <?php the_title(); ?></li>
      </ol>
    </nav>
  </div>
</section>