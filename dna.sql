-- Create a database if it doesn't exist
CREATE DATABASE IF NOT EXISTS dna;

-- Use the database
USE dna;

-- Create a table to store user information
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    bloodgroup VARCHAR(5),
    phase1_a DECIMAL(5, 2),
    phase1_t DECIMAL(5, 2),
    phase1_g DECIMAL(5, 2),
    phase1_c DECIMAL(5, 2),
    dna_code_ii TEXT,
    phase2_dna_binary_code TEXT,
    strand1_number INT,
    strand1_code TEXT,
    strand2_number INT,
    strand2_code TEXT,
    phase2_a DECIMAL(5, 2),
    phase2_t DECIMAL(5, 2),
    phase2_g DECIMAL(5, 2),
    phase2_c DECIMAL(5, 2),
    serotonin_value DECIMAL(8, 2)
);

-- Create an index on username for faster lookup
CREATE INDEX username_index ON users (username);

-- Create a table for additional data if needed
-- For example, you can store historical data, additional user information, etc.

-- Remember to configure your PHP code to connect to the MySQL database and insert data into this table.

