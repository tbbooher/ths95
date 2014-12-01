- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="col-md-6 coach">
  
  <div class="the_image img-responsive col-md-5">
    <?php the_post_thumbnail('coach-thumb'); ?>
  </div>
	<header class="entry-header col-md-7 coachName">
		<h2 class="entry-title">
      <?php the_title(); ?>
    </h2>
    <!-- and you can see this, correct? -->
    <h3>
      <?php get_post_meta(get_the_ID(), 'title', true) ?>
    </h3>
	</header><!-- .entry-header -->
  <div class="clearfix"></div>
	<div class="col-md-12">
		<?php the_content(bootstrapBasicMoreLinkText()); ?> 
		<div class="clearfix"></div>
    <footer class="entry-meta">
      Email <a href="<?php get_post_meta(get_the_ID(), 'email', true) ?>"><?php the_title(); ?></a>
      <div id="edit_coach" style="padding:20px;">
        <?php bootstrapBasicEditPostLink(); ?>
      </div>
    </footer><!-- .entry-meta -->
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->\