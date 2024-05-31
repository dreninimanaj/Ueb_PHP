<?php
include 'config.php';

try {
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $number = isset($_POST['number']) ? $_POST['number'] : '';

    if ($id && $name && $number) {
        $sql = "UPDATE members SET first_last='$name', number='$number' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            echo "Member updated successfully.";
        } else {
            throw new Exception("Error updating member: " . mysqli_error($conn));
        }
    } else {
        throw new Exception("Invalid input.");
    }
} catch (Exception $e) {
    error_log("Error in edit_member.php: " . $e->getMessage());
    echo "An error occurred while updating data.";
}
