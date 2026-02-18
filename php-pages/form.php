<?php

if (isset($_POST)  && $_POST['submit'] != '') {

include('connection.php');

$firstName = $_POST['firstName'];
//$firstName = "Michael-Manual";

//insert into database
$sql = "INSERT INTO contacts (firstName) VALUES ('$firstName')";

    if ($conn->query($sql) === TRUE) {
        echo "New record entered";
    }
    else {
        "Error: " . $sql . $conn->error;
    }

$conn->close();

} // came from post
else {
    echo "Please fill out the form";
}