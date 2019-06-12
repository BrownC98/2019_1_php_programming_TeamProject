create table user(id varchar(20), pw varchar(30) not null, name varchar(10) not null, gender varchar(5) not null, email varchar(40) not null, phone varchar(15) not null, primary key (id));
create table book_gallery( id int auto_increment, user_id varchar(25), image_url TEXT, description TEXT, title TEXT, date timestamp default current_timestamp, primary key(id));
create table board(
  board_id int AUTO_INCREMENT primary key,
  title TEXT(10),
  author varchar(20),
  content TEXT,
  date timestamp default current_timestamp,
  cnt int default 0,
  constraint author_fk foreign key(author)
  references user(id)
  );
