<?php





/* Sidebar widget */
if ( function_exists('register_sidebar') ) register_sidebar(
  ['id' => 'sidebar-1',]
);
/* 省略文字のカスタマイズ */
function twpp_change_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );
/* アイキャッチ画像を有効にする */
function my_theme_setup() {
  add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'my_theme_setup');

/* 記事編集時のデフォルトの文字列 */
add_filter('the_editor_content', 'lalala_default_content');
function lalala_default_content($content) {
    if (empty($content)) {
      $default = <<<EOM


------------------------
- [https://localhost/](https://localhost/)


<!-- Button trigger modal -->
<!--
<a data-bs-toggle="modal" data-bs-target="#modalid_{$id}" class="modal-link">
  <img src="{$url}" width="100%" alt="{$title}" class="modal-image mb-10">
</a>
-->
<!-- Modal -->
<!--
<div class="modal fade" id="modalid_{$id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{$url}" width="100%" alt="{$title}">
      </div>

    </div>
  </div>
</div>
-->
EOM;
        return $default;
    } else {
        return $content;
    }
}
