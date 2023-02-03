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

<main class="content archive">
  <div class="archive__list">
  <?php
    // 固定ページに特定のカテゴリーを表示
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'article',
        'posts_per_page' => 10,
        'paged' => $paged,
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
    ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="archive__item">
      <a class="archive__link" href="<?php echo get_permalink(); ?>">
        <div class="archive__ttl"><?php the_title(); ?></div>
        <div class="archive__date date"><?php the_time('Y.m.d'); ?></div>
      </a>
    </div>
    <?php endwhile;endif; wp_reset_postdata(); ?>
  </div>
  


  <?php
    $page_links = paginate_links( array(
      'prev_next' => false,
      'type' => 'array',
    ));
    if($page_links){
  ?>
  <div class="pager">
    <?php if( get_previous_posts_link() ) : ?>
      <div class="emoji-link">
        <?php previous_posts_link('<img src="' . get_template_directory_uri() . '/img/icon_prev.svg">'); ?>
      </div>
    <?php else: ?>
      <a class="pager__prev emoji-link disabled" href="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_prev.svg" alt="">
      </a>
    <?php endif; ?>
    <?php
      if($page_links){
        echo '<ul class="pager__num"><li class="pager__num-item"><a class="txt-link">';
        echo join( '</a></li><li>', $page_links );
        echo '</li></ul>';
      }
    ?>
    <?php if( get_next_posts_link() ) : ?>
      <div class="emoji-link">
        <?php next_posts_link('<img src="' . get_template_directory_uri() . '/img/icon_next.svg">'); ?>
      </div>
    <?php else: ?>
      <a class="pager__next emoji-link disabledZ" href="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_next.svg" alt="">
      </a>
    <?php endif; ?>
  </div>
  <?php
    }
  ?>
</main>

<?php
get_footer();
?>
</body>
</html>
