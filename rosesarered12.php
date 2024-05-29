<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Members List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body {
      background-image: url('vothi.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    .table-container {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
    }

    .table th,
    .table td {
      background-color: white;
    }
  </style>
</head>

<body>

  <div class="container mt-5">
    <?php
    // Include the config.php file
    include 'config.php';

    // SQL query
    $sql = "SELECT * FROM members";
    $result = mysqli_query($conn, $sql);

    // Check if query returns results
    if (mysqli_num_rows($result) > 0) {
      // Fetch all rows into an array
      $rows = [];
      while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }

      // Sort the array of rows by 'first_last' column
      usort($rows, function ($a, $b) {
        return strcmp($a['first_last'], $b['first_last']);
      });

      // Start table body
      echo "<table class='table table-bordered'>";
      echo "<thead class='thead-light'><tr><th>ID</th><th>Number</th><th>Name</th><th>Position</th><th>Full-time</th><th>Part-time</th><th>Self-chose</th><th>Actions</th></tr></thead>";
      echo "<tbody>";

      // Prepare to store modal HTML
      $modals = '';

      // Loop through sorted rows and print them in a table
      foreach ($rows as $row) {
        echo "<tr>";
        echo "<td style='color:red;'>PD-20" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['number']) . "</td>";
        echo "<td>" . ucwords(strtolower(htmlspecialchars($row['first_last']))) . "</td>";
        echo "<td>" . htmlspecialchars($row['grade']) . "</td>";
        echo "<td>" . htmlspecialchars($row['checkbox1']) . "</td>";
        echo "<td>" . htmlspecialchars($row['checkbox2']) . "</td>";
        echo "<td>" . htmlspecialchars($row['checkbox3']) . "</td>";
        echo "<td>";
        echo "<button type='button' class='btn btn-primary btn-sm edit-btn' data-id='" . htmlspecialchars($row['id']) . "' data-toggle='modal' data-target='#editModal_" . htmlspecialchars($row['id']) . "'>Edit</button> ";
        echo "<button type='button' class='btn btn-danger btn-sm delete-btn' data-id='" . htmlspecialchars($row['id']) . "' data-toggle='modal' data-target='#confirmdelete_" . htmlspecialchars($row['id']) . "'>Fshije</button>";
        echo "</td>";
        echo "</tr>";

        // Collect modals
        $modals .= "<div id='editModal_" . htmlspecialchars($row['id']) . "' class='modal fade' tabindex='-1' role='dialog'>
                            <div class='modal-dialog' role='document'>
                              <div class='modal-content'>
                                <div class='modal-header'>
                                  <h5 class='modal-title'>Ndrysho te dhenat per pjestarin: <span style='color: red;'>" . htmlspecialchars($row['number']) . " | " . htmlspecialchars($row['first_last']) . "</span></h5>
                                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                  </button>
                                </div>
                                <div class='modal-body'>
                                  <form action='update.php' method='post'>
                                    <div class='form-group'>
                                      <input type='hidden' name='id' id='forma_id' value='" . htmlspecialchars($row['id']) . "'>
                                      <label for='field'>Cila fushe do ndryshoni</label>
                                      <select name='field' id='field' class='form-control' required>
                                        <option value=''>Zgjedhni një opsion</option>
                                        <option value='number'>Numri Begjit</option>
                                        <option value='first_last'>Emri dhe Mbiemri</option>
                                        <option value='grade'>Pozita</option>
                                        <option value='steam_username'>Steamusername</option>
                                        <option value='discord'>Discord</option>
                                      </select>
                                    </div>
                                    <div class='form-group'>
                                      <label for='newValue'>Vlera e re</label>
                                      <input type='text' class='form-control' id='newValue' name='newValue' required>
                                    </div>
                                    <button type='submit' name='submit' class='btn btn-primary'>Ndrysho</button>
                                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>";

        $modals .= "<div class='modal fade' id='confirmdelete_" . htmlspecialchars($row['id']) . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered' role='document'>
                              <div class='modal-content'>
                                <div class='modal-header'>
                                  <h5 class='modal-title' id='exampleModalLongTitle'>Fshije Pjesetarin</h5>
                                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                  </button>
                                </div>
                                <div class='modal-body'>
                                  A jeni i sigurt q&euml; d&euml;shironi ta fshini kete pjesetar?
                                </div>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-secondary' data-dismiss='modal'>JO</button>
                                  <a href='delete.php?id=" . htmlspecialchars($row['id']) . "' class='btn btn-danger' id='delete_btn'>PO! Fshije</a>
                                </div>
                              </div>
                            </div>
                          </div>";
      }

      // End table body
      echo "</tbody>";
      echo "</table>";

      // Output all modals after the table
      echo $modals;
    } else {
      echo "0 results";
    }
    ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>