<?php
/**
 * Template for dispalying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
?> 
<?php get_sidebar('left'); ?> 
				<div class="col-md-8 content-area" id="main-column">
					<main id="main" class="site-main" role="main">
                        <h1>Workout of the Day</h1>
						<?php 
						while (have_posts()) {
							the_post();

							get_template_part('content', 'wod');

							echo "\n\n";
							
							bootstrapBasicPagination();

							echo "\n\n";
							
							// If comments are open or we have at least one comment, load up the comment template
							if (comments_open() || '0' != get_comments_number()) {
								comments_template();
							}

							echo "\n\n";

						} //endwhile;
						?> 
					</main>
				</div>
                <aside class="col-md-4 content-area">
                    <h3>Leaderboard</h3>
                    <div class="content-box big ch-item bottom-pad-small well">
                        
                    </div>
                    <?php get_template_part('sidebar','right'); ?>
                </aside>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 