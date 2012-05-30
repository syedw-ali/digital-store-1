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


<H1>Customer Service - Contact us</H1>
<p class="bold">For questions about an order or for more information about our products.</p>
		
		<form id="contact_form" class="std">
			<fieldset>
				
				<h3>SEND A MESSAGE</h3>
				<?php the_content();?>

				
			</fieldset>
			
		</form>
<?php endwhile;?>
</div>






<!-- Right -->
<div id="right_column" class="column">

<div id="tmbestsellers" class="block">
	<h4>Best selling products</h4>
	<div class="block_content">
			<ul>
			<?php
			$args_2= array(
			'post_type'=>'post',
			'posts_per_page'=>5,
			'post-type' => 'post',
			'ignore_sticky_posts' => 1
			);
		query_posts($args_2); 
		$i=01;
		while (have_posts()) : the_post(); ?>
			<li>
				<a href="<?php the_permalink() ?>" title="<?php the_title();?>"><span><?php echo $i .'&#46;' . '&nbsp;' ?></span><?php the_title();?></a>
			</li>
		<?php $i++; endwhile; ?>
					
			</ul>
		<div class="clearblock"></div>
		</div>
</div>
<!-- /MODULE TM best sellers --></div>
		<div class="clearblock"></div>
	</div>



<?php get_footer();?>