<?php get_header(); ?>

<!-- Body Start -->
        <div id="content">
            <div class="mainContent">
				<div class="posts">
						<div class="title">
						<?php
							$categoryname = single_cat_title('',false);
							echo $categoryname;
						?>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/images/travel-kl-map.jpg" width="650px" height="400px" alt="トラベル クアラルンプールエリア地図" />
<!-- wp_loop -->
<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
		get_template_part('content-archive-includearea');
	endwhile;
	if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
endif;
?>
				</div>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>