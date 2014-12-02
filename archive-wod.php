<?php 
/**
 * Displaying archive page (category, tag, archives post, author's post)
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
						<?php if (have_posts()) { ?> 

                            <header class="page-header">
                                <h1 class="page-title">
                                    WODs
                                </h1>

                                <?php
                                // Show an optional term description.
                                $term_description = term_description();
                                if (!empty($term_description)) {
                                    printf('<div class="taxonomy-description">%s</div>', $term_description);
                                } //endif;
                                ?>
                            </header><!-- .page-header -->
						
						<?php 
						/* Start the Loop */
						while (have_posts()) {
							the_post();

							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part('content', 'wod');
						} //endwhile; 
						?> 

						<?php bootstrapBasicPagination(); ?> 

						<?php } else { ?> 

						  <?php get_template_part('no-results', 'archive'); ?> 

						<?php } //endif; ?> 
					</main>
				</div>
                <aside class="col-md-4 content-area" id="main-column">
                    <h3>Community Stuff</h3>
                    <p>Flickr Pictures</p>
                    <p>YouTube Videos</p>
                    <h3>Upcoming Events</h3>
                    <div class="content-box big ch-item bottom-pad-small well">
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
                    <h3>Latest News</h3>
                    <div class="content-box big ch-item bottom-pad-small well">
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
                </aside>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 