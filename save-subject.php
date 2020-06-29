<?php include "create-connection.php"; ?>

<?php
    $id = $_GET["id"];
    $name = $_GET["name"];
    $prof_id = $_GET["prof_id"];

    $sql = "UPDATE subject SET 
        subject.name = '".$name."', 
        subject.prof_id = ".$prof_id."
        WHERE subject.id = " . $id;

    $result = $conn->query($sql);
?>

<?php include "navbar.php"; ?>

    <?php 
        if ($result) {
            echo "<h1 style='color: green'>Materia modificata con successo!!!</h1>";
        } else {
            echo "<h1 style='color: red'>ERRORE! Impossibile modificare la materia</h1>";
            echo "<p>Query che ho tentato di eseguire: " . $sql . "</p>";
        }
    ?>

    <a href="lista-materie.php">Torna alla lista materie</a>

    <?php include "footer.php"; ?>

<?php include "close-connection.php"; ?>