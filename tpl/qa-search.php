<?php get_header(); ?>

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

    <?php
    global $wp_query;
    $SEARCHWORD = [];
    $arr_terms = [];
    $s = $_GET['s'];
    $array_sympton = $_GET['sympton'];
    $array_product_issue =  $_GET['product-issue'];

    if ($array_sympton != "" && !empty($array_sympton)) {
      $arr_terms[] = $array_sympton; 
    }
    if ($array_product_issue != "" && !empty($array_product_issue)) {
      $arr_terms[] = $array_product_issue; 
    }

    $tax_query = array(
      'taxonomy' => 'issue',
      'field' => 'slug',
      'terms' => $arr_terms
    );

    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $searched_posts = new WP_Query( array(
      'post_status' => 'publish',
      'post_type' => 'qa',
      'posts_per_page' => 12,
      'paged' => $paged,
      'tax_query' => array(
        'relation' => 'AND',
        $tax_query,
      ),
      'orderby' => 'date'
    ) );

/*echo '<pre>';
print_r ($searched_posts);
echo '</pre>';*/
?>
<main>
  <div class="second">
    <main>
      <div class="sub__wrap">
        <?php
        if ( $searched_posts->have_posts() ) :
          ?>
          <ul class="img__ttl_list mb_60">
            <?php
            while ( $searched_posts->have_posts() ) : $searched_posts->the_post();
              ?>

              <li>
                <?php if( get_field('pdf') ): ?>
                <a href="<?php the_field('pdf'); ?>" target="_blank">
                <?php endif; ?>
               
                <?php the_post_thumbnail(); ?>
                <div class="inner">
                  <h3 class="copy"><?php the_title(); ?></h3>
                </div>
                <?php if( get_field('pdf') ): ?>
                </a>
                <?php endif; ?>
              </li>
              
              <?php
            endwhile;
            echo '</ul>';
          else :
            echo '<p class="mb_60">検索結果が見つかりませんでした。</p>';
          endif;
          ?>

          <?php 
          if(function_exists('wp_pagenavi')){
            wp_pagenavi(array('query'=>$searched_posts));
          }
          wp_reset_postdata();
          ?>

        </main>
        <!-- main -->
      </div>
    </div>

  </div>
  <?php get_footer(); ?>
