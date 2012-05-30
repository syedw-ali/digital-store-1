<?php 

get_header();
?>
<div id="tmnivoslider"> 	
    <div id="slider">
			<a href="<?php echo get_stylesheet_directory_uri() ?>/product.php?id_product=12"><img src="<?php echo get_stylesheet_directory_uri() ?>/modules/tmnivoslider/slides/slide_00.jpg" alt="" title="#htmlcaption1" /></a>
			<a href="<?php echo get_stylesheet_directory_uri() ?>/category.php?id_category=5"><img src="<?php echo get_stylesheet_directory_uri() ?>/modules/tmnivoslider/slides/slide_01.jpg" alt="" title="#htmlcaption2" /></a>
			<a href="<?php echo get_stylesheet_directory_uri() ?>/product.php?id_product=7"><img src="<?php echo get_stylesheet_directory_uri() ?>/modules/tmnivoslider/slides/slide_02.jpg" alt="" title="#htmlcaption3" /></a>
		</div>
			<div id="htmlcaption1" class="nivo-html-caption">
			<div class="slide_caption slide1_caption">
				<h2>NIKON</h2>
				<h3>D700</h3>
				<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod</p>
				<a href="<?php echo get_stylesheet_directory_uri() ?>/product.php?id_product=12" class="slide_btn">SHOP NOW!</a>
			</div>
		</div>
			<div id="htmlcaption2" class="nivo-html-caption">
			<div class="slide_caption slide2_caption">
				<h2>NIKON</h2>
				<h3>D3</h3>
				<p>Lorem ipsum dolor sit amet conse ctetur adipisicing</p>
				<a href="<?php echo get_stylesheet_directory_uri() ?>/category.php_id_category=5.html" class="slide_btn">SHOP NOW!</a>
			</div>
		</div>
			<div id="htmlcaption3" class="nivo-html-caption">
			<div class="slide_caption slide3_caption">
				<h2>NIKON</h2>
				<h3>D800</h3>
				<p>Lorem ipsum dolor sit amet conse ctetur adipisicing</p>
				<a href="<?php echo get_stylesheet_directory_uri() ?>/product.php_id_product=7.html" class="slide_btn">SHOP NOW!</a>
			</div>
		</div>
	</div>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'fade', //Specify sets like: 'fold,fade,sliceDown'
		slices:10,
		animSpeed:500, //Slide transition speed
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false, //Next & Prev
		directionNavHide:false, //Only show on hover
		controlNav:true, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
      	controlNavThumbsFromRel:false, //Use image rel for thumbs
		controlNavThumbsSearch: '.jpg', //Replace this with...
		controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
		keyboardNav:true, //Use left & right arrows
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:1.0, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
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
			
				<?php if(has_post_thumbnail() ) { ?>
			<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_post_thumbnail('feat-prd-image'); ?></a>
				<?php }else{ ?>
					<img src="<?php bloginfo('template_url');?>/images/no-image.jpg" width="304" height="304" alt="no-image">
				<?php } ?>		
		
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
	<h4>New products</h4>
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
				<div>
					<h5><a class="product_link" href="<?php the_permalink()?>"><?php the_title();?></a></h5>
					<?php if(has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_post_thumbnail('thumb-image'); ?></a>
					<?php }else{ ?>
						<img src="<?php bloginfo('template_url');?>/images/no-image.jpg" width="180" height="160" alt="no-image">
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
	<h4>Best Selling Products</h4>
	<div class="block_content">
		<ul>
		<?php
			$args_2= array(
			'posts_per_page'=>5,
			'post-type' => 'post'
			);
		query_posts($args_2); 
		$i=1;
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
