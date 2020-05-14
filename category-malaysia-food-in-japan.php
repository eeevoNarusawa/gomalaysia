<?php get_header(); ?>

<!-- Body Start -->
        <div id="content">
            <div class="mainContent">
				<div class="posts">
						<h1 class="title">
						<?php
							echo "日本でマレーシア料理を楽しもう";
						?>
						</h1>
<div class="title">茨城</div>
<div class="content-division"></div>
<div class="malaysia-food-in-japan-div">
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'malaysia-food-in-ibaraki',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive-malaysiafoodinjapan');
	endwhile;
endif;
wp_reset_postdata();
?>
</div>

<div class="title">東京</div>
<div class="content-division"></div>
<div class="malaysia-food-in-japan-div">
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'malaysia-food-in-tokyo',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive-malaysiafoodinjapan');
	endwhile;
endif;
wp_reset_postdata();
?>
</div>

<div class="title">石川</div>
<div class="content-division"></div>
<div class="malaysia-food-in-japan-div">
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'malaysia-food-in-ishikawa',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive-malaysiafoodinjapan');
	endwhile;
endif;
wp_reset_postdata();
?>
</div>

<div class="title">福井</div>
<div class="content-division"></div>
<div class="malaysia-food-in-japan-div">
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'malaysia-food-in-fukui',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive-malaysiafoodinjapan');
	endwhile;
endif;
wp_reset_postdata();
?>
</div>

<div class="title">静岡</div>
<div class="content-division"></div>
<div class="malaysia-food-in-japan-div">
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'malaysia-food-in-shizuoka',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive-malaysiafoodinjapan');
	endwhile;
endif;
wp_reset_postdata();
?>
</div>

<div class="title">愛知</div>
<div class="content-division"></div>
<div class="malaysia-food-in-japan-div">
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'malaysia-food-in-aichi',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive-malaysiafoodinjapan');
	endwhile;
endif;
wp_reset_postdata();
?>
</div>

<div class="title">大阪</div>
<div class="content-division"></div>
<div class="malaysia-food-in-japan-div">
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'malaysia-food-in-osaka',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive-malaysiafoodinjapan');
	endwhile;
endif;
wp_reset_postdata();
?>
</div>

<div class="title">兵庫</div>
<div class="content-division"></div>
<div class="malaysia-food-in-japan-div">
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'malaysia-food-in-hyogo',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive-malaysiafoodinjapan');
	endwhile;
endif;
wp_reset_postdata();
?>
</div>

<div class="title">奈良</div>
<div class="content-division"></div>
<div class="malaysia-food-in-japan-div">
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'malaysia-food-in-nara',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive-malaysiafoodinjapan');
	endwhile;
endif;
wp_reset_postdata();
?>
</div>

<div class="title">福岡</div>
<div class="content-division"></div>
<div class="malaysia-food-in-japan-div">
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'malaysia-food-in-fukuoka',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive-malaysiafoodinjapan');
	endwhile;
endif;
wp_reset_postdata();
?>
</div>

<div class="title">長崎</div>
<div class="content-division"></div>
<div class="malaysia-food-in-japan-div">
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'malaysia-food-in-nagasaki',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive-malaysiafoodinjapan');
	endwhile;
endif;
wp_reset_postdata();
?>
</div>

				</div>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>