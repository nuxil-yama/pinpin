<?php
/*
Template Name: トップページ
 */
?>

<?php
get_header();
?>
</head>

<body>


<header class="header">
    <h1 class="header__logo"><a href="/"><img src="/img/logo.svg" alt=""></a></h1>
    <nav class="header__nav">
      <ul class="header__nav-list">
        <li class="header__nav-item current"><a class="emoji-link" href="/"><img src="/img/icon_box.svg" alt=""></a></li>
        <li class="header__nav-item"><a class="emoji-link" href="/article/"><img src="/img/icon_blog.svg" alt=""></a></li>
      </ul>
    </nav>
    <div class="header__sns">
      <ul class="header__sns-list">
        <li class="header__sns-item"><a class="txt-link" href="" target="_blank" rel="noopener noreferrer">twitter</a></li>
        <li class="header__sns-item"><a class="txt-link" href="" target="_blank" rel="noopener noreferrer">instagram</a></li>
        <li class="header__sns-item"><a class="txt-link" href="" target="_blank" rel="noopener noreferrer">spotify</a></li>
        <li class="header__sns-item"><a class="txt-link disabled" href="" target="_blank" rel="noopener noreferrer">discord</a></li>
      </ul>
    </div>
  </header>

  <main class="content top">
    <ul class="top__list">
      <li class="top__item">
        <a class="top__item-link" href="" target="_blank" rel="noopener noreferrer">
          <img src="/img/item01.png" alt="" loading="lazy">
          <div class="top__item-detail">
            <div class="top__item-name">黒豆袋</div>
            <div class="top__item-price">¥10,000</div>
          </div>
        </a>
      </li>
      <li class="top__item">
        <a class="top__item-link" href="" target="_blank" rel="noopener noreferrer">
          <img src="/img/item02.png" alt="" loading="lazy">
          <div class="top__item-detail">
            <div class="top__item-name">黒豆袋</div>
            <div class="top__item-price">¥10,000</div>
          </div>
        </a>
      </li>
      <li class="top__item">
        <a class="top__item-link" href="" target="_blank" rel="noopener noreferrer">
          <img src="/img/item03.png" alt="" loading="lazy">
          <div class="top__item-detail">
            <div class="top__item-name">黒豆袋</div>
            <div class="top__item-price">¥10,000</div>
          </div>
        </a>
      </li>
      <li class="top__item">
        <a class="top__item-link" href="" target="_blank" rel="noopener noreferrer">
          <img src="/img/item04.png" alt="" loading="lazy">
          <div class="top__item-detail">
            <div class="top__item-name">黒豆袋</div>
            <div class="top__item-price">¥10,000</div>
          </div>
        </a>
      </li>
    </ul>
  </main>

<?php
get_footer();
?>
</body>
</html>
