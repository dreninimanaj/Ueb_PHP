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
}
?>


<!-- Page Content  -->
<style>
  form {
    max-width: 600px;
    margin: 0 auto;
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    padding: 20px;
  }

  form label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
  }

  form input[type="text"] {
    display: block;
    width: 100%;
    padding: 8px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  form button[type="submit"] {
    display: block;
    /* make the button a block element */
    margin: 0 auto;
    /* center the button horizontally */
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  form button[type="submit"]:hover {
    background-color: #45a049;
  }

  form input[type="checkbox"] {
    display: inline-block;
    /* display checkboxes inline */
    width: 20px;
    /* make checkboxes larger */
    height: 20px;
  }

  form input[type="checkbox"]+label {
    vertical-align: middle;
  }

  label {
    display: block;
    margin-bottom: 10px;
  }

  select {
    border: 1px solid #ccc;
    border-radius: 4px;
    display: block;
    width: 100%;
    padding: 8px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  select:focus {
    outline: none;
    border-color: #555;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
  }
</style>
<div id="content" class="p-4 p-md-5 pt-5">
  <form method="post" action="process.php">
    <center>
      <h2>Regjistro Punonjes</h2>
    </center>
    <label for="first_last">Emri dhe Mbiemri:</label>
    <input type="text" name="first_last" id="first_last" required>

    <label for="grade">Pozita:</label>
    <?php include 'grada.php'; ?>

    <label for="steam_username">Koment</label>
    <input type="text" name="steam_username" id="steam_username" required>

    <label for="discord">Ko2ment</label>
    <input type="text" name="discord" id="discord" required>

    <label for="create_account">Krijo llogari:</label>
    <input type="checkbox" name="create_account" id="create_account">

    <?php if (!($role == "user")) { ?>
      <button type="submit">Regjistro punonjesin</button>
  </form>
<?php
    } else { ?>
  <center>
    <p style="color: red;"> Nuk keni akses per te regjistruar punonjes!</p>
  <?php  }
  ?>


</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>