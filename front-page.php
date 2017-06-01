<?php get_header(); ?>

<div id="fullpage">
	<div class="section " id="section0">
		<div class="header">

				<div class="headerLogo">
		      <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Header Logo" /></a>
		    </div>
				<div class=" headerImage">
					<span class="whiteArea">
						<img src="<?php echo get_template_directory_uri(); ?>/images/inc-500.png" alt="Services Logo" />
						<img src="<?php echo get_template_directory_uri(); ?>/images/fast-50.png" alt="Services Logo" />
						<img src="<?php echo get_template_directory_uri(); ?>/images/star-award.png" alt="Services Logo" />
					</span>
				</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4 services">
								<a href="<?php echo home_url(); ?>/#">
									<div class="col-xs-3">
										<img src="<?php echo get_template_directory_uri(); ?>/images/services.png" alt="Services Logo" />
									</div>
									<div class="col-xs-9">
										<h2>SERVICES</h2>
											<?php the_field('services_content') ?>
										</div>
								</a>
							</div>
							<div class="col-xs-12 col-sm-4 contracts">
								<a href="<?php echo home_url(); ?>/#">
									<div class="col-xs-3">
										<img src="<?php echo get_template_directory_uri(); ?>/images/contracts.png" alt="Contracts Logo" />
									</div>
									<div class="col-xs-9">
										<h2>CONTRACTS</h2>
											<?php the_field('contracts_content') ?>
										</div>
								</a>
							</div>
							<div class="col-xs-12 col-sm-4 training">
								<a href="<?php echo home_url(); ?>/#">
									<div class="col-xs-3">
										<img src="<?php echo get_template_directory_uri(); ?>/images/training.png" alt="Training Logo" />
									</div>
									<div class="col-xs-9">
										<h2>TRAINING</h2>
											<?php the_field('training_content') ?>
									</div>
								</a>
							</div>
						</div><!-- row -->
			</div><!-- container -->
		</div><!-- header -->
	</div><!-- section -->
	<div class="section " id="section1">
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
	<div class="section " id="section2">
		<div class="our-clients">
			<h1>OUR CLIENTS</h1>
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-2 clientArea">
						<img src="<?php echo get_template_directory_uri(); ?>/images/national-guard.png" alt="National Guard" />
					</div>
					<div class="col-xs-6 col-sm-2 clientArea">
						<img src="<?php echo get_template_directory_uri(); ?>/images/army.png" alt="Army" />
					</div>
					<div class="col-xs-6 col-sm-2 clientArea">
						<img src="<?php echo get_template_directory_uri(); ?>/images/homeland-security.png" alt="Homeland Security" />
					</div>
					<div class="col-xs-6 col-sm-2 clientArea">
						<img src="<?php echo get_template_directory_uri(); ?>/images/marines.png" alt="Marine Corps" />
					</div>
					<div class="col-xs-6 col-sm-2 clientArea">
						<img src="<?php echo get_template_directory_uri(); ?>/images/navy.png" alt="Navy" />
					</div>
					<div class="col-xs-6 col-sm-2 clientArea">
						<img src="<?php echo get_template_directory_uri(); ?>/images/air-force" alt="Air Force" />
					</div>
				</div><!-- row -->
			</div><!-- container -->
			<div class="climbing-wall"></div>
		</div><!-- our-clients -->
	</div>
	<div class="section " id="section3">
		<div class="solid-foundation">
			<div class="container">
				<div class="row">
					<div class="col-xs-9 col-xs-offset-3 solidFoundationContentArea">
							<h1>A SOLID FOUNDATION</h1>
							<?php the_field('solid_foundation_content'); ?>
							<a href="#" class="btn-main left-side">INFORMATION</a>
							<a href="#" class="btn-main right-side">OFFICERS</a>
					</div>
				</div><!-- row -->
			</div><!-- container -->
			<div class="whiteBand">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 whiteBandContent">
							<h2>
								TEAMS &amp;<br />
								BUSINESS OPPS
							</h2>
							<a href="#" class="btn-main left-side">LEARN MORE</a>
						</div>
						<div class="col-xs-6 whiteBandContent">
							<h2>
								CONTRACT<br />
								VEHICLES
							</h2>
							<a href="#" class="btn-main right-side">LEARN MORE</a>
						</div>
					</div><!-- row -->
				</div><!-- container -->
			</div>
		</div><!-- solid-foundation -->
	</div>
	<div class="section" id="section4">
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
	</div>


	<div class="section" id="section5">
		<div class="contact-us">
			<h1>6th section elements</h1>
			<p>Create your own headers and footers</p>
		</div>
		<?php get_footer(); ?>
	</div>
</div><!-- fulpage -->