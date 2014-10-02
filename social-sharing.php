<div id="social-sharing">
	<span>Share This:</span>

	<span class="sharing-icon facebook-icon">
		<a href="https://www.facebook.com/sharer/sharer.php?u=
			<?php if(is_home()){echo home_url();}else{the_permalink();} ?>" target="_blank" title="Share this page on Facebook">
			<i class="fa fa-facebook"></i>
		</a>
	</span>

	<span class="sharing-icon twitter-icon">
		<a href="http://twitter.com/share?url=
			<?php $options = get_option('csm_theme_settings');?>
			<?php 
				if(is_home()){echo home_url();}else{the_permalink();} ?>&text=<?php the_title(); ?>&via=<?php echo $options["csm_theme_text_field_twitter"];?>&hashtags=
				<?php 
					$categories = get_the_category();
					$seperator = ', ';	
					$output = '';
					if($categories){	
						foreach($categories as $category) { 
						    $output .= $category->cat_name . $seperator; 
						}
					
					echo trim($output, $seperator);
					}
					?>" target="_blank" title="Tweet this post on Twitter">
					<i class="fa fa-twitter"></i>
		</a>
	</span>
	
	<span class="sharing-icon gplus-icon"> 
		<a href="https://plusone.google.com/_/+1/confirm?hl=en&url=
			<?php if(is_home()){echo home_url();}else{the_permalink();} ?>" target="_blank" title="Plus one this page on Google">
			<i class="fa fa-google-plus"></i>
		</a>
	</span>
</div>
