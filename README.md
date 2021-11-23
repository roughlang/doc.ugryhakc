# Docker for wordpress (doc.ugryhacks)

Mac(m1)で実行しているDockerになるので`docker-copmpose,yml`ないでM1のプラットホームを設定しています。その他のプラットホームで実行する際には`platform: linux/x86_64`の行を削除してください。

## create table

またはじめて実行する際はWordpressのインストールで実行されないテーブルを手動でstatisticsテーブルを作成してください。

```
-- create_statistics_table.sql
CREATE TABLE `statistics` (
  `id` int(16) NOT NULL,
  `name` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `value` int(128) NOT NULL,
  `options` text NOT NULL,
  `remark` text CHARACTER SET utf8mb4 NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `statistics` (`id`, `name`, `value`, `options`, `remark`, `create_at`, `update_at`) VALUES
(1, 'access', 0, '', '簡易アクセスカウント', '2021-10-25', '2021-10-25'),
(2, 'posts', 0, '', '記事数', '2021-10-25', '2021-10-25');
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `statistics`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
```



## docker-compose

```docker-compose.yml
$ cd doc.ugryhack
$ docker-compose up -d
```
wordpress: http://localhost:9800/
```wp-config.php
database name: wordpress_db
user: user
password: password
host: db
```
phpmyadmin: http://localhost:9888/
```
user
password
```

## Git version管理

```
$ git init
```
`.git/config`を修正します。
```
[core]
        repositoryformatversion = 0
        filemode = true
        bare = false
        logallrefupdates = true
        ignorecase = true
        precomposeunicode = true
[remote "origin"]
        url = https://roughlang:[ACCESS_TOKEN]]@github.com/roughlang/doc.ugryhakc.git
        fetch = +refs/heads/*:refs/remotes/origin/*
[branch "main"]
        remote = origin
        merge = refs/heads/main
```






-------
## Error

#### 1. docker-compose.yml内のenvironmentが反映されない。
docker-compose.yml内のenvironmentパラメータを変更しても反映されないときがあります。（何故かその他のパラメータは反映される）
`docker-compose up`や`$ docker-compose up --build -d`などが効かない。こういう場合はファイルを一度全部削除してDocker自体を再起動すると反映するようになる。原因は不明。
