<?php

include 'config.php';
// Select all data from the members table
$sql = "SELECT number, first_last FROM members";
$result = $conn->query($sql);

// Output the data in a table
if ($result->num_rows > 0) {
  echo "<table><tr><th>Numri</th><th>First Last</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["numri"]."</td><td>".$row["first_last"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

// Close the database connection
$conn->close();

?>

<!-- Add a "Copy" button -->
<button onclick="copyToClipboard()">Copy</button>

<!-- Add a hidden textarea to hold the copied data -->
<textarea id="clipboard" style="position: absolute; left: -9999px;"></textarea>

<!-- Add the JavaScript code to copy the data to the clipboard -->
<script>
function copyToClipboard() {
  var table = document.getElementsByTagName('table')[0];
  var cells = table.getElementsByTagName('td');
  var data = "";
  for (var i = 0; i < cells.length; i++) {
    data += cells[i].innerHTML + " ";
    if ((i+1) % 2 == 0) {
      data += "\n";
    }
  }
  document.getElementById('clipboard').value = data;
  document.getElementById('clipboard').select();
  document.execCommand('copy');
}
</script>
