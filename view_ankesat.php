<?php include 'header.php';
include 'config.php';
$user_id = $_SESSION['id']; 

// Get the full name of the user from the database
$sql = "SELECT fullname, role FROM users WHERE id = $user_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fullname = $row['fullname'];
	$role = $row['role'];
}?>

<script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
 
        <!-- Page Content  -->

      <div id="content" class="p-4 p-md-5 pt-5">
      <!DOCTYPE html>
<html>
<head>
	<title>Ankesat</title>
	<style>
		body {
			font-family: "Poppins", Arial, sans-serif;
			display: flex;
			justify-content: flex-end;
			align-items: center;
			min-height: 90vh;
			background-color: #f5f5f5;
			padding-right: 40px;

		}

		.container {
			width: 70%;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			overflow: hidden;
            margin-left: 480px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		th, td {
			padding: 8px;
			text-align: center;
		}

		th {
			background-color: #212529;
			color: #fff;
			text-transform: uppercase;
		}

		td {
			border-bottom: 1px solid #ddd;
		}

		textarea {
			width: 100%;
			min-height: 60px;
			resize: none;
			border: 1px solid #ddd;
			padding: 4px;
		}

		a {
			text-decoration: none;
			color: #0366d6;
		}
	</style>
</head>
<body>
<?php
        if(!($role == "user")) {
            ?>
	<div class="container">
		<table>
			<thead>
				<tr>
					<th>Discord i ankuesit</th>
					<th>Numri i begjit te policit</th>
					<th>Data</th>
					<th>Spjegimi i rastit</th>
					<th>Gabimi i policit</th>
					 <th>Evidenca</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Read the CSV file and display each row as a table row
				$file = fopen("submissions.csv", "r");
				if ($file) {
					while (($row = fgetcsv($file)) !== false) {
						echo "<tr>";
						echo "<td>" . $row[0] . "</td>";
						echo "<td><b>" . $row[1] . "</b></td>";
						echo "<td>" . $row[2] . "</td>";
						echo "<td><textarea readonly>" . $row[3] . "</textarea></td>";
						echo "<td><textarea readonly>" . $row[4] . "</textarea></td>";
						echo "<td><a href='" . $row[5] . "' target='_blank'>" . $row[5] . "</a></td>";
						echo "</tr>";
					}
					fclose($file);
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
<?php
        } else { ?>
        
        
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

</div>

		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>