<div class="main">
    <?php
        $page = $_GET['page'];
        if (!isset($page)) {
            require_once "includes/welcome.php";
        }
        switch ($page) {
            case "about":
                require_once "includes/about.php";
                break;
            case "contact":
                require_once "includes/contact.php";
                break;
        }
    ?>
</div>
