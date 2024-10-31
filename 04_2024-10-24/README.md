# 第4回 演習
使用ライブラリ: Smarty 4.5.4

## 環境設定
- my.cnfの適用(utf8mb4の適用)
    - `$ cp ./my.cnf /Applications/MAMP/conf/`
- templates_cに書き込み権限付与
    - `$ chmod 777 bbs-db/templates_c todo/templates_c`
- Smartyの適用
    - [smarty-php/smarty](https://github.com/smarty-php/smarty/releases/tag/v4.5.4)よりSmarty 4.5.4をダウンロード
    - libsディレクトリを`bbs-db/smarty`及び、`todo-db/smarty`にコピー

## MySQL db構築
1. MySQLに入る  
    $ `/Applications/MAMP/Library/bin/mysql80/bin/mysql -u root -p`  
    Enter Password: `root`
1. bbs用 db構築
    1. db作成  
        mysql > `create database bbs`
    1. テーブル作成  
        mysql > `source ./bbs-db/bbs-init.sql`
1. rss用 db構築
    1. db作成  
        mysql > `create database rss_reader`
    1. テーブル作成  
        mysql > `source ./rss/rss-init.sql`

## ファイル構成
- bbs-db: bbs掲示板
- rss: rssリーダー
- todo: todoリスト
```
04_2024-10-24/
├── bbs-db/
│   ├── smarty/
│   ├── templates_c/
│   └── templates/
│       └── bbs.html
│   ├── bbs_mysql.php
│   └── style.css
├── rss/
│   ├── rss_reader.php
│   └── style.css
└── todo/
    ├── smarty/
    ├── templates_c/
    ├── templates/
    │   └── todo.html
    ├── data/
    │   └── todo.txt
    ├── style.css
    └── todo.php
```
