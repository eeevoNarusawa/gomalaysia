<?php get_header(); ?>

<!-- Body Start -->
        <div id="content">
            <div class="mainContent">
				<div class="posts">
						<h1 class="title">
						<?php
							$categoryname = single_cat_title('',false);
							echo $categoryname;
						?>
						</h1>
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'school-in-kl',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
?>
<div class="title">クアラルンプール</div>
<div class="content-division"></div>
<?php
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive');
	endwhile;
endif;
wp_reset_postdata();
?>

<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'school-near-kl',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
?>
<div class="title">クアラルンプール周辺</div>
<div class="content-division"></div>
<?php
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive');
	endwhile;
endif;
wp_reset_postdata();
?>

<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'school-in-penang',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
?>
<div class="title">ペナン</div>
<div class="content-division"></div>
<?php
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive');
	endwhile;
endif;
wp_reset_postdata();
?>

<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'school-in-kelantan',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
?>
<div class="title">クランタン</div>
<div class="content-division"></div>
<?php
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive');
	endwhile;
endif;
wp_reset_postdata();
?>

<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'school-in-jb',
	'posts_per_page' => 30 ,
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
?>
<div class="title">ジョホールバル</div>
<div class="content-division"></div>
<?php
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive');
	endwhile;
endif;
wp_reset_postdata();
?>

				</div>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>