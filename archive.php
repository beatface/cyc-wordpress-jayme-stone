<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php wp_title(''); ?></title>
    <link rel="stylesheet" href="./wp-content/themes/portfolio-site/public/lib/bootstrap/dist/css/bootstrap.css" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./wp-content/themes/portfolio-site/public/lib/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./wp-content/themes/portfolio-site/public/stylesheets/animate.min.css" type="text/css">
    <link rel="stylesheet" href="./wp-content/themes/portfolio-site/style.css" type="text/css">
    <link rel="stylesheet" href="./wp-content/themes/portfolio-site/public/stylesheets/csshake.css" type="text/css">
    <?php wp_head(); ?>
  </head>
  <body id="page-top" <?php body_class(); ?>>
    <nav id="blogNav" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" class="navbar-toggle collapsed">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="/" class="navbar-brand page-scroll">
            <img id="cyc-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/img/logos/CC_Logo_01.png" alt="Compose Your Career">
          </a>
        </div>
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
          <?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'ul',
               'container_class'   => 'collapse navbar-collapse',
               'container_id'      => 'bs-example-navbar-collapse-1',
               'menu_class'        => 'nav navbar-nav navbar-right',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
          ?>
        </div>
      </div>
    </nav>


    <div id="blog-page">
      <?php $layout_class = ( function_exists('shapely_get_layout_class') ) ? shapely_get_layout_class(): ''; ?>
    	<div id="primary" class="col-md-9 mb-xs-24 <?php echo $layout_class; ?>">
    		<main id="main" class="site-main" role="main">
          <div class="container">
        		<?php
        		while ( have_posts() ) : the_post();

        			get_template_part( 'template-parts/content', 'single' );

        			// If comments are open or we have at least one comment, load up the comment template.
        			if ( comments_open() || get_comments_number() ) :
        				comments_template();
        			endif;

        		endwhile; // End of the loop.
        		?>
          </div>

    		</main><!-- #main -->
    	</div><!-- #primary -->
    </div>
<?php
get_footer();
?>
