# edu_2024-WebProgramming
2024年度 後期 Webプログラミング及び演習 の授業で作成したプログラムたち。

## 仕様
- 使用技術: PHP, MySQL, Node.js, SQLite
- OS: MacOS 15.0.1(Sequoia)

### PHP (第1回 ~ 第5回)

- MAMP 7.0
    - Apache(port: 80)
    - PHP 8.3.9
    - MySQL 8.0.35 (port: 3306)
- 使用ライブラリ
    - Smarty 4.5.4

### Node.js (第8回 ~ 第12回)

- Node.js 22.11.0
    - pnpm 9.14.2
- 主な使用ライブラリ
    - ejs 3.1.10
    - express 4.21.1
    - sqlite3 5.1.7
    - prisma 6.1.0

# 環境構築

## Node.js

<details>
    <summary>pnpmのインストール <strong>(俺推奨)</strong> </summary>

pnpmは教科書や先生の指示ではないが、npmよりも軽量で高速なため、インストールを推奨する。  
(詳しく知りたい人は[この記事](https://azukiazusa.dev/blog/pnpm-npm/)読んでみて)

ターミナルで以下のコマンドを実行する。

$ `npm install -g pnpm`  
$ `pnpm setup`

使い方は、`npm`の代わりに`pnpm`を使うだけ。

例)  
`npm install` -> `pnpm install`  
`npm start` -> `pnpm start`


</details>


# 授業概要

## シラバス(一部抜粋)
- 授業名: Webプログラミング及び演習
- 実施年度: 2024年度
- 学期: 後期
- 学年: 3年


<details>
    <summary>授業計画</summary>

1. ガイダンス，環境構築，PHP入門(1)。PHPスクリプトの基本，繰り返し処理と分岐処理，強制終了処理を学ぶ。
2. PHP入門(2) 基本的な計算処理，小数点数の扱い，乱数の扱い，数学関数の扱い，フォームによるデータの受け取りを学ぶ。
3. PHP入門(3) 高度なフォーム処理，クッキーの扱い，セッション処理の扱いを学ぶ。
4. PHP入門(4) テンプレートエンジンの使い方，データベースサーバとの連携を学ぶ。
5. アプリ開発(1)  リンク集作成を通してこれまでの内容の総まとめをする。
6. アプリ開発(2)  スケジュール管理アプリを開発する。
7. 課題レポートの提出。グループワーク  作成したアプリについてグループワークを行う。
8. サーバサイドJavaScript入門(1) Node.js 環境構築，Node.jsによるWebアプリ開発の基本を学ぶ。
9. サーバサイドJavaScript入門(2) Node.js フレームワークの使い方を学ぶ。
10.  サーバサイドJavaScript入門(3) Node.js フォーム，データ取得，データベース連携を学ぶ。
11. サーバサイドJavaScript入門(4) Node.js 高度なデータベースの使いこなし方を学ぶ。
12. サーバサイドJavaScript入門(5) Node.js アプリを作成する。
13. アプリ開発(3)  これまで学んだことを応用して自由にWebアプリを開発する。
14. アプリ開発(4)  グループワークで開発中アプリについて相互レビューを行い，アプリ開発に反映する。
15. 最終課題レポートの提出。この講義全体の振り返り解説を行う。
</details>

引用元: 愛知工業大学「シラバス検索」(https://syllabus.aitech.ac.jp/ext_syllabus/)

# 関連リポジトリ

一部課題(自主制作系)は別リポジトリにて作成しました。

- 中間課題: [スケジュール管理アプリ(scheduleManager_php)](https://github.com/hyouhyan/scheduleManager_php)
- 最終課題: [借金管理・共有アプリ(Loan Manager)](https://github.com/hyouhyan/loanManager)
