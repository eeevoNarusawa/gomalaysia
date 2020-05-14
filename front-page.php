<?php get_header(); ?>
<!--Main-->

<!-- Body Start -->
<div id="content">
  <div class="mainContent">
    <div class="slider">
      <a href="https://www.go-malaysia.info/business/business-insurance/toyota-tsusho-hoken-interview"><img src="<?php bloginfo('template_url'); ?>/images/banners/top_header_toyotsu.jpg" alt="企業保険でリスクマネジメント　マレーシア特有のリスクとは？"></a>
      <a href="http://totalmalaysiafudosan.jp/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/banners/top_header_cosmoplan.jpg"></a>
      <a href="https://www.go-malaysia.info/gourmet/takeaway-restaurants"><img src="<?php bloginfo('template_url'); ?>/images/banners/top_header_takeaway.png"></a>
      <img src="<?php bloginfo('template_url'); ?>/images/banners/top_header_banner02.jpg">
      <img src="<?php bloginfo('template_url'); ?>/images/banners/top_header_banner03.jpg">
    </div>

    <div class="content-latestNew">
      <div class="title">ニュース</div>
      <div class="content-division"></div>
      <ul class="front-news-ul">
        <?php query_posts('posts_per_page=5&cat=47'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php
      		$post_id = $post->ID;
      		$to_url = get_post_meta($post_id,'to_url',true);
     	  ?>
        <li class="front-news-li">
          <span class="news-date"><?php the_time('Y/m/d'); ?></span>
          <span class="news-detail-title">
            <?php if ($to_url) : ?>
           	  <?php the_field('to_url'); ?>
           	<?php else : ?>
              <?php the_title();?>
           	<?php endif; ?>
        	</span>
        </li>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
        <p class="moreNews"><a href="<?php echo home_url('/category/latest-news-list/') ?>">&#62;&#32;ニュースの一覧へ</a></p>
      </ul>
    </div>

    <div class="content-latestNew">
      <div class="title">最新情報</div>
      <div class="content-division"></div>
      <ul class="front-news-ul">
        <?php query_posts('posts_per_page=5&cat=8'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php
      		$post_id = $post->ID;
      		$to_url = get_post_meta($post_id,'to_url',true);
       	?>
        <li class="front-news-li">
          <span class="news-date"><?php the_time('Y/m/d'); ?></span>
          <span class="news-detail-title">
            <?php if ($to_url) : ?>
           	  <?php the_field('to_url'); ?>
           	<?php else : ?>
              <?php the_title();?>
           	<?php endif; ?>
        	</span>
        </li>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
        <p class="moreNews"><a href="<?php echo home_url('/category/latest-news/') ?>">&#62;&#32;新着情報の一覧へ</a></p>
      </ul>
    </div>

    <div class="content-latestNew">
      <div class="title">Pick Up</div>
      <div class="content-division"></div>
      <?php query_posts('posts_per_page=4&cat=9'); ?>
      <?php $count = 0; ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php
        $count = $count + 1;
        $post_id = $post->ID;
        $to_url = get_post_meta($post_id,'to_url',true);
      ?>
      <div  class="content-pickup-left">
        <div class="content-pickup-left-picture">
	        <?php if ($to_url) : ?>
  	       	<a href="<?php echo $to_url; ?>">
  					<?php the_post_thumbnail('front-page-pick-up-thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
  			    </a>
       		<?php else : ?>
    		    <?php the_post_thumbnail('front-page-pick-up-thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
    	   	<?php endif; ?>
        </div>
        <?php
          $title = the_title( '' , '' , false );
          $title_len = strlen(mb_convert_encoding($title,'SJIS', 'UTF-8'));
          if ($title_len <= 41) {
            $addstyle = "style='text-align:center;'";
          } else {
            $addstyle = "style='text-align:left;'";
          }
        ?>
        <div class="content-pickup-left-text" <?php echo $addstyle; ?>>
          <?php if ($to_url) : ?>
  	         <a href="<?php echo $to_url; ?>"><?php the_title(); ?></a>
  	 		  <?php else : ?>
   			     <?php the_title(); ?>
  	 		  <?php endif; ?>
        </div>
      </div>
      <?php if (($count % 2) == 0) : ?>
        <div class="single-content-blank"></div>
      <?php endif; ?>
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
    </div><!-- /.content-latestNew -->

    <div class="gourmet-front-banner">
    	<a href="<?php echo home_url('/category/gourmet/malaysia-food/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/malaysia-introduce-gourmet-brown.jpg"  width="640" height="120" alt="マレーシアグルメ紹介" title="マレーシアグルメ紹介" /></a>
    </div>

    <div class="content-latestNew">
      <div class="title">カテゴリー</div>
      <div class="content-division"></div>
      <a href="<?php echo home_url('/category/travel/') ?>"><div class="content-category-item front-cat-travel"><div class="content-category-description">トラベル</div></div></a>
      <a href="<?php echo home_url('/category/gourmet/') ?>"><div class="content-category-item front-cat-gorumet"><div class="content-category-description">グルメ</div></div></a>
      <a href="<?php echo home_url('/category/shopping/') ?>"><div class="content-category-item front-cat-shopping"><div class="content-category-description">ショッピング</div></div></a>
      <a href="<?php echo home_url('/category/study/') ?>"><div class="content-category-item front-cat-study"><div class="content-category-description">学び／学習</div></div></a>
      <a href="<?php echo home_url('/category/long-stay/') ?>"><div class="content-category-item front-cat-longstay"><div class="content-category-description">ロングステイ</div></div></a>
      <a href="<?php echo home_url('/category/business/') ?>"><div class="content-category-item front-cat-business"><div class="content-category-description">ビジネス</div></div></a>
    </div>
  </div><!-- /.mainContent -->

<?php get_sidebar(); ?>

<div class="c-seo-text">
  <div class="c-seo-text--ttl">マレーシアはどこにある？</div>
  <div class="c-seo-text--desc">マレーシアは、タイの下に伸びるマレー半島に位置します。マレー半島の先端にはシンガポールがあります。また、「東マレーシア」と呼ばれるマレーシアの「サバ州」と「サラワク州」は、南シナ海をはさんだボルネオ島の北部にあり、インドネシアと国境を接しています。</div>
</div>
<div class="c-seo-text">
  <div class="c-seo-text--ttl">マレーシアの民族構成は？</div>
  <div class="c-seo-text--desc">マレーシアのおおまかな民族構成は、マレー系60%、中華系30%、インド系が10%となっています。クアラルンプールやジョージタウン等の都市部では、中華系の割合が高くなり、地方部ではマレー系の割合が高くなります。</div>
</div>
<div class="c-seo-text">
  <div class="c-seo-text--ttl">マレーシアで使用されている言語は？</div>
  <div class="c-seo-text--desc">英語が通じるほか、マレー語が共通語です。そのほか、中華系は中国語（北京語、広東語、福建語など）、インド系はタミル語を話す人も多いです。テレビ、新聞、ラジオなどのメディアも各言語で展開されており、インドや中国発の映画やテレビ番組、書籍などのコンテンツもよく見かけるような多文化な環境です。</div>
</div>
<div class="c-seo-text">
  <div class="c-seo-text--ttl">マレーシアの宗教は？</div>
  <div class="c-seo-text--desc">
    国教はイスラム教で、マレー系は100％イスラム教徒です。中華系、インド系のなかには、仏教、ヒンズー教、キリスト教、イスラム教徒の信者もいます。
    イスラム教は豚肉を食べませんし、ヒンズー教徒や仏教徒には牛肉を食べない人、ベジタリアンなども多いため、特にクアラルンプールなど都市部には各宗教の慣習に則った多種多様なレストランがあります。
  </div>
</div>
<div class="c-seo-text">
  <div class="c-seo-text--ttl">Go Malaysiaの使い方</div>
  <div class="c-seo-text--desc">Go Malaysiaをご利用いただきありがとうございます。Go Malaysiaはマレーシアの情報を発信する日本語ウェブディアです。日本はじめ海外から長期滞在の場所として人気が高まっているマレーシアには、さまざまな場所からさまざまな目的を持った人が集まる国際的な国です。Go Malaysiaでは、マレーシアに旅行で行きたい！留学したい！働きたい！起業したい！長期滞在したい！などマレーシアに興味がある方向けにさまざまな情報を日本語で発信しています。以下、カテゴリー別の説明をご参照いただきつつご活用ください。</div>
  <div class="c-seo-text--desc">
    <p>・マレーシア旅行を計画中: <a href="https://www.go-malaysia.info/category/travel/">【トラベル】</a>のページには、「クアラルンプール」「ペナン」「マラッカ」「ビーチリゾート」など、エリア別の情報が掲載されています。また、「マレーシアの年中行事」「公共交通機関の使い方」「子どもとおでかけ」などの情報も見つかります。</p>
  </div>
  <div class="c-seo-text--desc">
    <p>・マレーシアで働きたい: <a href="https://www.go-malaysia.info/jobsearch/">【求人】</a>ページには、マレーシアで就職したい日本人向けの最新求人情報を掲載しています。また、マレーシアで働くにあたっての心構えや、マレーシアの物価、食べ物についてなど生活事情が分かるコラムも随時更新中。</p>
  </div>
  <div class="c-seo-text--desc">
    <p>・マレーシア留学を検討中: <a href="https://www.go-malaysia.info/category/study/">【学び/留学】</a>のページには、「インターナショナルスクール」「英語が学べる語学学校」などの情報があります。マレーシアにはさまざまなインターナショナルスクールがあり、親子留学でマレーシアに来る人も増えています。また、特にクアラルンプールには英語学校が多数あり、英語圏に比べて安価に英語留学が可能です。</p>
  </div>
  <div class="c-seo-text--desc">
    <p>・マレーシアでおいしいものが食べたい！: <a href="https://www.go-malaysia.info/category/gourmet/">【グルメ】</a>ページには、マレーシアのレストランの情報が満載！　「マレー料理」「バー」「カフェ」「日本料理」「屋台」「フードコート」など、カテゴリーからおすすめレストランの情報を探せます。</p>
  </div>
  <div class="c-seo-text--desc">
    <p>・マレーシアでショッピングを楽しみたい！: <a href="https://www.go-malaysia.info/category/shopping/">【ショッピング】</a>のページには、定番のマレーシア土産、スナック菓子、マレーシア発のファッションブランドなどの情報が見つかります。旅行者にオススメのクアラルンプールの人気ショッピングモールも多数紹介しています。</p>
  </div>
  <div class="c-seo-text--desc">
    <p>・マレーシアで起業したい: <a href="https://www.go-malaysia.info/category/business/">【ビジネス】</a>ページには、マレーシアで活躍する日本人ビジネスパーソンのインタビュー記事、レンタルオフィスなどの情報を掲載しています。東南アジア進出を目指す方に必須の情報多数！</p>
  </div>
  <div class="c-seo-text--desc">
    <p>・マレーシアに移住したい: <a href="https://www.go-malaysia.info/category/long-stay/">【ロングステイ】</a>のページには、日本人に大人気のマレーシア長期滞在について、またロングステイに必要な生活情報を掲載。人気上昇中の都市ジョホールバルについてや、「資産運用」「ヘアサロン」についての記事も充実しています。</p>
  </div>
</div>

<?php get_footer(); ?>
