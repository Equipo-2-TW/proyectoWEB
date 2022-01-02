<?php
    $title = "administrador";
    require_once "includes/header.php";
?>
    <div class="navegacion">
        <div class=<?=checked("mng_users")?>>
            <a>Gestionar usuario</a>
            <div class="subtemas">
                <div><a href="?page=mng_users&type=educator">Maestro</a></div>
                <div><a href="?page=mng_users&type=student">Alumno</a></div>
                <div><a href="?page=mng_users&type=admin">Administrador</a></div>
                <div><a href="?page=mng_users&type=all">Todos</a></div>
            </div>
        </div>
        <div>Gestionar Temas</div>
        <div>Actualización de perfil</div>
        <div>Contraseña</div>
        <div>Estadística</div>
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
