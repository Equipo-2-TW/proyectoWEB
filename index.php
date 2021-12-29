<?php
    require_once "db_connection.php";
    if (!isset($_SESSION['user'])) {
        require_once "unregistered_user.php";
        exit();
    }
    switch ($_SESSION['user']) {
        case "admin":
            require_once "admin.php";
            break;
        case "docente":
            require_once "educator.php";
            break;
        case "alumno":
            require_once "student.php";
            break;
    }
?>
