<?php

include 'config.php';


// Delete expired rows
$sql = "DELETE FROM submissions WHERE data_rikthimit < CURDATE()";
if ($conn->query($sql) === TRUE) {
    echo "Expired rows deleted successfully";
} else {
    echo "Error deleting expired rows: " . $conn->error;
}

// Close the database connection
$conn->close();

?>