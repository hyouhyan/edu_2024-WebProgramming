# 第5回

## MySQL db構築
1. mysqlに入る  
    $ `/Applications/MAMP/Library/bin/mysql80/bin/mysql -u root -p`  
    Enter Password: `root`
2. db作成  
    mysql > `source ./init/linkdata.sql`

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