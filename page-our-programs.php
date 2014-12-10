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
							
                            // The Query
                            $currentPageId = $post->ID; // get current page id inside loop
                            $args = array(
                                'post_parent' => $currentPageId,
                                'post_type' => 'page',
                                'posts_per_page' => -1
                                );
                            $query = new WP_Query( $args );

                            // The Loop
                            if ( $query->have_posts() ) {
                                echo '<div id="display_children">';
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    ?>
                                        <div class="row well">
                                            
                                            <div class="col-md-4">
                                               <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-thumbnail' ) ); ?>
                                            </div>                                                
                                            <div class="col-md-8">
                                                <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
                                                <div class="excerpt">
                                                    <?php the_excerpt() ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php                                    
                                }
                                echo '</div>';
                            } else {
                                // no posts found
                            }

                            /* Restore original Post Data */
                            wp_reset_postdata();

						} //endwhile;
						?> 
					</main>                    
				</div>
                <aside class="col-sm-5 col-md-3 col-lg-4 content-area">
                    <div class="the_image">
                        <?php the_post_thumbnail('medium', array( 'class' => 'img-thumbnail' )); ?>
                    </div>
                    <?php get_template_part('sidebar','right'); ?>
                </aside>

<?php get_footer(); ?> 