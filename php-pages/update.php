<?php

session_start();

include('connection.php');

$sql = "UPDATE tbl_contacts SET age = '60' WHERE record_id = 2";

if ($conn-query($sql)===TRUE) {
    echo "records Updated";
}
else {
    echo "Error updating records";
}

$conn->close();