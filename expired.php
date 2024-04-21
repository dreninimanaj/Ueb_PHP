<?php

include 'config.php';

// Delete expired submissions
$today = date('Y-m-d');
$sql = "DELETE FROM submissions WHERE data_rikthimit < '$today'";
$conn->query($sql);

$conn->close();

?>
