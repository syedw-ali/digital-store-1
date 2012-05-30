<?php
get_header();
?>
<div id="columns">
<!-- Center -->
		<div id="center_column" class="center_column">
	<!-- Breadcrumb -->
<div class="breadcrumb bordercolor">
<?php while (have_posts()) : the_post(); ?>
<div class="breadcrumb_inner">
	<a href="<?php bloginfo('url');?>" title="return to Home">Home</a>
	<span class="navigation-pipe">&gt;</span>
	<span class="navigation_page"><?php the_title();?></span></div>
</div>
<!-- /Breadcrumb -->		
<div class="rte">

	<h2><?php the_title();?></h2>
		<p class="p2">			
			<?php the_content();?>
		</p>
</div>
<?php endwhile;?>
</div>
<!-- Right -->
		<div id="right_column" class="column">

<div id="tmbestsellers" class="block">
	<?php best_sell(); ?>
</div>
<!-- /MODULE TM best sellers --></div>
		<div class="clearblock"></div>
	</div>



<?php get_footer();?>