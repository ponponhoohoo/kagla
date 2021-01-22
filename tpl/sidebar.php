<div class="nav_area">
  <div class="fix sp_none">
    <nav>
      <ul class="yumincho">
        <li>
          <a href="<?php bloginfo('url'); ?>/">
            <img src="<?php bloginfo('template_url'); ?>/<?php bloginfo('template_url'); ?>/img/icon-1.png" alt="">
            <p>お問合せ</p>
          </a>
        </li>
        <li>
          <a href="<?php bloginfo('url'); ?>/download-list">
            <img src="<?php bloginfo('template_url'); ?>/img/icon-2.png" alt="">
            <p>カタログ</p>
          </a>
        </li>
        <li>
          <a href="<?php bloginfo('url'); ?>/">
            <img src="<?php bloginfo('template_url'); ?>/img/icon-3.png" alt="">
            <p>検索</p>
          </a>
        </li>
        <?php if( is_user_logged_in() ) : ?>
          <li> <?php wp_logout_url(); ?>
          <a href="<?php bloginfo('url'); ?>/wp-login.php?action=logout">
            <img src="<?php bloginfo('template_url'); ?>/img/icon-4.png" alt="">
            <p>ログアウト</p>
          </a>
        </li>
        <?php else : ?>
          <li> 
          <a href="<?php bloginfo('url'); ?>/login">
            <img src="<?php bloginfo('template_url'); ?>/img/icon-4.png" alt="">
            <p>ログイン</p>
          </a>
        </li>
          
        <?php endif; ?>
      </ul>
    </nav>
    <div class="outer sp_none">
      <div class="copy"><p><a href="#" class="ProstoOne"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span>Page top</a></p></div>
    </div>
  </div>
</div>