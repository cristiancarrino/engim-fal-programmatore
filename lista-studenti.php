<?php 
    include "create-connection.php";
    $title = "Lista studenti";
    include "navbar.php";
?>

    <div class="sidebar"></div>
    <div class="page-content" id="page-content">
        <h1>Lista studenti</h1>

        <?php
            $sql = "SELECT * FROM student ORDER BY student.lastname";
            $result = $conn->query($sql);
        ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cognome</th>
                    <th>Nome</th>
                    <th>Età</th>
                    <th>Modifica</th>
                    <th>Cancella</th>
                </tr>
            </thead>
            <tbody>            
                <?php
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["id"]. "</td>
                            <td>" . $row["lastname"]. "</td>
                            <td>" . $row["firstname"]. "</td>
                            <td>" . $row["age"]. " anni </td>
                            <td><a href='edit-student.php?id=" . $row["id"] . "'>Modifica</a></td>
                            <td><a href='delete-student.php?id=" . $row["id"] . "'>Cancella</a></td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>

        <div class="num-rows">Numero di risultati: <span><?php echo $result->num_rows; ?></span></div>

        <hr>

        <h3>Aggiungi uno studente</h3>
        <form action="add-student.php">
            <div>
                <div>
                    <label for="">Nome:</label>
                </div>
                <div>
                    <input type="text" placeholder="Aggiungi nome" name="firstname">
                </div>
            </div>
            <div>
                <div>
                    <label for="">Cognome:</label>
                </div>
                <div>
                    <input type="text" placeholder="Aggiungi cognome" name="lastname">
                </div>
            </div>
            <div>
                <div>
                    <label for="">Età:</label>
                </div>
                <div>
                    <input type="number" placeholder="Aggiungi età" name="age">
                </div>
            </div>

            <div>
                <button type="submit">Invia</button>
            </div>
        </form>
    </div>

    <?php include "footer.php"; ?>

<?php include "close-connection.php"; ?>