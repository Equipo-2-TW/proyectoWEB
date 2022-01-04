<?php

require_once "db_config.php";

session_start();

$conn = mysqli_connect(
    SERVERNAME,
    USERNAME,
    PASSWORD,
    DB
);

error_reporting (E_ALL ^ E_NOTICE);

?>
