<?php
// phpinfo();
include "./factory.php";
$json_file = "./statistics.json";
$env = "local"; # local | dev | stg | prod
$u = new utility();

$statistics_data = [];

/**
 * ブログの投稿数をカウントする
 */
$database = $u->mysql_connect($env);
/* wordpressの記事数カウント */
$sql = "SELECT count(*) FROM wp_posts where post_status = 'publish'";
$select_posts = $database->query($sql);
$posts_number = $select_posts->fetch_assoc();
/* 記事数の記録とアップデート */
$sql = "UPDATE statistics SET value = ".$posts_number["count(*)"]." where name = 'posts'";
$update_posts = $database->query($sql);
$u->logging("posts count ".$posts_number["count(*)"],"INFO");

/* accsess数 */
$sql = "SELECT value FROM statistics where name = 'access'";
$access = $database->query($sql);
$c_access = $access->fetch_assoc();
$u->logging("access count ".$c_access["value"],"INFO");


/* statistics */
$statistics_data = [
  "access" => $c_access["value"],
  "posts" => $posts_number["count(*)"],
];
$json = $u->json_writeout($statistics_data, $json_file);
$u->logging("statistics_data as json".$json,"INFO");











$database->close();
