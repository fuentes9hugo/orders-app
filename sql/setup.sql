DROP DATABASE IF EXISTS orders_app;

CREATE DATABASE orders_app;

USE orders_app;

CREATE TABLE users (
    email VARCHAR(255) PRIMARY KEY,
    name VARCHAR(255),
    last_name VARCHAR(255),
    orders_amount INT
);