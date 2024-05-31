<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header("Location: login.php");
  exit;
}
?>
<style>
  .alert-box {
    position: fixed;
    top: 0;
    right: 0;
    background-color: #333;
    color: #fff;
    padding: 10px;
    border-bottom-left-radius: 5px;
    font-family: Arial, sans-serif;
    /* Specify the sans-serif font here */
    z-index: 9999;
  }
</style>
<?php
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

$username = $_SESSION['username'];

// Read the CSV file and count the number of submissions
$csvFile = fopen('submissions.csv', 'r');
$num_submissions = 0;
if ($csvFile) {
  while (($row = fgetcsv($csvFile)) !== false) {
    // Process each row of the CSV file
    $num_submissions++;
  }
  fclose($csvFile);
}

?>

<!doctype html>

<style>
  * {
    font-family: "Poppins", Arial, sans-serif;
  }
</style>
<html lang="en">

<head>
  <style>
    #sidebar {
      height: 100%;
      position: absolute;
    }
  </style>
  <title>LSPD Roaster</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
  <script>
    function deleteExpiredRows() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          alert("Pushimet u freskuan me sukses");
          location.reload();
        }
      };
      xhttp.open("GET", "delete_expired_rows.php", true);
      xhttp.send();
    }
  </script>
  <div class="alert-box">
    Protected by Origami
  </div>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
        </button>
      </div>
      <div class="img bg-wrap text-center py-4" style="background-image: url(sulzbah.jpg);">
        <div class="user-logo">
          <div class="img" style="background-image: url(logo.png);"></div>
          <h3><?php echo $username ?></h3><br>
        </div>
      </div>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <a href="index.php"><span class="fa fa-home mr-3"></span> Rosteri</a>
        </li>
        <li>
          <a href="insert.php"><span class="fa fa-address-book-o mr-3"></span> Regjistri</a>
        </li>
        <?php if (!($role == "user")) { ?>
          <li>
            <a href="mesazhe.php"><span class="fa fa-envelope-square mr-3"></span> Mesazhe LSPD</a>
          </li>
        <?php } ?>
        <li>
          <a href="shto-verejtje.php"><span class="fa fa-exclamation-triangle mr-3"></span> Regjistro Verejtje</a>
        </li>

        <li>
          <a href="pushimet.php"><span class="fa fa-bar-chart mr-3"></span> Pushimet vjetore</a>
        </li>
        <li>
          <a href="shto-pushim.php"><span class="fa fa-address-book-o mr-3"></span> Paraqit pushim</a>
        </li>

        <li>
          <a href="view_ankesat.php"><span class="fa fa-envelope-open mr-3 notif"><?php echo ($num_submissions > 0) ? "<small style='color:black;' class='d-flex align-items-center justify-content-center'>$num_submissions</small>" : ""; ?></span> Ankesat</a>
        </li>
        <li>
          <a href="kodet-policore.php"><span class="fa fa-book mr-3"></span> Kodet e komunikimit</a>
        </li>
        <li>
          <a href="vleresimi.php"><span class="fa fa-book mr-3"></span> Vler&euml;so punonjesin</a>
        </li>
        <?php if (!($role == 'user')) { ?>
          <li>
            <a href="reviews.php"><span class="fa fa-book mr-3"></span> Shiko vleresimet</a>
          </li>
        <?php } ?>
        <li>
          <a href="logout.php"><span class="fa fa-sign-out mr-3"></span> Dil</a>
        </li>
      </ul>
      <?php if (!($role == 'user')) { ?>
        <button style="color:red;margin-left: 20px;" onclick="deleteExpiredRows()"><span class="fa fa-refresh mr-3"></span> Fresko pushimet vjetore</button>
      <?php } ?>
    </nav>
    <script>
      // JavaScript code to display the alert box
      document.addEventListener('DOMContentLoaded', function() {
        var alertBox = document.createElement('div');
        alertBox.className = 'alert-box';
        alertBox.textContent = 'Protected by Origami';
        document.body.appendChild(alertBox);
      });
    </script>