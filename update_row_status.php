<?php
include 'config.php';
// Assume that $_POST['row_id'] contains the ID of the row to update
// Assume that $_POST['is_done'] contains the new value of the 'done' field (0 or 1)

// Connect to the database

// Build the SQL query
$sql = "UPDATE rowsx SET done='{$_POST['is_done']}' WHERE id='{$_POST['row_id']}'";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

// Close the database connection
$conn->close();

?>