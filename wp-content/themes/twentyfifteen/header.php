<!doctype html><?php ?>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles-index.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize-index.css">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        <!-- <script src="/js/jquery-3.1.1.min.js"></script>-->		<script type="text/javascript">		  console.log("test: "+jQuery);		</script>

	</head>
	<!-- <body <?php body_class(); ?>> -->

		

			<!-- header -->
			<!-- <header class="header clear" role="banner">
			
					logo
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					/logo
			
					nav
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					/nav
			
			</header> -->
			<header class="header">
    <div class="wrapper">
	<?php viewlogin(); ?>
	
			<a href="/wp-admin/" class="sign-in-icon"><img src="/img/icons/sign-in.svg" alt=""></a>
      <!-- <a href="#" class="lang"></a> -->
      <!-- <div class="lang"><?php echo qtranxf_generateLanguageSelectCode(‘image’); ?></div> -->
      <div class="lang qtranxs_widget">
    <?php dynamic_sidebar( 'lang' ); ?>
</div>
      <nav id="itemActive">
        <ul>
          <li><a href="#"><img src="/img/icons/small-01.svg" alt=""></a></li>
          <li><a href="#"><img src="/img/icons/small-02.svg" alt=""></a></li>
          <li><a href="/steps/"><img src="/img/icons/small-03.svg" alt=""></a></li>
          <li><a href="/job/"><img src="/img/icons/small-04.svg" alt=""></a></li>
        </ul>
      </nav>
    </div>
  </header>
			<!-- /header -->
			<!-- wrapper -->
		<!-- <div class="wrapper"> -->
