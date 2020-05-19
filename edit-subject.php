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
                <option value="1" <?php echo $subject["prof_id"] == 1 ? 'selected' : '' ?>>Maria Grazia Marinò</option>
                <option value="2" <?php echo $subject["prof_id"] == 2 ? 'selected' : '' ?>>Gabriele Montinaro</option>
                <option value="3" <?php echo $subject["prof_id"] == 3 ? 'selected' : '' ?>>Gloria Liuni</option>
                <option value="4" <?php echo $subject["prof_id"] == 4 ? 'selected' : '' ?>>Cristian Carrino</option>
                <option value="5" <?php echo $subject["prof_id"] == 5 ? 'selected' : '' ?>>Dario Mennillo</option>
                <option value="6" <?php echo $subject["prof_id"] == 6 ? 'selected' : '' ?>>Daniele Gontero</option>
            </select>
        </div>

        <div>
            <button type="submit">Salva</button>
        </div>
    </form>

    <a href="lista-materie.php">Torna alla lista materie</a>

    <?php include "footer.php"; ?>

<?php include "close-connection.php"; ?>