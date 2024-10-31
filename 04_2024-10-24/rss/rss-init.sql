DROP TABLE IF EXISTS rss_item;

CREATE TABLE rss_item (
    id INT AUTO_INCREMENT PRIMARY KEY,
    guid TEXT NULL,
    pub_date DATETIME,
    title TEXT,
    description TEXT,
    author TEXT,
    link TEXT NULL,
); 
