
  <div  id="post-<?php the_ID(); ?>" <?php post_class('col-md-6 col-sm-6'); ?>>
            <div class="row col-md-5">
                 <?php the_post_thumbnail('medium'); ?>
            </div>
               <div class="col-md-7 coachName">
                  <h2 class="entry-title">      <?php the_title(); ?>    </h2>
                    Email <a href="<?php get_post_meta(get_the_ID(), 'email', true) ?>"><?php the_title(); ?></a>
        <?php bootstrapBasicEditPostLink(); ?>
       
              </div>
    <div class="clearfix"></div>
           <?php the_content(bootstrapBasicMoreLinkText()); ?> 
  </div>
