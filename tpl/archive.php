  <?php get_header(); 
  ?>

  <div class="second_main_img">
    <div class="outer">
      <h2 class="yumincho">お客様の声</h2>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/img/privacy_bg.jpg">
  </div>
  
  <main>
    <section class="content_block">
      <div class="wrapper">
        <section class="voice">
          <?php if (have_posts()) : ?>
          <ul>
          <?php query_posts($query_string . "&showposts=-1"); ?> <!--1ページあたりの表示件数を指定-->
          <?php while (have_posts()) : the_post(); ?>
            <li>
              <a href="<?php echo get_permalink(); ?>">
                <p class="date"><?php the_time('Y.m.d'); ?></p>
                <p class="name yumincho"><?php the_title(); ?></p>
                <p class="note">
                  <?php
                    if(mb_strlen($post->post_content, 'UTF-8')>100){
                      $content= mb_substr($post->post_content, 0, 100, 'UTF-8');
                      echo $content.'　　　READ MORE ……';
                    }else{
                      echo $post->post_content;
                    }
                  ?>
                </p>
              </a>
            </li>
            <?php endwhile; ?>
          </ul>
          <?php endif; ?>
        </section>
      </div>
    </section>
  </main>
  <!-- main -->

  <?php get_footer(); ?>