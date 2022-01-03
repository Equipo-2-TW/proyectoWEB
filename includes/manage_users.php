<?php
$user   = $_GET["user"];
$id     = $_GET["id"];
$action = $_GET["action"];
$type   = $_GET["type"];
$url = "index.php?page=mng_users&type=$type";
if($action == "delete") {
    switch ($user) {
        case "admin":
            $query = "DELETE FROM administrador WHERE admin_numempleado=$id";
            break;
        case "educator":
            $query = "DELETE FROM docente WHERE doc_numempleado=$id";
            break;
        case "student":
            $query = "DELETE FROM alumno WHERE alum_boleta=$id";
            break;
    }
    if (isset($query)) {
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query Failed");
        }
        header("Location: $url");
    }
}
?>
<div class="manage_users">
    <div class="content_">
        <div class="title">
            <?php
            switch ($type) {
                case "all":      echo "Todos los usuarios"; break;
                case "admin":    echo "Administradores";    break;
                case "educator": echo "Docentes";           break;
                case "student":  echo "Estudiantes";        break;
            }
            ?>
        </div>
        <div class="table">
            <div>Nombre completo</div>
            <div>Correo principal</div>
            <div>Correo alterno</div>
            <div>Tipo de usuario</div>
            <div>Teléfono</div>
            <div>Boleta empleado</div>
            <div>Contraseña</div>
            <div>Opciones</div>
            <?php
            if ($type == "admin" || $type == "all") {
                $query    = "SELECT * FROM administrador";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $link_update = "$url&user=admin&action=edit&id=".$row["admin_numempleado"];
                        $link_delete = "$url&user=admin&action=delete&id=".$row["admin_numempleado"];
            ?>
            <div><?=$row['admin_nombre']?></div>
            <div><?=$row['admin_correoP']?></div>
            <div><?=$row['admin_correoA']?></div>
            <div>Administrador</div>
            <div><?=$row['admin_telefono']?></div>
            <div><?=$row['admin_numempleado']?></div>
            <div><?=$row['admin_contras']?></div>
            <div class="options">
                <a href="<?=$link_update?>">🖉</a>
                <a href="<?=$link_delete?>">🗑</a>
            </div>
            <?php
                    }
                }
            }
            if ($type == "educator" || $type == "all") {
                $query = "SELECT * FROM docente";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $link_update = "$url&user=educator&action=edit&id=".$row["doc_numempleado"];
                        $link_delete = "$url&user=educator&action=delete&id=".$row["doc_numempleado"];
            ?>
            <div><?=$row['doc_nombre']?></div>
            <div><?=$row['doc_correoP']?></div>
            <div><?=$row['doc_correoA']?></div>
            <div>Docente</div>
            <div><?=$row['doc_telefono']?></div>
            <div><?=$row['doc_numempleado']?></div>
            <div><?=$row['doc_contras']?></div>
            <div class="options">
                <a href="<?=$link_update?>">🖉</a>
                <a href="<?=$link_delete?>">🗑</a>
            </div>
            <?php
                    }
                }
            }
            if ($type == "student" || $type == "all") {
                $query  = "SELECT * FROM alumno";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $link_update = "$url&user=student&action=edit&id=".$row["alum_boleta"];
                        $link_delete = "$url&user=student&action=delete&id=".$row["alum_boleta"];
            ?>
            <div><?=$row['alum_nombre']?></div>
            <div><?=$row['alum_correoP']?></div>
            <div><?=$row['alum_correoA']?></div>
            <div>Alumno</div>
            <div><?=$row['alum_telefono']?></div>
            <div><?=$row['alum_boleta']?></div>
            <div><?=$row['alum_contras']?></div>
            <div class="options">
                <a href="<?=$link_update?>">🖉</a>
                <a href="<?=$link_delete?>">🗑</a>
            </div>
            <?php
                    }
                }
            }
            ?>
        </div>
    </div>
    <div class="footer_">
        <input type="button" onclick="window.print()" value="Imprimir"/>
    </div>
    <?php require_once "includes/modal_editor.php";?>
</div>
