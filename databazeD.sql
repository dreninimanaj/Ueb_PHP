<?php
include 'config.php';

try {
    // Create users table
    $sql_create_users = "CREATE TABLE IF NOT EXISTS users (
        id INT(11) NOT NULL AUTO_INCREMENT,
        fullname VARCHAR(255) NOT NULL,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL,
        role ENUM('user','editor','owner') NOT NULL,
        password_changed TINYINT(1) NOT NULL DEFAULT 0,
        PRIMARY KEY (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
    $pdo->exec($sql_create_users);
    echo "Users table created successfully.<br>";

    // Insert users data
    $sql_insert_users = "INSERT INTO users (id, fullname, username, password, role, password_changed) VALUES
        (29, 'A1-01 Arjan Krasniqi', 'arjan.krasniqi', '1', 'owner', 1),
        (33, 'C1-41 Dafina Gashi', 'dafina.gashi', 'Canon2018@/', 'user', 1),
        (39, 'A1-02 Blerim Morina', 'blerim.morina', 'erisbaba02', 'editor', 1),
        (40, 'A1-03 Elira Hoxha', 'elira.hoxha', 'elkos123', 'editor', 1),
        (46, 'D2-86 Agron Berisha', 'agron.berisha', 'genti1234', 'user', 1),
        (47, 'A1-04 Luan Ahmeti', 'luan.ahmetii', 'altinrexhepi02', 'editor', 1),
        (58, 'E1-27 Besa Kelmendi', 'besa.kelmendi', 'aaltin3425', 'user', 1),
        (61, 'C1-59 Endrit Shala', 'endrit.shala', 'oka123', 'editor', 1),
        (67, 'E', 'e', 'e', 'user', 1),
        (74, 'D1-76 Flutura Açka', 'flutura.açka', 'shala.2007', 'user', 1),
        (86, 'C1-26 Petrit Selimi', 'petrit.selimi', 'Trillin.Shepherd', 'user', 1),
        (87, 'TEMP-5 Hana Marku', 'hana.marku', '2023qaushapalluqi', 'user', 0),
        (88, 'B1-32 Shpend Kastrati', 'shpend.kastrati', '2023bobi', 'editor', 0),
        (90, 'D1-12 Arta Bajrami', 'arta.bajrami', 'Gerald2007', 'user', 1),
        (91, 'D1-93 Erza Mustafa', 'erza.mustafa', 'Envigervi1', 'user', 1),
        (93, 'B1-05 Xhenet Limani', 'xhenet.limani', '2020genti2020genti', 'editor', 1),
        (95, 'D1-51 Valon Murati', 'valon.murati', '2023k2smokeyyy1', 'user', 1),
        (96, 'D1-94 Besnik Smajli', 'besnik.smajli', 'Albania91', 'user', 1),
        (97, 'D1-62 Kushtrim Hoxha', 'kushtrim.hoxha', '2023LupixX', 'user', 1),
        (102, 'E1-78 Arianit Koci', 'arianit.koci', 'gertiotr', 'user', 1),
        (103, 'E1-82 Liridon Leci', 'liridon.leci', 'Danezzz', 'user', 1),
        (104, 'E1-71 Elvana Gjata', 'elvana.gjata', 'Almirii1', 'user', 1),
        (105, 'D1-69 Burim Haliti', 'burim.haliti', 'Eljus1234.', 'user', 1),
        (106, 'E1-97 Ylber Osmani', 'ylber.osmani', 'henri2010', 'user', 1),
        (107, 'E1-58 Arta Dobroshi', 'arta.dobroshi', '2023fuku', 'user', 0),
        (108, 'E1-85 Lorina Kambona', 'lorina.kambona', 'luckyking123', 'user', 1),
        (109, 'E1-66 Endrit Mërtiri', 'endrit.mërtiri', '2023rynx', 'user', 0),
        (110, 'E1-46 Diellza Kolgeci', 'diellza.kolgeci', '2023qajqeqonveqferrka', 'user', 0),
        (111, 'E1-68 Leotrim Gashi', 'leotrim.gashi', 'luli321', 'user', 1),
        (112, 'E1-22 Lirdon Hamza', 'liridon.hamza', '2023zeqopilafi', 'user', 0),
        (113, 'E1-84 Djellza Jasiqi', 'djellza.jasiqi', 'b', 'user', 1),
        (114, 'E1-92 Lura Gashi', 'lura.gashi', '2', 'user', 1)";
    $pdo->exec($sql_insert_users);
    echo "Users inserted successfully.<br>";

    // Create members table
    $sql_create_members = "CREATE TABLE IF NOT EXISTS members (
        id INT NOT NULL AUTO_INCREMENT,
        number VARCHAR(255) COLLATE utf8mb4_general_ci NOT NULL,
        first_last VARCHAR(100)COLLATE utf8mb4_general_ci NOT NULL,
        grade VARCHAR(100) COLLATE utf8mb4_general_ci NOT NULL,
        checkbox1 TINYINT(1) NOT NULL DEFAULT '0',
        checkbox2 TINYINT(1) NOT NULL DEFAULT '0',
        checkbox3 TINYINT(1) NOT NULL DEFAULT '0',
        komenti VARCHAR(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
        registered DATE DEFAULT NULL,
        days_since_registration INT DEFAULT NULL,
        steam_username VARCHAR(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
        discord VARCHAR(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
        PRIMARY KEY (id),
        UNIQUE KEY number (number)
    ) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
    $pdo->exec($sql_create_members);
    echo "Members table created successfully.<br>";

    // Insert members data
    $sql_insert_members = "INSERT INTO members (id, number, first_last, grade, checkbox1, checkbox2, checkbox3, komenti, registered, days_since_registration, steam_username, discord) VALUES
        (81, 'A1-01', 'Arjan Krasniqi', 'Ceo', 0, 0, 0, '', NULL, 0, '', ''),
        (86, 'C1-41', 'Dafina Gashi', 'Team leader', 0, 0, 0, '', NULL, 0, '', ''),
        (92, 'A1-02', 'Blerim Morina', 'Team leader', 0, 0, 0, '', NULL, 0, '', ''),
        (93, 'A1-04', 'Elira Hoxha', 'Secretary of the sales', 0, 0, 0, '', NULL, 0, '', ''),
        (99, 'D2-86', 'Agron Berisha', 'Check out assistant', 0, 0, 0, '', NULL, 0, '', ''),
        (100, 'A1-03', 'Luan Ahmeti', 'Team leader sales', 1, 0, 0, '', NULL, 0, '', ''),
        (114, 'C1-59', 'Besa Kelmendi', 'Secretary of the sales', 0, 0, 0, '', NULL, 0, '', ''),
        (128, 'D1-76', 'Endrit Shala', 'Sales consultant', 0, 0, 0, '', NULL, 0, '', ''),
        (140, 'C1-26', 'Flutura Açka', 'Warehouse assistant', 0, 0, 0, '', NULL, 0, '', ''),
        (141, 'A1-05', 'Petrit Selimi', 'Team leader', 0, 0, 0, '', NULL, 0, '', ''),
        (143, 'B1-32', 'Hana Marku', 'Salesperson', 0, 0, 0, '', NULL, 0, '', ''),
        (145, 'D1-12', 'Shpend Kastrati', 'Sales consultant', 1, 1, 0, '', NULL, 0, '', ''),
        (146, 'C1-93', 'Arta Bajrami', 'Warehouse assistant', 1, 0, 0, '', NULL, 0, '', ''),
        (149, 'B1-05', 'Erza Mustafa', 'Salesperson', 0, 0, 0, '', NULL, 0, '', ''),
        (151, 'D1-51', 'Xhenet Nimani', 'Salesperson', 0, 0, 0, '', NULL, 0, '', ''),
        (152, 'D1-94', 'Valon Murati', 'Warehouse assistant', 0, 0, 0, '', NULL, 0, '', ''),
        (158, 'E1-78', 'Kushtrim Hoxha', 'Warehouse assistant', 0, 0, 0, '', NULL, 0, '', ''),
        (159, 'E1-82', 'Arjanit Koci', 'Warehouse assistant', 0, 0, 0, '', NULL, 0, '', ''),
        (160, 'E1-71', 'Liridon Leci', 'Warehouse assistant', 0, 0, 0, '', NULL, 0, '', ''),
        (161, 'D1-69', 'Elvana Gjata', 'Team leader', 0, 0, 0, '', NULL, 0, '', ''),
        (162, 'E1-97', 'Burim Haliti', 'Warehouse assistant', 0, 0, 0, '', NULL, 0, '', ''),
        (163, 'E1-58', 'Ylber Osmani', 'Warehouse assistant', 0, 0, 0, '', NULL, 0, '', ''),
        (164, 'E1-85', 'Arta Dobroshi', 'Warehouse assistant', 0, 0, 0, '', NULL, 0, '', ''),
        (165, 'E1-66', 'Lorina Kambona', 'Warehouse assistant', 0, 0, 0, '', NULL, 0, '', ''),
        (166, 'E1-46', 'Diellza Kolgeci', 'Warehouse assistant', 0, 0, 0, '', NULL, 0, '', ''),
        (167, 'E1-68', 'Leotrim Gashi', 'Warehouse assistant', 0, 0, 0, '', NULL, 0, '', ''),
        (168, 'E1-22', 'Liridon Hamza', 'Team leader', 0, 0, 0, '', NULL, 0, '', ''),
        (169, 'E1-84', 'Djellza Jasiqi', 'Team leader', 0, 0, 0, '', NULL, 0, 'djellza', 'emri'),
        (170, 'E1-92', 'Lura Gashi', 'Kadet', 0, 0, 0, '', NULL, 0, 'feriz', 'feriz')";
    $pdo->exec($sql_insert_members);
    echo "Members inserted successfully.<br>";


// SQL to create table `verejtje`
$sql_verejtje = "CREATE TABLE `verejtje` (
  `id` int(11) NOT NULL,
  `numri_begjit` text NOT NULL,
  `arsyeja` text NOT NULL,
  `nenshkruar_nga` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

if ($conn->query($sql_verejtje) === TRUE) {
    echo "Table `verejtje` created successfully";
} else {
    echo "Error creating table `verejtje`: " . $conn->error;
}

// SQL to create table `submissions`
$sql_submissions = "CREATE TABLE `submissions` (
  `id` int(6) UNSIGNED NOT NULL,
  `numri_begjit` varchar(255) NOT NULL,
  `data_daljes` date NOT NULL,
  `arsyeja` varchar(200) NOT NULL,
  `data_rikthimit` date NOT NULL,
  `aprovuar_nga` varchar(50) NOT NULL,
  `submission_date` date DEFAULT NULL,
  `madeby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

if ($conn->query($sql_submissions) === TRUE) {
    echo "Table `submissions` created successfully";
} else {
    echo "Error creating table `submissions`: " . $conn->error;
}

// SQL to create table `ratings`
$sql_ratings = "CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `officer_name` varchar(255) NOT NULL,
  `cadet_name` varchar(255) NOT NULL,
  `experience` text NOT NULL,
  `behavior` int(11) NOT NULL,
  `stops` int(11) NOT NULL,
  `communications` int(11) NOT NULL,
  `submission_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci";

if ($conn->query($sql_ratings) === TRUE) {
    echo "Table `ratings` created successfully";
} else {
    echo "Error creating table `ratings`: " . $conn->error;
}

// Alter table `members`
$sql_alter_members = "ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `number` (`number`)";

if ($conn->query($sql_alter_members) === TRUE) {
    echo "Table `members` altered successfully";
} else {
    echo "Error altering table `members`: " . $conn->error;
}

// Alter table `ratings`
$sql_alter_ratings = "ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`)";

if ($conn->query($sql_alter_ratings) === TRUE) {
    echo "Table `ratings` altered successfully";
} else {
    echo "Error altering table `ratings`: " . $conn->error;
}

// Alter table `submissions`
$sql_alter_submissions = "ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`)";

if ($conn->query($sql_alter_submissions) === TRUE) {
    echo "Table `submissions` altered successfully";
} else {
    echo "Error altering table `submissions`: " . $conn->error;
}

$sql_rowsx = "CREATE TABLE `rowsx` (
  `id` int(11) NOT NULL,
  `row` varchar(255) DEFAULT NULL,
  `done` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

if ($conn->query($sql_rowsx) === TRUE) {
    echo "Table `rowsx` created successfully";
} else {
    echo "Error creating table `rowsx`: " . $conn->error;
}
// Close connection
$conn->close();

?>

} catch (PDOException $e) {
    // If an error occurs, display error message
    echo "Error: " . $e->getMessage() . "<br>";
}

// Close the connection
$pdo = null;
?>

