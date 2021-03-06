	<?php get_header();

	/**
	 * Template Name: faq
	 *
	 */
	?>

	<div class="content">
		<?php get_sidebar(); ?>
		<div class="main">
			<?php get_template_part('second_header'); ?>

			<script>
				$(document).ready(function() {
					$('.accordion li').click(function() {
						$(this).find('.lead').slideToggle();

						$(this).find('.icon').toggleClass('is-active');

						return false;
					});
					$('.accordion li a').click(function() {
						window.location.href = $(this).attr('href');
						return false;
					});
				});
			</script>

			<div class="second_main_img business__bg fadeIn wow" data-wow-duration="1.0s">
				<div class="outer">
					<h2 class="sub_ttl fadeInUp wow" data-wow-duration="1.0s" data-wow-delay="1">
						よくある質問
					</h2>
					<p class="fadeInUp wow" data-wow-duration="1s" data-wow-delay="1.8">
						ここでは、お客様からよく頂くご質問について掲載しております。<br>
						ここにないご質問に関しましては、こちらの問い合わせフォームよりお気軽にご連絡ください。
					</p>
				</div>
			</div>

			<main>
				<div class="second">
					<div class="after_service">
						<div class="wrapper faq">
							
							<?php
							$taxonomy_name = 'cat_question';
							$taxonomys = get_terms($taxonomy_name);

							if(!empty($taxonomys) && count($taxonomys)):
								foreach($taxonomys as $taxonomy):
									if ($taxonomy->parent == 0) {
										$p_term_id = esc_html($taxonomy->term_id);
										echo '<h2 class="middle_ttl">' . $taxonomy->name . '</h2>';
										echo '<ul class="icon_nav mb_60">';
										$termchildren = get_term_children( $p_term_id, $taxonomy_name);

										foreach ($termchildren as $childtern) {
											$term = get_term_by( 'id', $childtern, $taxonomy_name );
											$targetSlug = $term->slug;
											$term_id = esc_html($term->term_id);
										        $term_idsp = "cat_question_".$term_id; //カスタムフィールドを取得するのに必要なtermのIDは「taxonomyname_ + termID」
										        $photo = get_field('画像',$term_idsp);
										        $photosp = wp_get_attachment_image_src($photo, 'full');
										        $url = get_term_link($taxonomy->slug, 'cat_question');

										        ?>
										        <li>
										        	
										        	<a href="<?php echo $url; ?>">
										        		<?php $image = get_field('画像', $term); 

										        		if( !empty($photo) ): ?>
										        			<img src="<?php echo $photo; ?>" alt="<?php echo $image['alt']; ?>" />
										        			<?php else: ?>
										        				<img src="<?php echo get_template_directory_uri(); ?>/img/pic_dammy.jpg" alt="">
										        			<?php endif; ?>
										        			<p class="sub_ttl"><?php echo esc_html($term->name); ?></p>
										        			<p><?php echo esc_html($term->description ); ?></p>
										        		</a>
										        	</li>
										        	<?php
										        }
										        echo '</ul>';
										    }
										    ?>
										    
										    <?php
										endforeach;
									endif;
									?>
									

									<?php
									$terms = get_terms( 'cat_question' );
									foreach ( $terms as $term ) :
										$args = array(
											'post_type' => 'question',
											'taxonomy' => 'cat_question',
											'term' => $term->slug,
											'posts_per_page' => 5,
											'no_found_rows' => true,
										);
										$query = new WP_Query($args); ?>
										<section class="mb_40 faq_area">
											<h3 class="middle_ttl"><?php echo esc_html( $term->name ); ?></h3>
											<ul class="accordion">
												<?php if ( $query->have_posts() ) : ?>
													<?php while ( $query->have_posts() ) : $query->the_post();?>
														<li>
															<div class="faq_ttl"><?php the_title(); ?>
															<p class="icon">
																<span></span>
																<span></span>
															</p>
														</div>
														<p class="lead">
															<?php remove_filter ('the_content', 'wpautop'); ?>
															<?php the_content(); ?>
														</p>
													</li>
												<?php endwhile;?>
												<?php wp_reset_postdata(); ?>
											<?php endif; ?>
										</ul>
									</section>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</main>
				<!-- main -->
			</div>
		</div>

	</div>


	<?php get_footer(); ?>