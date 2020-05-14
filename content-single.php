<article>
	<div class="page-header">
	<h1 class="page-title-single">
		<?php the_title(); ?>
		<?php single_cat_title(); ?>
	</h1>
	</div>
	<?php get_template_part('social-button'); ?>
	<section class="entry-content">
		<?php the_content(); ?>
	</section>

</article>
<div class="social-blank"></div>
<div class="social-button-left">
<?php get_template_part('social-button'); ?>
</div>

<div class="single-recommend">
<!-- 関連記事 -->
<?php if( has_category() ) {
	$cats = get_the_category();
	$catkwds = array();
	foreach($cats as $cat) {
		$catkwds[] = $cat->term_id;
	}
} ?>
<?php
$myposts = get_posts( array(
	'post_type' => 'post',
	'posts_per_page' => '4',
	'post__not_in' => array( $post->ID ),
	'category__in' => $catkwds,
	'orderby' => 'rand'
) );
if( $myposts ): ?>

<div class="related">
	<h3>関連記事</h3>
	<div class="related-flexBox">
	<?php foreach($myposts as $post):
	setup_postdata($post); ?>

		<div class="related-cont clearfix">
			<a href="<?php the_permalink(); ?>">
				<div class="related-catch">
					<?php if(has_post_thumbnail()): ?>
						<?php the_post_thumbnail(array()); ?>
					<?php else: ?>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/single_noimage.jpg" alt="<?php the_title(); ?>">
					<?php endif; ?>
				</div>
				<div class="related-title"><?php the_title(); ?></div>
			</a>
		</div>

	<?php endforeach; ?>
	</div>
</div>
<?php wp_reset_postdata();
endif; ?>
<!-- 関連記事ここまで -->
</div>

<?php
	// 各スラッグ名を取得（klレストラン、kl屋台、klフードコート[コンテンツが増えたらこれも増えます]）
	$restrant_kl = "kl-restaurant";
	$yatai_kl = "kl-fstore";
	$food_court_kl = "kl-fcourt";

	$cat = get_the_category();
	$cat = $cat[0];
	$cat_id   = $cat->cat_ID;
	$cat_slug = $cat->slug;

	if ($cat_slug == $restrant_kl || $cat_slug == $yatai_kl || $cat_slug == $food_court_kl ) :
?>
<div class="backbutton-single"><a href="javascript:history.back();"><img src="<?php bloginfo('template_url'); ?>/images/backbutton.png" width="80px" height="24px" alt="Go Malaysia 一つ前へ戻る" /></a>
<a href="<?php echo home_url('/category/gourmet/malaysia-food/') ?>"><img src="<?php bloginfo('template_url'); ?>/images/gourmet-introduce-back.png" width="170px" height="28px" alt="マレーシアグルメ紹介へ戻る" /></a></div>

<?php endif; ?>
