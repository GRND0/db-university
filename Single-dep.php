<?php
require_once __DIR__ . "/Database.php";
require_once __DIR__ . "/Department.php";


$id = $_GET["id"];
$sql = "SELECT * FROM `departments` WHERE `id` = $id;";
$risultato = $connessione->query($sql);

$departments = [];

if ($risultato && $risultato->num_rows > 0) {
    while ($row = $risultato->fetch_assoc()) {
        $selected_department = new Department($row["id"], $row["name"]);
        $selected_department->stampaInformazioni($row["adress"], $row["phone"], $row["email"], $row["website"], $row["head_of_dep"],);
        $departments[] = $selected_department;
    }
} elseif ($risultato) {
    echo "Dipartimento non trovato";
} else {
    echo "Errore query";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dipartimento</title>
</head>

<body>
    <?php foreach ($departments as $department) { ?>
        <h1>
            <?php echo $department->name; ?>
        </h1>
        <p>
            <?php echo $department->head_of_dep; ?>
        </p>

        <h2>
            Contatti
        </h2>

        <ul>
            <?php foreach ($department->stampaContatti() as $key => $value) { ?>
                <li>
                    <?php echo "$key : $value" ?>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>
</body>

</html>