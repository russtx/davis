<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Chathura" rel="stylesheet">
    <script src="https://use.typekit.net/pbi3vhp.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>
    <div class="masthead">
      <div class="row">
        <div class="col-xs-6">
          <a href="#" class="btn-main left">EMPLOYEE LOGIN</a>
        </div>
        <div class="col-xs-6">
          <a href="#" class="btn-main right">APPLY NOW</a>
        </div>
        <div class="col-xs-12 col-sm-2 col-sm-offset-8 headerSocials">
          <a href="<?php the_field('twitter', 'option'); ?>" target="_blank" class="twitter"></a>
          <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="facebook"></a>
        </div>
        <div class="col-xs-12 col-sm-7 col-sm-offset-2 navButton">
          <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <div class="collapse navbar-collapse">
             <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>

      </div><!-- row -->
    </div><!-- container -->
    <div id="main-container" >
