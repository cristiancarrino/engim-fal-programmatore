<?php include "create-connection.php"; ?>

<?php
    $id = $_GET["id"];
    $sql = "DELETE FROM prof WHERE prof.id = " . $id;
    $result = $conn->query($sql);
?>

<?php include "navbar.php"; ?>

    <?php 
        if ($result) {
            echo "<h1 style='color: green'>Professore cancellato con successo!!!</h1>";
        } else {
            echo "<h1 style='color: red'>ERRORE! Impossibile cancellare il professore</h1>";
            echo "<p>Query che ho tentato di eseguire: " . $sql . "</p>";
        }
    ?>

    <a href="lista-prof.php">Torna alla lista professori</a>

    <?php include "footer.php"; ?>

<?php include "close-connection.php"; ?>