<?php get_header(); ?>

<!-- Body Start -->
        <div id="content">
            <div class="mainContent">
        <?php
if (have_posts() && get_search_query() ) :
	while (have_posts()) :
		the_post();
		get_template_part('content-archive-search');
	endwhile;
	
else :
?>
	<p>検索対象が見つかりませんでした。</p>
<?php
endif;
?>
            </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>