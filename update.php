<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Include the database connection file
  require_once "config.php";

  // Get the form data
  // $id = $_POST['id'];
  $field = $_POST["field"];
  $newValue = $_POST["newValue"];

  if(isset($_POST['submit']))
  // Prepare the update query
  // if (isset($_GET['id'])) {
    $id = $_POST['id'];
    // echo $id;
    // die();
    $sql = "UPDATE members SET $field = ? WHERE id = '$id'";
    $stmt = mysqli_prepare($conn, $sql);
  // }
  header("Location:index.php");
  
  // Bind the parameters to the query
  mysqli_stmt_bind_param($stmt, "s", $newValue);
  // mysqli_stmt_bind_param($stmt, "s", $komenti);


  // Execute the update query
  mysqli_stmt_execute($stmt);

  // Close the statement and the database connection
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
  
}
?>
