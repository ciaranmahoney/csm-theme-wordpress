<?php

add_action( 'admin_menu', 'csm_theme_add_admin_menu' );
add_action( 'admin_init', 'csm_theme_settings_init' );


function csm_theme_add_admin_menu(  ) { 

	add_submenu_page( 'themes.php', 'CSM Theme Options', 'CSM Theme Options', 'manage_options', 'csm_theme', 'csm_theme_options_page' );

}

function csm_theme_settings_exist(  ) { 

	if( false == get_option( 'csm_theme_settings' ) ) { 

		add_option( 'csm_theme_settings' );

	}

}

function csm_theme_settings_init(  ) { 

	register_setting( 'themePage', 'csm_theme_settings', 'csm_theme_settings_validation' );

	add_settings_section(
		'csm_theme_theme_section', 
		__( '', 'csm_theme_options_wp' ), 
		'csm_theme_theme_section_callback', 
		'themePage'
	);

	//Header image settings field
	add_settings_field( 
		'csm_theme_text_field_header_image', 
		__( 'Header Image URL', 'csm_theme_options_wp' ), 
		'csm_theme_text_field_header_image_render', 
		'themePage', 
		'csm_theme_theme_section' 
	);

	//Favicon image settings field
	add_settings_field( 
		'csm_theme_text_field_favicon_image', 
		__( 'Favicon Image URL', 'csm_theme_options_wp' ), 
		'csm_theme_text_field_favicon_image_render', 
		'themePage', 
		'csm_theme_theme_section' 
	);

	//Twitter image settings field
	add_settings_field( 
		'csm_theme_text_field_twitter', 
		__( 'Twitter Username', 'csm_theme_options_wp' ), 
		'csm_theme_text_field_twitter_render', 
		'themePage', 
		'csm_theme_theme_section' 
	);

	//Github image settings field
	add_settings_field( 
		'csm_theme_text_field_github', 
		__( 'Github Username', 'csm_theme_options_wp' ), 
		'csm_theme_text_field_github_render', 
		'themePage', 
		'csm_theme_theme_section' 
	);

	//Instagram image settings field
	add_settings_field( 
		'csm_theme_text_field_instagram', 
		__( 'Instagram Username', 'csm_theme_options_wp' ), 
		'csm_theme_text_field_instagram_render', 
		'themePage', 
		'csm_theme_theme_section' 
	);

	//Behance image settings field
	add_settings_field( 
		'csm_theme_text_field_behance', 
		__( 'Behance Username', 'csm_theme_options_wp' ), 
		'csm_theme_text_field_behance_render', 
		'themePage', 
		'csm_theme_theme_section' 
	);

	//LinkedIn image settings field
	add_settings_field( 
		'csm_theme_text_field_linkedin', 
		__( 'LinkedIn Username', 'csm_theme_options_wp' ), 
		'csm_theme_text_field_linkedin_render', 
		'themePage', 
		'csm_theme_theme_section' 
	);

	//Facebook image settings field
	add_settings_field( 
		'csm_theme_text_field_facebook', 
		__( 'Facebook Full URL', 'csm_theme_options_wp' ), 
		'csm_theme_text_field_facebook_render', 
		'themePage', 
		'csm_theme_theme_section' 
	);

	//Copyright settings field
	add_settings_field( 
		'csm_theme_text_field_copyright', 
		__( 'Footer Copyright Notice', 'csm_theme_options_wp' ), 
		'csm_theme_text_field_copyright_render', 
		'themePage', 
		'csm_theme_theme_section' 
	);

	//Base color dropdown 
	add_settings_field( 
		'csm_theme_select_field_base_color', 
		__( 'Theme Base Color', 'csm_theme_options_wp' ), 
		'csm_theme_select_field_base_color_render', 
		'themePage', 
		'csm_theme_theme_section' 
	);

	//Head action hook (wp_head)
	add_settings_field( 
		'csm_theme_text_area_head_hook', 
		__( 'Insert into wp_head hook (just before closing head tag)', 'csm_theme_options_wp' ), 
		'csm_theme_text_area_head_hook_render', 
		'themePage', 
		'csm_theme_theme_section' 
	);

	//After body action hook (custom hook)
	add_settings_field( 
		'csm_theme_text_area_after_body_hook', 
		__( 'Insert into csm_after_body hook (just after opening body tag)', 'csm_theme_options_wp' ), 
		'csm_theme_text_area_after_body_hook_render', 
		'themePage', 
		'csm_theme_theme_section' 
	);

	//Footer action hook  (wp_footer)
	add_settings_field( 
		'csm_theme_text_area_footer_hook', 
		__( 'Insert into wp_footer hook (just after opening footer tag)', 'csm_theme_options_wp' ), 
		'csm_theme_text_area_footer_hook_render', 
		'themePage', 
		'csm_theme_theme_section' 
	);

}

function csm_theme_text_field_header_image_render(  ) { 

	$options = get_option( 'csm_theme_settings' );
	?>
	<input type='text' name='csm_theme_settings[csm_theme_text_field_header_image]' size='50' placeholder='Header Image URL (135x135px)' value='<?php echo $options['csm_theme_text_field_header_image']; ?>'>
	<?php

}

function csm_theme_text_field_favicon_image_render(  ) { 

	$options = get_option( 'csm_theme_settings' );
	?>
	<input type='text' name='csm_theme_settings[csm_theme_text_field_favicon_image]' size='50' placeholder='Favicon Image URL' value='<?php echo $options['csm_theme_text_field_favicon_image']; ?>'>
	<?php

}

function csm_theme_text_field_copyright_render(  ) { 

	$options = get_option( 'csm_theme_settings' );
	?>
	<input type='text' name='csm_theme_settings[csm_theme_text_field_copyright]' size='50' placeholder='Eg. Copyright Ciaran Mahoney 2009- 2014 | All rights reserved' value='<?php echo $options['csm_theme_text_field_copyright']; ?>'>
	<?php

}

function csm_theme_text_field_twitter_render(  ) { 

	$options = get_option( 'csm_theme_settings' );
	?>
	<input type='text' class="csm-twitter-input" name='csm_theme_settings[csm_theme_text_field_twitter]' size='50' placeholder='Twitter Username (without @, eg. ciaransm)' value='<?php echo $options['csm_theme_text_field_twitter']; ?>'>
	<?php

}

function csm_theme_text_field_github_render(  ) { 

	$options = get_option( 'csm_theme_settings' );
	?>
	<input type='text' class="csm-github-input" name='csm_theme_settings[csm_theme_text_field_github]' size='50' placeholder='Username (eg. ciaranmahoney)' value='<?php echo $options['csm_theme_text_field_github']; ?>'>
	<?php

}

function csm_theme_text_field_instagram_render(  ) { 

	$options = get_option( 'csm_theme_settings' );
	?>
	<input type='text' class="csm-instagram-input" name='csm_theme_settings[csm_theme_text_field_instagram]' size='50' placeholder='Instagram Username (eg. ciaranmahoney)' value='<?php echo $options['csm_theme_text_field_instagram']; ?>'>
	<?php

}

function csm_theme_text_field_behance_render(  ) { 

	$options = get_option( 'csm_theme_settings' );
	?>
	<input type='text' class="csm-behance-input" name='csm_theme_settings[csm_theme_text_field_behance]' size='50' placeholder='Behance Username (eg. ciaranmahoney)' value='<?php echo $options['csm_theme_text_field_behance']; ?>'>
	<?php

}

function csm_theme_text_field_linkedin_render(  ) { 

	$options = get_option( 'csm_theme_settings' );
	?>
	<input type='text' class="csm-linkedin-input" name='csm_theme_settings[csm_theme_text_field_linkedin]' size='50' placeholder='LinkedIn Username (eg. ciaranmahoney)' value='<?php echo $options['csm_theme_text_field_linkedin']; ?>'>
	<?php

}

function csm_theme_text_field_facebook_render(  ) { 

	$options = get_option( 'csm_theme_settings' );
	?>
	<input type='text' class="csm-facebook-input" name='csm_theme_settings[csm_theme_text_field_facebook]' size='50' placeholder='Facebook Full URL  (eg. https://www.facebook.com/georgehtakei)' value='<?php echo $options['csm_theme_text_field_facebook']; ?>'>
	<?php

}

function csm_theme_select_field_base_color_render(  ) { 

	$options = get_option( 'csm_theme_settings' );
	?>
	<select name='csm_theme_settings[csm_theme_select_field_base_color]'>
		<option value='blue' <?php selected( $options['csm_theme_select_field_base_color'], 'blue' ); ?>>Blue</option>
		<option value='pink' <?php selected( $options['csm_theme_select_field_base_color'], 'pink' ); ?>>Pink</option>
		<option value='grey' <?php selected( $options['csm_theme_select_field_base_color'], 'grey' ); ?>>Grey</option>
	</select>

	<?php

}

function csm_theme_text_area_head_hook_render(  ) { 

	$options = get_option( 'csm_theme_settings' );
	?>
	<textarea class="csm-head-hook-input" name='csm_theme_settings[csm_theme_text_area_head_hook]' rows="10" cols="50%" placeholder='You can insert html or js into the wp_head hook here.'><?php if(isset($options['csm_theme_text_area_head_hook'])) {echo $options['csm_theme_text_area_head_hook'];} ?></textarea>
	<?php

}

function csm_theme_text_area_footer_hook_render(  ) { 
	$options = get_option( 'csm_theme_settings' );
	?>
	<textarea class="csm-footer-hook-input" name='csm_theme_settings[csm_theme_text_area_footer_hook]' rows="10" cols="50%" placeholder='You can insert html or js into the wp_footer hook here.'><?php if (isset($options['csm_theme_text_area_footer_hook'])) {echo $options['csm_theme_text_area_footer_hook'];}?></textarea>
	<?php

}

function csm_theme_text_area_after_body_hook_render(  ) { 
	$options = get_option( 'csm_theme_settings' );
	?>
	<textarea class="csm-after-body-hook-input" name='csm_theme_settings[csm_theme_text_area_after_body_hook]' rows="10" cols="50%" placeholder='You can insert html or js just after the opening body tag here.'><?php if (isset($options['csm_theme_text_area_after_body_hook'])) {echo $options['csm_theme_text_area_after_body_hook'];}?></textarea>
	<?php

}

function csm_theme_theme_section_callback(  ) { 

	echo __( 'Got questions? Get hold of me on Twitter <a href="https://twitter.com/ciaransm" target="_blank">@ciaransm</a>', 'csm_theme_options_wp' );

}

function csm_theme_settings_validation($input){
 	 // Create our array for storing the validated options
    $output = array();
     
    // Loop through each of the incoming options
    foreach( $input as $key => $value ) {
         
        // Check to see if the current option has a value. If so, process it.
        if(isset($input[$key])){

        	if($key == "csm_theme_text_area_after_body_hook" || $key == "csm_theme_text_area_head_hook" || $key == "csm_theme_text_area_footer_hook"){
	            // Don't strip tags from wp_head hook
	        	$output[$key] = $input[$key];
             
	        } else {
	        	// Strip all HTML and PHP tags and properly handle quoted strings
	            $output[$key] = strip_tags( stripslashes( $input[ $key ] ) );
	        }

	     }// end if
         
    } // end foreach
     
    // Return the array processing any additional functions filtered by this action
    return apply_filters( 'sandbox_theme_validate_input_examples', $output, $input );
 
}

function csm_theme_options_page(  ) { 

	?>
	<form action='options.php' method='post'>
		
		<h2>CSM Theme</h2>
		
		<?php
		settings_fields( 'themePage' );
		do_settings_sections( 'themePage' );
		submit_button();
		?>
		
	</form>
	<?php

}

// Add CSS class to body based on base color option
add_filter( 'body_class', 'csm_theme_base_color_class' );
function csm_theme_base_color_class( $classes ) {
	$options = get_option('csm_theme_settings');
//	$csm_base_color = ;
	// add color class to the $classes array
	$classes[] = 'csm_base_color_' . $options['csm_theme_select_field_base_color'];
	// return the $classes array
	return $classes;
}


function csm_head_hook_html () {
	$options = get_option('csm_theme_settings');
	if($options['csm_theme_text_area_head_hook'] != "") {
		echo $options['csm_theme_text_area_head_hook'];
	}
}
add_action('wp_head','csm_head_hook_html');

function csm_after_body_hook_html () {
	$options = get_option('csm_theme_settings');
	if($options['csm_theme_text_area_after_body_hook'] != "") {
		echo $options['csm_theme_text_area_after_body_hook'];
	}
}
add_action('csm_after_body','csm_after_body_hook_html');

function csm_footer_hook_html () {
	$options = get_option('csm_theme_settings');
	if($options['csm_theme_text_area_footer_hook'] != "") {
		echo $options['csm_theme_text_area_footer_hook'];
	}
}
add_action('wp_footer','csm_footer_hook_html');

//Add Social links to header if applicable
function csm_theme_insert_social_links() {
	$options = get_option('csm_theme_settings');

	//start social icons ul
	echo '<div class="menu-social-icons-container"><ul class="menu-social-icons-ul">';

	//Add Twitter icon
	if($options["csm_theme_text_field_twitter"] != ""){
		echo '<li id="twitter-header-link" class="menu-item menu-item-type-custom menu-item-object-custom">
				<a href="https://twitter.com/' . $options["csm_theme_text_field_twitter"] . '" target="_blank"><img class="menu-social-icon" src="' . get_template_directory_uri() . '/img/twitter28.png" /></a>
			</li>';
	}

	//Add Github icon
	if($options["csm_theme_text_field_github"] != ""){
		echo '<li id="github-header-link" class="menu-item menu-item-type-custom menu-item-object-custom">
				<a href="https://github.com/' . $options["csm_theme_text_field_github"] . '" target="_blank"><img class="menu-social-icon" src="' . get_template_directory_uri() . '/img/github28.png" /></a>
			</li>';
	}

	//Add Instagram icon
	if($options["csm_theme_text_field_instagram"] != ""){
		echo '<li id="instagram-header-link" class="menu-item menu-item-type-custom menu-item-object-custom">
				<a href="https://instagram.com/' . $options["csm_theme_text_field_instagram"] . '" target="_blank"><img class="menu-social-icon" src="' . get_template_directory_uri() . '/img/instagram28.png" /></a>
			</li>';
	}

	//Add Behance icon
	if($options["csm_theme_text_field_behance"] != ""){
		echo '<li id="behance-header-link" class="menu-item menu-item-type-custom menu-item-object-custom">
				<a href="https://behance.net/' . $options["csm_theme_text_field_behance"] . '" target="_blank"><img class="menu-social-icon" src="' . get_template_directory_uri() . '/img/behance28.png" /></a>
			</li>';
	}

	//Add LinkedIn icon
	if($options["csm_theme_text_field_linkedin"] != ""){
		echo '<li id="linkedin-header-link" class="menu-item menu-item-type-custom menu-item-object-custom">
				<a href="http://www.linkedin.com/in/' . $options["csm_theme_text_field_linkedin"] . '" target="_blank"><img class="menu-social-icon" src="' . get_template_directory_uri() . '/img/linkedin28.png" /></a>
			</li>';
	}

	//Add Facebook icon
	if($options["csm_theme_text_field_facebook"] != ""){
		echo '<li id="facebook-header-link" class="menu-item menu-item-type-custom menu-item-object-custom">
				<a href="' . $options["csm_theme_text_field_facebook"] . '" target="_blank"><img class="menu-social-icon" src="' . get_template_directory_uri() . '/img/facebook28.png" /></a>
			</li>';
	}

	echo '</ul></div>';
}
?>