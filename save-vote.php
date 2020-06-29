<?php include "create-connection.php"; ?>

<?php
    $id = $_GET["id"];
    $student_id = $_GET["student_id"];
    $subject_id = $_GET["subject_id"];
    $vote = $_GET["vote"];

    $sql = "UPDATE vote SET 
        vote.student_id = '".$student_id."', 
        vote.subject_id = '".$subject_id."', 
        vote.vote = ".$vote." 
        WHERE vote.id = " . $id;

    $result = $conn->query($sql);
?>

<?php include "navbar.php"; ?>

    <?php 
        if ($result) {
            echo "<h1 style='color: green'>Voto modificato con successo!!!</h1>";
        } else {
            echo "<h1 style='color: red'>ERRORE! Impossibile modificare il voto</h1>";
            echo "<p>Query che ho tentato di eseguire: " . $sql . "</p>";
        }
    ?>

    <a href="lista-voti.php">Torna alla lista voti</a>

    <?php include "footer.php"; ?>

<?php include "close-connection.php"; ?>