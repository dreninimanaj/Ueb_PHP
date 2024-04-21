<!DOCTYPE html>
<html>
<head>
	<title>Submissions</title>
	<style>
		body {
			font-family: "Poppins", Arial, sans-serif;
			display: flex;
			justify-content: flex-end;
			align-items: center;
			min-height: 100vh;
			background-color: #f5f5f5;
			padding-right: 80px;
		}

		.container {
			width: 70%;
			margin: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			overflow: hidden;
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
	<div class="container">
		<table>
			<thead>
				<tr>
					<th>Discord</th>
					<th>Badge Number</th>
					<th>Date</th>
					<th>Case Explanation</th>
					<th>Police Mistake</th>
					 <th>Evidence</th>
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
						echo "<td>" . $row[1] . "</td>";
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
