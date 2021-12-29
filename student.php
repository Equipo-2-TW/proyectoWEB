<?php
    $title = "alumno";
    require_once "includes/header.php";
?>
    <div class="navegacion">
        <div>Bloque</div>
        <div>Temas</div>
        <div>Materia</div>
        <div>Actividad</div>
        <div>
            Tipo de material
            <div class="subtemas">
                <div>Video</div>
                <div>Material para imprimir</div>
                <div>Actividad en línea</div>
                <div>Evaluación</div>
                <div>Libro digítal</div>
            </div>
        </div>
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
