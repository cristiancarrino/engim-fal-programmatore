<?php include "create-connection.php"; ?>

<?php
    $id = $_GET["id"];
    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $age = $_GET["age"];

    $sql = "UPDATE student SET 
        student.firstname = '".$firstname."', 
        student.lastname = '".$lastname."', 
        student.age = ".$age." 
        WHERE student.id = " . $id;

    $result = $conn->query($sql);
?>

<?php include "navbar.php"; ?>

    <?php 
        if ($result) {
            echo "<h1 style='color: green'>Studente modificato con successo!!!</h1>";
        } else {
            echo "<h1 style='color: red'>ERRORE! Impossibile modificare lo studente</h1>";
            echo "<p>Query che ho tentato di eseguire: " . $sql . "</p>";
        }
    ?>

    <a href="lista-studenti.php">Torna alla lista studenti</a>

    <?php include "footer.php"; ?>

<?php include "close-connection.php"; ?>