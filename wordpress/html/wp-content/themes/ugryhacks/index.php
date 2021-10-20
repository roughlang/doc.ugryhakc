<?php include( get_template_directory()."/inc/header.php"); ?>
<body>
<div class="top-line"></div>
<?php include( get_template_directory()."/inc/nav.php"); ?>
<!-- top-banner -->
<div class="p-3 p-sm-5 mb-4 border-top top-banner">
  <h1 class="display-4">こんにちは!</h1>
  <p class="lead">これは単純なヒーローユニット、注目のコンテンツや情報に特別な注意を喚起するためのシンプルなジャンボトロンスタイルのコンポーネントです。</p>
  <hr class="my-4">
  <p>より大きなコンテナの範囲内でコンテンツに空間をあけるため、文字の体裁と空白ユーティリティクラスを使用している。</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">もっと学ぼう</a>
</div>

<div class="blog-block mt-70 mb-70">
  
  <div class="container">
    <div class="row">
      
      <div class="col-lg-8 main_column">
      <h1 class="page-title">Blog</h1>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="item-summary mt-20 mb-40" id="wp_<?php the_ID(); ?>">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="mt-20">
            <?php
              $icatch_image_path = get_the_post_thumbnail_url(get_the_ID(),'medium');
              if(!empty($icatch_image_path)) {
                echo '<a href="'.get_the_permalink(get_the_ID()).'">';
                echo '<img src="'.$icatch_image_path.'" alt="'.mt_rand(11111,99999).'" class="item-summary-icatch">';
                echo '</a>';
              }
              // else {
              //   if(first_image()) {
              //     echo '<img src="'.first_image().'" alt="'.mt_rand(11111,99999).'" class="item-summary-icatch">';
              //   }
              // }
            ?>
            <!-- <a href="#"><img src="/wp-content/themes/ugryhacks/assets/img/sample/IMG_3436.JPG" class="item-summary-icatch"></a> -->
            <?php
            if (!empty(get_the_excerpt())) {
              $excerpt = preg_replace('/\A[\x00\s]++|[\x00\s]++\z/u', '', get_the_excerpt());
              $excerpt = str_replace('&times; Close ', '', $excerpt);
              $excerpt = trim($excerpt);
              echo $excerpt;
            }
            ?>
            <span class="post-date"><?php the_time('Y.n.j (D)'); ?></span>
          </p>
          <p class="tags">
          <span class="post-tag"><a href="https://ugryhacks.com/note/tag/laravel/" rel="tag">Laravel</a><a href="https://ugryhacks.com/note/tag/php/" rel="tag">PHP</a></span></p>
          <ul class="post-categories">
            <li><a href="https://ugryhacks.com/note/category/backend/" rel="category tag">Backend</a></li>
            <li><a href="https://ugryhacks.com/note/category/docker/" rel="category tag">Docker</a></li>
          </ul>
        </div><!-- item-summary id -->
      <?php endwhile; else: ?>
        <p>記事がありません。</p>
      <?php endif; ?> 

        <div class="item-summary mt-20 mb-40" id="">
          <h2><a href="#">Laravel8でgardをもう一つ作る</a></h2>
          <p class="mt-20">
          <img src="/wp-content/themes/ugryhacks/assets/img/sample/IMG_3436.JPG" class="item-summary-icatch">
            1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目
            <span class="post-date">2021.10.18 (月)</span>
          </p>
          <p class="tags">
          <span class="post-tag"><a href="https://ugryhacks.com/note/tag/laravel/" rel="tag">Laravel</a><a href="https://ugryhacks.com/note/tag/php/" rel="tag">PHP</a></span></p>
          <ul class="post-categories">
            <li><a href="https://ugryhacks.com/note/category/backend/" rel="category tag">Backend</a></li>
            <li><a href="https://ugryhacks.com/note/category/docker/" rel="category tag">Docker</a></li>
          </ul>
        </div><!-- item-summary id -->

        <div class="item-summary mt-20 mb-40" id="">
          <h2><a href="#">Laravel8でgardをもう一つ作る</a></h2>
          <p class="mt-20">
          <img src="/wp-content/themes/ugryhacks/assets/img/sample/IMG_3436.JPG" class="item-summary-icatch">
            1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目1つの列の1列目
            <span class="post-date">2021.10.18 (月)</span>
          </p>
          <p class="tags">
          <span class="post-tag"><a href="https://ugryhacks.com/note/tag/laravel/" rel="tag">Laravel</a><a href="https://ugryhacks.com/note/tag/php/" rel="tag">PHP</a></span></p>
          <ul class="post-categories">
            <li><a href="https://ugryhacks.com/note/category/backend/" rel="category tag">Backend</a></li>
            <li><a href="https://ugryhacks.com/note/category/docker/" rel="category tag">Docker</a></li>
          </ul>
        </div><!-- item-summary id -->
        
      </div>
      <div class="col-lg-4 sub_column">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>
      </div>
    </div>
  </div>
</div>


<?php include( get_template_directory()."/inc/footer.php"); ?>