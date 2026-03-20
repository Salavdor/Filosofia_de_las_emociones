<!-- back to top -->
<button id="btnTop">
  <img src="<?php echo get_template_directory_uri(); ?>/src/img/back_to_top.svg">
</button>
<!-- footer -->
<footer>

<section class="bgGris">
  <div class="container py-3">
    <div class="col-12 d-flex justify-content-end">
      <a href="<?php echo home_url(); ?>" class="text-decoration-none">
        <img class="logo-footer" src="<?php echo get_template_directory_uri(); ?>/src/img/logo_header.png">
      </a>
    </div>
  </div>
</section>

      <section class="footer-container">
        <div class="container d-flex flex-wrap justify-content-between align-items-center py-3">
            <ul class="nav col-md-4 justify-content-start list-unstyled d-flex">
            <li class="me-3">
              <a class="text-body-secondary" href="https://www.facebook.com/profile.php?id=61588512137103" target="_blank" aria-label="Facebook">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/FB.svg">
              </a>
            </li>
            <li class="me-3">
              <a class="text-body-secondary" href="https://www.youtube.com/channel/UCD1Sn1IfLL-Y46AS5F3nUaA" target="_blank" aria-label="Youtube">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/YT.svg">
              </a>
            </li>
            <li class="me-3">
              <a class="text-body-secondary" href="https://www.instagram.com/" target="_blank" aria-label="Instagram">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/IG.svg">
              </a>
            </li>
          </ul>
          <div class="col-md-4 d-flex justify-content-end">
                
          </div>
        </div>
      </section>

</footer>

<?php wp_footer(); ?>

</body>
</html>