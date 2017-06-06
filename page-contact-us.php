<?php get_header(); ?>
<div class="contactBackground">
  <div class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <div class="col-xs-12 col-sm-6 contactInfo">
            <div class="col-xs-6 col-sm-12">
              <h3>ADDRESS</h3>
              <p>
                475 AQUIA TOWNE CENTER DRIVE<BR />
                SUITE #401 STAFFORD, VA 22504
              </p>
            </div>
            <div class="col-xs-6 col-sm-12">
              <h3>PHONE</h3>
              <p>540. 548. 5980</p>
              <h3>FAX</h3>
              <p>540 542 3079</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 contactForm">
            <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
          </div>
        </div>
      </div><!--row -->
    </div><!-- container -->
  </div><!-- contact-us -->
</div><!-- contactBackground -->
<div class="mapContainer">
  <div class="col-xs-12 col-sm-7 mapArea">
    <?php $location = get_field('location', 'option');
        if(!empty($location)): ?>
          <div class="acf-map google-map">
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
          </div>
    <?php endif; ?>
  </div>
  <div class="col-sm-5 locateUs">
    <h2>LOCATE US</h2>
    <p>
      SITUATED IN STATFORD, VIRGINIA<br />
      DAVIS DEFENSE GROUP IS EASILY<br />
      ACCESSIBLE FROM WASHINGTON<br />
      DC AND THE MULTIPLE<br />
      GOVERNMENT AGENCIES AND<br />
      FORTUNE 500 COMPANIES IN THE <br />
      NORTHERN VIRGINIA AREA
    </p>
  </div><!-- locateUs -->
</div><!-- mapContainer -->
<div class="stay-updated">
  <div class="background">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 blogArea">
          <h1>STAY UPDATED</h1>
          <?php

      $latest_post = new WP_Query(array('posts_per_page' => 2, 'post_status' => 'publish'));
      if($latest_post->have_posts()): while($latest_post->have_posts()): $latest_post->the_post(); ?>
        <?php $latest_post_id = get_the_ID(); //skip this id in the blog list below ?>
          <div class="col-xs-2 redBox">
            <h3>
              <?php echo get_the_date('F '); ?><br/>
              <?php echo get_the_date(' j'); ?>
            </h3>
          </div>
          <div class="col-xs-9 col-xs-offset-1 blueBox">
            <h2><?php the_title(); ?></h2>
            <span><p><?php the_field('post_author'); ?></p></span>
            <?php my_excerpt('short'); ?>
          </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <div class="clearfix"></div>
        <a href="#" class="btn-main left-side">OUR BLOG</a>
        <a href="#" class="btn-main right-side">SUBSCRIBE</a>
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- background -->
  <div class="whiteBand-2">
    <h2>FOLLOW US ON SOCIAL MEDIA</h2>
    <div class="row">
      <div class="col-xs-6">
        <div class="twitter"></div>
      </div>
      <div class="col-xs-6">
        <div class="facebook"></div>
      </div>
    </div><!-- row -->
  </div><!-- whiteBand-2 -->
</div><!-- stay-updated -->
<?php get_footer(); ?>
