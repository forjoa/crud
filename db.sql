create database db;

use db;

create table users (
    id int primary key auto_increment not null,
    name varchar (255),
    score int
);