<?php
$dbhostname = getenv("MYSQL_SERVICE_HOST");
$dbportnumber = getenv("MYSQL_SERVICE_PORT");
$dbusername = getenv("databaseuser");
$dbpassword = getenv("databasepassword");
$dbname = getenv("databasename");
$connection = new mysqli($dbhostname, $dbusername, $dbpassword, $dbname);
if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
