<?php
include 'config.php';
session_start();

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);

    // If password has not been changed, redirect to password change form
    if ($user['password_changed'] == 0) {
      $_SESSION['password_change'] = true;
      $_SESSION['user_id'] = $user['id'];
      header("Location: locked.php");
      exit();
    }

    $_SESSION['logged_in'] = true;

    // Set session variables based on user access level
    if ($user['role'] == "user") {
      $_SESSION['username'] = $user['username'];
      $_SESSION["id"] = $user["id"];
      $_SESSION['access_level'] = "user";
    } elseif ($user['role'] == "editor") {
      $_SESSION["id"] = $user["id"];
      $_SESSION['username'] = $user['username'];
      $_SESSION['access_level'] = "editor";
    } elseif ($user['role'] == "owner") {
      $_SESSION["id"] = $user["id"];
      $_SESSION['username'] = $user['username'];
      $_SESSION['access_level'] = "owner";
    }

    header("Location: index.php");
  } else {
?>
    <div class="alert alert-danger" role="alert">
      <?php
      echo '<p><center>Perdoruesi ose fjalekalimi gabim!</center>'; ?> </div>
<?php
  }
}
?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">


  <style>
    /* Styling for the alert box */
    .alert-box {
      position: fixed;
      top: 0;
      right: 0;
      background-color: #333;
      color: #fff;
      padding: 10px;
      border-bottom-left-radius: 5px;
      font-family: 'Poppins', sans-serif;
      /* Use Poppins as the primary font, with sans-serif as a fallback */
      z-index: 9999;
    }
  </style>

  <div class="alert-box">
    Protected by <a href="https://stormwall.pro/"> StormWall</a>
  </div>
</head>

<body background="police.jpg">
  </head>

  <body background="police.jpg">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
          <img src="logo.png" alt="Logo" style="margin-bottom: 20px;">
          <h2 class="text-black">Stahlgruber StaffSync</h2>
          <div class="form-container mt-5">
            <form action="" method="post" onsubmit="toLowerCase()">
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Perdoruesi" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Fjalekalimi" required>
              </div>
              <input type="submit" name="submit" class="btn btn-submit btn-block" value="Kyqu">
            </form>

            <script>
              function toLowerCase() {
                var usernameField = document.getElementsByName("username")[0];
                usernameField.value = usernameField.value.toLowerCase();
              }
            </script>
            <script>
              // JavaScript code to display the alert box
              document.addEventListener('DOMContentLoaded', function() {
                var alertBox = document.createElement('div');
                alertBox.className = 'alert-box';
                alertBox.textContent = 'Protected by StormWall';
                document.body.appendChild(alertBox);
              });
            </script>


          </div>
        </div>
      </div>
    </div>
  </body>

</html>