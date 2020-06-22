<?php include "create-connection.php"; ?>

<?php
    $student_id = $_GET["student_id"];
    $subject_id = $_GET["subject_id"];
    $vote = $_GET["vote"];
    $sql = "INSERT INTO vote (student_id, subject_id, vote) VALUES (" . $student_id . ", " . $subject_id . ", " . $vote . ")";
    $result = $conn->query($sql);
?>
   
<?php include "navbar.php"; ?>

    <?php 
        if ($result) {
            echo "<h1 style='color: green'>Voto aggiunto con successo!!!</h1>";
        } else {
            echo "<h1 style='color: red'>ERRORE! Impossibile aggiungere il voto</h1>";
            echo "<p>Query che ho tentato di eseguire: " . $sql . "</p>";
        }
    ?>

    <a href="lista-voti.php">Torna alla lista voti</a>

<?php include "footer.php"; ?>
<?php include "close-connection.php"; ?>