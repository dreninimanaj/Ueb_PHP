<?php
// Database connection settings
$host = "localhost";
$username = "root";
$password = "";
$database = "roaster";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $section = $_POST["section"];
    $content = $_POST["content"];

    // Insert a new rule into the database
    $sql = "INSERT INTO rules (section, content) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $section, $content);

    if ($stmt->execute()) {
        // Rule added successfully, redirect to edit.php or another page
        header("Location: edito.php");
        exit();
    } else {
        // Error occurred while adding the rule
        echo "Error: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
