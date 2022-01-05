<?php
    $title = "maestro";
    require_once "includes/header.php";
?>
    <div class="navegacion">
        <div class=<?=checked("students")?>>
            <a href="?page=students">Alumno</a>
        </div>
        <div class=<?=checked("mng_themes")?>>
            <a href="?page=mng_themes">Gestionar Temas</a>
        </div>
        <div class="<?=checked("u_user")?>">
            <a href="?page=u_user">Actualización de perfil</a>
        </div>
        <div>Contraseña</div>
        <div>Soporte</div>
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
