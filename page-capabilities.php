<?php get_header(); ?>

<div id="fullpage">
	<div class="section " id="section0">
		<div class="capabilities">
			<h1>CAPABILITIES</h1>
			<div class="container">
				<div class="row">
					<div class="col-xs-4 col-sm-2 capabilitiesContentLink">
						<a href="<?php echo home_url(); ?>/#/">
							<img src="<?php echo get_template_directory_uri(); ?>/images/business-icon.png" alt="Business Analytics" />
							<h2>BUSINESS ANALYTICS</h2>
							<p><?php echo $excerpt = wp_trim_words( get_field('business_analytics', 'option' ), $num_words = 10, $more = '...' ); ?></p>
						</a>
					</div>
					<div class="col-xs-4 col-sm-2 capabilitiesContentLink">
						<a href="<?php echo home_url(); ?>/#/">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logistics-icon.png" alt="Logistics" />
							<h2>lOGISTICS</h2>
							<p><?php echo $excerpt = wp_trim_words( get_field('logistics', 'option' ), $num_words = 10, $more = '...' ); ?></p>
						</a>
					</div>
					<div class="col-xs-4 col-sm-2 capabilitiesContentLink">
						<a href="<?php echo home_url(); ?>/#/">
							<img src="<?php echo get_template_directory_uri(); ?>/images/engineering-icon.png" alt="Engineering" />
							<h2>ENGINEERING</h2>
							<p><?php echo $excerpt = wp_trim_words( get_field('engineering', 'option' ), $num_words = 10, $more = '...' ); ?></p>
						</a>
					</div>
					<div class="col-xs-4 col-sm-2 capabilitiesContentLink">
						<a href="<?php echo home_url(); ?>/#/">
							<img src="<?php echo get_template_directory_uri(); ?>/images/cyber-icon.png" alt="Cyber" />
							<h2>CYBER</h2>
							<p><?php echo $excerpt = wp_trim_words( get_field('cyber', 'option' ), $num_words = 10, $more = '...' ); ?></p>
						</a>
					</div>
					<div class="col-xs-4 col-sm-2 capabilitiesContentLink">
						<a href="<?php echo home_url(); ?>/#/">
							<img src="<?php echo get_template_directory_uri(); ?>/images/education-icon.png" alt="Education" />
							<h2>EDUCATION</h2>
							<p><?php echo $excerpt = wp_trim_words( get_field('education', 'option' ), $num_words = 10, $more = '...' ); ?></p>
						</a>
					</div>
					<div class="col-xs-4 col-sm-2 capabilitiesContentLink">
						<a href="<?php echo home_url(); ?>/#/">
							<img src="<?php echo get_template_directory_uri(); ?>/images/rd-icon.png" alt="Research &amp; Development" />
							<h2>RESEARCH &#38; DEVELOPMENT</h2>
							<p><?php echo $excerpt = wp_trim_words( get_field('research_&_development', 'option' ), $num_words = 10, $more = '...' ); ?></p>
						</a>
					</div>
				</div><!-- row -->
			</div><!-- container -->

		</div><!-- capabilities -->
		<div class="frogMan"></div>
	</div>
	<div class="section " id="section1">
		<div class="businessAnalytics">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
						<h1>BUSINESS ANALYTICS</h1>
						<?php the_field('business_analytics_content'); ?>
						<?php the_field('business_analytics_list') ?>
					</div>
			</div><!-- row -->
			</div><!-- container -->
		</div><!-- businessAnalytics -->
	</div><!-- section1 -->
	<div class="section" id="section2">
		<div class="logistics">
			<div class="container">
				<div class="row">
					<h1>LOGISTICS</h1>
					<div class="col-xs-6 logisticsContent">
						<h2>LOGISTICS AN LIFE CYCLE SUPPORT</h2>
						<?php the_field('logistics_and_life_cycle_support_content'); ?>
						<span><?php the_field('logistics_and_life_cycle_support_list'); ?></span>
					</div>
					<div class="col-xs-6 logisticsContent">
						<h2>QUALITY ASSURANCE (QA) SUPPORT</h2>
						<?php the_field('quality_assurance_support_content'); ?>
						<span><?php the_field('quality_assurance_support_list'); ?></span>
					</div>
					<div class="col-xs-6 logisticsContent">
						<h2>EQUIPMENT SUSTAINMENT &amp; TRAINING</h2>
						<?php the_field('equipment_sustainment_and_training_content'); ?>
						<span><?php the_field('equipment_sustainment_and_training_list'); ?></span>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- logistics -->
	</div><!-- section2 -->
	<div class="section" id="section3">
		<div class="engineering">
			<h1>ENGINEERING</h1>
		</div><!-- engineering -->

	</div><!-- section3 -->
	<div class="section" id="section4">
		<div class="intro">
			<h1>Enjoy it</h1>
		</div>

	</div>
	<div class="section" id="section5">
		<div class="intro">
			<h1>Enjoy it</h1>
		</div>

	</div>
	<div class="section" id="section6">
		<div class="intro">
			<h1>Enjoy it</h1>
		</div>

	</div>
	<div class="section" id="section7">
		<div class="intro">
			<h1>Enjoy it</h1>
		</div>

	</div>
	<div class="section" id="section8">
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
	</div>
</div><!--full-page -->
