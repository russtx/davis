<footer>
  <div class="blueFooter">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col sm-8  footerForm">
          <h2>EMPLOYEE LOGIN</h2>
          <?php echo do_shortcode('[contact-form-7 id="54" title="Employee Login"]'); ?>

        </div>
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- blueFooter -->
  <div class="whiteFooter">
    <div class="container">
      <div class="row">
        <div class="col-xs-2 col-sm-2 footerLogo">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="Footer Logo" /></a>
        </div>
        <div class="col-xs-6 col-sm-8 footerMenu">
            <?php wp_nav_menu(); ?>
        </div>
        <div class="col-xs-4 col-sm-2 footerSocials">
          <a href="<?php the_field('twitter', 'option'); ?>" target="_blank" class="twitter"></a>
          <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="facebook"></a>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- whiteFooter -->
<?php wp_footer(); ?>
</footer>

</div> <!-- close main container -->
</body>
</html>
