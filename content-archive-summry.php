<article <?php post_class(); ?>>
		<?php the_post_thumbnail('archive_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
	<div class="entry-header">
		<h1 class="entry-title">
			<?php the_title(); ?>
		</h1>
		<div class="excerpt-part"><?php the_field('archive_explain'); ?></div>

	</div>
</article>