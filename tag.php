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
		get_template_part('content-archive-includeareaandstar');
	endwhile;
	
	// ページャー設置
	if(function_exists('wp_pagenavi')) { wp_pagenavi(); }

	// タグスラッグを取得
	$now_tag = single_tag_title('',false);
	$tag_properties = get_term_by('name', $now_tag, 'post_tag');
	$now_tag_slug = $tag_properties->slug;
	
	// マレーシアグルメ紹介の場合は戻るボタンを表示
	if ($now_tag_slug == 'fchinese' || $now_tag_slug == 'fmalay' || $now_tag_slug == 'findia' || $now_tag_slug == 'fjapanese' || $now_tag_slug == 'finternational' || $now_tag_slug == 'fcafe' || $now_tag_slug == 'ffoodcourt' || $now_tag_slug == 'ffoodstore' || $now_tag_slug == 'fbar') :
?>

						<div class="backbutton"><a href="<?php echo home_url('/category/gourmet/malaysia-food/') ?>"><img src="<?php bloginfo('template_url'); ?>/images/gourmet-introduce-back.png" width="170px" height="28px" alt="マレーシアグルメ紹介へ戻る" /></a></div>
<?php
	endif;
endif;
?>
				</div>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>