create database schedule;

use schedule;

DROP TABLE IF EXISTS schedules;

CREATE TABLE schedules (
    id          int(11)         NOT NULL AUTO_INCREMENT,
    begin       datetime        NOT NULL,
    end         datetime        NOT NULL,
    place       varchar(256)    NOT NULL,
    content     text            NOT NULL,
    user_id     bigint(20)      NOT NULL,
    updated_at  datetime,
    PRIMARY KEY (id)
);