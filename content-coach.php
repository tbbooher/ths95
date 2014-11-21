<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><?php the_title(); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <div class="the_image">
            <?php the_post_thumbnail('medium'); ?>
        </div>
		<?php the_content(bootstrapBasicMoreLinkText()); ?> 
		<div class="clearfix"></div>
	</div><!-- .entry-content -->
	
	<footer class="entry-meta">
        Email <a href="<?php get_post_meta(the_ID(), 'email', true) ?>"><?php the_title(); ?></a>
        <?php bootstrapBasicEditPostLink(); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->