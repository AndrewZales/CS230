<?php

$servename = "localhost";
$DBuname = "rphpmyadmin";
$DBPass = "cs230lab";
$DBname = "cs230";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
    # code...
}

