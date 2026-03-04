<?php

session_start();

include('connection.php');

$validUser = $_SESSION['validUser'];

$sql = "UPDATE tbl_contacts SET age = '80' WHERE email = '$validUser' ";

if ($conn-query($sql)===TRUE) {
    echo "records Updated";
}
else {
    echo "Error updating records";
}

$conn->close();