<?php
    $title = "no registrado";
    require_once "includes/header.php";
?>
    <div class="navegacion">
        <div class=<?=checked("")?>>
            <a href="index.php">Principal</a>
        </div>
        <div class=<?=checked("about")?>>
            <a href="?page=about">Acerca de</a>
        </div>
        <div class=<?=checked("faq")?>>
            <a href="?page=faq">Preguntas frecuentes</a>
        </div>
        <div class=<?=checked("contact")?>>
            <a href="?page=contact">Contacto</a>
        </div>
        <div class=<?=checked("help")?>>
            <a href="?page=help">Ayuda</a>
        </div>
    </div>
</div> <!-- close header -->
<div class="content">
    <div class="area">
        <?php require_once "includes/footer_message.php";?>
        <?php require_once "includes/main.php";?>
    </div>
    <?php require_once "includes/login.php";?>
</div>
<?php require_once "includes/modal_sign_up.php";?>
<?php require_once "includes/footer.php";?>
