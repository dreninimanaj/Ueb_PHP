<?php


if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header("Location: login.php");
  exit;
}

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
<?php include 'config.php'; ?>
<?php include 'update.php'; ?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LSPD Roaster</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    /* Global styles */
    * {
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('vothi.jpg');
      background-size: auto;
    }

    /* Header styles */
    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
      font-size: 28px;
      /* Larger font size for the header */
    }

    /* Main content styles */
    .container {
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

    }

    /* Table styles */
    table {
      margin-top: 8px o !important;
      width: 100%;
      border-collapse: collapse;
      font-size: 18px;
      /* Larger font size for the table */
      border: 1px solid #ccc;
      background-color: #fff;
      /* White background */

    }

    th,
    td {
      padding: 16px;
      /* Larger padding for better spacing */
      border: 1px solid #ccc;
      text-align: center;
      font-family: "Poppins", sans-serif;
      /* Poppins font */
    }

    th {
      background-color: #3f51b5;
      color: #fff;
      font-weight: bold;
      text-align: center !important;
      font-weight: bold !important;
    }

    tbody tr:nth-child(even) {
      background-color: #f5f5f5;
    }

    tbody tr:nth-child(odd) {
      background-color: #ececec;
      /* Slightly darker row */
    }

    tbody tr:hover {
      background-color: #d0d0d0;
      /* Hover effect color */
    }

    /* Button styles */
    .btn {
      display: inline-block;
      padding: 8px 12px;
      /* Larger padding for buttons */
      margin: 10px;
      background-color: #3f51b5;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 18px;
      /* Larger font size for buttons */
      font-weight: bold;
      text-decoration: none;
    }

    .btn:hover {
      background-color: #1a237e;
    }

    /* Custom police database styling */
    th,
    td {
      font-weight: normal;
    }

    th {
      background-color: #1a1a1a;
      color: #fff;
      font-size: 20px;
      /* Larger font size for custom styling */
    }

    tbody tr {
      background-color: #fff;
      color: #333;
      /* Text color */
    }

    /* Improved readability */
    th,
    td {
      font-size: 18px;
      /* Larger font size for table content */
    }

    tbody tr {
      font-size: 20px;
      /* Larger font size for table content */
    }

    /* Add more custom styling as needed */
  </style>



  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $(document).on('click', '.edit-btn', function() {
        var id = $(this).data('id');
        $('#editModal_' + id).modal('show');

      });
    });
  </script>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
  <style>
    .rounded {
      border-radius: 10px;
    }
  </style>

  <script>
    $('.delete-btn').on('click', function() {
      var id = $(this).data('id');
      $.ajax({
        url: 'delete.php',
        type: 'post',
        data: {
          id: id
        },
        success: function(response) {
          // refresh the table data or show a success message
        }
      });
    });
  </script>



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
  <?php
  // 2. Construct the SQL query
  $sql = "SELECT * FROM members";

  // 3. Execute the SQL query
  $result = mysqli_query($conn, $sql);

  // 4. Get the number of rows
  $num_rows = mysqli_num_rows($result);

  ?>
  <!-- <div id="announcement" class="popup2">
    <span class="close-btn" onclick="closePopup()">&times;</span>
    <p><center><span style="color: red">Njoftime</span></center><br> 1. &Euml;sht&euml; b&euml;r&euml; funksional numri i ankesave aktive n&euml; shiritin informues n&euml; an&euml;n e majt&euml;.<br>2. &Euml;sht&euml; shtuar lista e kodeve t&euml; komunikimit t&euml; policis&euml;, gjindet <a style="color:red;" href="kodet-policore.php"> k&euml;tu.</a><br>3. &Euml;sht&euml; rregulluar nj&euml; problem me mbishkrimin e perdorues&euml;ve n&euml; rastin kur i kan&euml; t&euml; dh&euml;nat identike.</a></p>
  </div> -->


  <script>
    function closePopup() {
      var popup = document.getElementById("announcement");
      popup.style.display = "none";
    }
  </script>

  <div class="container mt-1 ms-2">
    <?php echo '<h2> Gjithsejt punonj&euml;s: ' . $num_rows . '</h1>'; ?>
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nr. Serik</th>
          <th scope="col">Begji</th>
          <th scope="col">Emri Mbiemri</th>
          <th scope="col">Pozita</th>
          <!-- <th scope="col">Steamusername</th>
          <th scope="col">Discord</th> -->
          <th colspan='3' scope="col">Verejtjet</th>
          <?php if ($role == "owner") { ?>
            <th scope="col">Edit</th>
          <?php } ?>
          <?php if ($role == "owner") { ?>
            <th scope="col">Delete</th>
          <?php } ?>
        </tr>
      </thead>
      <tbody>
        <?php
      // Function to sort array of rows by a specific column
      function sortRowsByColumn($rows, $column) {
          usort($rows, function($a, $b) use ($column) {
              return strcmp($a[$column], $b[$column]);
          });
          return $rows;
      }
      
      // SQL query
      $sql = "SELECT * FROM members";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
          // Fetch all rows into an array
          $rows = [];
          while($row = mysqli_fetch_assoc($result)) {
              $rows[] = $row;
          }
          
          // Sort the array of rows by 'first_last' column
          $rows = sortRowsByColumn($rows, 'first_last');
          
          // Loop through sorted rows
          foreach ($rows as $row) {
              $current_date = new DateTime();
              $registration_date = new DateTime($row['registered']);
              $days_since_registration = $current_date->diff($registration_date)->days;
              echo "<tr>";
              echo "<td style='color:red;'> PD-20" . $row['id'] . "</td>";
              echo "<td>" . $row['number'] . "</td>";
              echo "<td>" . ucwords(strtolower($row['first_last'])) . "</td>";
              echo "<td>" . $row['grade'] . "</td>";
              //echo "<td>" . $row['steam_username'] . "</td>";
              //echo "<td>" . $row['discord'] . "</td>";
              echo "<td>" . $row['checkbox1'] . "</td>";
              echo "<td>" . $row['checkbox2'] . "</td>";
              echo "<td>" . $row['checkbox3'] . "</td>";
              echo "</tr>";
          }
      } else {
          echo "0 results";
      }
    
      
        ?>
            <?php if ($role == "owner") { ?>
              <td id='save-changes'>
                <button type='button' class='btn btn-primary edit-btn' data-id='<?php echo $row['id']; ?>'>
                  Edit
                </button>
                <div id="editModal_<?= $row['id'] ?>" class="modal fade" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Ndrysho te dhenat per pjestarin: <span style="color: red;">
                            <?php echo $row['number'] . " | " . $row['first_last']; ?></span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <?php echo '
                    <form action="update.php" method="post">
                    '; ?>
                        <div class="form-group">
                          <input type="hidden" name="id" id="forma_id" value="<?= $row['id']; ?>">
                          <label for="field">Cila fushe do ndryshoni</label>
                          <select name="field" id="field" class="form-control" required>
                            <option value="">Zgjedhni një opsion</option>
                            <option value="number">Numri Begjit</option>
                            <option value="first_last">Emri dhe Mbiemri</option>
                            <option value="grade">Pozita</option>
                            <option value="steam_username">Steamusername</option>
                            <option value="discord">Discord</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="newValue">Vlera e re</label>
                          <input type="text" class="form-control" id="newValue" name="newValue" required>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Ndrysho </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </td>
            <?php } ?>
            <?php
            if ($role == "owner") {
              echo "
            <td>
              <button type='button' class='btn btn-danger delete-btn' data-toggle='modal' data-target='#confirmdelete_" . $row['id'] . "'>
                Fshije
              </button>
            </td> ";
              echo '
            <div class="modal fade" id="confirmdelete_' . $row['id'] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Fshije Pjesetarin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    A jeni i sigurt q&euml; d&euml;shironi ta fshini kete pjesetar?
                    <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">JO</button>
                      <a href="delete.php?id=' . $row['id'] . ' "class="btn btn-danger"id="delete_btn" >PO! Fshije</a> 
                    </div>
                  </div>

                </div>
              </div>
            </div>
            ';
            }


            ?>


        <?php
          
        
        ?>
        <script>
          // JavaScript code to display the alert box
          document.addEventListener('DOMContentLoaded', function() {
            var alertBox = document.createElement('div');
            alertBox.className = 'alert-box';
            alertBox.textContent = 'Protected by StormWall';
            document.body.appendChild(alertBox);
          });
        </script>

      </tbody>
      </tr>
      </tbody>
    </table>
  </div>
</body>

</html>