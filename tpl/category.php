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
            <?php
              $category = get_the_category();
              $cat_name = $category[0]->cat_name;
            ?>
            <h3 class="middle_ttl"><?php echo $cat_name; ?></h3>

            <div class="list">
              <ul>
               <?php if(have_posts()): while(have_posts()):the_post(); ?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <figure class="img_wrap">
                      <?php
                      $thumb = get_the_post_thumbnail( $loop_news->post_id );
                      echo $thumb;
                    ?>
                    </figure>
                    <p class="sub_ttl"><?php the_title(); ?> <span><?php echo get_the_date('Y.n.j'); ?></span></p>
                  </a>
                </li>
                <?php endwhile; endif; ?>
              </ul>
              <?php 
                  if(function_exists('wp_pagenavi')){
                    wp_pagenavi(array('query'=>$loop_news));
                  }
                  wp_reset_postdata();
              ?>
            </div>
          </section>
        </section>
      </section>

<?php get_footer(); ?>