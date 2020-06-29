<?php include "create-connection.php"; ?>

<?php
    $id = $_GET["id"];
    $sql = "DELETE FROM vote WHERE vote.id = " . $id;
    $result = $conn->query($sql);
?>

<?php include "navbar.php"; ?>

    <?php 
        if ($result) {
            echo "<h1 style='color: green'>Voto cancellato con successo!!!</h1>";
        } else {
            echo "<h1 style='color: red'>ERRORE! Impossibile cancellare il voto</h1>";
            echo "<p>Query che ho tentato di eseguire: " . $sql . "</p>";
        }
    ?>

    <a href="lista-voti.php">Torna alla lista voti</a>

    <?php include "footer.php"; ?>

<?php include "close-connection.php"; ?>