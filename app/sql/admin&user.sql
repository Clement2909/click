CREATE DATABASE click;
\c click;

----admins
CREATE TABLE admins (
    id SERIAL PRIMARY KEY,
    username VARCHAR(55) NOT NULL UNIQUE,
    password VARCHAR(55) NOT NULL
);

INSERT INTO admins (username, password) VALUES 
('clement@gmail.com', 'clement'),('aina@gmail.com', 'aina');

-----users
CREATE TABLE users(
    id SERIAL PRIMARY KEY ,
    username varchar(55) not null unique,
    email varchar(55) not null,
    password varchar(55) not null 
);

INSERT INTO users (username,email, password) VALUES 
('vicky','victorin@gmail.com', 'victorin'),('Na','andry@gmail.com', 'andry');

