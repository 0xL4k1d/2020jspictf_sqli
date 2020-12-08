<?php

$servername = $_ENV["DB_HOST"];
$username = $_ENV["DB_USER"];
$password = $_ENV["DB_PASSWORD"];
$dbname = $_ENV["DB_NAME"];

$con = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO `flag2` (flag2) SELECT '" . file_get_contents("/flag2") . "' FROM DUAL WHERE NOT EXISTS(SELECT flag2 FROM flag2);";
$result = $con->query($sql);


