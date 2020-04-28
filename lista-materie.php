<?php include "create-connection.php"; ?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engim - Lista materie</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <?php include "navbar.php"; ?>

    <h1>Lista materie</h1>

    <?php
        $sql = "SELECT subject.id, subject.name, prof.firstname, prof.lastname FROM subject JOIN prof ON subject.prof_id = prof.id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Prof: " . $row["firstname"] . " " . $row["lastname"]. "<br>";
            }

            echo "Numero di risultati: " . $result->num_rows;
        } else {
            echo "0 results";
        }
    ?>

    <?php include "footer.php"; ?>
</body>
</html>

<?php include "close-connection.php"; ?>