<?php
	get_header();
	/**
	 * Template Name: login
	 *
	 */
?>

<div class="content">
		<?php get_sidebar(); ?>
		<div class="main">
			<?php get_template_part('second_header'); ?>

			<div class="second_main_img business__bg fadeIn wow" data-wow-duration="1.0s">
				<div class="outer">
					<h2 class="sub_ttl fadeInUp wow" data-wow-duration="1.0s" data-wow-delay="1">
						トラブルシューティング
					</h2>
					<p class="fadeInUp wow" data-wow-duration="1s" data-wow-delay="1.8">
						ここでは、当社製品の利用時に発生する可能性のある問題の解決手順についてご説明致します。
					</p>
				</div>
			</div>

			<main>
			<div class="second">
				<div class="sub__wrap">
					<h3 class="middle_ttl">Terms of service<span>ご利用条件</span></h3>
					<ul class="number_list">
						<li>当サイト掲載のデータは、断りなく変更することがあります。</li>
						<li>当サイト掲載のデータは、当社が著作権を有します。第三者への貸与、譲渡、転送はお断りします。</li>
						<li>当サイト掲載のデータの加工、編集など改変行為はお断りします。</li>
					</ul>
					<ul class="itemlist">
						<li>DXF形式の図面ファイルは、ZIP方式の圧縮ファイルで掲載しています。別途解凍ソフトをご用意下さい。</li>
						<li>DXF形式の図面ファイルをご覧いただくには、CADソフト等が必要です。</li>
						<li>PDF形式のファイルをご覧いただくには、Adobe Acrobat Reader等が必要です。</li>
					</ul>

					<section class="download">


						<?php if(have_posts()): while(have_posts()):the_post(); ?>
						<?php remove_filter('the_content', 'wpautop'); ?>
					  	<?php the_content(); ?>
						<?php endwhile; endif; ?>

						<p class="center mb_40">
							<a href="<?php bloginfo('url'); ?>//wp-login.php?action=lostpassword">パスワードをお忘れですか？</a>
						</p>

						<div class="register">
							<p class="center">
								はじめてのお客様、アカウントをお持ちでない場合はこちらから
							</p>
							<input type="submit" value="ユーザー登録" class="btn">
						</div>
					</section>
				</div>
			</div>
		</main>
		<!-- main -->
	</div>
</div>

</div>

<?php get_footer(); ?>