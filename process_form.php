<?php 

include 'config.php';
// Get the form data
session_start();
// Split the combined value into number and first_last
// Retrieve the current user's rank from the database
$user_id = $_SESSION['id'];

// Get the full name of the user from the database
$sql = "SELECT fullname, role FROM users WHERE id = $user_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fullname = $row['fullname'];
	$role = $row['role'];
  $username = $_SESSION['username'];
}

 
  // Get form data
  $data_daljes = $_POST["data_daljes"];
  $arsyeja = $_POST["arsyeja"];
  $data_rikthimit = $_POST["data_rikthimit"];
  $aprovuar_nga = $_POST["aprovuar_nga"];
  // Get the selected badge number and name from the form
$selected_option = $_POST['numri_begjit'];
$selected_value = explode(" | ", $selected_option);
$number = $selected_value[0];
$first_last = $selected_value[1];

// Concatenate the number and name
$combined_value = $number . " | " . $first_last;

// Insert the combined value into the database

  
// Get the form data
$numri_begjit = $_POST['numri_begjit'];
$data_daljes = $_POST['data_daljes'];
$arsyeja = $_POST['arsyeja'];
$data_rikthimit = $_POST['data_rikthimit'];
$aprovuar_nga = $_POST['aprovuar_nga'];
$madeby = $username;

// Check if the data rikthimit is in the future
if (strtotime($data_rikthimit) < time()) {
  die("<center><h1 style=\"color:red;\">Error: Data e rikthimit duhet te jete ne te ardhmen.</h1></center>");
}

// Insert the data into the database
$sql = "INSERT INTO submissions (numri_begjit, data_daljes, arsyeja, data_rikthimit, aprovuar_nga, madeby) VALUES ('$fullname', '$data_daljes', '$arsyeja', '$data_rikthimit', '$aprovuar_nga','$madeby')";

if ($conn->query($sql) === TRUE) {
  header("Location: pushimet.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


// Host info 


// $host = "185.223.31.164";
// $username = "eden";
// $password = "Kosova60@";
// $dbname = "roaster";
