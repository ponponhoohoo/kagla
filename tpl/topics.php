	<?php get_template_part('second_header');

	/**
	 * Template Name: topics
	 *
	 */
	?>

	<div class="second__main">
		<div class="outer">
			<h2 class="sub_ttl"><span>新着情報</span></h2>
		</div>
		<div class="second_img company_bg"></div>
	</div>

	<main class="second__wrap">
		<section class="wow fadeIn" data-wow-duration="1.2s">
			<section class="sub__wrap">
				<div class="news_box">
						<dl>
							<?php $loop_news = new WP_Query( array( 'post_type' => 'news' , 'posts_per_page' => 5)); ?>
							<?php while ( $loop_news->have_posts() ) : $loop_news->the_post(); ?>
								<dt><?php echo get_the_date('Y.n.j'); ?></dt>
								<dd><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></dd>
							<?php endwhile; ?>
						</dl>
					</div>
			</section>
		</section>


<?php get_footer(); ?>