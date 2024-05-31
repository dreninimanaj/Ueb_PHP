<html>
<?php

include 'config.php';
session_start();
$user_id = $_SESSION['id'];

// Use prepared statement to avoid SQL injection
$sql = $conn->prepare("SELECT fullname, role FROM users WHERE id = ?");
$sql->bind_param("i", $user_id);
$sql->execute();
$result = $sql->get_result();
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $fullname = $row['fullname'];
  $role = $row['role'];
}
$sql->close();
unset($sql);  // Unset the $sql variable after use

// Define function to generate badge number using references
if ($role !== "user") {
  function generateBadgeNumber($grade, &$number)
  {
    $num1 = '';
    $num2 = 0;
    $num3 = rand(1, 9);
    $num4 = rand(1, 9);

    switch ($grade) {
      case "Warehouse assistant":
        $characters = 'E';
        $num2 = 1;
        break;
      case "Team leader":
        $characters = 'D';
        $num2 = 2;
        break;
      case "Team leader sales":
        $characters = 'D';
        $num2 = 1;
        $num3 = rand(1, 3);
        break;
      case "Secretary of the sales":
        $characters = 'C';
        $num2 = 1;
        $num3 = rand(0, 1);
        break;
      case "Sales consultant":
        $characters = 'B';
        $num2 = 2;
        $num3 = rand(0, 1);
        $num4 = rand(1, 6);
        break;
      case "Sales outlet manager":
        $characters = 'B';
        $num2 = 1;
        $num3 = 0;
        $num4 = rand(0, 9);
        break;
      case "e":
        $characters = 'A';
        $num2 = 1;
        $num3 = 0;
        $num4 = rand(2, 6);
        break;
      case "K":
        $characters = 'A';
        $num2 = 1;
        $num3 = 0;
        $num4 = 1;
        break;
      default:
        $characters = 'X';
    }

    $num1 = $characters[rand(0, strlen($characters) - 1)];
    $number = $num1 . $num2 . '-' . $num3 . $num4;
  }

  $first_last = $_POST['first_last'];
  $grade = $_POST['grade'];
  $steam_username = $_POST['steam_username'];
  $discord = $_POST['discord'];

  // Generate badge number
  $number = '';
  generateBadgeNumber($grade, $number);

  // Check if badge number is already in use
  $stmt = $conn->prepare("SELECT COUNT(*) FROM members WHERE SUBSTRING_INDEX(number, '-', -1) = ?");
  $last_two_digits = substr($number, -2);
  $stmt->bind_param("s", $last_two_digits);
  $stmt->execute();
  $stmt->bind_result($count);
  $stmt->fetch();
  $stmt->close();
  unset($stmt);  // Unset the $stmt variable after use

  // If badge number is in use, generate a new one
  while ($count > 0) {
    generateBadgeNumber($grade, $number);
    $last_two_digits = substr($number, -2);
    $stmt = $conn->prepare("SELECT COUNT(*) FROM members WHERE SUBSTRING_INDEX(number, '-', -1) = ?");
    $stmt->bind_param("s", $last_two_digits);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();
    unset($stmt);  // Unset the $stmt variable after each use
  }

  // Validate that all fields except checkboxes are not blank
  if (empty($first_last) || empty($grade) || empty($steam_username) || empty($discord)) {
    echo 'Ju lutem plotesoni te gjitha fushat e kerkuara!';
    exit;
  }

  // Check if the record already exists
  $check_query = $conn->prepare("SELECT * FROM members WHERE first_last = ? AND grade = ? AND steam_username = ? AND discord = ?");
  $check_query->bind_param("ssss", $first_last, $grade, $steam_username, $discord);
  $check_query->execute();
  $result = $check_query->get_result();
  if ($result->num_rows > 0) {
    echo "Error: Record already exists.";
  } else {
    // Insert new data
    $insert_query = $conn->prepare("INSERT INTO members (number, first_last, grade, steam_username, discord) VALUES (?, ?, ?, ?, ?)");
    $insert_query->bind_param("sssss", $number, $first_last, $grade, $steam_username, $discord);
    if ($insert_query->execute()) {
      echo "New record created successfully.";
    } else {
      echo "Error: " . $insert_query->error;
    }
    $insert_query->close();
    unset($insert_query);  // Unset the $insert_query variable after use
  }
  $check_query->close();
  unset($check_query);  // Unset the $check_query variable after use

  // Create user account if requested
  if (isset($_POST['create_account'])) {
    $username = str_replace(' ', '.', strtolower($first_last));
    $password = '2023' . str_replace(' ', '', strtolower($steam_username));
    $role = 'user';
    $fullname1 = $number . ' ' . $first_last;

    $account_query = $conn->prepare("INSERT INTO users (username, password, role, fullname) VALUES (?, ?, ?, ?)");
    $account_query->bind_param("ssss", $username, $password, $role, $fullname1);
    $account_query->execute();
    $account_query->close();
    unset($account_query);  // Unset the $account_query variable after use
  }

  // Close the database connection
  $conn->close();
  unset($conn);  // Unset the $conn variable after use

  // Redirect the user back to the form
  header('Location: index.php');
  exit;
} else {
  header("Location: index.php?noaccess");
}
?>

</html>