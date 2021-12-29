<?php
    $title = "maestro";
    require_once "includes/header.php";
?>
    <div class="navegacion">
        <div>
            Gestionar
            <div class="subtemas">
                <div>Grupo</div>
                <div>Alumno</div>
            </div>
        </div>
        <div>Gestionar Temas</div>
        <div>Actualización de perfil</div>
        <div>Contraseña</div>
        <div>Soporte</div>
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
