<?php
session_start();
include 'config.php';

// Get the user ID from the session
$user_id = $_SESSION['user_id'];

// Check if the new password and confirm password fields are set
if (!isset($_POST['new_password']) || !isset($_POST['confirm_password'])) {
	die("Error: New password or confirm password fields not set.");
}

// Get the new password and confirm password values
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

// Check if the new password and confirm password fields match
if ($new_password !== $confirm_password) {
	die("Error: Fjalekalimet nuk perputhen.");
}

// Hash the new password
$hashed_password = $new_password;

// Update the user's account with the new password and set the password_changed flag to 1
$sql = "UPDATE users SET password = '$hashed_password', password_changed = 1 WHERE id = $user_id";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Error: " . mysqli_error($conn));
}


if ($result) {
	// Redirect the user to the dashboard or home page
	header('Location: index.php');
	exit;
} else {
	// Display an error message if the password change failed
	echo 'Fjalekalimet nuk perputhen';

}
?>
