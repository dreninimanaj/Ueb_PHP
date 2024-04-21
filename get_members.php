<?php
include 'config.php';

// Query the "members" table
$sql = "SELECT numbers, first_last FROM members";
$result = $conn->query($sql);

// Convert the result set to a JSON array
$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
echo json_encode($data);
?>