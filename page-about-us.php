<?php get_header(); ?>

<div id="fullpage">
<div class="section" id="section0">
  <div class="about">
    <img src="<?php the_field('about_hero_image'); ?>" class="img-responsive" />
    <h1>A SOLID FOUNDATION</h1>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_content(); ?>
          </div>
            <?php endwhile; ?>
            <?php else : ?>
          </div>
          <div class="alert alert-info">
            <strong>No content in this loop</strong>
          </div>
          <?php endif; ?>
        </div>
      </div><!--row -->
    </div><!-- container -->
  </div><!-- about -->
</div><!-- section0 -->
<div class="section" id="section1">
  <div class="team">
    <h1>MEET THE TEAM</h1>
    <div class="container">
      <div class="row row-centered">
        <?php
            if( have_rows('meet_the_team') ):
     	    while ( have_rows('meet_the_team') ) : the_row();?>
          <div class="col-xs-12 col-sm-6 col-centered employeeInfo">
            <img src="<?php the_sub_field('employee_image'); ?>" />
            <?php the_sub_field('employee_name'); ?>
            <?php the_sub_field('employee_title'); ?>
          </div>
          <?php endwhile;
          else :
          endif;
        ?>
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- team -->
</div><!-- section1 -->
<div class="section" id="section2">
  <div class="contactBackground">
    <div class="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 contactTitle">
            <h1>CONTACT US</h1>
          </div>
          <div class="col-xs-12 col-sm-4 contactInfo">
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
          <div class="col-xs-12 col-sm-4 contactForm">
            <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
          </div>
        </div><!--row -->
      </div><!-- container -->
    </div><!-- contact-us -->
  </div><!-- contactBackground -->
  <?php get_footer(); ?>
</div><!-- section2 -->
</div><!--full-page -->
