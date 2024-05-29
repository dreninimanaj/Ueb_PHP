<?php
include 'config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table `members`
$sql_members = "CREATE TABLE IF NOT EXISTS members (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    number VARCHAR(255) NOT NULL,
    first_last VARCHAR(100) NOT NULL,
    grade VARCHAR(100) NOT NULL,
    steam_username VARCHAR(100) NOT NULL,
    discord VARCHAR(100) NOT NULL,
    checkbox1 TINYINT(1) NOT NULL DEFAULT 0,
    checkbox2 TINYINT(1) NOT NULL DEFAULT 0,
    checkbox3 TINYINT(1) NOT NULL DEFAULT 0,
    komenti VARCHAR(255) DEFAULT NULL,
    registered DATE DEFAULT NULL,
    days_since_registration INT(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

if ($conn->query($sql_members) === TRUE) {
    echo "Table 'members' created successfully.<br>";
} else {
    echo "Error creating table 'members': " . $conn->error . "<br>";
}

// SQL to create table `ratings`
$sql_ratings = "CREATE TABLE IF NOT EXISTS ratings (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    officer_name VARCHAR(255) NOT NULL,
    cadet_name VARCHAR(255) NOT NULL,
    experience TEXT NOT NULL,
    behavior INT(11) NOT NULL,
    stops INT(11) NOT NULL,
    communications INT(11) NOT NULL,
    submission_time DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci";

if ($conn->query($sql_ratings) === TRUE) {
    echo "Table 'ratings' created successfully.<br>";
} else {
    echo "Error creating table 'ratings': " . $conn->error . "<br>";
}

$conn->close();
