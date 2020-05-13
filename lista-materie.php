<?php include "create-connection.php"; ?>

<!--
SELECT 
	student.firstname, 
    student.lastname, 
    subject.name, 
    vote.vote
FROM student 
LEFT JOIN vote ON 
	student.id = vote.student_id 
LEFT JOIN subject ON 
	vote.subject_id = subject.id 
ORDER BY 
	subject.name DESC,
    vote.vote DESC
-->

<?php $title = "Lista materie"; ?> 
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

<?php include "close-connection.php"; ?>