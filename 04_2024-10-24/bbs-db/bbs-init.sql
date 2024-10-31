create database bbs;

use bbs;

DROP TABLE IF EXISTS post;

CREATE TABLE post (
    title   TEXT,
    date    DATETIME,
    name    TEXT,
    body    TEXT
); 
