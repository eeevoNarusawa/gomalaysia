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

// 現在のカテゴリ取得
$cat_info = get_category( $cat );
$cat_slug = wp_specialchars( $cat_info->slug );

// 親カテゴリ取得
$catArr = get_the_category($post->ID);
$cat = $catArr[0]->cat_ID;
$parent = get_category_top($cat);

if (have_posts()) :
	while (have_posts()) :
		the_post();
		// グルメ(ID=2),ショッピング(ID=4)の時は別テンプレート
		if  ($parent == "2" && $cat_slug != "food-and-fruit") {
			// グルメ時はエリアと星を入れる
			get_template_part('content-archive-includeareaandstar');
		} elseif ($parent == "4") {
			// ショッピング時はエリアを入れる
			get_template_part('content-archive-includearea');
		} else {
			get_template_part('content-archive');
		}
	endwhile;
	if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
endif;
?>
				</div>
      </div><!-- mainContent -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
