CREATE DATABASE inline
    DEFAULT CHARACTER SET UTF8
    DEFAULT COLLATE utf8_general_ci;
USE inline;

CREATE TABLE posts
(
    id       int AUTO_INCREMENT PRIMARY KEY,
    user_id int,
    title varchar(255),
    body text
);

CREATE TABLE comments
(
    id                int AUTO_INCREMENT PRIMARY KEY,
    post_id int,
    name varchar(255),
    email varchar(255),
    body text,
        FOREIGN KEY (`post_id`) REFERENCES posts (`id`)
);
CREATE FULLTEXT INDEX post_ft_search ON comments (body);

