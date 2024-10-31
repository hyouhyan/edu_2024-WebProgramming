create database link;

use link;

DROP TABLE IF EXISTS linkdata;

CREATE TABLE linkdata (
    id         int(11)       NOT NULL AUTO_INCREMENT,
    l_url      varchar(255)  NOT NULL,
    l_title    varchar(100)  NOT NULL,
    l_comment  varchar(255)  NOT NULL,
    l_date     datetime      NOT NULL,
    PRIMARY KEY (id)
); 

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (1, 'https://hyouhyan.com', 'Hyouhyan', 'ホームページ', '2024-10-31 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (2, 'https://pluslab.org', 'Pluslab', '愛工大 内藤研究室', '2024-10-31 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (3, 'https://www.sysken.net/', 'Sysken', '愛工大 システム工学研究会', '2024-10-31 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (4, 'https://github.com/Hyouhyan', 'GitHub', 'My GitHub Profile', '2024-10-31 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (5, 'https://x.com/yaa_oredayo', 'Twitter', '自称: X', '2024-10-31 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (6, 'https://scrapbox.io/Hyouhyan/', 'Scrapbox', 'My Scrapbox Pages', '2024-10-31 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (7, 'https://zenn.dev/hyouhyan', 'Zenn', 'My Zenn Posts', '2024-10-31 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (8, 'https://lcam.aitech.ac.jp/portalv2/', 'L-cam', '愛知工業大学公式ポータルサイト', '2024-10-31 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (9, 'https://cms.aitech.ac.jp/my/', 'Moodle', 'AIT Moodle', '2024-10-31 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (10, 'https://hyouhyan.com/wishlist', 'Amazon Wishlist', 'Amazonの欲しいものリスト', '2024-10-31 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (11, 'https://prest.hyouhyan.com/', 'Prest', 'プレゼンテーション特化型遠隔操作ツール', '2024-10-31 12:03:51');

INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
VALUES (12, 'https://aitplus.hyouhyan.com/', 'AIT Plus', 'より良い愛工大ライフを過ごすための情報収集ツール', '2024-10-31 12:03:51');