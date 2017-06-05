<?php get_header(); ?>
  <div class="contracts">
    <div class="container">
      <div class="row">
        <h1>CONTRACTS</h1>
        <div class="col-xs-12 col-sm-6">
          <h2>GENRAL SERVICES ADMINISTRATION SCHEDEULES</h2>
          <?php the_field('general_services_administration_schedules_url'); ?>
          <?php the_field('general_services_administration_schedules'); ?>
          <?php the_field('general_services_administration_schedules_contract_number'); ?>
        </div>
        <div class="col-xs-12 col-sm-6">
          <h2>SEAPORT ENHANCED &#40;SEAPORT-E&#41;</h2>
          <?php the_field('seaport_enhanced_information_url'); ?>
          <?php the_field('seaport_enhanced_information_content'); ?>
          <?php the_field('seaport_enhanced_information'); ?>
        </div>
        <div class="col-xs-12 col-sm-6">
          <h2>CUSTOMER SATISACTION POC</h2>
          <?php the_field('customer_satisfaction_content'); ?>
        </div>
        <div class="col-xs-12 col-sm-6">
          <h2>CONTRACT INFORMATION POC</h2>
          <?php the_field('contract_information_content'); ?>
        </div>
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 awardedTask">
          <h2>AWARDED TASK ORDERS</h2>
            <?php
              if( have_rows('awarded_task_orders') ):
                while ( have_rows('awarded_task_orders') ) : the_row();
                the_sub_field('task_orders');
              endwhile;
              else :
              endif;
            ?>
        </div>
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 awardedTask">
          <h2>DAVIS DEFENSE GROUP AND ITS SEAPORT-E TEAMMATES</h2>
          <?php the_field('seaport-e_teammates_content'); ?>
          <div class="col-xs-12 col-sm-6 left-groups">
            <h3>BAE SYSTEMS</h3>
            <?php the_field('bae_systems_url'); ?>
            <?php the_field('bae_systems_content'); ?>
            <h3>BATTELLE</h3>
            <?php the_field('battele_url'); ?>
            <?php the_field('battelle_content'); ?>
            <h3>CACI</h3>
            <?php the_field('caci_url'); ?>
            <?php the_field('caci_content'); ?>
            <h3>GENERAL DYNAMICS</h3>
            <?php the_field('general_dynamics_url'); ?>
            <?php the_field('general_dynamics_content'); ?>
            <h3>KRATOS DEFENSE &amp; SECURITY</h3>
            <?php the_field('kratos_defense_&_security_url'); ?>
            <?php the_field('kratos_defense_&_security_content'); ?>
            <h3>L-3 SERVICES INC</h3>
            <?php the_field('bae_systems_content'); ?>
            <h3>MCR FEDERAL</h3>
            <?php the_field('bae_systems_content'); ?>
            <h3>ORSA CORPORATION</h3>
            <?php the_field('bae_systems_content'); ?>
            <h3>SURVICE</h3>
            <?php the_field('bae_systems_content'); ?>
            <h3>TEKSYS</h3>
            <?php the_field('bae_systems_content'); ?>
            <h3>THEAT DEFENSE</h3>
            <?php the_field('bae_systems_content'); ?>
          </div>
          <div class="col-xs-12 col-sm-6 right-groups">
            <h3>BOOZ ALLEN HAMILTON</h3>
            <h3>CAMBER</h3>
            <h3>CENGILITY</h3>
            <h3>HODGES TRANPORTATION INC.</h3>
            <h3>KNOWLEDGE CAPITAL ASSOCIATES (KCA)</h3>
            <h3>LOCKEED MARTIN</h3>
            <h3>NEW BREED LOGISTIC</h3>
            <h3>SAYRES AND ASSOCIATES CORPORATION</h3>
            <h3>SHARPSHOOTER TRAINING, LLC</h3>
            <h3>SYSTEMS STUDIES &amp; SIMULATION CORPORATION</h3>
            <h3>TRANSFOMATION SYSTEMS, INC.</h3>
          </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 support-services">
          <h2>SUPPORT SERVICES EXPERIENCE</h2>
        </div>
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 quality-assurance">
          <h2>QUALITY ASSURANCE PROGRAM</h2>
        </div>
      </div><!-- row -->
    </div><!--container -->

  </div><!-- contracts -->
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
