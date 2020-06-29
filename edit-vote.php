<?php include "create-connection.php"; ?>

<?php
    $id = $_GET["id"];
    $sql = "SELECT * FROM vote WHERE vote.id = " . $id;
    $result = $conn->query($sql);
    $vote = $result->fetch_assoc();
?>

<?php include "navbar.php"; ?>

    <form action="save-vote.php">
        <input type="hidden" name="id" value="<?php echo $vote["id"] ?>">
        <div>
            <div>
                <label for="">Studente:</label>
            </div>
            <div>
                <select name="student_id">
                    <option>-</option>
                    <?php
                        $students = $conn->query("SELECT * FROM student ORDER BY lastname");
                        while($row = $students->fetch_assoc()) {
                            echo '<option value="' . $row["id"] . '"' . ($row["id"] == $vote["student_id"] ? 'selected' : '') . '>' . $row["lastname"] . ' ' . $row["firstname"] . '</option>';
                        }
                    ?>
                </select>
            </div>
        </div>
        <div>
            <div>
                <label for="">Materia:</label>
            </div>
            <div>
                <select name="subject_id">
                    <option>-</option>
                    <?php
                        $subjects = $conn->query("SELECT * FROM subject ORDER BY name");
                        while($row = $subjects->fetch_assoc()) {
                            echo '<option value="' . $row["id"] . '"' . ($row["id"] == $vote["subject_id"] ? 'selected' : '') . '>' . $row["name"] . '</option>';
                        }
                    ?>
                </select>
            </div>
        </div>
        <div>
            <div>
                <label for="">Voto:</label>
            </div>
            <div>
                <input name="vote" type="number" placeholder="Voto" value="<?php echo $vote["vote"] ?>">
            </div>
        </div>

        <div>
            <button type="submit">Salva</button>
        </div>
    </form>

    <a href="lista-voti.php">Torna alla lista voti</a>

    <?php include "footer.php"; ?>

<?php include "close-connection.php"; ?>