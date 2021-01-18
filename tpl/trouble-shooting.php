	<?php get_header();

	/**
	 * Template Name: trouble-shooting
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
					<div class="after_service">
						<div class="sub__wrap trouble">
							<section class="search_box mb_60">
								<h3 class="sub_ttl"><i class="fa fa-search" aria-hidden="true"></i> トラブルシューティング検索</h3>
								
								<section class="box">
									<form role="search" method="get" id="searchform" action="<?php echo home_url(); ?>" >
										<input type="hidden" name="s" id="s" class="hiden" priceholder="検索" />
										<div class="outer">

											<?php
											$args = array(
											    'orderby'    => 'ID', 
											    'order'      => 'ASC',
											);  
											$terms = get_terms( 'issue' ,$args);
											if ( !empty( $terms ) ) {
												$output = array();
												foreach ( $terms as $term ){
													if( 0 == $term->parent && $term->slug != "power-outage") {
														echo '<div class="inner">';
														echo '<h4 class="local_ttl">' . $term->name . '</h4>';
														$arr = array(
															'parent' => $term->term_id,

														);
														$TermsChild = get_terms( 'issue' ,$arr);
														echo '<select name="' . $term->slug . '">';
														foreach ( $TermsChild as $terms ) {
															if ($terms === reset($TermsChild)) {
																echo '<option value="">'.$term->name.'を選択してください</option>';
															}
															echo '<option value="' . $terms->slug. '">'.$terms->name.'</option>';
														}
														echo '</select>';
														echo '</div>';
													}

												}
												
											}
											?>
											<input type="submit" class="btn" value="検索" />
										</div>
									</form>
								</section>
							</section>

							<div class="point mb_60">
								<p>リストにない製品の場合、もしくは内容をご確認しても症状が改善されない場合は、当社サービスセンターまでご連絡ください。</p>
							</div>
						</div>
					</div>
				</div>
			</main>
			<!-- main -->
		</div>
	</div>

</div>


<?php get_footer(); ?>