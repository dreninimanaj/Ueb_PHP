<html>

<?php

include 'config.php';
session_start();
$user_id = $_SESSION['id'];

// Get the full name of the user from the database
$sql = "SELECT fullname, role FROM users WHERE id = $user_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $fullname = $row['fullname'];
  $role = $row['role'];
}


// Define function to generate badge number
// Retrieve the form data
if (!($role == "user")) {
  function generateBadgeNumber($grade)
  {
    if ($grade == "Warehouse assistant") {
      $characters = 'E';
      $num2 = 1;
      $num3 = rand(1, 9);
      $num4 = rand(1, 9);
    } else if ($grade == "Team leader") {
      $characters = 'D';
      $num2 = 2;
      $num3 = rand(1, 9);
      $num4 = rand(1, 9);
    } else if ($grade == "Team leader sales") {
      $characters = 'D';
      $num2 = 1;
      $num3 = rand(1, 3);
      $num4 = rand(0, 9);
    } else if ($grade == "Secretary of the sales") {
      $characters = 'C';
      $num2 = 1;
      $num3 = rand(0, 1);
      $num4 = rand(1, 9);
    } else if ($grade == "Sales consultant") {
      $characters = 'B';
      $num2 = 2;
      $num3 = rand(0, 1);
      $num4 = rand(1, 6);
    } else if ($grade == "Sales  outlet manager") {
      $characters = 'B';
      $num2 = 1;
      $num3 = 0;
      $num4 = rand(0, 9);
    } else if ($grade == "e") {
      $characters = 'A';
      $num2 = 1;
      $num3 = 0;
      $num4 = rand(2, 6);
    } else if ($grade == "K") {
      $characters = 'A';
      $num2 = 1;
      $num3 = 0;
      $num4 = 1;
    } else {
      $characters = 'X';
    }
    $num1 = $characters[rand(0, strlen($characters) - 1)];


    //   $num3 = str_pad(rand(0, 99), 2, '0', STR_PAD_LEFT);
    return $num1 . $num2 . '-' . $num3 . $num4;
  }
  $first_last = $_POST['first_last'];
  $grade = $_POST['grade'];
  $steam_username = $_POST['steam_username'];
  $discord = $_POST['discord'];


  // Generate badge number
  $number = generateBadgeNumber($grade);

  // Check if badge number is already in use
  $stmt = $conn->prepare("SELECT COUNT(*) FROM members WHERE SUBSTRING_INDEX(number, '-', -1) = ?");
  $stmt->bind_param("s", substr($number, -2));
  $stmt->execute();
  $stmt->bind_result($count);
  $stmt->fetch();
  $stmt->close();

  // If badge number is in use, generate a new one
  if ($count > 0) {
    $number = generateBadgeNumber($grade);
  }

  $count = 0;
  $stmt = $conn->prepare("SELECT COUNT(*) FROM members WHERE SUBSTRING_INDEX(number, '-', -1) = ?");
  $stmt->bind_param("s", substr($number, -2));
  $stmt->execute();
  $stmt->bind_result($count);
  $stmt->fetch();
  $stmt->close();

  if ($count > 0) {
    $number = generateBadgeNumber($grade);
  }

  $count = 0;
  $stmt = $conn->prepare("SELECT COUNT(*) FROM members WHERE SUBSTRING_INDEX(number, '-', -1) = ?");
  $stmt->bind_param("s", substr($number, -2));
  $stmt->execute();
  $stmt->bind_result($count);
  $stmt->fetch();
  $stmt->close();

  if ($count > 0) {
    $number = "TEMP-" . rand(1, 23);
    echo "<script>alert('Nuk ka begja te lire per kete grade');</script>";
  }



  // Validate that all fields except checkboxes are not blank
  if (empty($first_last) || empty($grade) || empty($steam_username) || empty($discord)) {
    echo 'Ju lutem plotesoni te gjitha fushat e kerkuara!';
    exit;
  }
  // Insert the data into the members table
  // Escape user input to avoid SQL injection


  // Check if the record already exists
  $check_query = "SELECT * FROM members WHERE first_last = '$first_last' AND grade = '$grade' AND steam_username = '$steam_username' AND discord = '$discord'";
  $result = $conn->query($check_query);
  if ($result->num_rows > 0) {
    // Display error message
    echo "Error: Record already exists.";
  } else {
    // Insert new data
    $query = "INSERT INTO members (number, first_last, grade, steam_username, discord) VALUES ('$number', '$first_last', '$grade', '$steam_username', '$discord')";
    if ($conn->query($query)) {
      echo "New record created successfully.";
    } else {
      // Display error message and error details
      echo "Error: " . $query . "<br>" . $conn->error;
    }
  }


  if (isset($_POST['first_last']) && isset($_POST['grade']) && isset($_POST['steam_username']) && isset($_POST['discord'])) {
    $first_last = $_POST['first_last'];
    $grade = $_POST['grade'];
    $steam_username = $_POST['steam_username'];
    $discord = $_POST['discord'];

    // Save the username as first_last in lowercase with spaces replaced by dots
    $username = str_replace(' ', '.', strtolower($first_last));

    // Save the password as 2023steam_username with uppercase and spaces removed
    $password = '2023' . str_replace(' ', '', strtolower($steam_username));

    // Set the role to 'user'
    $role = 'user';

    if (isset($_POST['create_account'])) {
      $fullname1 = $number . ' ' . $first_last;
      $query = "INSERT INTO users (username, password, role, fullname) VALUES ('$username', '$password', '$role', '$fullname1')";
      mysqli_query($conn, $query);
    }
  }

  // Close the database connection
  $conn->close();

  // Redirect the user back to the form
  if ($count > 0) {
    header('Location: index.php?badge-used=' . $count . '');
  } else {
    header('Location: index.php');
    exit;
  }
} else {
  header("Location: index.php?noaccess");
}
?>

</html>