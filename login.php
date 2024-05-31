<?php
$dsn = 'mysql:host=localhost;dbname=main';
$username = 'root';
$password = 'dreni123';

include 'config.php';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
?>


<?php
include 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
    $stmt->execute([
        ':username' => $username,
        ':password' => $password
    ]);

    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // If password has not been changed, redirect to password change form
        if ($user['password_changed'] == 0) {
            $_SESSION['password_change'] = true;
            $_SESSION['user_id'] = $user['id'];
            header("Location: locked.php");
            exit();
        }

        $_SESSION['logged_in'] = true;

        // Set session variables based on user access level
        $_SESSION['username'] = $user['username'];
        $_SESSION["id"] = $user["id"];
        $_SESSION['access_level'] = $user['role'];

        header("Location: index.php");
    } else {
        echo '<div class="alert alert-danger" role="alert"><p><center>Perdoruesi ose fjalekalimi gabim!</center></p></div>';
    }
}
?>

<!DOCTYPE html>
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
            z-index: 9999;
        }
    </style>

    <div class="alert-box">
        Protected by <a href="https://stormwall.pro/"> StormWall</a>
    </div>
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