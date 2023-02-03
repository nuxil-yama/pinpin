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

<main class="content top">
  <ul class="top__list">
    <li class="top__item js-modal-open">
      <img class="top__item-img" src="<?php echo get_template_directory_uri(); ?>/img/item01.png" alt="" loading="lazy">
      <div class="js-modal-area">
        <div class="js-modal-wrap">
          <div class="js-modal-inner">
            <div class="top__item-detail js-modal-detail">
              <div class="top__item-name">白豆袋</div>
              <div class="top__item-price">¥10,000</div>
              <div class="top__item-desc">
                2/3 節分 豆の日を記念した、数量限定の白の脳盗豆袋。魔除けもの。<br>
                AI玉置など幻の初期作を収録した非売品カセットテープがついてきます。<br>
                詳細は購入サイトへ。袋の画像はあくまでイメージです。
              </div>
              <button class="top__item-btn js-modal-btn">
                <a class="emoji-link" href="https://www.cstr.jp/tbsradio/product.php?id=noutou_set1" target="_blank" rel="noopener noreferrer">購入サイトへ</a>
              </button>
            </div>
            <button class="js-modal-close">閉じる</button>
          </div>
          <div class="non-scroll"></div>
        </div>
      </div>
    </li>

    <li class="top__item js-modal-open">
      <img class="top__item-img" src="<?php echo get_template_directory_uri(); ?>/img/item02.png" alt="" loading="lazy">
      <div class="js-modal-area">
        <div class="js-modal-wrap">
          <div class="js-modal-inner">
            <div class="top__item-detail js-modal-detail">
              <div class="top__item-name">黒豆袋</div>
              <div class="top__item-price">¥10,000</div>
              <div class="top__item-desc">
                2/3 節分 豆の日を記念した、数量限定の黒の脳盗豆袋。魔寄せもの。<br>
                2023元旦反省回「お蔵入りの真実」を収録した非売品カセットテープがついてきます。<br>
                詳細は購入サイトへ。袋の画像はあくまでイメージです。
              </div>
              <button class="top__item-btn js-modal-btn">
                <a class="emoji-link" href="https://www.cstr.jp/tbsradio/product.php?id=noutou_set2" target="_blank" rel="noopener noreferrer">購入サイトへ</a>
              </button>
            </div>
            <button class="js-modal-close">閉じる</button>
          </div>
          <div class="non-scroll"></div>
        </div>
      </div>
    </li>

    <li class="top__item js-modal-open">
      <img class="top__item-img" src="<?php echo get_template_directory_uri(); ?>/img/item03.png" alt="" loading="lazy">
      <div class="js-modal-area">
        <div class="js-modal-wrap">
          <div class="js-modal-inner">
            <div class="top__item-detail js-modal-detail">
              <div class="top__item-name">脳盗cassette 白盤</div>
              <div class="top__item-price">not for sale</div>
              <div class="top__item-desc">
                白豆袋でのみ手に入る、限定非売品。<br>
                AI玉置など幻の初期5作を収録したカセットテープです。<br>
                口外OKの作品。
              </div>
              <button class="top__item-btn js-modal-btn">
                <a class="emoji-link" href="https://www.cstr.jp/tbsradio/product.php?id=noutou_set1" target="_blank" rel="noopener noreferrer">購入サイトへ</a>
              </button>
            </div>
            <button class="js-modal-close">閉じる</button>
          </div>
          <div class="non-scroll"></div>
        </div>
      </div>
    </li>

    <li class="top__item js-modal-open">
      <img class="top__item-img" src="<?php echo get_template_directory_uri(); ?>/img/item04.png" alt="" loading="lazy">
      <div class="js-modal-area">
        <div class="js-modal-wrap">
          <div class="js-modal-inner">
            <div class="top__item-detail js-modal-detail">
              <div class="top__item-name">脳盗cassette 黒盤</div>
              <div class="top__item-price">not for sale</div>
              <div class="top__item-desc">
                黒豆袋でのみ手に入る、限定非売品。<br>
                2023元旦反省回「お蔵入りの真実」を収録したカセットテープです。<br>
                口外禁止の作品。
              </div>
              <button class="top__item-btn js-modal-btn">
                <a class="emoji-link" href="https://www.cstr.jp/tbsradio/product.php?id=noutou_set2" target="_blank" rel="noopener noreferrer">購入サイトへ</a>
              </button>
            </div>
            <button class="js-modal-close">閉じる</button>
          </div>
          <div class="non-scroll"></div>
        </div>
      </div>
    </li>

    <li class="top__item js-modal-open">
      <img class="top__item-img" src="<?php echo get_template_directory_uri(); ?>/img/item05.png" alt="" loading="lazy">
      <div class="js-modal-area">
        <div class="js-modal-wrap">
          <div class="js-modal-inner">
            <div class="top__item-detail js-modal-detail">
              <div class="top__item-name">hoodie 白</div>
              <div class="top__item-price">¥8,500 (M,L,XL)</div>
              <div class="top__item-desc">
                魔除けの白、魔寄せの黒。<br>
                mesoismによるアートワークがまじでかっこいい。<br>
                このデザインは、2023節分の日限定。
              </div>
              <button class="top__item-btn js-modal-btn">
                <a class="emoji-link" href="https://www.cstr.jp/tbsradio/product.php?id=noutou_parka" target="_blank" rel="noopener noreferrer">購入サイトへ</a>
              </button>
            </div>
            <button class="js-modal-close">閉じる</button>
          </div>
          <div class="non-scroll"></div>
        </div>
      </div>
    </li>

    <li class="top__item js-modal-open">
      <img class="top__item-img" src="<?php echo get_template_directory_uri(); ?>/img/item06.png" alt="" loading="lazy">
      <div class="js-modal-area">
        <div class="js-modal-wrap">
          <div class="js-modal-inner">
            <div class="top__item-detail js-modal-detail">
              <div class="top__item-name">hoodie 黒</div>
              <div class="top__item-price">¥8,500 (M,L,XL)</div>
              <div class="top__item-desc">
                魔除けの白、魔寄せの黒。<br>
                mesoismによるアートワークがまじでかっこいい。<br>
                このデザインは、2023節分の日限定。
              </div>
              <button class="top__item-btn js-modal-btn">
                <a class="emoji-link" href="https://www.cstr.jp/tbsradio/product.php?id=noutou_parka" target="_blank" rel="noopener noreferrer">購入サイトへ</a>
              </button>
            </div>
            <button class="js-modal-close">閉じる</button>
          </div>
          <div class="non-scroll"></div>
        </div>
      </div>
    </li>
    
    <li class="top__item js-modal-open">
      <img class="top__item-img" src="<?php echo get_template_directory_uri(); ?>/img/item07.png" alt="" loading="lazy">
      <div class="js-modal-area">
        <div class="js-modal-wrap">
          <div class="js-modal-inner">
            <div class="top__item-detail js-modal-detail">
              <div class="top__item-name">T shirt 白</div>
              <div class="top__item-price">¥4,500 (M,L,XL)</div>
              <div class="top__item-desc">
                魔除けの白、魔寄せの黒。<br>
                mesoismによるアートワークがまじでかっこいい。<br>
                １年間通して着られる脳盗のアパレルは今んところこれだけ。<br>
                このデザインは、2023節分の日限定。
              </div>
              <button class="top__item-btn js-modal-btn">
                <a class="emoji-link" href="https://www.cstr.jp/tbsradio/product.php?id=noutou_tshirts" target="_blank" rel="noopener noreferrer">購入サイトへ</a>
              </button>
            </div>
            <button class="js-modal-close">閉じる</button>
          </div>
          <div class="non-scroll"></div>
        </div>
      </div>
    </li>
    
    <li class="top__item js-modal-open">
      <img class="top__item-img" src="<?php echo get_template_directory_uri(); ?>/img/item08.png" alt="" loading="lazy">
      <div class="js-modal-area">
        <div class="js-modal-wrap">
          <div class="js-modal-inner">
            <div class="top__item-detail js-modal-detail">
              <div class="top__item-name">T shirt 黒</div>
              <div class="top__item-price">¥4,500 (M,L,XL)</div>
              <div class="top__item-desc">
                魔除けの白、魔寄せの黒。<br>
                mesoismによるアートワークがまじでかっこいい。<br>
                １年間通して着られる脳盗のアパレルは今んところこれだけ。<br>
                このデザインは、2023節分の日限定。
              </div>
              <button class="top__item-btn js-modal-btn">
                <a class="emoji-link" href="https://www.cstr.jp/tbsradio/product.php?id=noutou_tshirts" target="_blank" rel="noopener noreferrer">購入サイトへ</a>
              </button>
            </div>
            <button class="js-modal-close">閉じる</button>
          </div>
          <div class="non-scroll"></div>
        </div>
      </div>
    </li>
  </ul>
</main>

<?php
get_footer();
?>
</body>
</html>
