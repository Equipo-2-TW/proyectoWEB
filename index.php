<?php
    require_once "db_connection.php";
    if (!isset($_SESSION['user'])) {
        require_once "unregistered_user.php";
        exit();
    }
    switch ($_SESSION['user']) {
        case "admin":
            break;
        case "docente":
            break;
        case "alumno":
            break;
    }
?>
