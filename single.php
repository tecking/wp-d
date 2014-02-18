<?php get_header(); ?>

<div class="row main-content">
	<div class="large-9 large-centered columns">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<div class="large-2 columns show-for-large-up">
				<div class="row">
					<div class="large-12 small-3 columns">
						<?php
							$author_bio_avatar_size = apply_filters( 'wp-d_author_bio_avatar_size', 320 );
							echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div>
					<div class="large-12 small-9 columns">
						<p><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php the_author(); ?></a></p>
					</div>
				</div>
			</div>
			<div class="large-10 columns">
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="prime-banner-top">  
						<?php do_action('wpdbones-ad-content-above'); ?>
					</div>
					<h2> 
						<?php the_title(); ?>
					</h2>
					<date>
						<?php the_time('Y.m.d'); ?> | 
					</date>
					<?php the_category(' | '); ?>
					<?php the_tags('', ' | '); ?>
					<div class="sbver">
						<?php SocialButtonVertical(); ?>
					</div>
					<?php the_content(); ?>
					<div class="prime-banner-bottom">  
						<?php do_action('wpdbones-ad-content-below'); ?>
					</div>
					<div class="sbver">
						<?php SocialButtonVertical(); ?>
					</div>
					<?php edit_post_link('編集','(',')'); ?>
					<?php wp_link_pages( ); ?>
					<div class="row">
						<div class="small-6 columns">
							<?php previous_post_link( '%link', '<span class="meta-nav button small">' . _x( '&larr;前の記事', '', '' ) . '</span>' ); ?>
						</div>
						<div class="small-6 columns text-right">
							<?php next_post_link( '%link', '<span class="meta-nav button small">' . _x( '次の記事&rarr;', '', '' ) . '</span>' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile;?>
		<?php comments_template(); ?>
		<hr>
		<div class="row">
			<div class="large-12 columns">
				<?php wp_d_paging_nav(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
