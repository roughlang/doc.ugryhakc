# Docker for wordpress (doc.ugryhacks)

```docker-compose.yml
$ cd doc.ugryhacks
$ docker-compose uo -d
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
~                              
https://github.com/roughlang/doc.ugryhakc.git
```






-------
## Error

#### 1. docker-compose.yml内のenvironmentが反映されない。
docker-compose.yml内のenvironmentパラメータを変更しても反映されないときがあります。（何故かその他のパラメータは反映される）
`docker-compose up`や`$ docker-compose up --build -d`などが効かない。こういう場合はファイルを一度全部削除してDocker自体を再起動すると反映するようになる。原因は不明。