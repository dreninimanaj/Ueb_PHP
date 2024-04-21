
<?php include 'header.php'; ?>
<?php include 'config.php'; 



// Get the full name of the user
$user_id = $_SESSION['id'];

// Get the full name of the user from the database
$sql = "SELECT fullname, role FROM users WHERE id = $user_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fullname = $row['fullname'];
	$role = $row['role'];
}

// close the database connection

?>



?>
<script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

		function test() {
    alert('Nuk keni akses!');
}

document.getElementById('noaccess').onclick = test; 
    </script>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">


<!DOCTYPE html>
<html>
<head>
	<title>Regjistro Verejtje</title>
    <style>
		form {
			max-width: 500px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			font-size: 16px;
			line-height: 1.5;
			font-family: Arial, sans-serif;
		}
    h1 {
		text-align: center;
		margin-top: 50px;
		font-family: Arial, sans-serif;
	}

	label {
		display: block;
		margin-bottom: 10px;
		font-weight: bold;
	}

	select, textarea, input[type="date"],input[type="text"] {
		width: 100%;
		padding: 10px;
		margin-bottom: 20px;
		border: 1px solid #ccc;
		border-radius: 5px;
		font-size: 16px;
		line-height: 1.5;
		font-family: Arial, sans-serif;
	}

	input[type="submit"] {
		background-color: #4CAF50;
		color: #fff;
		padding: 10px 20px;
		border: none;
		border-radius: 5px;
		font-size: 16px;
		line-height: 1.5;
		cursor: pointer;
		transition: background-color 0.3s ease;
		font-family: Arial, sans-serif;
	}

	input[type="submit"]:hover {
		background-color: #3e8e41;
	}
</style>
</head>
<body>
	
	<form method="POST" action="submit-verejtje.php">
		<center><h2>Regjistro Verejtje</h2></center><hr>
		<label for="numri_begjit">Zyrtari per verejtje:</label>
		<select name="numri_begjit" id="numri_begjit">
			<?php
				
				$sql = "SELECT number, first_last FROM members";
				$result = $conn->query($sql);
				// Display the badge numbers and names as options in the dropdown
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						echo "<option value='" . $row["number"] . "'>" . $row["number"] . " | " . $row["first_last"] . "</option>";
					}
				}
				$conn->close();
			?>
		</select>
		<br><br>
        <label for="arsyeja">Arsyetim:</label>
        <textarea required name="arsyeja" id="arsyeja" cols="30" rows="10"></textarea>

		<label for="nenshkruar_nga">Nenshkruar nga:</label>
		<input type="text" value="<?php echo $fullname; ?>" readonly>
		<br><br>
		<label for="data">Data:</label>
		<input required type="date" name="data" id="data" value="data">
		<br><br>
		<?php if(!($role == "user")){ ?>
			<button class="btn btn-success" type="submit" value="submit">Regjistro</button>
			</form>
			<?php
		} else { ?>
				<center><p style="color: red;"> Nuk keni akses per te regjistruar verejtje!</p>
	<?php	}
				?>
	
    </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
