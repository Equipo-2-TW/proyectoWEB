<?php

require_once "db_connection.php";

if (isset($_POST["update"]) || isset($_POST["update_profile"])) {
    $user   = $_POST["user"];
    $id     = $_POST["id"];
    $type   = $_POST["type"];
    $name   = $_POST["name"];
    $email  = $_POST["email"];
    $email2 = $_POST["email2"];
    $phone  = $_POST["phone"];
    $pwd    = $_POST["password"];
    switch ($user) {
        case "admin":
            $query = "UPDATE administrador SET admin_nombre = '$name', admin_correoP = '$email', admin_correoA = '$email2', admin_telefono = '$phone', admin_contras='$pwd'";
            $query .= " WHERE admin_numempleado = '$id'";
            break;
        case "educator":
            $query = "UPDATE docente SET doc_nombre = '$name', doc_correoP = '$email', doc_correoA = '$email2', doc_telefono = '$phone', doc_contras = '$pwd'";
            $query .= " WHERE doc_numempleado = '$id'";
            break;
        case "student":
            $query = "UPDATE alumno SET alum_nombre = '$name', alum_correoP = '$email', alum_correoA = '$email2', alum_telefono = '$phone', alum_contras = '$pwd'";
            $query .= " WHERE alum_boleta = '$id'";
            break;
    }
    if (isset($query)) {
        $result = mysqli_query($conn, $query);
        if (!$result) die("Query Failed");
        if(isset($_POST["update_profile"]))
            header("Location: index.php?page=u_user");
        else
            header("Location: index.php?page=mng_users&type=$type");
    }
}
?>
