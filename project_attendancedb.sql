create database projectattendancedb;
use projectattendancedb;

create table User(
name varchar(40) not null,
userName varchar(40) not null,
password varchar(20) not null
);

INSERT INTO User (name,userName,password) VALUES
('admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
('Amutha', 'Amutha123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');