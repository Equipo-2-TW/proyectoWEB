<?php
    require_once "db_connection.php";

    function checked($nav_page) {
        $allowed_pages = $GLOBALS["allowed_pages"];
        $page  = $_GET["page"];
        if ($nav_page == "" && !in_array($page, $allowed_pages)) return "checked";
        return $page == $nav_page ? "checked" : "";
    }

    if (!isset($_SESSION['user'])) {
        $allowed_pages = array("about", "contact", "faq");
        require_once "unregistered_user.php";
        exit();
    }
    switch ($_SESSION['user']) {
        case "admin":
            $allowed_pages = array("mng_users");
            require_once "admin.php";
            break;
        case "docente":
            $allowed_pages = array("mng_themes");
            require_once "educator.php";
            break;
        case "alumno":
            $allowed_pages = array("materials");
            require_once "student.php";
            break;
    }
?>
