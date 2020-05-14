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
<!-- wp_loop -->
<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
		get_template_part('content-archive');
	endwhile;
	
	// ページャー設置
	if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
?>
						<div class="backbutton"><a href="<?php echo home_url('/category/travel/tr-information/before-info/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/travel-before-back.png" width="170px" height="28px" alt="旅行前のお役立ち情報へ" /></a></div>

<?php					
endif;
?>
				</div>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>