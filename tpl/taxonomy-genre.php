<?php get_template_part('second_header'); ?>



<div class="second__main">
    <div class="outer">
      <h2 class="sub_ttl"><span>製作事例一覧</span></h2>
    </div>
    <div class="second_img case__bg"></div>
  </div>

  <main class="second__wrap">
    <section class="wow fadeIn case" data-wow-duration="1.2s">
      <section class="wrap">
        <section class="cat">
          <div class="left">
            <?php get_sidebar(); ?>
          </div>
          <div class="right">
            <h3 class="middle_ttl"><?php single_tag_title(); ?></h3>
            <div class="mb_40">
              <?php echo term_description(); ?>
            </div>
            <div class="list">
               <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $taxonomy_name  = get_query_var('taxonomy');
                $term_var = get_query_var( 'term' );
                $myQuery = new WP_Query();
                $param = array(
                  'paged' => $paged,
                  'posts_per_page' => -1,
                  'post_type' => 'case',
                  'order' => 'ASC',
                  'taxonomy' => $taxonomy_name,
                  'term' => $term_var,
                );
                $myQuery->query($param);
              ?>
              <ul>
                <?php if($myQuery->have_posts()): while($myQuery->have_posts()) : $myQuery->the_post(); ?>
                <li>
                  <a href="<?php echo get_permalink(); ?>">
                    <figure class="img_wrap">
                      <?php
                      $thumb = get_the_post_thumbnail( $loop_news->post_id );
                      echo $thumb;
                    ?>
                    </figure>
                    <p class="sub_ttl"><?php the_title(); ?></p>
                  </a>
                </li>
                <?php endwhile; endif; ?>
              </ul>
              <?php 
                  if(function_exists('wp_pagenavi')){
                    wp_pagenavi(array('query'=>$myQuery));
                  }
                  wp_reset_postdata();
              ?>
            </div>
          </section>
        </section>
      </section>

<?php get_footer(); ?>
