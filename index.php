<?php
    $title = "no registrado";
    require_once "includes/header.php";
?>
    <div class="navegacion">
        <div>Principal</div>
        <div>Acerca de</div>
        <div>Preguntas frecuentes</div>
        <div>Contacto</div>
        <div>Ayuda</div>
    </div>
</div> <!-- close header -->
<div class="content">
    <div class="area">
        <?php require_once "includes/footer_message.php";?>
    </div>
    <?php require_once "includes/login.php";?>
</div>
<?php require_once "includes/modal_sign_up.php";?>
<?php require_once "includes/footer.php";?>
