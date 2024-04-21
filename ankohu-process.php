<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
		.success-message {
			display: none;
			background-color: #d1e7dd;
			border-color: #badbcc;
			color: #0c5460;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid transparent;
			border-radius: 5px;
		}
	</style>
</head>
<body>
    
</body>
</html>
<?php

// Define variables and initialize with empty values
$discord = $badge_number = $date = $case_explanation = $police_mistake = $evidence = "";

// Function to validate date
function isValidDate($date) {
    return (bool)strtotime($date);
}

// Function to validate badge number
function isValidBadgeNumber($badge_number) {
    return preg_match("/^[A-E][1-2]-[0-9]{2}$/", $badge_number);
}

// Function to validate discord
function isValidDiscord($discord) {
    return preg_match("/^.+#\d{4}$/", $discord);
}

// Function to sanitize input data
function sanitizeData($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Process form data when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate discord
    if (empty($_POST["discord"]) || !isValidDiscord($_POST["discord"])) {
        die("Discordi jo valid");
    } else {
        $discord = sanitizeData($_POST["discord"]);
    }

    // Validate badge number
    if (empty($_POST["badge_number"])) {
        die("Kerkohet patjeter nje numer valid i begjit");
    } else {
        $badge_number = $_POST["badge_number"];
        if (!isValidBadgeNumber($badge_number)) {
            die("Ankesa nuk u dergua! Numri i begjit jo valid!");
        } else {
            $badge_number = sanitizeData($badge_number);
        }
    }
    

    // Validate date
    if (empty($_POST["date"]) || !isValidDate($_POST["date"])) {
        die("Data jo valide");
    } else {
        $date = sanitizeData($_POST["date"]);
    }

    // Validate case explanation
    if (empty($_POST["case_explanation"])) {
        die("Pershkrimi i rastit i pavlefshem");
    } else {
        $case_explanation = sanitizeData($_POST["case_explanation"]);
    }

    // Validate police mistake
    if (empty($_POST["police_mistake"])) {
        die("Gabimi i policit i pavlefshem");
    } else {
        $police_mistake = sanitizeData($_POST["police_mistake"]);
    }

    // // Validate evidence
    if (empty($_POST["evidence"])) {
        die("Kerkohet patjeter nje evidence te pakten");
    } else {
        $evidence = sanitizeData($_POST["evidence"]);
    }

    // Open the file in append mode
    $file = fopen("submissions.csv", "a");

    // Add the form data as a new row in the CSV file
    fputcsv($file, array($discord, $badge_number, $date, $case_explanation, $police_mistake, $evidence));

    // Close the file
    fclose($file);

    // Redirect to the submissions page
    
    header("Location: ankohu.php?success=true");
    exit;
}
