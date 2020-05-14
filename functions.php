<?php

// remove from header
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

// when search words is not inpu or input '0',it use search.php for template
function search_template_redirect() {
	global $wp_query;
	$wp_query -> is_search = true;
	$wp_query -> is_home = false;
	if (file_exists(TEMPLATEPATH . '/search.php')) {
		include(TEMPLATEPATH . '/search.php');
	}
	exit;
}

if (isset($_GET['s']) && $_GET['s'] == false) {
	add_action('template_redirect', 'search_template_redirect') ;
}

// To assign the uploaded picture to the folder
// featured Image settings
add_theme_support('post-thumbnails');

// featured Image archive page
add_image_size('archive_thumbnail', 200, 150, true);

// featured Image content top page
add_image_size('content_page_thumbnail', 660, 200, true);

// featured Image front-page pick up
add_image_size('front-page-pick-up-thumbnail', 310, 200, true);



add_action( 'pre_get_posts', 'home_posts_type' );
function home_posts_type( $wp_query ) {
 if ( ! is_admin() && $wp_query->is_main_query() && $wp_query->is_home() ) { //管理画面以外 かつ メインクエリー かつ ホーム
 $wp_query->set( 'post_type', array( 'post') );
 $wp_query->set( 'posts_per_page', 10 ); // 1件ずつ表示
 }
}

//投稿記事のみを検索対象
function SearchFilter($query) {
	if ($query->is_search) {
		//$query->set('post_type', 'post');
        // ページを含める場合
        //$query->set('post_type', array('post', 'page'));
        // 特定カテゴリーを除外
        //$query->set('post_type', 'post');
        $query->set('category__not_in', array(8,9));
	}
	return $query;
}
add_filter('pre_get_posts','SearchFilter');

// 最新情報の年度取得
function search_news_year() {
	global $wpdb;

	$getNewsYearSql = "SELECT YEAR( t2.post_date ) AS `news_year`
							FROM  $wpdb->term_relationships AS t1
							INNER JOIN  $wpdb->posts AS t2
							ON t1.object_id = t2.ID
							WHERE t1.term_taxonomy_id =  '8' AND t2.post_status = 'publish'
							GROUP BY YEAR( t2.post_date)
							ORDER BY YEAR( t2.post_date) DESC;";
	$yearResults = $wpdb->get_results($getNewsYearSql);

	return $yearResults;
}

// 最新情報の年度取得
function search_news_year_list() {
	global $wpdb;

	$getNewsYearSql = "SELECT YEAR( t2.post_date ) AS `news_year`
							FROM  $wpdb->term_relationships AS t1
							INNER JOIN  $wpdb->posts AS t2
							ON t1.object_id = t2.ID
							WHERE t1.term_taxonomy_id =  '47' AND t2.post_status = 'publish'
							GROUP BY YEAR( t2.post_date)
							ORDER BY YEAR( t2.post_date) DESC;";
	$yearResults = $wpdb->get_results($getNewsYearSql);

	return $yearResults;
}


// 親カテゴリーを取得(get_category_top関数内にて使用)
function get_category_parent($ID) {
	$catObj = get_category($ID);
	$parentID = $catObj->category_parent;
	return $parentID;
}

// 最上層のカテゴリーIDを取得
function get_category_top($ID) {
	$counter = 0;
	$parent = get_category_parent($ID);

	while($parent) {
		++$counter;
		$parentID = get_category_parent($parent);
		if($parentID) {
			$parent = $parentID;
		} else {
			return $parent;
			break;
		}
		if($counter > 5) {
			break;
		}
	}
}

// ウィジェットの追加
if ( function_exists('register_sidebar') )
  register_sidebar();



// 20190515 add Naru
	function pagination($pages = '', $range = 1)
	{
	     $showitems = ($range * 2)+1;

	     global $paged;
	     if(empty($paged)) $paged = 1;

	     if($pages == '')
	     {
	         global $wp_query;
	         $pages = $wp_query->max_num_pages;
	         if(!$pages)
	         {
	             $pages = 1;
	         }
	     }

	     if(1 != $pages)
	     {
	         echo "<div class=\"pagination\"><div class=\"pagination-box\"><span class=\"page-of\">".$paged." / ".$pages."</span>";
	         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
	         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

	         for ($i=1; $i <= $pages; $i++)
	         {
	             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
	             {
	                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
	             }
	         }

	         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";
	         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
	         echo "</div></div>\n";
	     }
	}
