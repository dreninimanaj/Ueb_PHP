<?php
  
  function updateMember($id, $grade, $newNumber) {
    include 'config.php';
    // Sanitize the inputs
    $grade = $conn->real_escape_string($grade);
    $newNumber = $conn->real_escape_string($newNumber);
    
    // Update the row in the database
    $sql = "UPDATE members SET grade='$grade', number='$newNumber' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
    
    // Close the connection
    $conn->close();
  }
  
?>
