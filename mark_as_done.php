<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$badge_number = $_POST["badge_number"];
	$file = file("submissions.csv");
	$new_file = "";
	foreach ($file as $line) {
		$row = str_getcsv($line);
        if ($row[0] == $_POST['discord'] && $row[1] == $_POST['badge']) {
            $row[6] = 'done';
        }
        $newLine = implode(',', $row) . "\n";
        if ($newLine != $line) {
            $modified = true;
            $output .= "<tr style='background-color: red;'>";
        } else {
            $output .= "<tr>";
        }
        foreach ($row as $cell) {
            $output .= "<td>" . htmlspecialchars($cell) . "</td>";
        }
        $output .= "</tr>";
    }

}