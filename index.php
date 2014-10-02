<?php
	get_header();
	
	/*-----------------------------------------------------------------------------------*/
	/* Start Home loop
	/*-----------------------------------------------------------------------------------*/
	
	
	
	if( is_home() || is_archive() ) {
	
?>
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1 class="title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title() ?>
							</a>
						</h1>
						<div class="meta clearfix">
							<div class="category">Posted in: <?php echo get_the_category_list(', '); ?> on <?php the_time('F jS, Y') ?></div>
							<div class="comments"><?php if( comments_open() ) : ?>
								<span class="comments-link">
									<?php comments_popup_link( __( '&nbsp |&nbsp Comment', 'break' ), __( '&nbsp | &nbsp 1 Comment', 'break' ), __( '&nbsp | &nbsp % Comments', 'break' ) ); ?>
								</span>
							<?php endif; ?>
							</div>
						</div><!-- Meta -->
						
						<div class="the-content">
							<div class="featured_thumbnail">
								<?php the_post_thumbnail( 'small' ); ?> 
							</div>
							
							<?php the_excerpt( 'Continue...' ); ?>
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
						
						<!-- Meta -->
						<div class="meta clearfix">
							<div class="tags"><?php echo get_the_tag_list( 'Tagged: &nbsp;', ',&nbsp;' ); ?></div>
						</div><!-- /Meta -->
						
					</article>

				<?php endwhile; ?>
				
				<!-- pagintation -->
				<div id="pagination" class="clearfix">
					<div class="past-page"><?php previous_posts_link( 'Newer &raquo;' ); ?></div>
					<div class="next-page"><?php next_posts_link( ' &laquo; Older' ); ?></div>
				</div><!-- pagination -->


			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>

		
	<?php } //end is_home(); ?>

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Single loop
	/*-----------------------------------------------------------------------------------*/
	
	if( is_single() ) {
?>


			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1 class="title"><?php the_title() ?></h1>
						<div class="meta clearfix">
							<div class="category">Posted in: <?php echo get_the_category_list(', '); ?> on <?php the_time('F jS, Y') ?></div>
							<div class="comments"><?php if( comments_open() ) : ?>
								<span class="comments-link">
									<?php comments_popup_link( __( '&nbsp |&nbsp Comment', 'break' ), __( '&nbsp | &nbsp 1 Comment', 'break' ), __( '&nbsp | &nbsp % Comments', 'break' ) ); ?>
								</span>
							<?php endif; ?>
							</div>
						</div><!-- Meta -->
						
						<div class="the-content">
							<?php the_content( 'Continue...' ); ?>
							
							<?php wp_link_pages(); ?>
							<?php do_action('after_post_content'); ?>
						</div><!-- the-content -->
						
						<!-- Meta -->
						<div class="meta clearfix">
							<div class="tags"><?php echo get_the_tag_list( 'Tagged: &nbsp;', ',&nbsp;' ); ?></div>
						</div><!-- /Meta -->
						
						<!-- Recent Posts -->
						<div class="recent-posts">
							<h3>5 Most Recent Posts</h2>
							<ul>
								<?php
									$args = array( 'numberposts' => '5', 'post_status' => 'publish');
									$recent_posts = wp_get_recent_posts( $args );
									foreach( $recent_posts as $recent ){
										echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
									}
								?>
								
							</ul>
						</div><!-- /Recents -->			
						
					</article>

				<?php endwhile; ?>
				
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>


			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>


	<?php } //end is_single(); ?>
	
<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Page loop
	/*-----------------------------------------------------------------------------------*/
	
	if( is_page()) {
?>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<h1 class="title"><?php the_title() ?></h1>
						
						<div class="the-content">
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
						
					</article>

				<?php endwhile; ?>

			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>

	<?php } // end is_page(); ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

</div><!-- / container-->

<?php get_footer();?>