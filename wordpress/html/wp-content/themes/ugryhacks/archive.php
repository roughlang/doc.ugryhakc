<?php include( get_template_directory()."/inc/header.php"); ?>
<div class="top-line"></div>
<?php include( get_template_directory()."/inc/nav.php"); ?>

<?php include( get_template_directory()."/inc/topbanner.php"); ?>

<div class="blog-block mt-70 mb-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 main_column">
        tags
      </div>
      <div class="col-lg-4 sub_column">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>
      </div>
    </div>
  </div>
</div>



<?php include( get_template_directory()."/inc/footer.php"); ?>