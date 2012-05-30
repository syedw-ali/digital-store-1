<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>

	<title>
<?php
		wp_title( '|', true, 'right' );		
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			bloginfo('name');
			
?>
</title>

	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico_1333631608.x-icon" />
	
		<link href="<?php echo get_stylesheet_directory_uri() ?>/themes/theme344/css/global.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo get_stylesheet_directory_uri() ?>/css/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo get_stylesheet_directory_uri() ?>/css/jqzoom.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo get_stylesheet_directory_uri() ?>/modules/productscategory/productscategory.css" rel="stylesheet" type="text/css" media="all" />
		
	<link href="<?php echo get_stylesheet_directory_uri() ?>/css/colorbox.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo get_stylesheet_directory_uri() ?>/style.css" rel="stylesheet" type="text/css" media="all" />
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery/jquery-1.4.4.min.js"></script>
		<!-- /* <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery/jquery.easing.1.3.js"></script> */ -->
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/tools.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery/jquery.fancybox-1.3.4.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery/jquery.idTabs.modified.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery/jquery.scrollTo-1.4.2-min.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery/jquery.serialScroll-1.2.2-min.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/themes/theme344/js/tools.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/themes/theme344/js/product.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery/jquery.jqzoom.js"></script>
		<!-- /* <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/modules/blockcart/ajax-cart.js"></script> */ -->
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/modules/productscategory/productscategory.js"></script>
		
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/themes/theme344/js/cookies.js"></script>
    	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/themes/theme344/js/script.js"></script>
    </script> <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/themes/theme344/js/jscript_xjquery.jqtransform.js"></script>  
    
    <?php wp_enqueue_script('cycle', get_bloginfo('template_url') .'/js/jquery.cycle.min.js','',0,false); ?> 
    <?php wp_enqueue_script('color-min', get_bloginfo('template_url') .'/js/jquery.colorbox-min.js','',0,false); ?> 
    <?php wp_enqueue_script('colorbox', get_bloginfo('template_url') .'/js/jquery.colorbox.js','',0,false); ?> 
<?php wp_head(); ?>	

<script type="text/javascript">
$j = jQuery.noConflict();

$j(document).ready(function() {	
	$j("#slider ul").cycle({
			fx:'fade',
			continuous: 0, 
			pager: '.nivo-controlNav',
			timeout:6000,
			sync:1,
			
			pagerAnchorBuilder: function(index, el) {
        		return '<a class=""></a>'; 
    		}
		});
	$j(".group1").colorbox({rel:'group1',transition:"elastic", width:"65%", height:"65%"});
	
	$j('ul.sf-menu').superfish({
		delay: 1000,
		animation: {opacity:'show',height:'show'},
		speed: 'fast',
		autoArrows: false,
		dropShadows: false
	});
	
	
});
</script>


</head>

<body id="index">
<!--[if lt IE 8]><div style='clear:both;height:59px;padding:0 15px 0 15px;position:relative;z-index:10000;text-align:center;'><a href="javascript:if(confirm('http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode  \n\nThis file was not retrieved by BackStreet browser, because it is addressed on a domain or path outside the boundaries set for its Project.  \n\nDo you want to open it from the server?'))window.location='http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode'"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div><![endif]-->
<p id="back-top"> <a href="#top"><span></span></a> </p>
<div id="wrapper1">
<div id="wrapper2">
<div id="wrapper3">
	<!-- Header -->
	<div id="header">
		<a id="header_logo" href="<?php bloginfo('url');?>" title="DIGITAL STORE">
			<img class="logo" src="<?php bloginfo('template_url');?>/themes/theme344/img/logo.png" alt="DIGITAL STORE" />
		</a>
		<div id="header_right">
			<!-- Block languages module -->
<div id="languages_block_top">
	
</div>
<!-- /Block languages module --><!-- Block currencies module -->
<div id="currencies_block_top">
	
</div>
<!-- /Block currencies module --><!-- Block user information module HEADER -->
<ul id="header_user">
	</ul>

<!-- /Block user information module HEADER --><div class="clearblock"></div>


							<?php wp_nav_menu( array( 
        						'theme_location' => 'TopRight', 
        						'menu_id' => 'tmheaderlinks', 
        						'menu_class' => '', 
        						'container_id' =>'',
        						'container_class' =>''
        					));?>






<div class="clearblock"></div>
<div id="search_block_top">
	<label>Search</label>
	
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="field" name="s" id="s" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="Go" />
	</form>

	

</div>
<!-- /Block search module TOP --><!-- TM Categories -->

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/modules/tmcategories/superfish.js"></script>

<div class="clearblock"></div>

						<?php wp_nav_menu( array( 
        						'theme_location' => 'Primary', 
        						'menu_id' => 'cat', 
        						'menu_class' => 'sf-menu', 
        						'container_id' =>'tmcategories',
        						'container_class' =>''
        					));?>  