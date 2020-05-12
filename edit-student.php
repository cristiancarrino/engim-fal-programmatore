<?php include "create-connection.php"; ?>

<?php
    $id = $_GET["id"];
    $sql = "SELECT * FROM student WHERE student.id = " . $id;
    $result = $conn->query($sql);
    $student = $result->fetch_assoc();
?>

<?php include "navbar.php"; ?>

    <form action="save-student.php">
        <input type="hidden" name="id" value="<?php echo $student["id"] ?>">
        <div>
            <div>
                <label for="">Nome:</label>
            </div>
            <div>
                <input type="text" placeholder="Aggiungi nome" name="firstname" value="<?php echo $student["firstname"] ?>">
            </div>
        </div>
        <div>
            <div>
                <label for="">Cognome:</label>
            </div>
            <div>
                <input type="text" placeholder="Aggiungi cognome" name="lastname" value="<?php echo $student["lastname"] ?>">
            </div>
        </div>
        <div>
            <div>
                <label for="">Età:</label>
            </div>
            <div>
                <input type="number" placeholder="Aggiungi età" name="age" value="<?php echo $student["age"] ?>">
            </div>
        </div>

        <div>
            <button type="submit">Salva</button>
        </div>
    </form>

    <a href="lista-studenti.php">Torna alla lista studenti</a>

    <?php include "footer.php"; ?>
</body>
</html>

<?php include "close-connection.php"; ?>