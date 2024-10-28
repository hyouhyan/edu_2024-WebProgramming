# 第4回 演習
## リソース
- bbs-db: bbs掲示板
- rss: rssリーダー
- todo: todoリスト

## 環境設定
- my.cnfの適用
    - `$ cp ./my.cnf /Applications/MAMP/conf/`
- templates_cに書き込み権限付与
    - `$ chmod 777 bbs-db/templates_c todo/templates_c`

# ファイル構成
```
04_2024-10-24/
├── bbs-db/
│   ├── bbs_mysql.php
│   ├── style.css
│   └── templates/
│   │   └── bbs.html
│   └── templates_c/
├── rss/
│   ├── rss_reader.php
│   └── style.css
└── todo/
    ├── data/
    │   └── todo.txt
    ├── style.css
    ├── templates/
    │   └── todo.html
    ├── templates_c/
    └── todo.php
```
