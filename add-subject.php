<?php include "create-connection.php"; ?>

<?php
    $name = $_GET["name"];
    $prof_id = $_GET["prof_id"];
    $sql = "INSERT INTO subject (name, prof_id) VALUES ('" . $name . "', " . $prof_id . ")";
    $result = $conn->query($sql);
?>
   
<?php include "navbar.php"; ?>

    <?php 
        if ($result) {
            echo "<h1 style='color: green'>Materia aggiunta con successo!!!</h1>";
        } else {
            echo "<h1 style='color: red'>ERRORE! Impossibile aggiungere la materia</h1>";
            echo "<p>Query che ho tentato di eseguire: " . $sql . "</p>";
        }
    ?>

    <a href="lista-materie.php">Torna alla lista marterie</a>

<?php include "footer.php"; ?>
<?php include "close-connection.php"; ?>