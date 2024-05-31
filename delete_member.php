<?php
include 'config.php';

try {
    $id = isset($_POST['id']) ? $_POST['id'] : '';

    if ($id) {
        $sql = "DELETE FROM members WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            echo "Member deleted successfully.";
        } else {
            throw new Exception("Error deleting member: " . mysqli_error($conn));
        }
    } else {
        throw new Exception("Invalid input.");
    }
} catch (Exception $e) {
    error_log("Error in delete_member.php: " . $e->getMessage());
    echo "An error occurred while deleting data.";
}
