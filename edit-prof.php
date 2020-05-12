<?php include "create-connection.php"; ?>

<?php
    $id = $_GET["id"];
    $sql = "SELECT * FROM prof WHERE prof.id = " . $id;
    $result = $conn->query($sql);
    $prof = $result->fetch_assoc();
?>
  
<?php include "navbar.php"; ?>

    <form action="save-prof.php">
        <input type="hidden" name="id" value="<?php echo $prof["id"] ?>">
        <div>
            <div>
                <label for="">Nome:</label>
            </div>
            <div>
                <input type="text" placeholder="Aggiungi nome" name="firstname" value="<?php echo $prof["firstname"] ?>">
            </div>
        </div>
        <div>
            <div>
                <label for="">Cognome:</label>
            </div>
            <div>
                <input type="text" placeholder="Aggiungi cognome" name="lastname" value="<?php echo $prof["lastname"] ?>">
            </div>
        </div>
        <div>
            <div>
                <label for="">Età:</label>
            </div>
            <div>
                <input type="number" placeholder="Aggiungi età" name="age" value="<?php echo $prof["age"] ?>">
            </div>
        </div>

        <div>
            <button type="submit">Salva</button>
        </div>
    </form>

    <a href="lista-prof.php">Torna alla lista prof</a>

    <?php include "footer.php"; ?>
</body>
</html>

<?php include "close-connection.php"; ?>