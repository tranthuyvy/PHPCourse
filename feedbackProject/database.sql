CREATE TABLE feedback(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    body TEXT DEFAULT '',
    date DATETIME
);
INSERT INTO feedback(name, email, body, date) VALUES
('John', 'john@gmail.com', 'I like it', current_timestamp()),
('thanh', 'thanh123@gmail.com', 'Please add more videos', current_timestamp()),
('vy', 'vy@gmail.com', 'Let do Laravel project', current_timestamp());