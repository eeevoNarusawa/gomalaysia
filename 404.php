<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<title>ページが見つかりませんでした | <?php bloginfo('name'); ?></title>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/analytics.js"></script>
</head>
<body>
	<div id="wrapper">
		<div id="content-404">
		  <div class="title-404">404 </div>
		  <div class="title-404">File Not Found</div>
		  <h1>Webページが見つかりません</h1>
		  <p>キーワードを検索するか、トップページに移動してください。</p>
		  <!--Search Box-->
		  <div class="search-404">
		    <div class="searchForm">
			  <?php echo get_search_form(); ?>
		    </div>
		  </div>
		  <a href="<?php echo home_url(); ?>"><div class="BackHomePage">Go Malaysia トップへ</div></a>
		</div>
	</div>
</body>
</html>