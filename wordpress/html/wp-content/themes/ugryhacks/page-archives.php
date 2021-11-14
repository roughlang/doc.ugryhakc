<?php include( get_template_directory()."/inc/header.php"); ?>
<div class="top-line"></div>
<?php include( get_template_directory()."/inc/nav.php"); ?>

<?php include( get_template_directory()."/inc/topbanner.php"); ?>

<div class="blog-block mt-70 mb-70">
  
  <div class="container">
    <div class="row">
      
      <div class="col-lg-8 main_column">
        <h1 class="page-title">Archives</h1>
        <div class="archives">
        <?php
          /* 親カテゴリーのものだけを一覧で取得 */
          $args = array(
            'parent' => 0,
            'orderby' => 'term_order',
            'order' => 'DESC',
            'exclude' => '1', 
          );
          $categories = get_categories( $args );
        ?>
        <?php foreach( $categories as $category ) : ?>
          <h2 class="archives-category-title"><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?><!--(<?php echo $category->term_id; ?>)--></a></h2>
          <?php
          $arg = array(
            'posts_per_page' => 9999, // 表示する件数
            'orderby' => 'date', // 日付でソート
            'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
            'category_name' => $category->slug // 表示したいカテゴリーのスラッグを指定
          );
          $posts = get_posts( $arg );
          if( $posts ): ?>
          <ul class="archives-category-posts">
          <?php
            foreach ( $posts as $post ) :
              setup_postdata( $post ); ?>
            <li><a href="<?php the_permalink(); ?>" title="<?php the_time( 'Y.m.d' ); ?>"><?php the_title(); ?></a></li>
          <?php endforeach; ?>
          </ul>
          <?php
            endif;
            wp_reset_postdata();
          ?>
        <?php endforeach; ?>
        </div><!-- archives -->
      </div><!-- main_column -->

      <div class="col-lg-4 sub_column">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>
      </div>
    </div>
  </div>
</div>


<?php include( get_template_directory()."/inc/footer.php"); ?>