<?php

$password[] = "password";
$password[] = "12345";
$password[] = "000000";
$password[] = "thisismypassword";

$myPassword = "thisismypassword";


if(is_array($password)) {

    foreach($password as $passwords) {

        if($password == $myPassword) {
            echo "Got hacked";
        }
        else {
            echo "No luck using" . $passwords . "<br />";
        }
    }

}//is array

$myPassword = hash('sha256', $myPassword);

echo $myPassword;