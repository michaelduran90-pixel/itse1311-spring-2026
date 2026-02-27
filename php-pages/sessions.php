<?php

session_start();

$myName = "Michael Duran";

$_SESSION['myName'] = $myName;

echo "my name is " . $_SESSION['myName'];