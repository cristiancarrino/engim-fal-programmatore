<?php include "create-connection.php"; ?>

<?php
    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $age = $_GET["age"];
    $sql = "INSERT INTO prof (firstname, lastname, age) VALUES ('" . $firstname . "', '" . $lastname . "', " . $age . ")";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi prof</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <?php include "navbar.php"; ?>

    <?php 
        if ($result) {
            echo "<h1 style='color: green'>Professore aggiunto con successo!!!</h1>";
        } else {
            echo "<h1 style='color: red'>ERRORE! Impossibile aggiungere il professore</h1>";
            echo "<p>Query che ho tentato di eseguire: " . $sql . "</p>";
        }
    ?>

    <a href="lista-prof.php">Torna alla lista professori</a>

    <?php include "footer.php"; ?>
</body>
</html>

<?php include "close-connection.php"; ?>