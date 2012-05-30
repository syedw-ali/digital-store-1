<!-- Footer -->
	<div id="footer">
		<div id="tmfooterlinks">
	
						<?php wp_nav_menu( array( 
        						'theme_location' => 'FooterOne', 
        						'menu_id' => '', 
        						'menu_class' => '', 
        						'container_id' =>'',
        						'container_class' =>''
        					));?>  
	
						<?php wp_nav_menu( array( 
        						'theme_location' => 'FooterTwo', 
        						'menu_id' => '', 
        						'menu_class' => '', 
        						'container_id' =>'',
        						'container_class' =>''
        					));?>
	
						<?php wp_nav_menu( array( 
        						'theme_location' => 'FooterThree', 
        						'menu_id' => '', 
        						'menu_class' => '', 
        						'container_id' =>'',
        						'container_class' =>''
        					));?>
	<p>&copy; 2012 Powered by <a href="<?php bloginfo('url')?>"><?php echo get_option('power_by')?></a>&trade;.<br />All rights reserved</p>
</div><div id="tmcontacts">
<h2>Call us:</h2>
<h3><?php echo get_option('phone_number')?></h3>
</div>
		<!-- [[%FOOTER_LINK]] -->	</div>
</div>
</div>
</div>
	
<!-- /* <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/themes/theme344/js/ga.js"></script> */ -->
<?php wp_footer();?>
</body>
</html>