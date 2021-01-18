<?php
	get_header();
	/**
	 * Template Name: register
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
						ユーザー新規登録フォーム
					</h2>
					<p class="fadeInUp wow center" data-wow-duration="1s" data-wow-delay="1.8">
						下記、登録フォームにてユーザー登録が行えます。<br>
						必要情報を入力の上、「確認」ボタンにてフォーム送信画面にお進み下さい。
					</p>
				</div>
			</div>

			<main>
			<div class="second">
				<div class="sub__wrap">
					<section class="contact">

						<?php if(have_posts()): while(have_posts()):the_post(); ?>
						<?php remove_filter('the_content', 'wpautop'); ?>
					  	<?php the_content(); ?>
						<?php endwhile; endif; ?>

					</section>
				</div>
			</div>
		</main>
		<!-- main -->
	</div>
</div>

</div>

<?php get_footer(); ?>