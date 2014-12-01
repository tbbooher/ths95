- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><?php the_title(); ?></h2>
	</header><!-- .entry-header -->

  <!-- this is what needs to be updated with the new styles you wrote 
       and this is the file that should be updated . . . -->
	<div class="entry-content">
        <div class="the_image">
            <?php set_post_thumbnail_size( 50, 50, true ); ?>
            <?php the_post_thumbnail('medium'); ?>
        </div>
		<?php the_content(bootstrapBasicMoreLinkText()); ?> 
		<div class="clearfix"></div>
	</div><!-- .entry-content -->
	
	<footer class="entry-meta">
        Email <a href="<?php get_post_meta(get_the_ID(), 'email', true) ?>"><?php the_title(); ?></a>
        <?php bootstrapBasicEditPostLink(); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->