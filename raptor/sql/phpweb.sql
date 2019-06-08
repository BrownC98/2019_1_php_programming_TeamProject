CREATE DATABASE phpweb default CHARACTER SET UTF8;

CREATE TABLE users(
user_id varchar(20) primary key,
user_pw varchar(30) not null,
user_sex varchar(5),
user_email varchar(40),
user_phone varchar(15));

CREATE TABLE boards(
board_id int primary key AUTO_INCREMENT,
board_title varchar(70) not null,
board_content TEXT,
board_date datetime not null,
board_user varchar(20) not null);
CREATE TABLE gallery(
Gallery_id int primary key AUTO_INCREMENT,
user_id varchar(20) not null,
image_title varchar(70) not null,
image_big_url TEXT,
image_thumbs_url datetime not null,
description varchar(20) not null);