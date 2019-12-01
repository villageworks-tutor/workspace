-- データベースを作る
create database test_db;

use test_db;

create table test_tb (
	id char(6) primary key,
	name varchar(20) not null,
	price mediumint not null,
	purchase timestamp
);