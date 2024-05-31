<?php include 'header.php'; ?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<!-- Page Content  -->
<?php
include 'config.php';
$user_id = $_SESSION['id'];

// Get the full name of the user from the database
// Prepare the SQL statement
$stmt = $conn->prepare("SELECT fullname, role FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id); // "i" denotes the type of the parameter (integer)

// Execute the statement
$stmt->execute();

// Bind the result variables
$stmt->bind_result($fullname, $role);

// Fetch the results
if ($stmt->fetch()) {
    // $fullname and $role are now populated with the values from the database
    // You can use $fullname and $role as needed
} else {
    // Handle the case where no rows are returned, e.g., set default values or show an error message
    $fullname = null;
    $role = null;
}

// Close the statement
$stmt->close();

if (!($role == "user")) {
    // Initialize variables
    $selectedCadet = '';
    $reviews = [];

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the selected cadet name (e.g., "E1-19 Eden Dobra")
        $selectedCadet = $_POST["cadet_name"];

        // Extract the number portion (e.g., "E1-19")
        preg_match('/(E\d+-\d+)/', $selectedCadet, $matches);
        if (!empty($matches)) {
            $selectedCadetNumber = $matches[0];

            // Retrieve reviews for the selected cadet based on the extracted number
            $sql = "SELECT * FROM ratings WHERE cadet_name LIKE '%$selectedCadetNumber%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $reviews[] = $row;
                }
            }
        }
    }

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Ride-Along Reviews</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <style>
            /* Add your CSS styles here */
            body {
                font-family: 'Poppins', sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            #content {
                max-width: 900px;
                margin: 30 auto;
                background-color: #fff;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                padding: 20px;
            }

            h2 {
                text-align: center;
                margin-bottom: 20px;
            }

            label {
                font-weight: bold;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-group label {
                display: block;
            }

            .form-group input[type="text"],
            .form-group select,
            .form-group textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
            }

            .form-group textarea {
                height: 150px;
                resize: vertical;
                padding: 10px;
            }

            .rating-section {
                display: flex;
                align-items: center;
                margin-bottom: 20px;
            }

            .rating-title {
                flex: 1;
            }

            .rating-select {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
            }

            .form-group-submit {
                text-align: center;
            }

            input[type="submit"] {
                background-color: #4CAF50;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                margin-top: 10px;
            }

            input[type="submit"]:hover {
                background-color: #3e8e41;
            }

            /* Table Styles */
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            th,
            td {
                border: 1px solid #ccc;
                padding: 10px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            .no-reviews {
                color: red;
                text-align: center;
            }

            .officer-name {
                text-align: center;
                font-weight: bold;
            }


            td {
                max-width: 260px;
                /* Adjust the maximum width as needed */
                word-wrap: break-word;
                white-space: normal;
            }

            .experience-description {
                padding: 10px;
                /* Add padding for better readability */
                border: 1px solid #ccc;
                /* Add a border for visual separation */
            }
        </style>
    </head>

    <body>
        <div id="content">
            <h2>K&euml;rko vler&euml;simet p&euml;r performanc&euml;n e pun&euml;tor&euml;ve</h2>
            <form method="POST" action="">
                <!-- Cadet's Name (Dropdown) -->
                <div class="form-group">
                    <label for="cadet_name">Zgjidh kadetin:</label>
                    <select name="cadet_name" id="cadet_name">
                        <?php
                        $sql = "SELECT number, first_last FROM members WHERE LEFT(number, 1) = 'E'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $cadetName = $row["number"] . " " . $row["first_last"];
                                $selected = ($cadetName == $selectedCadet) ? "selected" : "";
                                echo "<option value='" . $cadetName . "' $selected>" . $cadetName . "</option>";
                            }
                        }
                        ?>
                    </select>
                    <input type="submit" value="K&euml;rko">
                </div>
            </form>

            <!-- Display Reviews -->
            <?php if (!empty($reviews)) : ?>
                <h3>Kadeti <span style="color: red;"><?php echo $selectedCadet; ?></span> &euml;sht&euml; vler&euml;suar gjithsejt <span style="color: blue;"><?php echo count($reviews); ?></span> her&euml;.</p>
                </h3>
                <table>
                    <tr>
                        <th>Data dhe ora</th>
                        <th>Emri i officerit</th> <!-- Added Officer Name column -->
                        <th>Ndaljet, Ndjekjet dhe Vozitja</th>
                        <th>Komunikimet dhe etika n&euml; radio</th>
                        <th>Sjellja me njer&euml; dhe koleg&euml;</th>
                        <th>Eksperienca me kadetin</th>
                    </tr>
                    <?php foreach ($reviews as $review) : ?>
                        <tr>

                            <td><?php echo $review["submission_time"]; ?></td>
                            <td><?php echo $review["officer_name"]; ?></td> <!-- Added Officer Name column -->
                            <td><?php echo $review["behavior"]; ?></td>
                            <td><?php echo $review["stops"]; ?></td>
                            <td><?php echo $review["communications"]; ?></td>
                            <td>
                                <div class="experience-description">
                                    <?php echo $review["experience"]; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>


        </div>
    </body>

    </html>
<?php else : ?>
    <p class="no-reviews">Nuk ka asnj&euml; vler&euml;sim p&euml;r pun&euml;tor&euml;.</p>
<?php endif; ?>
</div>

</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
<?php } else {
    echo "no access";
}
