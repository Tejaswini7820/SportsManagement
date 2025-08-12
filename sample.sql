-- Sample SQL to create a table and insert data
CREATE DATABASE IF NOT EXISTS hackthonsports;
USE hackthonsports;

CREATE TABLE IF NOT EXISTS players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    sport VARCHAR(50) NOT NULL,
    country VARCHAR(50) NOT NULL
);

INSERT INTO players (name, sport, country) VALUES
('Virat Kohli', 'Cricket', 'India'),
('LeBron James', 'Basketball', 'USA'),
('Roger Federer', 'Tennis', 'Switzerland');
