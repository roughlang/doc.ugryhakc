<?php
  include( get_template_directory()."/inc/header.php");
  $post_id = get_the_ID();
  /* categories */
  $category = get_the_category();
?>

<div class="top-line"></div>
<?php include( get_template_directory()."/inc/nav.php"); ?>

<div class="breadcrumb">
  <ul>
    <li><a href="/">Home</a></li> >
    <li><a href="<?php echo get_category_link($category[0]->term_id); ?>"><?php echo $category[0]->name; ?></a></li> >
    <li><?php echo mb_substr(get_the_title(),0,20); ?></li>
  </ul>
</div>

<div class="blog-block mt-70 mb-70">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-8 main_column">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="item-summary mt-20 mb-40" id="wp_<?php the_ID(); ?>">
          <h2><?php the_title(); ?></h2>
          <p class="mt-20">
            <?php
              $icatch_image_path = get_the_post_thumbnail_url(get_the_ID(),'medium');
              if(!empty($icatch_image_path)) {
                
                echo '<img src="'.$icatch_image_path.'" alt="'.mt_rand(11111,99999).'" class="item-text-icatch">';
                
              }
              else {
                // if(first_image()) {
                //   echo '<img src="'.first_image().'" alt="'.mt_rand(11111,99999).'" class="item-summary-icatch">';
                // }
              }
            ?>
            <!-- <a href="#"><img src="/wp-content/themes/ugryhacks/assets/img/sample/IMG_3436.JPG" class="item-summary-icatch"></a> -->
            <?php the_content(); ?>
            <span class="post-date float-end"><?php the_time('Y.n.j (D)'); ?></span>
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
        
      </div>
      <div class="col-lg-4 sub_column">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php include( get_template_directory()."/inc/footer.php"); ?>