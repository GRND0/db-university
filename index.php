<?php
require_once __DIR__ . "/Database.php";
require_once __DIR__ . "/Department.php";



$sql = "SELECT `id`, `name` FROM `departments`;";
$risultato = $connessione->query($sql);



$departments = [];


if ($risultato && $risultato->num_rows > 0) {
    while ($row = $risultato->fetch_assoc()) {
        $selected_department = new Department($row["id"], $row["name"]);
        $departments[] = $selected_department;
    }
} elseif ($risultato) {
} else {
    echo "Errore query";
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universit√†</title>
</head>

<body>
    <h1>Lista Dipartimenti Ateneo</h1>
    <?php foreach ($departments as $department) { ?>
        <div>
            <h2>
                <?php echo $department->name ?>
            </h2>
            <a href="Single-dep.php?id=<?php echo $department -> id; ?>">Informazioni dipartimento</a>
        </div>
    <?php } ?>
</body>

</html>