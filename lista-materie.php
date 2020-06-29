<?php include "create-connection.php"; ?>

<?php $title = "Lista materie"; ?> 
<?php include "navbar.php"; ?>

    <h1>Lista materie</h1>

    <?php
        $sql = "SELECT subject.*, prof.firstname, prof.lastname FROM subject JOIN prof ON subject.prof_id = prof.id ORDER BY subject.name";
        $result = $conn->query($sql);
    ?>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome materia</th>
                <th>Professore/ssa</th>
                <th>Modifica</th>
                <th>Cancella</th>
            </tr>
        </thead>
        <tbody>            
            <?php
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["name"]. "</td>
                        <td>" . $row["lastname"]. " " . $row["firstname"]. "</td>
                        <td><a href='edit-subject.php?id=" . $row["id"] . "'>Modifica</a></td>
                        <td><a href='delete-subject.php?id=" . $row["id"] . "'>Cancella</a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>

    <div class="num-rows">Numero di risultati: <span><?php echo $result->num_rows; ?></span></div>

    <hr>

    <h3>Aggiungi una materia</h3>
    <form action="add-subject.php">
        <div>
            <div>
                <label for="">Nome:</label>
            </div>
            <div>
                <input type="text" placeholder="Aggiungi nome" name="name">
            </div>
        </div>
        <div>
            <div>
                <label for="">Prof id:</label>
            </div>
            <div>
                <select name="prof_id">
                    <option>-</option>
                    <?php
                        $prof = $conn->query("SELECT * FROM prof ORDER BY lastname");
                        while($row = $prof->fetch_assoc()) {
                            echo '<option value="' . $row["id"] . '">' . $row["lastname"] . ' ' . $row["firstname"] . '</option>';
                        }
                    ?>
                </select>
            </div>
        </div>

        <div>
            <button type="submit">Invia</button>
        </div>
    </form>

    <?php include "footer.php"; ?>

<?php include "close-connection.php"; ?>