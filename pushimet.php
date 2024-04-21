<?php include 'header.php'; ?>

<script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
  <?php include 'config.php';

// Fetch data from database
$sql = "SELECT * FROM submissions";
$result = mysqli_query($conn, $sql);

// Close database connection
?>
<script>
  function noaccess(){
    alert("Nuk keni akses");
  }
</script>
<!DOCTYPE html>
<html>
<head>
  <title>Pushimet Vjetore</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 20px;
    }
    th, td {
      text-align: left;
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
      color: #333;
    }
    tr:hover {
      background-color: #f5f5f5;
    }
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.4);
    }
    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
<div style="overflow-x:auto;float:right;width:80%">
<center><h2>Pushimet vjetore</h2></center>
<table style="width: 100%">
  <tr>
    <th>Numri begjit</th>
    <th>Data e daljes</th>
    <th>Arsyeja</th>
    <th>Data e rikthimit</th>
    <th>Pushim gjithsejt</th>
  </tr>
  <?php
  // Display data in table rows
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["numri_begjit"] . "</td>";
      echo "<td>" . $row["data_daljes"] . "</td>";
      if(!($role=='user')) {
      echo "<td><button style=\"background-color:#008CBA;color:white;padding:6px 10px;border:none;border-radius:3px;cursor:pointer;\" onclick=\"document.getElementById('modal" . $row["id"] . "').style.display='block'\">Shiko</button></td>";
      } else {
        echo "<td><button style=\"background-color:#008CBA;color:white;padding:6px 10px;border:none;border-radius:3px;cursor:pointer;\" onclick=\"noaccess();\">Shiko</button></td>";

      }
      echo "<td>" . $row["data_rikthimit"] . "</td>";
      echo "<td>" . $row["aprovuar_nga"] . "</td>";
      echo "</tr>";

      // Display modal windows for each submission
      echo "<div id=\"modal" . $row["id"] . "\" class=\"modal\">";
      echo "<div class=\"modal-content\">";
      echo "<span class=\"close\" onclick=\"document.getElementById('modal" . $row["id"] . "').style.display='none'\">&times;</span>";
      echo "<p style=\"word-wrap: break-word;\">" . $row["arsyeja"] . "</p>";
      echo "</div>";
      echo "</div>";
    }
  } else {
    echo "<tr><td style=\"color:red;\" colspan=\"4\"><center>Nuk ka punonjes ne pushim vjetor.</center><td></tr>";
  }
  ?>
</table>



</body
</div>
</div>

		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>