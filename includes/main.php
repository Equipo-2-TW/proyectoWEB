<div class="main">
    <?php
        $page = $_GET['page'];
        if (!isset($_SESSION['user']))
            switch ($page) {
                case "about":   require_once "includes/about.php";   break;
                case "contact": require_once "includes/contact.php"; break;
                case "faq":     require_once "includes/faq.php";     break;
                default:        require_once "includes/welcome.php"; break;
            }
        switch ($_SESSION['user']) {
            case "admin":
                break;
            case "docente":
                switch ($page) {
                    case "mng_themes":   require_once "includes/manage_themes.php";   break;
                }
                break;
            case "alumno":
                break;
        }
    ?>
</div>
