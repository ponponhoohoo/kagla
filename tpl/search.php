<?php get_header(); ?>

<div class="content">
  <?php get_sidebar(); ?>
  <div class="main">
    <?php get_template_part('second_header'); ?>

    <div class="second_main_img business__bg fadeIn wow" data-wow-duration="1.0s">
      <div class="outer">
        <h2 class="sub_ttl fadeInUp wow" data-wow-duration="1.0s" data-wow-delay="1">
          検索結果
        </h2>
        <p class="fadeInUp wow" data-wow-duration="1s" data-wow-delay="1.8">
          ここでは、当社製品の利用時に発生する可能性のある問題の解決手順についてご説明致します。
        </p>
      </div>
    </div>

    <?php
    global $wp_query;
    $SEARCHWORD = [];
    $s = $_GET['s'];

    // if ($array_sympton != "" && !empty($array_sympton)) {
    //   $arr_terms[] = $array_sympton; 
    // }
    // if ($array_product_issue != "" && !empty($array_product_issue)) {
    //   $arr_terms[] = $array_product_issue; 
    // }

    // $tax_query = array(
    //   'taxonomy' => 'issue',
    //   'field' => 'slug',
    //   'terms' => $arr_terms
    // );

    // $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    // $searched_posts = new WP_Query( array(
    //   'post_status' => 'publish',
    //   'posts_per_page' => 12,
    //   'paged' => $paged,
    //   'tax_query' => array(
    //     'relation' => 'AND',
    //     $tax_query,
    //   ),
    //   'orderby' => 'date'
    // ) );

/*echo '<pre>';
print_r ($searched_posts);
echo '</pre>';*/
?>
<main>
  <div class="second">
    <main>
      <div class="sub__wrap">
          
          <?php if (have_posts()): ?>
          <?php
            if (isset($_GET['s']) && empty($_GET['s'])) {
              echo '検索キーワード未入力';
            } else {
              echo '"'.$_GET['s'] .'"の検索結果：'.$wp_query->found_posts .'件';
            }
          ?>
          <ul class="itemlist mb_60">
          <?php while(have_posts()): the_post(); ?>
          <li>
          <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
          </li>
          <?php endwhile; ?>
          </ul>
          <?php else: ?>
          <p class="mb_60">検索結果が見つかりませんでした。</p>
          <?php endif; ?>
        </main>
        <!-- main -->
      </div>
    </div>

  </div>
  <?php get_footer(); ?>
