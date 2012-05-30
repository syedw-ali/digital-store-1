<?php
get_header();
global $wp_query;
?>
<div id="columns">
<!-- Center -->
		<div id="center_column" class="center_column">
	<!-- Breadcrumb -->

	
<div class="breadcrumb bordercolor">
<?php if (have_posts()) : ?>	
	

<div class="breadcrumb_inner">
	<a href="<?php bloginfo('url');?>" title="return to Home">Home</a>
	<span class="navigation-pipe">&gt;</span>
	<span class="navigation_page"><?php single_cat_title(); ?></span></div>
</div>
<!-- /Breadcrumb -->

<h1>
	<?php single_cat_title(); ?>
	
	
	<?php 
	// find total posts in current category
	$total_posts = $wp_query->found_posts; ?>
	
		


<span class="category-product-count">
	
	<?php 

	echo 'There are '.$total_posts.' products'; ?>
	</span>
	
</h1>
	<p class="cat_desc bordercolor">
		<?php echo get_option('cat_descr_1'); ?>
	</p>
									
<div class="product_sort">
	<!--
<form action="http://livedemo00.template-help.com/prestashop_38652/category.php?id_category=3" id="productsSortForm">
		<label for="selectPrductSort">Sort by</label>
		<select id="selectPrductSort">
			<option selected="selected" value="position:asc">--</option>
						<option value="price:asc">Price: lowest first</option>
				<option value="price:desc">Price: highest first</option>
					<option value="name:asc">Product Name: A to Z</option>
			<option value="name:desc">Product Name: Z to A</option>
						<option value="quantity:desc">In-stock first</option>
				</select>
	</form>

	<ul class="product_view">
		<li class="" id="product_view_grid"></li>
		<li id="product_view_list" class="current"></li>
	</ul>
-->

</div>









<div class="box bordercolor" id="product_list_list" style="display: block;">
<ul class="bordercolor">
<?php while (have_posts()) : the_post(); ?>
		<li class="ajax_block_product bordercolor">
		<a title="<?php the_title();?>" class="product_img_link" href="<?php the_permalink();?>">
					<?php if(has_post_thumbnail() ) { 
					the_post_thumbnail('thumb-image'); ?>
					<?php }else{ ?>
					<img src="<?php bloginfo('template_url');?>/images/no-image.jpg" width="180" height="160" alt="no-image">
					<?php } ?>	
		
		</a>
		<div class="center_block">
			<div class="product_flags">
				<span class="new">New!</span>				
				<span class="availability bordercolor">Available</span>							
			</div>
			<h3><a title="<?php the_title();?>" href="<?php the_permalink();?>" class="product_link"><?php the_title();?></a>
			</h3>
			<p class="product_desc">
				
				<?php the_excerpt();?>
				
			</p>
		</div>																				 
		<div class="right_block bordercolor">
			<div class="div-price">		
				<span class="price"><?php echo get_post_meta($post->ID, "prod_price", true); ?></span>
			</div>
			<div class="view_btn">	
				<a title="View" href="<?php the_permalink();?>" class="button">View</a>
			</div>
		</div>
	</li>
<?php endwhile; ?>
</ul>
<div style="clear:both">&nbsp;</div>
<?php if($total_posts > 5):?>
	<center><?php include (TEMPLATEPATH . '/inc/pagination.php' ); ?></center>
<?php endif;?>
<div style="clear:both">&nbsp;</div>
<?php wp_reset_query();?>
</div>


<?php else : ?><h1>No Products available in this category.</h1><?php endif; ?>

<form class="product_compare" method="get" action="" onsubmit="true">
		<input type="hidden" class="button" value="Compare" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
</form>

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