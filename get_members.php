<?php
include 'config.php';


function fetchMembersData(&$data)
{
    global $conn;

    $stmt = $conn->prepare("SELECT numbers, first_last FROM members");
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }


    $stmt->close();
    unset($stmt);  // Unset the $stmt variable after use
}


$data = array();


fetchMembersData($data);


echo json_encode($data);


unset($data);
$conn->close();
unset($conn);
