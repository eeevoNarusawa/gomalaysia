<?php get_header(); ?>

<!-- Body Start--> 
    	<div id="content">
        	<!-- Content Start -->
   			<div class="mainContent">
            	<div class="content-latestNew">
                    <div class="title">ニュース一覧</div>
                    <div class="news-year-select">
                    	<span>過去一覧はこちらから→</span>

<?php
	$yearResults = "";
	$yearResults = search_news_year_list();
	$domain = home_url();
	$category_url = "/category/latest-news-list/";
	if ($yearResults) {
		foreach ($yearResults as $yearResult) {
			$news_year = $yearResult->news_year;
			$yearUrl = "";
			$yearUrl = $domain .$category_url ."?news-year=" .$news_year;
			echo "<span class='borderRight'><a href='" .$yearUrl ."'>".$news_year."年</a></span>";
		}
	}
?>
   					</div>

                    <!-- wp_loop -->
<?php
					$page_url = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
					$array = explode("?", $page_url);
					$parameter_year = explode("&",$array[1]);
					if (count($array) == 2 && count($parameter_year) ==1) {
						$year = $_GET['news-year'];
						if ($year == "") {
							$year = date('Y');
							echo $year;
						}
						// query_posts
						$posts=query_posts( array(
  							'post_type' => 'post' ,
							'posts_per_page' => 30 ,
				  			'paged' => get_query_var( 'paged' ),
				  			'year' => $year,
				  			'cat' => 47,
				  			'post_status' => 'publish',
				  			)
						);
					} else {
	                    $posts = query_posts( array(
  							'post_type' => 'post' ,
							'posts_per_page' => 30 ,
				  			'paged' => get_query_var( 'paged' ),
				  			'cat' => 47,
				  			'post_status' => 'publish',
				  			)
						);
					}
                    if ($posts) :
                    	global $post;
                    	if ($posts) :
                    		foreach($posts as $post) :
                    			setup_postdata($post);
                    			get_template_part('content-archive-latest-news');
                    		endforeach;
                    		if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
                    	endif;
                    else :
                    	echo "最新情報は見つかりませんでした。";
                    endif;
                    ?>
					<?php wp_reset_postdata(); wp_reset_query(); ?>

                    </div>
                </div>
        <!-- Content End -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
