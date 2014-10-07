<?php
	get_header();
?>
				
				<article class="post error">
					<h1 class="404 title">Sorry, this page doesn't exist. 404 error!</h1>
					<div class="the-content">
						<p class="content">Maybe the url is incorrect or the page has moved... Sorry about that... As a consolation, here's Charlie. </p>

						<p class="content">You can try going back up and clicking a link on the menu or look below Charlie for a full list of pages on this website.</p>
						
						<img src="<?php bloginfo( 'template_url' ); ?>/img/404-image.jpg"/>
						<p class="wp-caption-text">Photo Credit: <a href="https://www.flickr.com/photos/ciaranmahoney/6087844508/in/set-72157627320395073">Ciaran Mahoney</a> via Flickr <a href="https://creativecommons.org/licenses/by-nc-sa/2.0/">cc</a></p>
					
						<ul>
							<?php wp_list_pages('title_li='); ?>
						</ul>

					<div>
				</article>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

</div><!-- / container-->
<?php get_footer();?>