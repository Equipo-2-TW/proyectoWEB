<?php
    $title = "alumno";
    require_once "includes/header.php";
?>
    <div class="navegacion">
        <div>Bloque</div>
        <div>Temas</div>
        <div>Materia</div>
        <div>Actividad</div>
        <div class=<?=checked("materials")?>>
            <a>Tipo de material</a>
            <div class="subtemas">
                <div><a href="?page=materials&type=video">Video</a></div>
                <div><a href="?page=materials&type=material">Material</a></div>
                <div><a href="?page=materials&type=imprimible">Imprimible</a></div>
                <div><a href="?page=materials&type=actividad">Actividad</a></div>
                <div><a href="?page=materials&type=examen">Examen</a></div>
            </div>
        </div>
        <div>Soporte</div>
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
