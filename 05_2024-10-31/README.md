# 第5回

オンラインリンク集を作る

ユーザーは閲覧だけが可能  
管理者は、登録、更新、削除が可能  
管理者はユーザーID、パスワードで認証する  
リンク集データはデータベースに登録される   

## MySQL db構築

1. mysqlに入る  
    $ `/Applications/MAMP/Library/bin/mysql80/bin/mysql -u root -p`  
    Enter Password: `root`
2. db作成  
    mysql > `source ./init/linkdata.sql`
3. dbを抜ける
    mysql > `exit`

## ファイル構成

```
05_2024-10-31/
├── init/
│   ├── config.php
│   └── linkdata.sql
└── link/
    ├── link.php
    └── linkadmin.php
```

- init/  
    - config.php: php用の定数もろもろ(SQLのパスワードとか)を定義するやつ  
    - linkdata.sql: dbの初期化用ファイル  
- link/  
    - link.php: オンラインリンク集メインページ(ユーザー用)  
    - linkadmin.php: SQLを操作するためのページ(管理者用)  
