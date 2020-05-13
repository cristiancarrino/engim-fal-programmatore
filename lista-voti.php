<?php include "create-connection.php"; ?>
<?php $title = "Lista voti"; ?> 
<?php include "navbar.php"; ?>

    <h1>Lista voti</h1>

    <?php
        $sql = "
            SELECT
                student.lastname,
                student.firstname,
                vote.id,
                subject.name,
                vote.vote
            FROM student 
            LEFT JOIN vote ON 
                student.id = vote.student_id
            LEFT JOIN subject ON
                vote.subject_id = subject.id
            ORDER BY
                student.lastname ASC,
                vote.vote DESC
        ";
        $result = $conn->query($sql);
    ?>

    <table class="table">
        <thead>
            <tr>
                <th>Cognome studente</th>
                <th>Nome studente</th>
                <th>Id</th>
                <th>Nome materia</th>
                <th>Voto</th>
                <th>Modifica</th>
                <th>Cancella</th>
            </tr>
        </thead>
        <tbody>            
            <?php
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["lastname"]. "</td>
                        <td>" . $row["firstname"]. "</td>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["name"]. "</td>
                        <td>" . $row["vote"]. "</td>
                        <td><a href='edit-student.php?id=" . $row["id"] . "'>Modifica</a></td>
                        <td><a href='delete-student.php?id=" . $row["id"] . "'>Cancella</a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>

    <?php
        echo "<div>Numero di risultati: " . $result->num_rows . "</div>";
    ?>

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

    <?php include "footer.php"; ?>

<?php include "close-connection.php"; ?>