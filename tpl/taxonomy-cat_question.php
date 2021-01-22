<?php get_header(); ?>

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
<!--               <ul class="icon_nav mb_60">
              <?php
                $taxonomy_name = 'cat_question';
                $taxonomys = get_terms($taxonomy_name);

                if(!empty($taxonomys) && count($taxonomys)):
                    foreach($taxonomys as $taxonomy):
                        $term_id = esc_html($taxonomy->term_id);
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
                  <p class="sub_ttl"><?php echo esc_html($taxonomy->name); ?></p>
                  <p><?php echo esc_html($taxonomy->description ); ?></p>
                </li>
                <?php
                    endforeach;
                endif;
              ?>
              </ul> -->

              <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $taxonomy_name  = get_query_var('taxonomy');
                $term_var = get_query_var( 'term' );
                $query = new WP_Query();
                $param = array(
                  'paged' => $paged,
                  'posts_per_page' => -1,
                  'post_type' => 'question',
                  'order' => 'ASC',
                  'taxonomy' => $taxonomy_name,
                  'term' => $term_var,
                );
                $query->query($param);
              ?>

                  <section class="mb_40 faq_area">
                  <h3 class="middle_ttl"><?php single_tag_title(); ?></h3>
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
                      <?php endwhile; endif; ?>
                     <?php 
                        if(function_exists('wp_pagenavi')){
                          wp_pagenavi(array('query'=>$myQuery));
                        }
                        wp_reset_postdata();
                      ?>
                  </ul>
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