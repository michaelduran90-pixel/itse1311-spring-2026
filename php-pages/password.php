<?php

$myPassword = "thisismypassword";

$myPassword = hash('sha256', $myPassword);

echo $myPassword;