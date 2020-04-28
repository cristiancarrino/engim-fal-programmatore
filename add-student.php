<?php include "create-connection.php"; ?>

<?php
    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $age = $_GET["age"];
    $sql = "INSERT INTO student (firstname, lastname, age) VALUES ('" . $firstname . "', '" . $lastname . "', " . $age . ")";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi studente</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <?php include "navbar.php"; ?>

    <h1>Studente aggiunto con successo!!!</h1>

    <a href="lista-studenti.php">Torna alla lista studenti</a>

    <?php include "footer.php"; ?>
</body>
</html>

<?php include "close-connection.php"; ?>