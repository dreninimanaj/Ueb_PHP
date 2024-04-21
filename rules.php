<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSPD GTA Roleplay Server Rules</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <style>
       body {
    font-family: 'Poppins', Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  
}

.container {
    max-width: 600px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    text-align: left;
}

h1 {
    text-align: center;
}

h2 {
    font-size: 1.2em;
    margin-top: 15px;
    margin-bottom: 5px;
}

.rule-content {
    margin-bottom: 10px;
    font-size: 0.9em;
    line-height: 1.4;
    color: #333; /* Dark gray text color for readability */
    white-space: pre-line; /* Preserve new lines for numbers and symbols */
}

a.edit-button,
a.back-button {
    display: inline-block;
    background-color: #007BFF;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    margin: 10px;
}

a.edit-button:hover,
a.back-button:hover {
    background-color: #0056b3;
}


    </style>
</head>
<body>
<div class="container">
   <center> <img src="logo.jpg" alt="" width="100px" height="100px"></center>
        <h1>Rregullat dhe restriksionet</h1>

        <?php
        // Database connection settings
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "roaster";

        // Create a database connection
        $conn = new mysqli($host, $username, $password, $database);

        // Check if the connection is successful
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch and display rules from the database
        $sql = "SELECT * FROM rules";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Use regular expressions to format sections and make them bold
                $content = preg_replace('/(\d+\.\d+|3.5 Rule)/', '<strong>$1</strong>', $row['content']);

                // Use <ul> and <li> to structure the content with list items
                echo "<h2>{$row['section']}</h2>";
                echo "<ul class='rule-list'>";
                echo "<li class='rule-item'>" . nl2br($content) . "</li>";
                echo "</ul>";
            }
        } else {
            echo "<p>No rules found.</p>";
        }

        // Close the database connection
        $conn->close();
        ?>

        <!-- Add an "Edit" button that links to edit.php -->
        <a href="edito.php" class="edit-button">Ndrysho rregullat</a>
    </div>
</body>
</html>




