<?php 
    $servername = "localhost";
    $username = "engim";
    $password = "engim";
    $dbname = "engim";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("ATTENZIONE CONNESSIONE FALLITA: " . $conn->connect_error);
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engim - Homepage</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <nav class="navbar">
        <a href="index.php"><h1>Homepage</h1></a>
        <div class="menu">
            <a href="lista-studenti.php" class="navbar-link">Lista studenti</a>
            <a href="" class="navbar-link">Lista professori</a>
            <a href="" class="navbar-link">Lista materie</a>
        </div>
        <div class="clearfix"></div>
    </nav>

    <h1>Lista studenti</h1>

    <?php
        $sql = "SELECT * FROM student";
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

    <div class="footer">
        Credits: Cristian Carrino
    </div>
</body>
</html>

<?php 
    $conn->close();
?>