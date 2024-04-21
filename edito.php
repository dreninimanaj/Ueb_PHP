<?php 
include 'config.php';
session_start();

// Check if the user is logged in
if(isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];

    // Get the full name and role of the user from the database
    $sql = "SELECT fullname, role FROM users WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $fullname = $row['fullname'];
        $role = $row['role'];

        if (!($role == "user")) {
            ?>
            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shto rregulla ose restriksione</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            font-size: 1.5rem;
            text-align: center;
            margin-top: 0;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        textarea {
            width: 97%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: 'Poppins', Arial, sans-serif;
        }
        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Poppins', Arial, sans-serif;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .back-button {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        .back-button:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Shto rregulla ose restriksione te reja</h1>
        <form action="save_rules.php" method="POST">
            <label for="section">Sektori: (shembull: 2.0 Pjestaret e perkohshem)</label>
            <input type="text" id="section" name="section" required>
            <label for="content">Permbajtja:</label>
            <textarea id="content" name="content" rows="5" required></textarea>
            <button type="submit">Ruaj rregullen</button>
        </form>
        <a href="rules.php" class="back-button">Kthehu te rregullat</a>
    </div>
</body>
</html>



            <?php
        } else {
            echo 'Nuk keni akses per te shtuar rregulla ose restriksione';
        }
    } else {
        // Handle the case where the user ID doesn't exist in the database
        echo 'User not found in the database.';
    }
} else {
    // Handle the case where the user is not logged in
    echo 'No access. Please log in.';
}
?>
