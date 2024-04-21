<?php

include 'config.php';
session_start();
$user_id = $_SESSION['id'];

// Get the full name of the user from the database
$sql = "SELECT fullname, role FROM users WHERE id = $user_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fullname = $row['fullname'];
	$role = $row['role'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted data
    $officerName = $fullname;
    $cadetName = $_POST["cadet_name"];
    $experience = $_POST["experience"];
    $behavior = $_POST["behavior"];
    $stops = $_POST["stops"];
    $communications = $_POST["communications"];

    // Check if the officer's name starts with "E"
    if (strpos($officerName, 'E') === 0) {
        echo "Error: Ju jeni kadet per vete dhe nuk mund te vleresoni ende.";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO ratings (officer_name, cadet_name, experience, behavior, stops, communications, submission_time)
                VALUES ('$officerName', '$cadetName', '$experience', $behavior, $stops, $communications, NOW())";

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>
