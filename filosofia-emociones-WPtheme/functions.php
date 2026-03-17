<?php

function filosofia_assets(){

/* =========================
   CARGAR CSS
========================= */

wp_enqueue_style(
'bootstrap-css',
'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
array(),
'5.3.8'
);

wp_enqueue_style(
'slick-css',
get_template_directory_uri().'/src/css/slick.css',
array(),
'1.0'
);

wp_enqueue_style(
'slick-theme-css',
get_template_directory_uri().'/src/css/slick-theme.css',
array(),
'1.0'
);

wp_enqueue_style(
'filosofia-style',
get_template_directory_uri().'/src/css/style_FilEm.css',
array(),
'1.0'
);



/* =========================
   CARGAR JAVASCRIPT
========================= */

/* jQuery (WordPress ya lo incluye) */
wp_enqueue_script('jquery');


/* Bootstrap */
wp_enqueue_script(
'bootstrap-js',
'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
array('jquery'),
'5.3.8',
true
);


/* Slick slider */
wp_enqueue_script(
'slick-js',
get_template_directory_uri().'/src/js/slick.min.js',
array('jquery'),
'1.8',
true
);


/* Script principal del sitio */
wp_enqueue_script(
'filosofia-scripts',
get_template_directory_uri().'/src/js/scripts.js',
array('jquery','slick-js'),
'1.0',
true
);

wp_localize_script(
    'filosofia-scripts', // el handle de tu JS
    'themeData',
    array(
        'themeUrl' => get_template_directory_uri()
    )
);
}

/* Ejecutar carga de scripts */
add_action('wp_enqueue_scripts','filosofia_assets');

?>