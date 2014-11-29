<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
<title>
<?php wp_title('|', true, 'right'); ?>
</title>
    
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    
<link href='http://fonts.googleapis.com/css?family=Lato:400,900|Lora:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Jura' rel='stylesheet' type='text/css'>

<!--wordpress head-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

<!-- Header Top Bar Start -->
    <div class="top-bar">
       <div class="slidedown">
          <div class="container">
             <div class="phone-email pull-left">
                <a><i class="fa fa-phone"></i> Call Us : 703.123.1234</a>
                <a href="info@crossfitadaptation.com"><i class="fa fa-envelope"></i> Email : info@crossfitadaptation.com</a>
             </div>
             <div class="follow-us pull-right">
                 <?php wp_nav_menu(array('theme_location' => 'member_menu', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
             </div>
          </div>
       </div>
    </div>
<!-- Header Top Bar End -->       
    <div class="container page-container sticky-wrapper">
        <?php do_action('before'); ?>

        <header class="navbar navbar-static-top" id="top" role="banner">
          <div class="row">           
            <div class="navbar-header">
              <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <h1 class="col-sm-3 col-md-3 col-lg-5 logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                  <img src="<?php echo get_bloginfo('template_directory') ?>/img/logo.png" alt="Crossfit Adaptation">
                </a>
            </h1>  

            <nav class="col-sm-9 col-md-9 col-lg-7 collapse navbar-collapse navbar-primary-collapse" role="navigation">
              <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
              <?php dynamic_sidebar('navbar-right'); ?>
            </nav>
          </div>
        </header>    

        <div id="content" class="container">
            <div class="row">
