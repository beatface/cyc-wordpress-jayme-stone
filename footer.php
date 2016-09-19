    <?php $footer_class = get_footer_class();?>
    <section id="contact" class="row <?php echo $footer_class ?>">
      <div class="breathing-room">
        <div class="row breathing-room">
          <div class="col-md-10 col-md-offset-1">
            <div class="col-xs-4 col-sm-3">
              <p>MENU</p>
              <?php
               wp_nav_menu( array(
                   'menu'              => 'footer',
                   'container'         => 'ul',
                   'menu_class'        => 'nav footer-ul',
                   'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                   'walker'            => new wp_bootstrap_navwalker())
               );
              ?>
              <p class="footer-p"><a href="#subscribeModal" data-toggle="modal" class="text-purple-primary">Newsletter</a></p>
            </div>
            <div class="col-xs-7 col-sm-3">
              <p>CONTACT</p>
              <p class="footer-p">Jayme Stone</p>
              <p class="footer-p"><a href="mailto:info@composeyourcareer.org?Subject=Compose%20Your%20Career" class="text-purple-primary">info@composeyourcareer.com</a></p>
              <p class="footer-p">composeyourcareer.org</p>
            </div>
            <div class="hidden-xs col-sm-3">
              <p>INFO</p>
              <p class="footer-p">
                Compose Your Career is an online course for
                independent musicians who want to make the music
                they love—and a living at it to.
              </p>
            </div>
            <div id="footer-logo" class="col-xs-9 col-sm-3">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/img/logos/<?php echo ( get_footer_image() );?>.png" alt="Compose Your Career logo">
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/lib/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/lib/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/lib/jquery.easing.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/lib/jquery.fittext.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/lib/wow.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/javascripts/creative.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/javascripts/main.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/javascripts/my-bootstrap-js.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/javascripts/modules.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
