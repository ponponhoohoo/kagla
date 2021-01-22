	<?php get_header();

	/**
	 * Template Name: search_page
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
						検索
					</h2>
					<p class="fadeInUp wow" data-wow-duration="1s" data-wow-delay="1.8">
						ここでは、当社製品の利用時に発生する可能性のある問題の解決手順についてご説明致します。
					</p>
				</div>
			</div>

			<main>
				<div class="second">
					<div class="after_service">
						<div class="sub__wrap trouble">
							<section class="search_box mb_60">
								<h3 class="sub_ttl"><i class="fa fa-search" aria-hidden="true"></i> 検索</h3>
								
								<section class="box">
									<form role="search" method="get" id="searchform" action="<?php echo home_url(); ?>" >
										<input type="text" name="s" id="s" placeholder="SEARCH"/>
										<input type="submit" class="btn" value="検索" />
									</form>
								</section>
							</section>
						</div>
					</div>
				</div>
			</main>
			<!-- main -->
		</div>
	</div>

</div>


<?php get_footer(); ?>