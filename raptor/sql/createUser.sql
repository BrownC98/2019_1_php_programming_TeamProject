create table user(id varchar(20), pw varchar(30) not null, name varchar(10) not null, gender varchar(5) not null, email varchar(40) not null, phone varchar(15) not null, primary key (id));
create table gallery( user_id varchar(25), image_big_url varchar(100 ), imae_thumbs_url varchar(100), description varchar(150), title varchar(25), primary key(user_id));
create table board(
  board_id int AUTO_INCREMENT primary key,
  title TEXT(10),
  author varchar(20),
  date timestamp default current_timestamp,
  cnt int default 0,
  constraint author_fk foreign key(author)
  references user(id)
  );

