<?php get_template_part('second_header'); ?>
	

<div class="second__main">
	<div class="outer">
		<h2 class="sub_ttl"><span>ブログ</span></h2>
	</div>
	<div class="second_img company_bg"></div>
</div>

<main class="second__wrap">
	<section class="wow fadeIn case" data-wow-duration="1.2s">
		<section class="wrap">
			<section class="cat">
				<div class="left">
					<h2 class="page_ttl yumincho">カテゴリ</h2>
		            <ul class="cat_link">
		            <?php
		            $categories = get_categories('parent=0');

		            foreach($categories as $val){
		              $cat_link = get_category_link($val->cat_ID);

		              echo '<li>';
		              echo '<a href="' . $cat_link . '">' . $val -> name . ' <span>' . $val->count . '</span></a>';
		              echo '</li>';
		            }
		            ?>
		          	</ul>
				</div>
				<div class="right">
					<?php if(have_posts()): while(have_posts()):the_post(); ?>
						<?php remove_filter('the_content', 'wpautop'); ?>
						<h3 class="middle_ttl"><?php the_title(); ?></h3>
						<figure class="mb_40"><?php the_post_thumbnail('full'); ?></figure>

						<section>
							<?php the_content(); ?>
						</section>
					<?php endwhile; endif; ?>
				</div>
			</section>
		</section>
	</section>

<?php get_footer(); ?>