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
    if (!$result) {
        die("Query Failed");
    }
    header("Location: $url");
}
?>
<div id="editor_modal" class="modal <?=$action == "edit" ? "active" : ""?>">
    <div id="editor_card" class="card">
        <form method="post" action="sign_up.php">
            <div id="title">Editar</div>
            <div class="fields">
                <input name="user" id="aux" value="<?=$user?>">
                <label for="id_">Numero de empleado:</label>
                <input type="text" name="id" id="id_" value="<?=$id?>"/>
                <label for="name_">Nombre:</label>
                <input type="text" name="name" id="name_" value="<?=$name?>"/>
                <label for="email_">Correo Principal:</label>
                <input type="text" name="email" id="email_" value="<?=$email?>"/>
                <label for="email2_">Correo Alternativo:</label>
                <input type="text" name="email2" id="email2_" value="<?=$email2?>"/>
                <label for="phone_">Telefono:</label>
                <input type="text" name="phone" id="phone_" value="<?=$phone?>"/>
                <label for="password_">Contraseña:</label>
                <input type="password" name="password" id="password_" value="<?=$pwd?>"/>
                <input type="submit" name="sign_up" value="ENVIAR"/>
            </div>
        </form>
    </div>
</div>
