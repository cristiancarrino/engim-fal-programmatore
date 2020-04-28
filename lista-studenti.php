<?php include "create-connection.php"; ?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engim - Lista studenti</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <?php include "navbar.php"; ?>

    <h1>Lista studenti</h1>

    <?php
        $sql = "SELECT * FROM student"; //SELECT subject.id, subject.name, prof.firstname, prof.lastname FROM subject JOIN prof ON subject.prof_id = prof.id
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }

            echo "Numero di risultati: " . $result->num_rows;
        } else {
            echo "0 results";
        }
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