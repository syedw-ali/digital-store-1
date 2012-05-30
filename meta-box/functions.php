<?php
/**
* Create meta box for post
*/


/*Define the custom box in posts*/

// backwards compatible (before WP 3.0)
add_action("admin_init", "products_page_init", 1);

// Latest wp version after 3.0
add_action("add_meta_boxes", "products_page_init");

function products_page_init(){
	
	  add_meta_box("prod_details_meta", "Products Details", "prod_details_meta", "post", "normal", "low");
  
}

function prod_details_meta($object, $box){

	global $post;
	$custom = get_post_custom($post->ID);
	$feat_photo = $custom["feat_photo"][0];
	$prod_price = $custom["prod_price"][0];
  	$prod_stock = $custom["prod_stock"][0];
  	$prod_more = $custom["prod_more"][0];
  	$prod_width = $custom["prod_width"][0];
  	$prod_height = $custom["prod_height"][0];
  	$prod_depth = $custom["prod_depth"][0];
  	$prod_weight = $custom["prod_weight"][0];
  	$prod_size = $custom["prod_size"][0];
?>

	<div id="prod_details">
		<p>	
			<label class="lbl_1" for ="upcoming_details_meta"><strong>Sticky post featured photo (display only in home page)</strong></label>
			<img src="<?php echo $feat_photo; ?>" /><br/><br/>
			<input type="text" size="40" name="feat_photo" id="feat_photo" value="<?php echo $feat_photo; ?>" />
			<input id="upload_image_button" type="button" value="Upload logo" />
			<p class="description">Image Size:  240 X 123 pixels</p>
		
		</p>
		
		
		<p>
			<label class="lbl_1" for ="upcoming_details_meta"><strong>Price</strong></label>
  			<input name="prod_price" id="up-date" value= "<?php echo $prod_price ?>" size="10" type="textfield">
  			<p class="description">Enter Price (e.g. $100)</p>
  		</p>
		<p>
			<label class="lbl_1" for ="upcoming_details_meta"><strong>Stock</strong></label>
  			<input name="prod_stock" id="up-date" value= "<?php echo $prod_stock ?>" size="10" type="textfield">
  			<p class="description">Enter Stock </p>
  		</p>
  		<p>
			<label class="lbl_1" for ="upcoming_details_meta"><strong>More info</strong></label>
  			<textarea name="prod_more" id="up-date" cols="50" rows="10"><?php echo $prod_more ?></textarea>
  			
  		</p>
  		
			<label class="lbl_11" for ="upcoming_details_meta"><strong>Data Sheet</strong></label>
  		
  		
  		<p>
  			<label class="lbl_1" for ="upcoming_details_meta"><strong>Width</strong></label>
  			<input name="prod_width" id="up-date" value= "<?php echo $prod_width ?>" size="10" type="textfield">
  		</p>
  		<p>
  			<label class="lbl_1" for ="upcoming_details_meta"><strong>Height</strong></label>
  			<input name="prod_height" id="up-date" value= "<?php echo $prod_height ?>" size="10" type="textfield">
  		</p>
		
		<p>
  			<label class="lbl_1" for ="upcoming_details_meta"><strong>Depth</strong></label>
  			<input name="prod_depth" id="up-date" value= "<?php echo $prod_depth ?>" size="10" type="textfield">
  		</p>

		<p>
  			<label class="lbl_1" for ="upcoming_details_meta"><strong>Weight</strong></label>
  			<input name="prod_weight" id="up-date" value= "<?php echo $prod_weight ?>" size="10" type="textfield">
  		</p>

  		<p>
  			<label class="lbl_1" for ="upcoming_details_meta"><strong>Size</strong></label>
  			<input name="prod_size" id="up-date" value= "<?php echo $prod_size ?>" size="10" type="textfield">
  		</p>

  		
	
	</div>
<style type="text/css">
	#up-date, #up-title, #up-link, #up-descr{  
	padding: 9px;  
	border: solid 1px #E5E5E5;  
	outline: 0;  
	font: normal 13px/100% Verdana, Tahoma, sans-serif;    
	background: #FFFFFF;  
	box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
	-moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
	-webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
} 
.lbl_1, .lbl_2, .lbl_3, .lbl_4 {
	float: left;
	text-align: left;
	color: #336699;
	width: 120px;
	font-family:"Century Gothic"; font-size: 12px; font-weight:bold;
	margin: 10px 0;
}
.lbl_11{
	color: #336699;
}



</style>  	
<?php }
add_action('save_post', 'save_details_post');
  function save_details_post(){
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
    return $post_id;
    
    global $post;
    update_post_meta($post->ID, "feat_photo", $_POST["feat_photo"]);
    update_post_meta($post->ID, "prod_price", $_POST["prod_price"]);
    update_post_meta($post->ID, "prod_stock", $_POST["prod_stock"]);
	update_post_meta($post->ID, "prod_more", $_POST["prod_more"]);
	update_post_meta($post->ID, "prod_width", $_POST["prod_width"]);
	update_post_meta($post->ID, "prod_height", $_POST["prod_height"]);
	update_post_meta($post->ID, "prod_depth", $_POST["prod_depth"]);
	update_post_meta($post->ID, "prod_weight", $_POST["prod_weight"]);
	update_post_meta($post->ID, "prod_size", $_POST["prod_size"]);
}

?>