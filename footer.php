<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Footer
	/*-----------------------------------------------------------------------------------*/
?>

<footer class="site-footer" role="contentinfo">
	<div class="site-info container">
		<p>
			<a href="http://wordpress.org/" title="Built on WordPress">Powered by WordPress</a> | 
			<a href="http://ciaranmahoney.me/csm-minimal-wordpress-theme/" title="WordPress Theme by Ciaran Mahoney">CSM WordPress Theme by Ciaran Mahoney</a>
		</p>
		<p>
			&copy; <?php $options = get_option('csm_theme_settings'); echo $options["csm_theme_text_field_copyright"];?> 
		</p>
	</div><!-- .site-info -->

	
	</div>
	<?php wp_footer(); ?>
</footer><!-- #colophon .site-footer -->




</body>
</html>