<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

$sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";

if ($result = $mysqli -> query($sql)) {
    while ($row = $result -> fetch_row()) {
        printf ("%s (%s)\n", $row[0], $row[1]);
    }
    $result -> free_result();
}

$row = $result -> fetch_array(MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1]);

if ($result=mysqli_query($mysqli,$sql)) {
    $rowcount = mysqli_num_rows($result);
    printf("Result set has %d rows.\n", $rowcount);
}

$sql2 = "INSERT INTO Users (firstname, lastname, email)
VALUES ('Daniel', 'Chabowski', 'dch@gmail.com')";

if ($mysqli->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}


$mysqli -> close();

?>