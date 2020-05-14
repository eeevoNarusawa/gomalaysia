<article <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('archive_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
	</a>
	<div class="entry-header">
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
		<div class="excerpt-part-area"><?php the_field('archive_area'); ?></div>
		<div class="excerpt-part-areaver"><?php the_field('archive_explain'); ?></div>

	</div>
</article>