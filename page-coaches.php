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
				<div class="col-md-9 content-area" id="main-column">
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

<div class="col-md-3 content-area" id="main-column">
                    <h3>Upcoming Events</h3>
                    
                        <div class="entry-content">
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
                      <h3>Recent News</h3>      
                         <?php the_post_thumbnail('medium'); ?> <br>
                        <p>Now available in fridge!</p>
                        <div class="entry-content">
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