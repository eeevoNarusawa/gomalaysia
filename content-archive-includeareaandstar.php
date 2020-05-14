<article <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('archive_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
	</a>
	<div class="entry-header">
		<h1 class="entry-title">
			<?php $page_title = get_the_title(); ?>
<?php
	if (strlen($page_title) >= 60) {
		$page_title = substr($page_title, 0, 58) ."…";
	}
?>
			<a href="<?php the_permalink(); ?>"><?php echo $page_title; ?></a>
		</h1>
		<div class="excerpt-part-area"><?php the_field('archive_area'); ?></div>
		<div class="excerpt-part-area-and-star-ver"><?php the_field('archive_explain'); ?></div>

	</div>
</article>