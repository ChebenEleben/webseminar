create database login;

create table login(
id int (10) not null auto_increment,
username varchar (100) not null,
password varchar (100) not null,
primary key(id));

create table accounts(
id int (10) not null auto_increment,
name varchar (100) not null,
age int (10) not null,
username varchar (100) not null,
password varchar (100) not null,
confirm_password varchar (100) not null,
primary key(id));