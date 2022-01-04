<?php
if($action == "edit") {
    switch ($user) {
        case "admin":
            $query  = "SELECT * FROM administrador WHERE admin_numempleado=$id";
            break;
        case "educator":
            $query  = "SELECT * FROM docente WHERE doc_numempleado=$id";
            break;
        case "student":
            $query  = "SELECT * FROM alumno WHERE alum_boleta=$id";
            break;
    }
    $result = mysqli_query($conn, $query);
    $row    = mysqli_fetch_assoc($result);
    switch ($user) {
        case "admin":
            $id     = $row["admin_numempleado"];
            $name   = $row["admin_nombre"];
            $email  = $row["admin_correoP"];
            $email2 = $row["admin_correoA"];
            $phone  = $row["admin_telefono"];
            $pwd    = $row["admin_contras"];
            break;
        case "educator":
            $id     = $row["doc_numempleado"];
            $name   = $row["doc_nombre"];
            $email  = $row["doc_correoP"];
            $email2 = $row["doc_correoA"];
            $phone  = $row["doc_telefono"];
            $pwd    = $row["doc_contras"];
            break;
        case "student":
            $id     = $row["alum_boleta"];
            $name   = $row["alum_nombre"];
            $email  = $row["alum_correoP"];
            $email2 = $row["alum_correoA"];
            $phone  = $row["alum_telefono"];
            $pwd    = $row["alum_contras"];
            break;
    }
    if (!$result) die("Query Failed");
}
?>
<div id="editor_modal" class="modal <?=$action == "edit" ? "active" : ""?>">
    <div id="editor_card" class="card">
        <form method="post" action="update.php">
            <div id="title">Editar</div>
            <div class="fields">
                <input name="user" class="hidden" value="<?=$user?>"/>
                <input name="type" class="hidden" value="<?=$type?>"/>
                <label for="id_">Numero de empleado:</label>
                <input type="text" name="id" id="id_" value="<?=$id?>" readonly/>
                <label for="name_">Nombre:</label>
                <input type="text" name="name" id="name_" value="<?=$name?>" pattern="[A-Za-z ]+" maxlength="50" required/>
                <label for="email_">Correo Principal:</label>
                <input type="text" name="email" id="email_" value="<?=$email?>" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$" maxlength="35" required/>
                <label for="email2_">Correo Alternativo:</label>
                <input type="text" name="email2" id="email2_" value="<?=$email2?>" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$" maxlength="35" required/>
                <label for="phone_">Telefono:</label>
                <input type="text" name="phone" id="phone_" value="<?=$phone?>" pattern="[0-9]+" maxlength="11" required/>
                <label for="password_">Contraseña:</label>
                <input type="password" name="password" id="password_" value="<?=$pwd?>" pattern="[A-Za-z\d@$!%*#?&]+" maxlength="8" required/>
                <input type="submit" name="update" value="ENVIAR"/>
            </div>
        </form>
    </div>
</div>
