<?php
    $title = "no registrado";
    require_once "includes/header.php";
?>
    <div class="navegacion">
        <div><a href="index.php">Principal</a></div>
        <div><a href="index.php?page=about">Acerca de</a></div>
        <div><a href="index.php?page=faq">Preguntas frecuentes</a></div>
        <div><a href="index.php?page=contact">Contacto</a></div>
        <div>Ayuda</div>
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
