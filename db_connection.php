<?php

require_once "db_config.php";

session_start();

$conn = mysqli_connect(
    SERVERNAME,
    USERNAME,
    PASSWORD,
    DB
);

?>
