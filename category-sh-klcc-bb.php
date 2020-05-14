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
                	<img src="<?php bloginfo('template_url'); ?>/images/bkbn_map.png" width="650px" height="400px" alt="KLCC ブキビンタンエリア特集"/>

<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' => 'shopping',
	'tag' => 'klcc-bb-shopping',
	'paged' => $paged
);
$my_query = new WP_Query( $args );
if ( $my_query->have_posts() ) :
	while ( $my_query->have_posts()) : $my_query->the_post();
		get_template_part('content-archive-includearea');
	endwhile;
endif;
//if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $my_query) ); }
//if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $my_query));
wp_reset_postdata();
?>


				</div>
            </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
