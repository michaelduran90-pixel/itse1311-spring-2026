<?php

session_start();

include('connection.php');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$validUser = $_SESSION['validUser'];

$sql = "UPDATE tbl_contacts SET firstName='$firstName', lastName='$lastName', age='$age', phone='$phone' WHERE email = '$validUser' LIMIT 1";

if ($conn-query($sql)===TRUE) {
    echo "records Updated";
}
else {
    echo "Error updating records";
}

$conn->close();