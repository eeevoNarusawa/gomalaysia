<?php get_header(); ?>

<!-- Body Start -->
        <div id="content">
            <div class="mainContent">
				<div class="posts">
						<div class="title">
						<?php
							echo "一度は訪れたいマレーシア屋台！";
						?>
						</div>
						<img src="<?php bloginfo('template_url'); ?>/images/klfoodstore01.jpg" width="650px" height="400px" alt="KL屋台バナー" class="margin-top" />
<!-- wp_loop -->
<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
		get_template_part('content-archive-includeareaandstar');
	endwhile;
	if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
endif;
?>
				</div>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>