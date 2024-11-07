create database rss_reader;

use rss_reader;

SELECT @@character_set_database, @@collation_database;
ALTER DATABASE COLLATE 'utf8mb4_general_ci';

DROP TABLE IF EXISTS rss_item;

CREATE TABLE rss_item (
    id INT AUTO_INCREMENT PRIMARY KEY,
    guid TEXT NULL,
    pub_date DATETIME,
    title TEXT,
    description TEXT,
    author TEXT,
    link TEXT NULL
); 
