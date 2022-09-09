CREATE DATABASE crud_db;

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    birthdate DATE NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    gender VARCHAR(1) NOT NULL,
    phone VARCHAR(11) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP)

DROP TABLE users;