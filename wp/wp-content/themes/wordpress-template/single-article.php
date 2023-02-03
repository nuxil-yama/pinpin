<?php
get_header();
?>
</head>

<body>

<div id="cursor"></div>

<header class="header">
  <h1 class="header__logo"><a href="<?php echo home_url();?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt=""></a></h1>
  <nav class="header__nav">
    <ul class="header__nav-list">
      <li class="header__nav-item current"><a class="emoji-link" href="<?php echo home_url();?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_box.svg" alt=""></a></li>
      <li class="header__nav-item"><a class="emoji-link" href="<?php echo home_url();?>/article/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_blog.svg" alt=""></a></li>
    </ul>
  </nav>
  <div class="header__sns">
    <ul class="header__sns-list">
      <li class="header__sns-item">
        <a class="txt-link" href="https://twitter.com/kikikaikaimkjtn" target="_blank" rel="noopener noreferrer">twitter</a>
      </li>
      <li class="header__sns-item">
        <a class="txt-link" href="https://www.instagram.com/noto_954/" target="_blank" rel="noopener noreferrer">instagram</a>
      </li>
      <li class="header__sns-item">
        <a class="txt-link" href="https://open.spotify.com/show/0DEV2gUjx4tgwBLpJFlX7j?si=a9314942ceac401a" target="_blank" rel="noopener noreferrer">spotify</a>
      </li>
      <li class="header__sns-item">
        <a class="txt-link" href="https://discord.gg/HRHDaqey" target="_blank" rel="noopener noreferrer">discord</a>
      </li>
    </ul>
  </div>
</header>

<main class="content article">
  <aside class="article-side">
    <ul class="article-side__list">
      <?php
      // 固定ページに特定のカテゴリーを表示
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
          'post_type' => 'article',
          'posts_per_page' => 5,
          'paged' => $paged,
      );
      $the_query = new WP_Query( $args );
      if ( $the_query->have_posts() ) :
      ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <li class="article-side__item">
        <a class="article-side__link" href="<?php echo get_permalink(); ?>">
          <div class="article-side__ttl"><?php the_title(); ?></div>
          <div class="article-side__date date"><?php the_time('Y.m.d'); ?></div>
        </a>
      </li>

      <?php endwhile;endif; wp_reset_postdata(); ?>

    </ul>
  </aside>

  <article class="article-main">
    <div class="article-main__ttl-wrap">
      <h2 class="article-main__ttl"><?php the_title(); ?></h2>
      <div class="article-main__date date"><?php the_time('Y.m.d'); ?></div>
    </div>
    <div class="article-main__txt">
      <?php the_content(); ?>
    </div>
  </article>

  <div class="pager">
    <?php if( get_previous_post_link() ) : ?>
      <div class="emoji-link">
        <?php previous_post_link('%link','<img src="' . get_template_directory_uri() . '/img/icon_prev.svg">'); ?>
      </div>
    <?php else: ?>
      <div class="emoji-link disabled">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_prev.svg" alt="">
      </div>
    <?php endif; ?>


    <a class="pager__back emoji-link" href="../">
      <img src="<?php echo get_template_directory_uri(); ?>/img/icon_blog.svg" alt="">
    </a>

    <?php if( get_next_post_link() ) : ?>
      <div class="emoji-link">
        <?php next_post_link('%link','<img src="' . get_template_directory_uri() . '/img/icon_next.svg">'); ?>
      </div>
    <?php else: ?>
      <div class="emoji-link disabled">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_next.svg" alt="">
      </div>
    <?php endif; ?>



  </div>
</main>

<?php
get_footer();
?>
</body>
</html>
