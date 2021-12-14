DROP DATABASE IF EXISTS portfolio_do;

CREATE DATABASE portfolio_do;
USE portfolio_do;

CREATE TABLE work
(
    id          int AUTO_INCREMENT PRIMARY KEY,
    title       varchar(50) NOT NULL,
    description text        NOT NULL,
    repo        varchar(50) NOT NULL,
    cr_year     int(4)      NOT NULL,
    tag         varchar(10) NOT NULL
);

INSERT INTO work (title, description, repo, cr_year, tag)
VALUES ('Todo',
        'This application is an online todo list made in PHP, JS. It is working, but it is not finished. Nothing is ever finished :P',
        'https://github.com/DominicV1/todo', 2021, 'Bit'),
       ('Hangman', 'This application is a dutch game of hangman. I made this with another student for a schoolproject. Made in PHP :)', 'https://github.com/DominicV1/hangman', 2021, 'Bit'),
       ('Rock Paper Scissors', 'This application is a local multiplayer game of Rock Paper Scissors. Made for a school
                            project. Made in PHP :)', 'https://github.com/DominicV1/rps', 2021, 'Bit');