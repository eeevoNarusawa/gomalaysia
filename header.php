<?php
$urlReq = $_SERVER["REQUEST_URI"];
$urlReq = explode('/' , $urlReq);
$countUrlReq = count($urlReq);
// 本番はurlReq[1],urlReq[2]のはず
$parentLink = $urlReq[1];
$curLink = $urlReq[2];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . "/reset.min.css"; ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>?2020030501">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . "/css/contact-form7-confirm.css"; ?>">
<?php
wp_enqueue_script('contact-form7-confirm', get_template_directory_uri() . '/js/contact-form7-confirm.js' ,array('jquery'));
?>
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/analytics.js"></script>
<!-- Only load if is front_page -->
<?php if (is_front_page()) { ?>
  <link href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" rel="stylesheet" type="text/css">
<?php } ?>
<script src="<?php bloginfo('template_url'); ?>/js/common.js?20200114"></script>

<!-- Global site tag (gtag.js) - Google Ads: 682584066 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-682584066"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-682584066');
</script>

</head>

<body>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=380856422043797";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <div id="main">
<!-- Header Start -->
    <div id="header">
      <header>
        <div class="logo"><a href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" width="280px" height="72px" /></a></div>
        <div class="header-nav"><a href="<?php echo home_url('/site-map/') ?>">サイトマップ</a> <a href="<?php echo home_url('/inquiry/') ?>">お問い合わせ</a></div>
        <!--Search Box-->
        <div class="floatright">
          <div class="searchForm">
            <?php echo get_search_form(); ?>
          </div>
        </div>
        <div class="header-adsence">
					<script type="text/javascript">
						google_ad_client = "ca-pub-1716364719140500";
						/* go_malaysia_01 */
						google_ad_slot = "8685856472";
						google_ad_width = 468;
						google_ad_height = 60;
					</script>
					<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
        </div>
      </header>
      <navigation>
        <ul>
          <li style="width:11%" class="home"><a href="<?php echo home_url() ?>">トップ</a> </li>
          <li style="width:12%" class="travel"><a href="<?php echo home_url('/category/travel/') ?>">トラベル</a></li>
          <li style="width:11%" class="food"><a href="<?php echo home_url('/category/gourmet/') ?>">グルメ</a></li>
          <li style="width:15%" class="shopping"><a href="<?php echo home_url('/category/shopping/') ?>">ショッピング</a></li>
          <li style="width:14%" class="study"><a href="<?php echo home_url('/category/study/') ?>">学び／留学</a></li>
          <li style="width:15%" class="longstay"><a href="<?php echo home_url('/category/long-stay/') ?>">ロングステイ</a></li>
          <li style="width:12%" class="business"><a href="<?php echo home_url('/category/business/') ?>">ビジネス</a></li>
          <li style="width:10%" class="jobsearch"><a href="<?php echo home_url('/jobsearch/') ?>">求人</a></li>
        </ul>
      </navigation>
      <div class="spMenu">メニュー<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/menu_button.jpg" alt=""></a>
  		<ul class="dropMenu">
  			<li><a href="<?php echo home_url() ?>">トップ</a></li>
  			<li><a href="<?php echo home_url('/category/travel/') ?>">トラベル</a></li>
  			<li><a href="<?php echo home_url('/category/gourmet/') ?>">グルメ</a></li>
  			<li><a href="<?php echo home_url('/category/shopping/') ?>">ショッピング</a></li>
  			<li><a href="<?php echo home_url('/category/study/') ?>">学び／留学</a></li>
  			<li><a href="<?php echo home_url('/category/long-stay/') ?>">ロングステイ</a></li>
  			<li><a href="<?php echo home_url('/category/business/'); ?>">ビジネス</a></li>
        <li><a href="<?php echo home_url('/jobsearch/'); ?>">求人</a></li>
  		</ul>
    </div>
  </div>
  <div class="bread-clumb-location">
    <?php
			if ($parentLink == "tag" && ($curLink == 'fchinese' || $curLink == 'fmalay' || $curLink == 'findia' || $curLink == 'fjapanese' || $curLink == 'finternational' || $curLink == 'fcafe' || $curLink == 'ffoodcourt' || $curLink == 'ffoodstore' || $curLink == 'fbar' || $curLink == 'kl-ramen')) :
				// タグ情報取得
			$now_tag = single_tag_title('',false);
    ?>
    <nav id="bread-crumb" class="bread_crumb">
			<ul>
				<li class="level-1 top"><a href="<?php echo home_url(); ?>">トップページ</a></li>
				<li class="level-2 sub"><a href="<?php echo home_url('/category/gourmet/'); ?>">グルメ</a></li>
				<li class="level-3 sub tail current"><?php echo $now_tag; ?></li>
			</ul>
		</nav>
    <?php
			elseif (!is_front_page() && function_exists('bread_crumb')) :
			bread_crumb('navi_element=nav&elm_id=bread-crumb');
			endif;
    ?>
  </div>
<!-- Header End -->
