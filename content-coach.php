
  <div  id="post-<?php the_ID(); ?>" <?php post_class('coach_float'); ?>>
    <div class="row col-md-5">
         <?php the_post_thumbnail('medium', array('class' => 'img-rounded')); ?>
    </div>
    <div class="col-md-7 coachName">
      <h2 class="entry-title">
          <?php the_title(); ?>
      </h2>
      <div class="email">
        Email <a href="<?php get_post_meta(get_the_ID(), 'email', true) ?>"><?php the_title(); ?></a>                    
        <?php bootstrapBasicEditPostLink(); ?>
      </div>
    </div>                                                                                       
    <div class="clearfix"></div>
    <div class="coach_desc text-justify">
        <hr>                                            
        <?php the_content(bootstrapBasicMoreLinkText()); ?> 
        <hr>
    </div>
  </div>
