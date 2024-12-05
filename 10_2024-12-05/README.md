# 第10回

## 事前準備

### DB Browser for SQLiteのインストール  
https://sqlitebrowser.org/dl/ より、インストール

### ダミーデータの作成
- ファイル名: `mydb.db`  
- テーブル名: `mydata`
- フィールド
    - `id`: INTEGER, NN, PK, AI, U
    - `name`: TEXT, NN
    - `mail`: TEXT
    - `age`: INTEGER


| id | name | mail | age |
| -- | ---- | ---- | --- |
| 1 | taro | taro@yamada | 39 |
| 2 | hanako | hanako@flower | 28 |
| 3 | sachiko | sachiko@happy | 17 |
| 4 | jiro | jiro@change | 6 |

```sql
CREATE TABLE "mydata" (
	"id"	INTEGER NOT NULL UNIQUE,
	"name"	TEXT NOT NULL,
	"mail"	TEXT,
	"age"	INTEGER,
	PRIMARY KEY("id" AUTOINCREMENT)
)
```

## 実行方法
1. 各ディレクトリに移動  
    $ `cd ex-gen-app5`
2. 依存パッケージのインストール  
    $ `pnpm install`
2. 実行  
    $ `pnpm start`
