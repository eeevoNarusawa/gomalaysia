<?php get_header(); ?>

<!-- Body Start -->
        <div id="content">
            <div class="mainContent">
				<div class="posts">
						<div class="title">
						<?php
							echo "ショッピングセンターinクアラルンプール";
						?>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/images/klshoppingcenter01.jpg" width="636px" height="200px" class="margin-top" alt="クアラルンプールショッピングセンターバナー" />
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