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
				<div class="col-md-8 content-area" id="main-column">
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
                    <!-- now display coaches -->
                    <div id="coach-list">
                        <?php
                        $args = array( 'post_type' => 'coach', 'posts_per_page' => 20 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            get_template_part('content', 'coach');
                        endwhile;
                        ?>
                    </div>
				</div>
                <div class="col-md-4 content-area" id="main-column">
                    <h3>Upcoming Events</h3>
                    <div class="content-box big ch-item bottom-pad-small">
                        <?php
                        $args = array( 'post_type' => 'news_item', 'posts_per_page' => 1 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                          the_title( '<h4>', '</h4>' );
                          echo '<div class="entry-content">';
                          the_content();
                          echo '</div>';
                        endwhile;
                        ?>    
                    </div>
                    <div class="content-box big ch-item bottom-pad-small">
                    <h3>Latest News</h3>
                    <?php
                    $args = array( 'post_type' => 'business_item', 'posts_per_page' => 1 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                      the_title( '<h4>', '</h4>' );
                      echo '<div class="entry-content">';
                      the_content();
                      echo '</div>';
                    endwhile;
                    ?>    
                    </div>
                </div>

<?php get_footer(); ?> 