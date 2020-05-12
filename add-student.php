<?php include "create-connection.php"; ?>

<?php
    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $age = $_GET["age"];
    $sql = "INSERT INTO student (firstname, lastname, age) VALUES ('" . $firstname . "', '" . $lastname . "', " . $age . ")";
    $result = $conn->query($sql);
?>
   
<?php include "navbar.php"; ?>

    <?php 
        if ($result) {
            echo "<h1 style='color: green'>Studente aggiunto con successo!!!</h1>";
        } else {
            echo "<h1 style='color: red'>ERRORE! Impossibile aggiungere lo studente</h1>";
            echo "<p>Query che ho tentato di eseguire: " . $sql . "</p>";
        }
    ?>

    <a href="lista-studenti.php">Torna alla lista studenti</a>

    <?php include "footer.php"; ?>
</body>
</html>

<?php include "close-connection.php"; ?>