
<--example-->
/*
CREATE TABLE Persons (
    Personid int NOT NULL AUTO_INCREMENT,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    PRIMARY KEY (Personid)
);*/
====================================================================



create database phplogin;

create table appointment
(fname varchar(255),
tel varchar(10),
gender text(10),
date date,
time time,
age tinyint(4),
id int NOT NULL AUTO_INCREAMENT,
PRIMARY KEY(id)
);




create table accounts
(
id int NOT NULL AUTO_INCREMENT,
username varchar(50),
password varchar(255),
email varchar(100),
PRIMARY KEY(id)
);


INSERT INTO accounts (username,email,password) 
VALUES ('admin101','admin101@gmail.com','admin101');





















