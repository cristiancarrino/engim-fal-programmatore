<?php include "create-connection.php"; ?>

<?php
    $id = $_GET["id"];
    $sql = "SELECT * FROM subject WHERE subject.id = " . $id;
    $result = $conn->query($sql);
    $subject = $result->fetch_assoc();
?>
  
<?php include "navbar.php"; ?>

    <form action="save-subject.php">
        <input type="hidden" name="id" value="<?php echo $subject["id"] ?>">
        <div>
            <div>
                <label for="">Nome:</label>
            </div>
            <div>
                <input type="text" placeholder="Aggiungi nome" name="name" value="<?php echo $subject["name"] ?>">
            </div>
        </div>
        <div>
            <div>
                <label for="">Prof id:</label>
            </div>
            
            <select name="prof_id">
                <option value="">-</option>
                <?php
                    $prof = $conn->query("SELECT * FROM prof ORDER BY lastname");
                    while($row = $prof->fetch_assoc()) {
                        echo '<option value="' . $row["id"] . '"' . ($row["id"] == $subject["prof_id"] ? 'selected' : '') . '>' . $row["lastname"] . ' ' . $row["firstname"] . '</option>';
                    }
                ?>
            </select>
        </div>

        <div>
            <button type="submit">Salva</button>
        </div>
    </form>

    <a href="lista-materie.php">Torna alla lista materie</a>

    <?php include "footer.php"; ?>

<?php include "close-connection.php"; ?>