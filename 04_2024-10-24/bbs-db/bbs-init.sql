create database bbs;

use bbs;

SELECT @@character_set_database, @@collation_database;
ALTER DATABASE COLLATE 'utf8mb4_general_ci';

DROP TABLE IF EXISTS post;

CREATE TABLE post (
    title   TEXT,
    date    DATETIME,
    name    TEXT,
    body    TEXT
); 
