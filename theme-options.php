<?php
// create custom plugin settings menu
add_action('admin_menu', 'baw_create_menu');

function baw_create_menu() {

	//create new top-level menu
	add_menu_page('Theme Plugin Settings', 'General theme Settings', 'administrator', __FILE__, 'baw_settings_page');

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}

// responsible for changing the button name from settings option

function register_mysettings() {
	//register our settings
	
	register_setting( 'baw-settings-group', 'best_sell' );
	register_setting( 'baw-settings-group', 'best_sell_id' );
	register_setting( 'baw-settings-group', 'cat_descr_1' );
	register_setting( 'baw-settings-group', 'phone_number' );
	register_setting( 'baw-settings-group', 'power_by' );
	
	
	
	
}


function baw_settings_page() {
?>

<h1>General Theme Settings</h1>
<div class="wrap">
<form class="form" method="post" action="options.php">
    <?php settings_fields( 'baw-settings-group' ); ?>    
    
    <h2>Enter your best Selling Products</h2>
    <p>
    	<label for="fb">Header title [i.e. Best Selling Products]</label> 
    	<input type="text" name="best_sell" class="phone_number" value="<?php echo get_option('best_sell'); ?>" />
    </p>
	
	<div style="clear:both">&nbsp;</div>
	
	 <p>
    	<label for="fb">Enter Post ID's</label> 
    	<input type="text" name="best_sell_id" class="phone_number" value="<?php echo get_option('best_sell_id'); ?>" />
    </p>
    
    <p class="submit">
    	<input type="submit" class="button-primary" value="Save Changes" />
    </p>
    
    
    <h2>Display in Category Page</h2>    

    <p>
    	<label for="fb">Category page descriptions</label> 
    	<textarea name="cat_descr_1" class="phone_number" cols="20" rows="10" value="<?php echo get_option('cat_descr_1'); ?>"><?php echo get_option('cat_descr_1'); ?></textarea>
    </p>


	<p class="submit">
    	<input type="submit" class="button-primary" value="Save Changes" />
    </p> 
    
    

	<h2>Display in footer section</h2>    
    <p>
    	<label for="fb">Phone number</label> 
    	<input type="text" name="phone_number" class="phone_number" value="<?php echo get_option('phone_number'); ?>" />
    </p>
    
    
    <p>
    	<label for="twt">Powered By</label>
    	<input type="text" name="power_by" class="power_by" value="<?php echo get_option('power_by'); ?>" />  
    </p>   
    
	<p class="submit">
    	<input type="submit" class="button-primary" value="Save Changes" />
    </p>    

</form>
</div>

<style type="text/css">

* {
  border: none;
}

.wrap{margin: 10px auto;}
h1{font-family:"Century Gothic"; font-size: 40px; font-weight:bold; color: #336699;border-bottom: 1px solid #CCC; line-height: 1.5em;}

.power_by, .phone_number{  
	padding: 9px;  
	border: solid 1px #E5E5E5;  
	 outline: 0;  
	font: normal 13px/100% Verdana, Tahoma, sans-serif;  
	width: 300px;  
	background: #FFFFFF;  
	box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
	-moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
	-webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
} 


.form label{
	float: left;
	text-align: right;
	margin-right: 15px;
	color: #336699;
	width: 100px;
	font-family:"Century Gothic"; font-size: 12px; font-weight:bold;
}



.title_link{
	
	float: none!important;
	margin-right: 0!important;

}
submit.button-primary {
	width: auto;
	padding: 9px 15px;
	background: #336699;
	border: 0;
	font-size: 14px;
	color: #FFFFFF;
	}      
 
</style>
<?php } ?>