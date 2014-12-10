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
        <div class="col-sm-10 col-md-9 col-lg-8 content-area" id="main-column">
            <main id="main" class="site-main" role="main">
                <?php 
                while (have_posts()) {
                    the_post();

                    get_template_part('content', 'schedule');

                } //endwhile;
                ?> 
            </main>
        </div>
        <aside class="col-sm-10 col-md-3 col-lg-4 content-area">
          <div class="the_image">
            <?php the_post_thumbnail('medium', array( 'class' => 'img-thumbnail' )); ?>
          </div>
          <?php get_template_part('sidebar','right'); ?>
        </aside>

<?php get_footer(); ?> 