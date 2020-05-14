<article class="latest-new-article">
	<div class="archive-latest-news">
		<ul>
                
		<?php
			 $post_id = $post->ID;
			 $to_url = get_post_meta($post_id,'to_url',true);
		 ?>
			<li class="front-latest-news-li">
			<span class="news-date"><?php the_time('Y/m/d'); ?></span>
			<span class="news-detail-title">
			<?php if ($to_url) : ?>
				<?php the_field('to_url'); ?>
			<?php else : ?>
			<?php the_title();?>
			<?php endif; ?>
			</span>
			</li>
		</ul>
	</div>
</article>

