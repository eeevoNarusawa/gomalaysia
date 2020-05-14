<?php get_header(); ?>
<!--Main-->

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
					<div class="content-latestNew">
                    	<div class="title">ジャンルから選ぶ</div>
                		<div class="single-htitle-division"></div>
                		<a href="<?php echo home_url('/tag/fmalay/'); ?>"><div class="gourmet-category-item gourmet-cat-malay"><div class="content-category-description">マレー料理</div></div></a>
                		<a href="<?php echo home_url('/tag/fchinese/'); ?>"><div class="gourmet-category-item gourmet-cat-china"><div class="content-category-description">中華料理</div></div></a>
                		<a href="<?php echo home_url('/tag/findia/'); ?>"><div class="gourmet-category-item gourmet-cat-india"><div class="content-category-description">インド料理</div></div></a>
                		<a href="<?php echo home_url('/tag/fjapanese/'); ?>"><div class="gourmet-category-item gourmet-cat-japan"><div class="content-category-description">日本料理</div></div></a>
                		<a href="<?php echo home_url('/tag/finternational/'); ?>"><div class="gourmet-category-item gourmet-cat-international"><div class="content-category-description">インターナショナル</div></div></a>
                		<a href="<?php echo home_url('/tag/fcafe/'); ?>"><div class="gourmet-category-item gourmet-cat-cafe"><div class="content-category-description">カフェ／軽食</div></div></a>
                		<a href="<?php echo home_url('/tag/ffoodcourt/'); ?>"><div class="gourmet-category-item gourmet-cat-foodcourt"><div class="content-category-description">フードコート</div></div></a>
                		<a href="<?php echo home_url('/tag/ffoodstore/'); ?>"><div class="gourmet-category-item gourmet-cat-stalls"><div class="content-category-description">屋台</div></div></a>
                		<a href="<?php echo home_url('/tag/fbar/'); ?>"><div class="gourmet-category-item gourmet-cat-bar"><div class="content-category-description">BAR</div></div></a>


					</div>
					<div class="content-latestNew">
                    	<div class="title">新着グルメ</div>
                		<div class="single-htitle-division"></div>
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'gourmet',
	'tag' => 'fmalaysia-food',
	'posts_per_page' => 5 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive-includeareaandstar');
	endwhile;
endif;
wp_reset_postdata();
?>
					</div>

				</div>
            </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
