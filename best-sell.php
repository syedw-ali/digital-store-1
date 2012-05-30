<?php
	class Best_sell extends WP_Widget {
		
		
		function Best_sell(){
					$widget_ops = array('description'=> 'A widget that displays Best selling product.');
					$control_ops = array('width'=> 300, 'height'=> 300);
					$this->WP_Widget('best_sell', 'Best Selling Products', $widget_ops, $control_ops);
		}
		
		
		
		
		
		function form($instance){
							$instance = wp_parse_args( (array) $instance, 
							
												array('title' => 'Unknown Title', 
													'prod_one_title' => '',
													'prod_one_url' => '',
													'prod_two_title' => '',
													'prod_two_url' => '',
													'prod_three_title' => '',
													'prod_three_url' => '',
													'prod_four_title' => '',
													'prod_four_url' => '',
													'prod_five_title' => '',
													'prod_five_url' => ''
													
												));				
							$title = esc_attr($instance['title']);
							$prod_one_title = esc_attr($instance['prod_one_title']);
							$prod_one_url = esc_attr($instance['prod_one_url']);
							$prod_two_title = esc_attr($instance['prod_two_title']);
							$prod_two_url = esc_attr($instance['prod_two_url']);
							$prod_three_title = esc_attr($instance['prod_three_title']);
							$prod_three_url = esc_attr($instance['prod_three_url']);
							$prod_four_title = esc_attr($instance['prod_four_title']);
							$prod_four_url = esc_attr($instance['prod_four_url']);
							$prod_five_title = esc_attr($instance['prod_five_title']);
							$prod_five_url = esc_attr($instance['prod_five_url']);




						?>
						
				<p>
					<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
						<input class ="widefat"
							id="<?php echo $this->get_field_id('title'); ?>"
							name="<?php echo $this->get_field_name('title'); ?>"
							type="text"
							value="<?php echo esc_attr($title); ?>" />
				</p>
						
				<p>
				<label for="<?php echo $this->get_field_id('prod_one_title'); ?>"><?php _e('Product Title for 1:'); ?></label>
					<input class ="widefat"
						id="<?php echo $this->get_field_id('prod_one_title'); ?>"
						name="<?php echo $this->get_field_name('prod_one_title'); ?>"
						type="text"
						value="<?php echo esc_attr($prod_one_title); ?>" />
				</p>
				
				<p>
				<label for="<?php echo $this->get_field_id('prod_one_url'); ?>"><?php _e('URL:'); ?></label>
					<input class ="widefat"
						id="<?php echo $this->get_field_id('prod_one_url'); ?>"
						name="<?php echo $this->get_field_name('prod_one_url'); ?>"
						type="text"
						value="<?php echo esc_attr($prod_one_url); ?>" />
				</p>
						
				<p>
				<label for="<?php echo $this->get_field_id('prod_two_title'); ?>"><?php _e('Product Title for 2:'); ?></label>
					<input class ="widefat"
						id="<?php echo $this->get_field_id('prod_two_title'); ?>"
						name="<?php echo $this->get_field_name('prod_two_title'); ?>"
						type="text"
						value="<?php echo esc_attr($prod_two_title); ?>" />
				</p>
				
				<p>
				<label for="<?php echo $this->get_field_id('prod_two_url'); ?>"><?php _e('URL:'); ?></label>
					<input class ="widefat"
						id="<?php echo $this->get_field_id('prod_two_url'); ?>"
						name="<?php echo $this->get_field_name('prod_two_url'); ?>"
						type="text"
						value="<?php echo esc_attr($prod_two_url); ?>" />
				</p>
				
				<p>
				<label for="<?php echo $this->get_field_id('prod_three_title'); ?>"><?php _e('Product Title for 3:'); ?></label>
					<input class ="widefat"
						id="<?php echo $this->get_field_id('prod_three_title'); ?>"
						name="<?php echo $this->get_field_name('prod_three_title'); ?>"
						type="text"
						value="<?php echo esc_attr($prod_three_title); ?>" />
				</p>
				
				<p>
				<label for="<?php echo $this->get_field_id('prod_three_url'); ?>"><?php _e('URL:'); ?></label>
					<input class ="widefat"
						id="<?php echo $this->get_field_id('prod_three_url'); ?>"
						name="<?php echo $this->get_field_name('prod_three_url'); ?>"
						type="text"
						value="<?php echo esc_attr($prod_three_url); ?>" />
				</p>
				
				<p>
				<label for="<?php echo $this->get_field_id('prod_four_title'); ?>"><?php _e('Product Title for 4:'); ?></label>
					<input class ="widefat"
						id="<?php echo $this->get_field_id('prod_four_title'); ?>"
						name="<?php echo $this->get_field_name('prod_four_title'); ?>"
						type="text"
						value="<?php echo esc_attr($prod_four_title); ?>" />
				</p>
				
				<p>
				<label for="<?php echo $this->get_field_id('prod_four_url'); ?>"><?php _e('URL:'); ?></label>
					<input class ="widefat"
						id="<?php echo $this->get_field_id('prod_four_url'); ?>"
						name="<?php echo $this->get_field_name('prod_four_url'); ?>"
						type="text"
						value="<?php echo esc_attr($prod_four_url); ?>" />
				</p>
				
				<p>
				<label for="<?php echo $this->get_field_id('prod_five_title'); ?>"><?php _e('Product Title for 5:'); ?></label>
					<input class ="widefat"
						id="<?php echo $this->get_field_id('prod_five_title'); ?>"
						name="<?php echo $this->get_field_name('prod_five_title'); ?>"
						type="text"
						value="<?php echo esc_attr($prod_five_title); ?>" />
				</p>
				
				<p>
				<label for="<?php echo $this->get_field_id('prod_five_url'); ?>"><?php _e('URL:'); ?></label>
					<input class ="widefat"
						id="<?php echo $this->get_field_id('prod_five_url'); ?>"
						name="<?php echo $this->get_field_name('prod_five_url'); ?>"
						type="text"
						value="<?php echo esc_attr($prod_five_url); ?>" />
				</p>
				
				<?php
}
		
		function update($new_instance, $old_instance){
						$instance = $old_instance;
						
						//being careful to strip out any HTML and PHP tagsÑand use that to set the title on our instance.
						$instance['title'] = strip_tags($new_instance['title']); 
						$instance['prod_one_title'] = strip_tags($new_instance['prod_one_title']); 
						$instance['prod_one_url'] = strip_tags($new_instance['prod_one_url']); 
						
						$instance['prod_two_title'] = strip_tags($new_instance['prod_two_title']); 
						$instance['prod_two_url'] = strip_tags($new_instance['prod_two_url']); 
						
						$instance['prod_three_title'] = strip_tags($new_instance['prod_three_title']); 
						$instance['prod_three_url'] = strip_tags($new_instance['prod_three_url']); 
						
						$instance['prod_four_title'] = strip_tags($new_instance['prod_four_title']); 
						$instance['prod_four_url'] = strip_tags($new_instance['prod_four_url']); 
						
						$instance['prod_five_title'] = strip_tags($new_instance['prod_five_title']); 
						$instance['prod_five_url'] = strip_tags($new_instance['prod_five_url']); 
						
						return $instance;
}
					
	
		
		function widget($args, $instance){
			extract($args);
				$title = apply_filters('widget_title', empty($instance['title']) ? '&nbsp;' : $instance['title']);
				
				$prod_one_title = $instance['prod_one_title'];
				$prod_one_url = $instance['prod_one_url'];
				$prod_two_title = $instance['prod_two_title'];
				$prod_two_url = $instance['prod_two_url'];
				$prod_three_title = $instance['prod_three_title'];
				$prod_three_url = $instance['prod_three_url'];
				$prod_four_title = $instance['prod_four_title'];
				$prod_four_url = $instance['prod_four_url'];
				$prod_five_title = $instance['prod_five_title'];
				$prod_five_url = $instance['prod_five_url'];
				
				
				
				# Before the widget
				echo $before_widget;
				
				# The title
				if ($title)
					//echo $before_title .$title .$after_title;
					
				# Make the Widget
				?>
				
				<h4><?php echo $instance['title']; ?></h4>
				
			<div class="block_content">
				
				<ul>
					
				<li>
				<a href="<?php echo $instance['prod_one_url'];	?>" title="<?php echo $instance['prod_one_title'];?>">
				<span><?php echo 01 .'&#46;' . '&nbsp;' ?></span><?php echo $instance['prod_one_title'];?></a>
				</li>
				<li>
				<a href="<?php echo $instance['prod_two_url'];	?>" title="<?php echo $instance['prod_two_title'];?>">
				<span><?php echo 02 .'&#46;' . '&nbsp;' ?></span><?php echo $instance['prod_two_title'];?></a>
				</li>
				<li>
				<a href="<?php echo $instance['prod_three_url'];	?>" title="<?php echo $instance['prod_three_title'];?>">
				<span><?php echo 03 .'&#46;' . '&nbsp;' ?></span><?php echo $instance['prod_three_title'];?></a>
				</li>
				<li>
				<a href="<?php echo $instance['prod_four_url'];	?>" title="<?php echo $instance['prod_four_title'];?>">
				<span><?php echo 04 .'&#46;' . '&nbsp;' ?></span><?php echo $instance['prod_four_title'];?></a>
				</li>
				<li>
				<a href="<?php echo $instance['prod_five_url'];	?>" title="<?php echo $instance['prod_five_title'];?>">
				<span><?php echo 05 .'&#46;' . '&nbsp;' ?></span><?php echo $instance['prod_five_title'];?></a>
				</li>
					
				</ul>
				
				<div class="clearblock"></div>
			</div>
								
				<?php
				
				# After the widget
				echo $after_widget;
		}
}
register_widget('Best_sell');
?>