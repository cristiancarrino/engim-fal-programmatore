<?php include "create-connection.php"; ?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engim - Lista studenti</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>    
    <?php include "navbar.php"; ?>

    <h1>Lista studenti</h1>

    <?php
        $sql = "SELECT * FROM student ORDER BY student.lastname";
        $result = $conn->query($sql);
    ?>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Cognome</th>
                <th>Nome</th>
                <th>Eta</th>
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
                        <td>" . $row["age"]. "</td>
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
</body>
</html>

<?php include "close-connection.php"; ?>