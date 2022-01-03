<div class="main">
    <?php
        $page = $_GET['page'];
        if (in_array($page, $allowed_pages))
            switch ($page) {
                case "about":      require_once "includes/about.php";         break;
                case "contact":    require_once "includes/contact.php";       break;
                case "faq":        require_once "includes/faq.php";           break;
                case "mng_themes": require_once "includes/manage_themes.php"; break;
                case "materials":  require_once "includes/materials.php";     break;
                case "mng_users":  require_once "includes/manage_users.php";  break;
                case "u_user":     require_once "includes/u_user.php";        break;
            }
        else if (!isset($_SESSION['user'])) require_once "includes/welcome.php";
    ?>
</div>
