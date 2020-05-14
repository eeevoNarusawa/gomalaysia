<article class="entry-article-table">
	<div class="entry-header-table">
		<h2 class="entry-title">
			<?php $page_title = get_the_title(); ?>
<?php
	if (strlen($page_title) >= 60) {
		$page_title = substr($page_title, 0, 58) ."…";
	}
?>
			<a href="<?php the_permalink(); ?>"><?php echo $page_title; ?></a>
		</h2>
		<div class="malaysia-food-japan-address"><?php the_field('address'); ?></div>
		<div class="malaysia-food-japan-tel"><?php the_field('tel_number'); ?></div>

	</div>
</article>