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


if(!($role == "user")){
// Get the full name of the user from the database
$sql = "SELECT fullname FROM users WHERE id = $user_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fullname = $row['fullname'];
}
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connect to the database
   
    

    // Get the values from the form
    $numri_begjit = $_POST['numri_begjit'];
    $arsyeja = $_POST['arsyeja'];
    $nenshkruar_nga = $fullname;
    $data = $_POST['data'];

    // Insert the data into the `verejtje` table
    $sql = "INSERT INTO verejtje (numri_begjit, arsyeja, nenshkruar_nga, data)
            VALUES ('$numri_begjit', '$arsyeja', '$nenshkruar_nga', '$data')";

    if ($conn->query($sql) === TRUE) {
      // Update the checkboxes in the `members` table
      $sql = "SELECT checkbox1, checkbox2, checkbox3
              FROM members
              WHERE number = '$numri_begjit'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      if ($row['checkbox1'] == 0 && $row['checkbox2'] == 0 && $row['checkbox3'] == 0) {
        $sql = "UPDATE members
                SET checkbox1 = 1
                WHERE number = '$numri_begjit'";
      } else if ($row['checkbox1'] == 1 && $row['checkbox2'] == 0 && $row['checkbox3'] == 0) {
        $sql = "UPDATE members
                SET checkbox2 = 1
                WHERE number = '$numri_begjit'";
      } else if ($row['checkbox1'] == 1 && $row['checkbox2'] == 1 && $row['checkbox3'] == 0) {
        $sql = "UPDATE members
                SET checkbox3 = 1
                WHERE number = '$numri_begjit'";
      } else {
        $sql = "UPDATE members
                SET checkbox1 = 1, checkbox2 = 1, checkbox3 = 1
                WHERE number = '$numri_begjit'";
      }

      if ($conn->query($sql) === TRUE) {
       header("Location: index.php");
      } else {
        echo "Error updating checkboxes: " . $conn->error;
      }
    } else {
      echo "Error adding data: " . $conn->error;
    }

    $conn->close();
  }
} else {
  header("Location: index.php?noaccess");
}
?>

