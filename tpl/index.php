
<?php get_header(); ?>



<script type="text/javascript">
	$(function() {

	var thumbnailItem = ".thumbnail-item"; // サムネイル画像アイテム

	  // サムネイル画像アイテムに data-index でindex番号を付与
	  $(thumbnailItem).each(function(){
	  	var index = $(thumbnailItem).index(this);
	  	$(this).attr("data-index",index);
	  });

	  $('.main_slide').on('init',function(slick){
	  	var index = $(".slide-item.slick-slide.slick-current").attr("data-slick-index");
	  	$(thumbnailItem+'[data-index="'+index+'"]').addClass("thumbnail-current");
	  });

	  $('.main_slide').fadeIn(0);
	  $('.main_slide').slick({
	  	slidesToShow: 1,
	  	slidesToScroll: 1,
	  	arrows: false,
	  	fade:true,
	  	autoplay: true,
	  	autoplaySpeed: 2500,
	  	responsive: [
	  	{
			    breakpoint: 480, //767px以下のサイズに適用
			    settings: {
			    	dots: false
			    }
			}
			]
		});

	  $(thumbnailItem).on('click',function(){
	  	var index = $(this).attr("data-index");
	  	$('.main_slide').slick("slickGoTo",index,false);
	  });
	  
	  //サムネイル画像のカレントを切り替え
	  $('.main_slide').on('beforeChange',function(event,slick, currentSlide,nextSlide){
	  	$(thumbnailItem).each(function(){
	  		$(this).removeClass("thumbnail-current");
	  	});
	  	$(thumbnailItem+'[data-index="'+nextSlide+'"]').addClass("thumbnail-current");
	  });

	  $('.sub_slide').fadeIn(0);
	  $('.sub_slide').slick({
	  	　　slidesToShow:4,
	  	centerMode: true,
	  	centerPadding: "2%",
	  	prevArrow: '<div class="slide-arrow-l"><img src="<?php bloginfo('template_url'); ?>/img/icon_arrow_blue_l@2x.png" class="slide-arrow prev-arrow"></div>',
	  	nextArrow: '<div class="slide-arrow-r"><img src="<?php bloginfo('template_url'); ?>/img/icon_arrow_blue@2x.png" class="slide-arrow next-arrow"></div>',
	  	responsive: [
	  	{
	  		breakpoint: 968,
	  		settings: {
	  			slidesToShow:3,
	  			centerMode:true
	  		}
	  	}
	  	],
	  	responsive: [
	  	{
	  		breakpoint: 640,
	  		settings: {
	  			slidesToShow:2,
	  			centerMode:true
	  		}
	  	}
	  	]
	  });
	});
</script>

<div class="content">
	<?php get_sidebar(); ?>
	
	<div class="main">
		<header class="bg-slider top__header">
			<h1 class="sub_ttl yumincho">
				<span class="ProstoOne">The challenge continues.</span><br>
				カグラの挑戦は続く。
			</h1>
			<div class="tagline">
				<div class="logo">
					<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="">
				</div>
				<nav class="sp_none">
					<ul class="yumincho" id="pc_nav">
						<li>
							<a href="<?php bloginfo('url'); ?>/" class="child">事業内容</a>
							<div class="pc_dropdown">
								<div class="business">
									<div class="group w60">
										<div class="inner">
											<div class="box">
												<p class="cat_ttl">ガス機器事業</p>
												<p class="nav__ttl">LPGベーパライザー</p>
												<dl>
													<dt><a href="<?php bloginfo('url'); ?>/">アスリート</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">セイビースト</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">ミニマム</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">ペーパーウルトラ</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">ペーパーブルー</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">ペーパーゴールドミキサー</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">ペーパーミキサー</a></dt>
												</dl>
												<p class="nav__ttl">LNGベーパライザー</p>
												<dl>
													<dt><a href="<?php bloginfo('url'); ?>/">ナチュライザイー</a></dt>
												</dl>
												<p class="nav__ttl">アンモニアベーパライザー</p>
												<dl>
													<dt><a href="<?php bloginfo('url'); ?>/">アンモニアベーパライザー</a></dt>
												</dl>
											</div>
											<div class="box">
												<p class="nav__ttl">ベーパライザーユニット</p>
												<dl>
													<dt><a href="<?php bloginfo('url'); ?>/">バイオ</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">e-バイオ</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">バルクユンポ</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">ラージユンポ</a></dt>
												</dl>
												<p class="nav__ttl">簡易スタンド</p>
												<dl>
													<dt><a href="<?php bloginfo('url'); ?>/">オートコンポ</a></dt>
												</dl>
												<p class="nav__ttl">カクシュバルブ</p>
												<dl>
													<dt><a href="<?php bloginfo('url'); ?>/">LR</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">バラフロー</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">ピュアフロー</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">KRシリーズ</a></dt>
												</dl>
											</div>
										</div>
									</div>
									<div class="group w20">
										<p class="cat_ttl">ガスプラント事業</p>
										<dl>
											<dt><a href="<?php bloginfo('url'); ?>/">設計/施行</a></dt>
											<dt><a href="<?php bloginfo('url'); ?>/">定期自主検査/開放検査</a></dt>
											<dt><a href="<?php bloginfo('url'); ?>/">指定保安検査</a></dt>
										</dl>
										<p class="cat_ttl"><a href="<?php bloginfo('url'); ?>/">非常用事業</a></p>
										<p class="cat_ttl">災害対策事業</p>
										<dl>
											<dt><a href="<?php bloginfo('url'); ?>/">非常用タンク</a></dt>
											<dt><a href="<?php bloginfo('url'); ?>/">浄水器</a></dt>
											<dt><a href="<?php bloginfo('url'); ?>/">貯蔵庫</a></dt>
										</dl>
									</div>
									<div class="group w20">
										<p class="cat_ttl">感染対策事業</p>
										<dl>
											<dt><a href="<?php bloginfo('url'); ?>/">設計/施行</a></dt>
											<dt><a href="<?php bloginfo('url'); ?>/">定期自主検査/開放検査</a></dt>
										</dl>
										<p class="cat_ttl"><a href="<?php bloginfo('url'); ?>/">海外事業</a></p>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="<?php bloginfo('url'); ?>/" class="child">アフターサービス</a>
							<div class="pc_dropdown">
								<div class="service">
									<div class="group w70">
										<p class="cat_ttl">機器</p>
										<div class="inner">
											<div class="box">
												<img src="<?php bloginfo('template_url'); ?>/img/thum-1.jpg" alt="">
											</div>
											<div class="box">
												<p class="nav__ttl">メンテナンス</p>
												<dl>
													<dt><a href="<?php bloginfo('url'); ?>/">メンテナンスの必要性</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">日常点検</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">定期点検</a></dt>
												</dl>
											</div>
											<div class="box">
												<p class="nav__ttl">トラブルシューティング</p>
												<dl>
													<dt><a href="<?php bloginfo('url'); ?>/">よくある質問</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">生産終了</a></dt>
												</dl>
											</div>
										</div>
									</div>
									<div class="group w20">
										<p class="cat_ttl">プラント</p>
										<dl>
											<dt><a href="<?php bloginfo('url'); ?>/">設計/施行</a></dt>
											<dt><a href="<?php bloginfo('url'); ?>/">定期自主検査/開放検査</a></dt>
										</dl>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="<?php bloginfo('url'); ?>/" class="child">カグラ知恵袋</a>
							<div class="pc_dropdown">
								<div class="company">
									<div class="group">
										<p class="cat_ttl">いまさら聞けない</p>
										<div class="half__column">
											<div class="box">
												<img src="<?php bloginfo('template_url'); ?>/img/thum-1.jpg" alt="">
												<p>代表挨拶</p>
											</div>
											<div class="box">
												<dl>
													<dt><a href="<?php bloginfo('url'); ?>/">企業理念</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">カグラのものづくり</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">コーポレートブランド</a></dt>
												</dl>
											</div>
										</div>
									</div>
									<div class="group">
										<p class="nav__ttl">技術情報</p>
										<dl>
											<dt><a href="<?php bloginfo('url'); ?>/">技術情報</a></dt>
											<dt><a href="<?php bloginfo('url'); ?>/">寸法表</a></dt>
										</dl>
									</div>
									<div class="group">
										<p class="nav__ttl">補助金</p>
										<dl>
											<dt><a href="<?php bloginfo('url'); ?>/">補助金</a></dt>
										</dl>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="<?php bloginfo('url'); ?>/" class="child">会社情報</a>
							<div class="pc_dropdown">
								<div class="company">
									<div class="group">
										<p class="cat_ttl">カグラの想い</p>
										<div class="half__column">
											<div class="box">
												<img src="<?php bloginfo('template_url'); ?>/img/thum-1.jpg" alt="">
												<p>代表挨拶</p>
											</div>
											<div class="box">
												<dl>
													<dt><a href="<?php bloginfo('url'); ?>/">企業理念</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">カグラのものづくり</a></dt>
													<dt><a href="<?php bloginfo('url'); ?>/">コーポレートブランド</a></dt>
												</dl>
											</div>
										</div>
									</div>
									<div class="group">
										<p class="nav__ttl">技術情報</p>
										<dl>
											<dt><a href="<?php bloginfo('url'); ?>/">技術情報</a></dt>
											<dt><a href="<?php bloginfo('url'); ?>/">寸法表</a></dt>
										</dl>
									</div>
									<div class="group">
										<p class="nav__ttl">補助金</p>
										<dl>
											<dt><a href="<?php bloginfo('url'); ?>/">補助金</a></dt>
										</dl>
									</div>
								</div>
							</div>
						</li>
						<li><a href="<?php bloginfo('url'); ?>/">SDGs</a></li>
						<li><a href="<?php bloginfo('url'); ?>/">求人情報</a></li>
					</ul>
				</nav>
			</div>
			<div class="main_img">
				<div class="slide_wrapper">
					<div class="slide-navigation">
						<ul class="">
							<li class="thumbnail-item"><img src="<?php bloginfo('template_url'); ?>/img/thum-1.jpg" alt=""></li>
							<li class="thumbnail-item"><img src="<?php bloginfo('template_url'); ?>/img/thum-2.jpg" alt=""></li>
							<li class="thumbnail-item"><img src="<?php bloginfo('template_url'); ?>/img/thum-3.jpg" alt=""></li>
							<li class="thumbnail-item"><img src="<?php bloginfo('template_url'); ?>/img/thum-4.jpg" alt=""></li>
						</ul>
					</div>
					<ul class="main_slide">
						<li><img src="<?php bloginfo('template_url'); ?>/img/main-v-1.jpg" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/img/main-v-1.jpg" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/img/main-v-1.jpg" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/img/main-v-1.jpg" alt=""></li>
					</ul>
				</div>
			</div>
		</header>
		<!-- header -->

		<main>
			<div class="wrapper">
				<div class="top__news fadeIn wow" data-wow-duration="2s">
					<div class="box">
						<section class="news">
							<h2 class="sub_ttl ProstoOne">News</h2>
							<?php $loop_news = new WP_Query( array( 'post_type' => 'post' , 'posts_per_page' => 1)); ?>
							<?php while ( $loop_news->have_posts() ) : $loop_news->the_post(); ?>
								<div class="headline">
									<span><?php echo get_the_date('Y.n.j'); ?></span><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
								</div>
							<?php endwhile; ?>
						</section>
						<p><a href="<?php bloginfo('url'); ?>/" class="link">新着情報一覧</a></p>
					</div>
				</div>

				<div class="content_block fadeIn wow" data-wow-duration="2s">
					<h2 class="ttl yumincho"><span class="ProstoOne">Pick up</span>おすすめ商品</h2>
					<ul class="sub_slide top__recommend">
						<li>
							<a href="<?php bloginfo('url'); ?>/">
								<figure class="outer">
									<img src="<?php bloginfo('template_url'); ?>/img/pickup_dammy.jpg" alt="">
									<figcaption>アスリート（電気式）</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="<?php bloginfo('url'); ?>/">
								<figure class="outer">
									<img src="<?php bloginfo('template_url'); ?>/img/pickup_dammy.jpg" alt="">
									<figcaption>アスリート（電気式）</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="<?php bloginfo('url'); ?>/">
								<figure class="outer">
									<img src="<?php bloginfo('template_url'); ?>/img/pickup_dammy.jpg" alt="">
									<figcaption>アスリート（電気式）</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="<?php bloginfo('url'); ?>/">
								<figure class="outer">
									<img src="<?php bloginfo('template_url'); ?>/img/pickup_dammy.jpg" alt="">
									<figcaption>アスリート（電気式）</figcaption>
								</figure>
							</a>
						</li>
						<li>
							<a href="<?php bloginfo('url'); ?>/">
								<figure class="outer">
									<img src="<?php bloginfo('template_url'); ?>/img/pickup_dammy.jpg" alt="">
									<figcaption>アスリート（電気式）</figcaption>
								</figure>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="content_block fadeIn wow" data-wow-duration="2.4s">
				<h2 class="ttl yumincho"><span class="ProstoOne">Business</span>事業紹介</h2>
				<section class="top__business">
					<article class="bg-open-right js-trigger reverse">
						<div class="box">
							<section>
								<h3 class="sub_ttl yumincho">ガスプラント事業</h3>
								<p>
									ガスプラント事業などの気化機器・発電機器を開発しています。
									ガスプラント事業などの気化機器・発電機器を開発しています。
								</p>
								<a href="<?php bloginfo('url'); ?>/" class="common_btn">ガスプラント事業について</a>
							</section>
						</div>
						<div class="pic">
							<img src="<?php bloginfo('template_url'); ?>/img/business_02.jpg" alt="">
						</div>
					</article>

					<article class="bg-open-left js-trigger">
						<div class="pic">
							<img src="<?php bloginfo('template_url'); ?>/img/business_01.jpg" alt="">
						</div>
						<div class="box">
							<section>
								<h3 class="sub_ttl yumincho">ガス機器事業</h3>
								<p>
									ガス機器事業などの気化機器・発電機器を開発しています。
									ガス機器事業などの気化機器・発電機器を開発しています。
								</p>
								<a href="<?php bloginfo('url'); ?>/" class="common_btn">ガス機器事業について</a>
							</section>
						</div>
					</article>

					<article class="bg-open-right js-trigger reverse">
						<div class="box">
							<section>
								<h3 class="sub_ttl yumincho">ガスプラント事業</h3>
								<p>
									ガスプラント事業などの気化機器・発電機器を開発しています。
									ガスプラント事業などの気化機器・発電機器を開発しています。
								</p>
								<a href="<?php bloginfo('url'); ?>/" class="common_btn">ガスプラント事業について</a>
							</section>
						</div>
						<div class="pic">
							<img src="<?php bloginfo('template_url'); ?>/img/business_02.jpg" alt="">
						</div>
					</article>

					<article class="bg-open-left js-trigger">
						<div class="pic">
							<img src="<?php bloginfo('template_url'); ?>/img/business_03.jpg" alt="">
						</div>
						<div class="box">
							<section>
								<h3 class="sub_ttl yumincho">非常用発電機事業</h3>
								<p>
									非常用発電機事業などの気化機器・発電機器を開発しています。
									非常用発電機事業などの気化機器・発電機器を開発しています。
								</p>
								<a href="<?php bloginfo('url'); ?>/" class="common_btn">非常用発電機事業について</a>
							</section>
						</div>
					</article>

					<article class="bg-open-right js-trigger reverse">
						<div class="box">
							<section>
								<h3 class="sub_ttl yumincho">災害対策事業</h3>
								<p>
									災害対策事業などの気化機器・発電機器を開発しています。
									災害対策事業などの気化機器・発電機器を開発しています。
								</p>
								<a href="<?php bloginfo('url'); ?>/" class="common_btn">災害対策事業について</a>
							</section>
						</div>
						<div class="pic">
							<img src="<?php bloginfo('template_url'); ?>/img/business_04.jpg" alt="">
						</div>
					</article>

					<article class="bg-open-left js-trigger">
						<div class="pic">
							<img src="<?php bloginfo('template_url'); ?>/img/business_03.jpg" alt="">
						</div>
						<div class="box">
							<section>
								<h3 class="sub_ttl yumincho">非常用発電機事業</h3>
								<p>
									非常用発電機事業などの気化機器・発電機器を開発しています。
									非常用発電機事業などの気化機器・発電機器を開発しています。
								</p>
								<a href="<?php bloginfo('url'); ?>/" class="common_btn">非常用発電機事業について</a>
							</section>
						</div>
					</article>
					
				</section>
			</div>
		</main>
		<!-- main -->
	</div>
</div>

<?php get_footer(); ?>