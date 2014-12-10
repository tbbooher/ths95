<?php
/**
 * Template for displaying static pages
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
//$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<div class="col-sm-7 col-md-9 col-lg-8 content-area" id="main-column">
	<main id="main" class="site-main" role="main">
		<?php 
			while (have_posts()) {
				the_post();

				get_template_part('content', 'page');

				echo "\n\n";

				// If comments are open or we have at least one comment, load up the comment template
				// we don't think we will every have comments on a static page
				if (comments_open() || '0' != get_comments_number()) {
					comments_template();
				}

				echo "\n\n";

			} //endwhile;
		?> 
		</main>
	</div>
	<aside class="col-sm-5 col-md-3 col-lg-4 content-area" id="main-column">
		<div class="the_image">
			<?php the_post_thumbnail('medium'); ?>
		</div>
        <?php get_template_part('sidebar','right'); ?>
	</aside>

<?php get_footer(); ?> 