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
$sql = "SELECT fullname, role FROM users WHERE id = $user_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fullname = $row['fullname'];
    $role = $row['role'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Ride-Along Ratings</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        /* Add your CSS styles here */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
        }

        #content {
            max-width: 800px;
            margin: 40 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
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
            resize: vertical;
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
    </style>
</head>

<body>
    <div id="content">
        <form method="POST" action="vlerso.php">
            <h2>Vler&euml;so patrullimin me kadet</h2>
            <hr>

            <!-- Officer's Name (Read-only) -->
            <div class="form-group">
                <label for="officer_name">Emri i zyrtarit q&euml; kreu patrullimin:</label>
                <input type="text" name="officer_name" id="officer_name" value="<?php echo $fullname; ?>" readonly>
            </div>

            <!-- Cadet's Name (Dropdown with E-filter) -->
            <div class="form-group">
                <label for="cadet_name">Emri i kadetit:</label>
                <select name="cadet_name" id="cadet_name">
                <?php
                $sql = "SELECT number, first_last FROM members WHERE LEFT(number, 1) = 'E'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["number"] . "'>" . $row["number"] . " | " . $row["first_last"] . "</option>";
                    }
                }
                $conn->close();
                ?>
            </select>

            </div>

            <!-- Experience Description (Textarea) -->
            <div class="form-group">
                <label for="experience">P&euml;rshkrimi me fjal&euml; i eksperienc&euml;s me kadetin:</label>
                <textarea required name="experience" id="experience" cols="30" rows="5"></textarea>
            </div>
            <label> Vler&euml;simi me poena <h5> <span style="color: red;">1 - Dob&euml;t</span>, <span style="color:indianred;">2 - Mjaftu&euml;shem</span>, <span style="color:goldenrod;">3 - Mir&euml;</span>, <span style="color: orange;">4 - Shum&euml; Mir&euml;</span>, <span style="color: green;">5 - Shk&euml;lqyeshem</span> </h5></label>
                    <hr>
            <!-- Ratings (Select Boxes) -->
            <div class="form-group">
                <label>Ndaljet (10-11), Ndjekjet (10-80), Vozitja:</label>
                <select name="behavior" class="rating-select">
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label>Kodet e komunikimit dhe etika n&euml; radio:</label>
                <select name="stops" class="rating-select">
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label>Sjellja me koleg&euml;t dhe qytetar&euml;t:</label>
                <select name="communications" class="rating-select">
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="form-group-submit">
                <input type="submit" value="Regjistro vler&euml;simin">
            </div>
        </form>
    </div>
</body>

</html>

</div>

		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>