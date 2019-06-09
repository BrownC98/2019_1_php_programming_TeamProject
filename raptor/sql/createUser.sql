create table user(id varchar(20), pw varchar(30) not null, name varchar(10) not null, gender varchar(5) not null, email varchar(40) not null, phone varchar(15) not null, primary key (id));
create table gallery( id int, user_id varchar(25), image_big_url TEXT, imae_thumbs_url TEXT, description TEXT, title TEXT, primary key(id));
create table book_gallery( id int auto_increment, user_id varchar(25), image_url TEXT, description TEXT, title TEXT, primary key(id));
create table books(
	book_ID	int not null primary key,
	img_url TEXT,
	link_text TEXT,
	title varchar(50) NOT NULL,
	author varchar(30) NOT NULL,
	price int not null,
	discount int,
	category varchar(20),
	publisher varchar(30),
	pubdate date,
	isbn varchar(13),
	description TEXT,
	rank int);
