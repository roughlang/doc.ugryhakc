<?php include( get_template_directory()."/inc/header.php"); ?>
<div class="top-line"></div>
<?php include( get_template_directory()."/inc/nav.php"); ?>

<?php include( get_template_directory()."/inc/topbanner.php"); ?>

<?php
/* categories */
$category = get_the_category();
?>
<div class="breadcrumb">
  <ul>
    <li><a href="/">Home</a></li> >
    <li><?php echo $category[0]->name; ?></li>
  </ul>
</div>

<div class="blog-block mt-70 mb-70">
  
  <div class="container">
    <div class="row">
      
      <div class="col-lg-8 main_column">
      <h1 class="page-title">Category: <?php echo $category[0]->name; ?></h1>

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
              else {
                // if(first_image()) {
                //   echo '<img src="'.first_image().'" alt="'.mt_rand(11111,99999).'" class="item-summary-icatch">';
                // }
              }
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
          <div class="meta">
            <div class="tags">
              <?php the_tags('',''); ?>
            </div>
            <div class="categories">
              <?php the_category("<span></span>"); ?>
            </div>
          </div>

        </div><!-- item-summary id -->
        <?php endwhile; else: ?>
          <p>記事がありません。</p>
        <?php endif; ?>

        <?php the_posts_pagination(
          [
            'screen_reader_text' => ' ',
            'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
            'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
            'prev_text'     => __( '前'), // 「前へ」リンクのテキスト
            'next_text'     => __( '次'), // 「次へ」リンクのテキスト
            'type'          => 'list', // 戻り値の指定 (plain/list)
          ]
        ); ?>
        
      </div>

      <div class="col-lg-4 sub_column">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>
      </div>
    </div>
  </div>
</div>


<?php include( get_template_directory()."/inc/footer.php"); ?>