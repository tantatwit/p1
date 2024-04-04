-- Create a new database named message_db
CREATE DATABASE IF NOT EXISTS message_db;

-- Switch to the newly created database
USE message_db;

-- Create a table to store messages
CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
