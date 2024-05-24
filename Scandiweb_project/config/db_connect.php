<?php

$db_host = "localhost";

// Username for the MySql database

$db_username = "root";

// Password for the MySql database

$db_pass = "";

// Name for the MySQL database

$db_name = "scandiweb";

// Running the actual connection

$con = mysqli_connect("$db_host", "$db_username", "$db_pass") or die("could not connect to mysql");

mysqli_select_db($con,"$db_name") or die("no databse");


?>
