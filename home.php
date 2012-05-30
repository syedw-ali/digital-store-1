<?php 
/*Template Name: Home*/
get_header();
?>
<div id="tmnivoslider"> 	
    
    	<div class="nivo-controlNav"></div>
    	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
    		<?php $attachments = get_children("post_parent=" . $post -> ID ."&post_type=attachment&post_mime_type=image&orderby=menu_order ASC, ID ASC");?>
    	
    	<div id="slider">
    		
    		<ul>
				<?php foreach($attachments as $attachment_id => $attachment) :?>
					<li><?php echo wp_get_attachment_image( $attachment_id, array(700,369) );?></li>
				<?php endforeach;?>
			</ul>
			
		</div>
		
		<?php endwhile; ?>	
		<?php else : ?><h1>Uh oh...</h1><?php endif; ?>
		
			
	</div>



<div id="tmslider1">
<ul>

		<?php 
		
		
		/* Get all sticky posts */
		$sticky = get_option( 'sticky_posts' );
		
		/* Sort the stickies with the newest ones at the top */
		rsort( $sticky );
		
		/* Get the 5 newest stickies (change 5 for a different number) */
		$sticky = array_slice( $sticky, 0, 3 );
		
		/* Query sticky posts */
		query_posts( array( 'post__in' => $sticky, 'ignore_sticky_posts' => 1 ) );


		
		while (have_posts()) : the_post(); ?>

		<li class="slide1">
			<div></div>
				<a href="<?php the_permalink()?>"><img src="<?php echo get_post_meta($post->ID, "feat_photo", true); ?>" alt="<?php echo get_post_meta($post->ID, "feat_photo", true); ?>"/></a>	
						
		
		</li>
		<?php endwhile; ?>
	</ul>
</div>
<div class="clearblock"></div>
<div id="tmslider2">
<ul>
		<li class="slide1">
		<div></div>
		<?php 
  			$idObj = get_category_by_slug('nikon'); 
  			$category_id = $idObj->term_id;
  			$category_link = get_category_link( $category_id );

		?>
		
		
		<a href="<?php echo esc_url( $category_link ); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/modules/tmslider2/slides/slide_00.png" alt="" /></a>
	</li>
		<li class="slide2">
		<div></div>
		<?php 
  			$idObj = get_category_by_slug('canon'); 
  			$category_id = $idObj->term_id;
  			$category_link = get_category_link( $category_id );

		?>
		<a href="<?php echo esc_url( $category_link ); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/modules/tmslider2/slides/slide_01.png" alt="" /></a>
	</li>
		<li class="slide3">
		<div></div>
		<?php 
  			$idObj = get_category_by_slug('levca'); 
  			$category_id = $idObj->term_id;
  			$category_link = get_category_link( $category_id );

		?>
		<a href="<?php echo esc_url( $category_link ); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/modules/tmslider2/slides/slide_02.png" alt="" /></a>
	</li>
		<li class="slide4">
		<div></div>
		<?php 
  			$idObj = get_category_by_slug('panasonic'); 
  			$category_id = $idObj->term_id;
  			$category_link = get_category_link( $category_id );

		?>
		<a href="<?php echo esc_url( $category_link ); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/modules/tmslider2/slides/slide_03.png" alt="" /></a>
	</li>
		<li class="slide5">
		<div></div>
		<?php 
  			$idObj = get_category_by_slug('jvc'); 
  			$category_id = $idObj->term_id;
  			$category_link = get_category_link( $category_id );

		?>
		<a href="<?php echo esc_url( $category_link ); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/modules/tmslider2/slides/slide_04.png" alt="" /></a>
	</li>
		<li class="slide6">
		<div></div>
		<?php 
  			$idObj = get_category_by_slug('sony'); 
  			$category_id = $idObj->term_id;
  			$category_link = get_category_link( $category_id );

		?>
		<a href="<?php echo esc_url( $category_link ); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/modules/tmslider2/slides/slide_05.png" alt="" /></a>
	</li>
	</ul>
</div>
		</div>
	</div>
	<div id="columns">
<!-- Left -->
		<div id="left_column" class="column"></div>
<!-- Center -->
		<div id="center_column" class="center_column">
<!-- MODULE Block new products -->
<div id="tmnewproducts">
	<h4>Nye produkter</h4>
	<div class="block_content">
	
			<ul>
	<?php 
	$args= array(
		'posts_per_page'=>3,
		'post-type' => 'post',
		'ignore_sticky_posts' => 1
	);
	
	query_posts($args);
	
	if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>		
			
				<li>
				<div class="new-prod">
					<h5><a class="product_link" href="<?php the_permalink()?>"><?php the_title();?></a></h5><br/>
					<?php if(has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_post_thumbnail('thumb-image'); ?></a>
					<?php }else{ ?>
						<a href="<?php the_permalink();?>" title="<?php the_title();?>"><img src="<?php bloginfo('template_url');?>/images/no-image.jpg" width="160" height="160" alt="no-image"></a>
					<?php } ?>
					<p><a class="product_descr" href="<?php the_permalink()?>"><?//php the_excerpt();?></a></p>
					<span class="price"><?php echo get_post_meta($post->ID, "prod_price", true); ?>
					
					<a class="tmn_view" href="<?php the_permalink()?>" title="View">View</a>
					</span>									
				</div>
				</li>
	<?php endwhile; wp_reset_query();?><?php else : ?><h1>Uh oh...</h1><?php endif; ?>			
			</ul>
			
		<div class="clearblock"></div>
		</div>
</div>
<!-- /MODULE Block new products -->		</div>
<!-- Right -->
<div id="right_column" class="column">

<!-- /MODULE Block cart --><!-- MODULE TM best sellers -->
<div id="tmbestsellers" class="block">
	
	<?//php best_sell(); ?>
	
			<?php if ( is_active_sidebar( 'general_search' ) ) : ?>
				<?php dynamic_sidebar( 'general_search' ); ?>
			<?php else: ?>
				<?php // ?>
			<?php endif;?>

	

</div>
<!-- /MODULE TM best sellers --></div>
		<div class="clearblock"></div>
	</div>

<?php get_footer();?>
