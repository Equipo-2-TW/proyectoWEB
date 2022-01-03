<?php
$user  = $_SESSION['user'];
$email = $_SESSION['email'];
switch ($user) {
    case "admin":
        $query  = "SELECT * FROM administrador WHERE admin_correoP = '$email'";
        break;
    case "educator":
        $query  = "SELECT * FROM docente WHERE doc_correoP = '$email'";
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
}
if (!$result) die("Query Failed");
?>
<div class="info">
    <div class="title">Editar perfil</div>
    <div class="description center u_user">
        <form method="post" action="update.php">
            <div class="fields">
                <input name="id" class="hidden" value="<?=$id?>"/>
                <input name="user" class="hidden" value="<?=$user?>"/>
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
                <input type="submit" name="update_profile" value="ENVIAR"/>
            </div>
        </form>
    </div>
</div>
