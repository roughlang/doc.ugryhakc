<script>
var url = "http://localhost:9800/utility/statistics.json";
$.getJSON(url, (data) => {
  console.log(data.access);
  console.log(data.posts);
  $('#posts').text('posts: ' + data.posts);
  $('#accsess').text('accsess: ' + data.access);
});
</script>
<!-- top-banner -->
<div class="p-3 p-sm-5 mb-4 border-top top-banner" id="top_bannaer">
  <div class="container top-banner-container">
    <div class="row">
      <div class="col-lg-4">
        <h2 class="top-banner-title"><?php bloginfo( 'name' ); ?></h2>
        <p class="top-banner-description"><?php bloginfo( 'description' ); ?></p>
      </div>
      <div class="col-lg-8">
        <div class="num-bloc">
          <ul>
            <li id="posts">posts: 9999999</li>
            <li id="accsess">accsess: 9999999</li>
            <li id="contact">contact: 0</li>
            <li id="trackback">trackback: 0</li>
            <li id="from">from: 2021.10.24</li>
            <li id="days">days: 0</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
<!-- <h1 class="display-4">こんにちは!</h1>
<p class="lead">これは単純なヒーローユニット、注目のコンテンツや情報に特別な注意を喚起するためのシンプルなジャンボトロンスタイルのコンポーネントです。</p>
<hr class="my-4">
<p>より大きなコンテナの範囲内でコンテンツに空間をあけるため、文字の体裁と空白ユーティリティクラスを使用している。</p>
<a class="btn btn-primary btn-lg" href="#" role="button">もっと学ぼう</a> -->
</div>