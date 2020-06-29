<?php include "create-connection.php"; ?>

<?php
    $id = $_GET["id"];
    $sql = "DELETE FROM subject WHERE subject.id = " . $id;
    $result = $conn->query($sql);
?>

<?php include "navbar.php"; ?>

    <?php 
        if ($result) {
            echo "<h1 style='color: green'>Materia cancellata con successo!!!</h1>";
        } else {
            echo "<h1 style='color: red'>ERRORE! Impossibile cancellare la materia</h1>";
            echo "<p>Query che ho tentato di eseguire: " . $sql . "</p>";
        }
    ?>

    <a href="lista-materie.php">Torna alla lista materie</a>

    <?php include "footer.php"; ?>

<?php include "close-connection.php"; ?>