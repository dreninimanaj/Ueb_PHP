<?php
include 'config.php';

try {
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    error_log("Search term: " . $search);

    $sql = "SELECT * FROM members WHERE first_last LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        throw new Exception("Database Query Failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        usort($rows, function ($a, $b) {
            return strcmp($a['first_last'], $b['first_last']);
        });

        echo "<table class='table table-bordered'>";
        echo "<thead class='thead-light'><tr><th>ID</th><th>Number</th><th>Name</th><th>Position</th><th>Full-time</th><th>Part-time</th><th>Self-chose</th><th>Actions</th></tr></thead>";
        echo "<tbody>";

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
            echo "<button type='button' class='btn btn-primary btn-sm edit-btn' data-id='" . htmlspecialchars($row['id']) . "' data-name='" . htmlspecialchars($row['first_last']) . "' data-number='" . htmlspecialchars($row['number']) . "'>Edit</button> ";
            echo "<button type='button' class='btn btn-danger btn-sm delete-btn' data-id='" . htmlspecialchars($row['id']) . "'>Delete</button>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p class='alert alert-warning'>No results found.</p>";
    }
} catch (Exception $e) {
    error_log("Error in fetch_table.php: " . $e->getMessage());
    echo "An error occurred while fetching data.";
}
