<?php
$email  = $_SESSION['email'];
$query  = "SELECT doc_grupo FROM docente WHERE doc_correoP = '$email'";
$result = mysqli_query($conn, $query);
if (!$result) die("Query Failed");
$row    = mysqli_fetch_assoc($result);
$group  = $row["doc_grupo"];
?>
<div class="manage_users">
    <div class="content_">
        <div class="title">Estudiantes</div>
        <div class="table students">
            <div>Nombre completo</div>
            <div>Correo principal</div>
            <div>Correo alterno</div>
            <div>Tipo de usuario</div>
            <div>Teléfono</div>
            <div>Boleta</div>
            <?php
            $query  = "SELECT * FROM alumno WHERE alum_grupo = '$group'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div><?=$row['alum_nombre']?></div>
            <div><?=$row['alum_correoP']?></div>
            <div><?=$row['alum_correoA']?></div>
            <div>Alumno</div>
            <div><?=$row['alum_telefono']?></div>
            <div><?=$row['alum_boleta']?></div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="footer_">
        <input type="button" onclick="window.print()" value="Imprimir"/>
    </div>
</div>
