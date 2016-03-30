create database mindkeeper;
use mindkeeper;

create table USERS (
   id int(6) unsigned auto_increment primary key not null,
   name varchar(30) not null,
   email varchar(50) not null,
   password varchar(10) not null);


create table NOTES (
   id int(6) unsigned auto_increment primary key not null,
   name varchar(30) not null,
   type int(2) not null,
   creation_date DATETIME not null,
   txt text not null);

create TABLE USER_NOTE (
    id_user int(6) unsigned not null,
    id_note int(6) unsigned not null,
    FOREIGN KEY (id_user) REFERENCES USERS(id),
    FOREIGN KEY (id_note) REFERENCES NOTES(id));

create TABLE ITENS_NOTE (
	id int(6) unsigned auto_increment primary key not null,
	id_note int(6) unsigned not null,
	description varchar(200) not null,
	position int(2) not null,
	status TINYINT(1) default '0',
	FOREIGN KEY (id_note) REFERENCES NOTES(id)
);