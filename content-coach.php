<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content col-md-6 coach">
            <div class=" col-md-5">
                 <?php the_post_thumbnail('coach-thumb'); ?>
            </div>
               <div class="col-md-7 coachName">
                 	<h2 class="entry-title">
                    <?php the_title(); ?>
                  </h2>
                    Email <a href="<?php get_post_meta(get_the_ID(), 'email', true) ?>">
                 <?php the_title(); ?></a>
        <?php bootstrapBasicEditPostLink(); ?>
       
              </div>
		<div class="clearfix"></div>
           <?php the_content(bootstrapBasicMoreLinkText()); ?> 
	</div><!-- .entry-content -->

</article><!-- #post-## -->