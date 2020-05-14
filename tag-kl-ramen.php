<?php get_header(); ?>

<!-- Body Start -->
        <div id="content">
            <div class="mainContent">
				<div class="posts">
						<div class="title">
						<?php
							$categoryname = single_cat_title('',false);
							echo "クアラルンプール ラーメン屋特集！";
						?>
						</div>

<!-- wp_loop -->
<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
		get_template_part('content-archive-includeareaandstar');
	endwhile;
	
	// ページャー設置
	if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
?>
	
						<div class="backbutton"><a href="<?php echo home_url('/category/gourmet/malaysia-food/') ?>"><img src="<?php bloginfo('template_url'); ?>/images/gourmet-introduce-back.png" width="170px" height="28px" alt="マレーシアグルメ紹介へ戻る" /></a></div>
<?php
endif;
?>
				</div>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>