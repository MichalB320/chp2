<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "dtb456";
$dbname = "prihla";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
