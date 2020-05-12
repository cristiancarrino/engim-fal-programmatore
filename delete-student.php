<?php include "create-connection.php"; ?>

<?php
    $id = $_GET["id"];
    $sql = "DELETE FROM student WHERE student.id = " . $id;
    $result = $conn->query($sql);
?>

<?php include "navbar.php"; ?>

    <?php 
        if ($result) {
            echo "<h1 style='color: green'>Studente cancellato con successo!!!</h1>";
        } else {
            echo "<h1 style='color: red'>ERRORE! Impossibile cancellare lo studente</h1>";
            echo "<p>Query che ho tentato di eseguire: " . $sql . "</p>";
        }
    ?>

    <a href="lista-studenti.php">Torna alla lista studenti</a>

    <?php include "footer.php"; ?>
</body>
</html>

<?php include "close-connection.php"; ?>