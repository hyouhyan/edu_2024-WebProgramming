# 第6回 スケジュール管理アプリ

## MySQL db構築

1. mysqlに入る  
    $ `/Applications/MAMP/Library/bin/mysql80/bin/mysql -u root -p`  
    Enter Password: `root`
2. db作成
    mysql > `source ./init/schedule_db.sql`
3. dbを抜ける
    mysql > `exit`