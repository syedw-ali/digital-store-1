<?php
get_header();
global $post;
?>
<div id="columns">
<!-- Center -->
<div id="center_column" class="center_column">
<script type="text/javascript">
// <![CDATA[
// PrestaShop internal settings
var currencySign = '$';
var currencyRate = '1';
var currencyFormat = '1';
var currencyBlank = '0';
var taxRate = 0;
var jqZoomEnabled = true;
//JS Hook
var oosHookJsCodeFunctions = new Array();
// Parameters
var id_product = '8';
var productHasAttributes = false;
var quantitiesDisplayAllowed = true;
var quantityAvailable = 100;
var allowBuyWhenOutOfStock = false;
var availableNowValue = '';
var availableLaterValue = '';
var productPriceTaxExcluded = 549 - 0.000000;
var reduction_percent = 0;
var reduction_price = 0;
var specific_price = 0;
var specific_currency = false;
var group_reduction = '1';
var default_eco_tax = 0.000000;
var ecotaxTax_rate = 0;
var currentDate = '2012-05-17 06:47:17';
var maxQuantityToAllowDisplayOfLastQuantityMessage = 3;
var noTaxForThisProduct = true;
var displayPrice = 1;
var productReference = '';
var productAvailableForOrder = '1';
var productShowPrice = '1';
var productUnitPriceRatio = '0.000000';
var idDefaultImage = 22;
// Customizable field
var img_ps_dir = 'http://livedemo00.template-help.com/prestashop_38652/img/';
var customizationFields = new Array();
		customizationFields[0] = new Array();
	customizationFields[0][0] = 'img0';
	customizationFields[0][1] = 0;
// Images
var img_prod_dir = 'http://livedemo00.template-help.com/prestashop_38652/img/p/';
var combinationImages = new Array();
combinationImages[0] = new Array();
			combinationImages[0][0] = 22;
			combinationImages[0][1] = 23;
			combinationImages[0][2] = 24;
	// Translations
var doesntExist = 'The combination does not exist for this product. Please choose another.';
var doesntExistNoMore = 'This product is no longer in stock';
var doesntExistNoMoreBut = 'with those attributes but is available with others';
var uploading_in_progress = 'Uploading in progress, please wait...';
var fieldRequired = 'Please fill in all required fields, then save the customization.';
//]]>
</script>
<!-- Breadcrumb -->
<div class="breadcrumb bordercolor">
<?php while (have_posts()) : the_post(); 
	$cur_post_id = $post->ID;
	//echo $cur_post_id; 
	$cat_array = get_the_category($cur_post_id);
	//$cur_cat_id = $cat_array[0]->cat_ID;
	//echo $cat_array;

	
	
	$i=1;
	$cur_cat_ = array();
	foreach($cat_array as $cate):
		$cur_cat_[] = $cate->term_id;
		
		
		$i++;
	endforeach;
	
	$cur_cat_ = array_filter($cur_cat_);
	$cur_cat_ = array_values($cur_cat_);
		
	//echo $cur_cat_;
	//print_r( $cur_cat_ );
	
	
	
	//$total_cat = $i-1;
	//echo $total_cat;
	
	
	?>		
<div class="breadcrumb_inner">
	<a href="<?php bloginfo('url');?>" title="return to Home">Home</a>
	<span class="navigation-pipe">&gt;</span>
	<a href="<?php the_permalink()?>" title="<?php the_title();?>"><?php the_title();?></a>
</div>
</div>
<!-- /Breadcrumb --><div id="primary_block" class="clearfix">
			<div id="pb-right-column">
		<div id="image-block" class="bordercolor">
				

				
					
		<?php if(has_post_thumbnail() ) { 
		
		$thumb_url_post =wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
		
					the_post_thumbnail('large-image', 
						array(//'class' => 'jqzoom', 
						//'alt'=> $thumb_url_post,
						'id'=>'bigpic',
						'width'=>600,
						'height' => 600 
						)); 
				?>
					<?php }else{ ?>
						<img src="<?php bloginfo('template_url');?>/images/no-image.jpg" width="304" height="304" alt="no-image">
					<?php } ?>				
		</div>
				<div id="views_block" >
				
				
				
				<div id="thumbs_list1">
			<ul id="thumbs_list_frame1">
				<?php $attachments = get_children("post_parent=" . $post -> ID ."&post_type=attachment&post_mime_type=image&orderby=menu_order ASC, ID ASC");?>	
					<?php foreach($attachments as $attachment_id => $attachment) :?>
					<li id="thumbnail_22" class="">
						<a class="group1"href="<?php echo wp_get_attachment_url( $attachment_id ); ?> "><?php echo wp_get_attachment_image( $attachment_id, array(80,80) );?></a>
						
					</li>	
					<?php endforeach;?>
					
			</ul>
		</div>
				</div>
				<span id="wrapResetImages" style="display:none;"><div><a id="resetImages" href="product.php_id_product=8.html" onclick="$('span#wrapResetImages').hide('slow');return (false);">Display all pictures</a></div></span>		<ul id="usefull_link_block" class="bordercolor">
			<li><a href="javascript:if(confirm('\n\nThis file was not retrieved by BackStreet browser, because it is addressed on a domain or path outside the boundaries set for its Project.  \n\nDo you want to open it from the server?'))window.location='mailto:enteryour@addresshere.com?subject=Website Name&body=Link to website, short description'">Send to a friend</a></li>			<li class="print"><a href="javascript:print();">Print</a></li>
					</ul>
	</div>
	<div id="pb-left-column">
		<h1><?php the_title();?></h1>
				<form id="buy_block" class="bordercolor"  action="http://livedemo00.template-help.com/prestashop_38652/cart.php" method="post">
			<p class="hidden">
				<input type="hidden" name="token" value="50b7cc78388793b79f909e29de3d529f" />
				<input type="hidden" name="id_product" value="8" id="product_page_product_id" />
				<input type="hidden" name="add" value="1" />
				<input type="hidden" name="id_product_attribute" id="idCombination" value="" />
			</p>
			<div class="price bordercolor">
			<span class="our_price_display">
				<span id="our_price_display" class="price"><?php echo get_post_meta($post->ID, "prod_price", true); ?></span>
					</span>
														</div>
				<p id="minimal_quantity_wanted_p" class="bordercolor" style="display:none;">You must add<b id="minimal_quantity_label">1</b>as a minimum quantity to buy this product.</p>
							<div class="other_options bordercolor">
							<div id="other_prices">
																																								<p id="pQuantityAvailable">
						<span id="quantityAvailable"><?php echo get_post_meta($post->ID, "prod_stock", true); ?></span>
						<span  style="display:none;" id="quantityAvailableTxt">item in stock</span>
						<span  id="quantityAvailableTxtMultiple">items in stock</span>
					</p>
										<p id="last_quantities" style="display:none;" >Warning: Last items in stock!</p>
					<p id="product_reference" style="display:none;"><label for="product_reference">Reference: </label><span class="editable"></span></p>
					<p id="availability_statut" style="display:none;">
						<span id="availability_label">Availability:</span>
						<span id="availability_value">
													</span>
					</p>
				</div>
						<div id="attributes">
								<div class="clearblock"></div>
							</div>
<div class="clearblock"></div>
</div>
				<div id="short_description_block" class="bordercolor">
							<div id="short_description_content" class="rte align_justify">
								<?php the_content();?>
								
							</div>
									<p class="buttons_bottom_block"><a href="javascript:{}" class="button">More details</a></p>
					</div>
								<p id="oosHook" style="display: none;"></p>
		        <div class="share bordercolor"><!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style ">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				<a class="addthis_counter addthis_pill_style"></a>
			</div>
			<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f419f410efe76d3"></script>
		</div>
						<div class="clearblock"></div>
		</form>
					</div>
</div>
			<div id="more_info_block" class="clear">
		<ul id="more_info_tabs" class="idTabs idTabsShort">
			<li><a id="more_info_tab_more_info" href="#idTab1">More info</a></li>			
			<li><a id="more_info_tab_data_sheet" href="#idTab2">Data sheet</a></li>									
			<li><a href="#idTab5" class="idTabHrefShort">Comments (0)</a></li>
		</ul>
		<div id="more_info_sheets" class="bgcolor bordercolor">
					<div id="idTab1"><div>
					<p>
						<?php echo wpautop(get_post_meta($post->ID, "prod_more", true)); ?>
					</p></div></div>
							<ul id="idTab2" class="bullet">
							
							<li><span>Width</span> <?php echo get_post_meta($post->ID, "prod_width", true); ?>&quot;</li>
							<li><span>Height</span> <?php echo get_post_meta($post->ID, "prod_height", true); ?>&quot;</li>
							<li><span>Depth</span> <?php echo get_post_meta($post->ID, "prod_depth", true); ?>&quot;</li>
							<li><span>Weight</span> <?php echo get_post_meta($post->ID, "prod_weight", true); ?></li>
							<li><span>Size</span> <?php echo get_post_meta($post->ID, "prod_size", true); ?></li>
							
							
							
						</ul>
								<div id="idTab5">
<script type="text/javascript" src="modules/productcomments/js/jquery.rating.pack.js"></script>

<!--
/*
<script type="text/javascript">
	$(function(){ $('input[@type=radio].star').rating(); });
	$(function(){
		$('.auto-submit-star').rating({
			callback: function(value, link){
			}
		});
	});
	//close  comment form
	function closeCommentForm(){
		$('#sendComment').slideUp('fast');
		$('input#addCommentButton').fadeIn('slow');
	}
</script>
*/
-->

	<p class="comment_none">No customer comments for the moment.</p>
<p class="comment_add"><input class="button_large" type="button" id="addCommentButton" value="Add a comment" onclick="$('#sendComment').slideDown('slow');$(this).slideUp('slow');" /></p>
<form action="" method="post" id="sendComment" style="display:none;">
	<fieldset>
		<p class="align_right"><a href="javascript:closeCommentForm()">X</a></p>
		<p class="bold">Add a comment</p>
				<table class="comment_rating">
				</table>
				<p><label for="customer_name">Your name:</label><input type="text" name="customer_name" id="customer_name" /></p>		<p><label for="comment_title">Title:</label><input type="text" name="title" id="comment_title" /></p>
		<p><label for="content">Comment:</label><textarea cols="46" rows="5" name="content" id="content"></textarea></p>
		<p class="submit">
			<input class="button" name="submitMessage" value="Send" type="submit" />
		</p>
	</fieldset>
</form>
</div>
		</div>
	
	<?php endwhile; wp_reset_query();?>
	</div>
	 
	 
	 <?php 
	 		
		
			$args1= array(
				'posts_per_page'=>5,
				//'post-type' => 'post',
				'category__in' => $cur_cat_,
				'post__not_in' => array($cur_post_id)
				//'ignore_sticky_posts' => 1		
			);
	
	query_posts($args1);
	 
	 
	 if (have_posts()) : ?>
	    
	<h2 class="productscategory_h2">Andre produkter i samme kategori:</h2><br/>
	<div id="productscategory_noscroll">
		<div id="productscategory_list">
		<ul >
		
	
	<?php while (have_posts()) : the_post(); ?>	
		
		<li style="width: 18.8%">
			<a class="item_img" href="<?php the_permalink();?>" title="<?php the_title();?>">
				<?php if(has_post_thumbnail() ) { ?>
					<a href="<?php the_permalink();?>" title=""><?php the_post_thumbnail('prd-thumb-image', array(80, 80)); ?></a>
				<?php }else{ ?>
					<img src="<?php bloginfo('template_url');?>/images/no-image.jpg" width="80" height="80" alt="no-image">
				<?php } ?>
			</a>
			
			<a class="product_link" href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a>
			<a title="View" href="<?php the_permalink();?>" class="button_small">View</a><br />
		</li>
		
		
	<?php endwhile; wp_reset_query();?>
		
		</ul>
	</div>
		</div>
		
		
	<script type="text/javascript">
		$('#productscategory_list').trigger('goto', [3-3]);
	</script>
		
		<?php else : ?><?php endif; ?>
		<div style="clear:both">&nbsp;</div>		
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