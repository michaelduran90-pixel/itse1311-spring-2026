<?php

session_start();

include('connection.php');

$sql = "UPDATE `tbl_contacts` SET `age` = '52' WHERE `tbl_contacts`.`record_id` = 2";

if ($conn-query($sql)===TRUE) {
    echo "records Updated";
}
else {
    echo "Error updating records";
}

$conn->close();