
<!doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1,minimum-scale=1">
	<meta name="description" content="">
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/reset.css" rel="stylesheet" />
	<link href="<?php bloginfo('template_url'); ?>/css/style.css<?php echo '?' .filemtime( get_template_directory() . '/css/style.css'); ?>" rel="stylesheet" />
	<link href="<?php bloginfo('template_url'); ?>/css/sp.css<?php echo '?' .filemtime( get_template_directory() . '/css/style.css'); ?>" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick-theme.css"/>
	<link rel="stylesheet" href="https://unpkg.com/scroll-hint@1.1.10/css/scroll-hint.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.3/ofi.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
	<script src="https://unpkg.com/scroll-hint@1.1.10/js/scroll-hint.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/respond.src.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
	<?php wp_head(); ?>
</head>
<body class="top">

	<header>
		<div class="pc_none">
			<div class="sp_tel pc_none"><a href="tel:"><i class="fa fa-phone" aria-hidden="true"></i></a></div>
			<div id="nav-drawer">
				<input id="nav-input" type="checkbox" class="nav-unshown">
				<label id="nav-open" for="nav-input"><span></span><span></span><span></span></label>
				<label class="nav-unshown" id="nav-close" for="nav-input"></label>
				<div id="nav-content">
					<div class="box">
						<ul>
							<li><a href="">HOME</a></li>
							<li><a href="">企業情報</a></li>
							<li><a href="">製品一覧</a></li>
							<li><a href="">取扱メーカー</a></li>
							<li><a href="">ケースレポート</a></li>
							<li><a href="">新商品</a></li>
							<li><a href="">学会・展示会情報</a></li>
							<li><a href="">JSS TV</a></li>
							<li><a href="">採用情報</a></li>
							<li><a href="">海外情報</a></li>
							<li><a href="">CSR活動</a></li>
							<li><a href="">お問い合わせ</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header -->