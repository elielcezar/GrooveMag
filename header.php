<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <link rel="stylesheet" type="text/css" href="http://ecwd.net/groovemag/wp-content/plugins/fullwidth-audio-player/css/jquery.fullwidthAudioPlayer.css">

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7&appId=315569751886817";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 
<header>
	<div class="container">
		<h1><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/themes/groovemag2016/img/logo.png" /></a></h1> 

     <button class="c-hamburger c-hamburger--htx">
        <span>Menu</span>          
      </button> 


    <div class="banner">
       <?php if ( is_active_sidebar( 'banner-topo' ) ) : ?>                    
            <?php dynamic_sidebar( 'banner-topo' ); ?>                    
    <?php endif; ?>
    </div>
	</div>
  <?php if ( is_active_sidebar( 'menu' ) ) : ?>                    
            <?php dynamic_sidebar( 'menu' ); ?>                    
    <?php endif; ?>
</header>