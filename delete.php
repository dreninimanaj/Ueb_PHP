<?php
include_once 'config.php';
session_start();
$id = $_SESSION['id'];
$sql = "SELECT * from members WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row1 = $result->fetch_assoc();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Get the number and first_last values from the row to be deleted
    $sql = "SELECT number, first_last FROM members WHERE ID='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $number = $row['number'];
    $first_last = $row['first_last'];

    // Construct the fullname value
    $fullname = $number . ' ' . $first_last;

    $sql = "DELETE FROM members WHERE ID='$id'";
    mysqli_query($conn, $sql);

    $sql = "SELECT * FROM users WHERE fullname='$fullname'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Delete the row from the users table
        $sql = "DELETE FROM users WHERE fullname='$fullname'";
        mysqli_query($conn, $sql);
    }

    header("Location:index.php");
}
