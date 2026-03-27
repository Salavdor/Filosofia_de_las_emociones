<?php
/* Template Name: Contacto */
get_header();
?>

<!-- Contenido -->
    <section>
        <div class="container">
            <div class="row contenido py-5">
                <h4>
                    Comunicate con nosotros y visita nuestras redes
                </h4>
                <hr class="stroke">
            </div>
            <div class="row contenido pb-5 contacto">
        <?php
        if (isset($_POST['enviar'])) {

            // 🕳️ Honeypot
            if (!empty($_POST['website'])) return;

            // 🔐 Nonce
            if (!isset($_POST['contacto_nonce']) ||
                !wp_verify_nonce($_POST['contacto_nonce'], 'contacto_form')) {
                echo '<div class="alert alert-danger">Error de seguridad</div>';
                return;
            }

            // Sanitizar
            $nombre = sanitize_text_field($_POST['nombre']);
            $email = sanitize_email($_POST['email']);
            $mensaje = sanitize_textarea_field($_POST['mensaje']);

            // ✅ Validar email
            if (!is_email($email)) {
                echo '<div class="alert alert-danger">Correo inválido</div>';
                return;
            }

            // 📧 DESTINO (TU CORREO)
            $to = 'catedraconfianza@gmail.com';

            $subject = "Nuevo mensaje desde el sitio Filosofía de las emociones";

            $body = "Nombre: $nombre \n";
            $body .= "Email: $email \n\n";
            $body .= "Mensaje:\n$mensaje";

            // 📨 HEADERS (IMPORTANTE)
            $headers = array(
                'Content-Type: text/plain; charset=UTF-8',
                'From: '.$nombre.' <'.$email.'>',
                'Reply-To: '.$email
            );

            // 🚀 Enviar correo
            if (wp_mail($to, $subject, $body, $headers)) {
                echo '<div class="alert alert-success">Mensaje enviado correctamente</div>';
            } else {
                echo '<div class="alert alert-danger">Error al enviar</div>';
            }
        }
        ?>

            <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">

                <div class="mb-3">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Correo electrónico</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Mensaje</label>
                    <textarea name="mensaje" class="form-control" style="height: 200px" required></textarea>
                </div>

                <!-- 🕳️ Honeypot -->
                <input type="text" name="website" style="display:none;" tabindex="-1" autocomplete="off">

                <!-- 🔐 Nonce -->
                <?php wp_nonce_field('contacto_form', 'contacto_nonce'); ?>

                <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>

            </form>
                <div class="col-12 pt-5">
                    <ul class="nav col-md-4 justify-content-start list-unstyled d-flex">
                        <li class="me-3">
                            <a class="text-body-secondary" href="https://www.facebook.com/profile.php?id=61588512137103" aria-label="Facebook">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/FB.svg">
                            </a>
                        </li>
                        <li class="me-3">
                            <a class="text-body-secondary" href="https://www.youtube.com/channel/UCD1Sn1IfLL-Y46AS5F3nUaA" aria-label="Youtube">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/YT.svg">
                            </a>
                        </li>
                        <li class="me-3">
                            <a class="text-body-secondary" href="https://www.instagram.com/redfilosofiasemociones" aria-label="Instagram">
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/IG.svg">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>