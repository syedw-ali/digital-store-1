<?php
/**
 * Template name: Search
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>


<div id="columns">
		<div id="center_column" class="center_column">
				<!-- Breadcrumb -->
			<div class="breadcrumb bordercolor">	
			
			<?php 
				global $wp_query;
				$args = array_merge( $wp_query->query, array( 'posts_per_page' => 5, 'post-type'=>'post' ));
				query_posts( $args);
			?>
			
			
			
			<div class="breadcrumb_inner">
				<a href="<?php bloginfo('url');?>" title="return to Home">Home</a>
				<span class="navigation-pipe">&gt;</span>
				<span class="navigation_page">Search</span></div>
			</div>
			<!-- /Breadcrumb -->		
			
			
			<div class="rte">
	
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			
				<?php 
				
				if ( have_posts() ) :
				
				
				while (have_posts()) : the_post(); ?>
				
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>       
				       
			
			<?php endwhile;  ?>
			

			
				
			<?php else : ?>
			       <div style="clear:both">&nbsp;</div> 
			       <h2 class="entry-title"><?php _e( 'Nothing Found !!', 'twentyeleven' ); ?></h2>
			       
			       <h3><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></h3>
						
			       
			                  
             <?php endif; ?>
             
             
             	
</div>
</div>
<?php wp_reset_query();?>  			
  			
  				
 <!-- Right -->
<div id="right_column" class="column">

<div id="tmbestsellers" class="block">
	<?php best_sell(); ?>
</div>
<!-- /MODULE TM best sellers --></div>
		<div class="clearblock"></div>
	</div>
 			
										
					
					
					
					
			
			
										
			
						

<?php get_footer(); ?>