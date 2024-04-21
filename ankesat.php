<?php 
include 'header.php';
include 'config.php';
$user_id = $_SESSION['id'];

// Get the full name of the user from the database
$sql = "SELECT fullname, role FROM users WHERE id = $user_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fullname = $row['fullname'];
	$role = $row['role'];
}

?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">
<style>
    table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:nth-child(2) td:not(:last-child) {
        border-right: none;
    }
    tr.done {
    background-color: red;
}

</style>

<script>
    // Get all the "mark as done" buttons
var markAsDoneBtns = document.getElementsByClassName("mark-as-done-btn");

// Loop through the buttons and add a click event listener to each one
for (var i = 0; i < markAsDoneBtns.length; i++) {
    markAsDoneBtns[i].addEventListener("click", function(event) {
        // Get the parent row of the button that was clicked
        var row = event.target.parentNode.parentNode;

        // Add the "done" class to the row
        row.classList.add("done");

        // Send an AJAX request to update the database with the new status
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "update_row_status.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("row_id=" + row.dataset.rowId + "&is_done=1");
    });
}

</script>
    <?php

    if(!($role == "user")) {
    $response_url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS5FhMaQb6x0mHoukf03igF-JL0MIkB47pyPlhhhkQnEkSm-gS_AR8ngUpAnrOr0ASPeZaa9af5BcCF/pubhtml";
    $response_data = file_get_contents($response_url);

    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($response_data);
    libxml_clear_errors();

    $rows = $dom->getElementsByTagName('tr');
    echo "<table>";
foreach ($rows as $row) {
    echo "<tr>";
    $cells = $row->getElementsByTagName('td');
    foreach ($cells as $cell) {
        echo "<td>" . $cell->nodeValue . "</td>";
    }
    echo '<td><button class="mark-as-done-btn">Mark as done</button></td>';
    echo "</tr>";
}
echo "</table>";

} else { ?>
    <!DOCTYPE html>

    <style>
      body {
        margin: 0;
        padding: 0;
        background-color: #fff;
      }
      .alert {
        width: 80%;
        margin-left: 350px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #f00;
        color: #fff;
        font-size: 2rem;
        font-family: Arial, sans-serif;
        text-align: center;
        border-bottom: 10px solid #000;
      }
    </style>
  </head>
  <body>
    <div class="alert">
      <p>Nuk keni akses.</p>
    </div>


<?php } ?>
    ?>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
