<?php include( get_template_directory()."/inc/header.php"); ?>
<body>
<div class="top-line"></div>
<?php include( get_template_directory()."/inc/nav.php"); ?>

<?php include( get_template_directory()."/inc/topbanner.php"); ?>

<?php
/* tags */
$tags = get_the_tags();
// var_dump($tags);
?>
<div class="breadcrumb">
  <ul>
    <li><a href="/">Home</a></li> >
    <li><?php echo $tags[0]->name; ?></li>
  </ul>
</div>

<div class="blog-block mt-70 mb-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 main_column">
      <h1 class="page-title">Tags: <?php echo $tags[0]->name; ?></h1>
      <div class="item-summary mt-20 mb-40">
        <ul>
        <?php
          // echo $tags[0]->term_id;
          $args = array (
            'tag'       => $tags[0]->slug, // tag-ID
            'post_type'      => 'post', // 投稿タイプ
            'posts_per_page' => 20, // 取得する投稿数
          );
          $myposts = get_posts( $args );
          foreach ($myposts as $key => $item) {
            echo '<!--'.$item->ID.'-->';
            echo '<li><a href="'.get_the_permalink().'">'.urldecode($item->post_name).'</a><span class="tag-date">'.$item->post_date.'</span></li>';
            // echo $item->ID."<br>\n";
            // echo $item->post_date."<br>\n";
            // echo urldecode($item->post_name)."<br>\n";
            // echo get_the_permalink()."<br>\n";
          }
        ?>
        </ul>
        </div>






      </div>
      <div class="col-lg-4 sub_column">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>
      </div>
    </div>
  </div>
</div>



<?php include( get_template_directory()."/inc/footer.php"); ?>