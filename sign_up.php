<?php

require_once "db_connection.php";

if (isset($_POST["sign_up"])) {
    $user   = $_POST["user"];
    $id     = $_POST["id"];
    $name   = $_POST["name"];
    $group  = $_POST["group"];
    $groupl = $_POST["group_list"];
    $email  = $_POST["email"];
    $email2 = $_POST["email2"];
    $phone  = $_POST["phone"];
    $pwd    = $_POST["password"];
    switch ($user) {
        case "admin":
            $query = "INSERT INTO administrador(admin_numempleado, admin_nombre, admin_correoP, admin_correoA, admin_telefono, admin_contras)";
            $query .= " VALUES ('$id', '$name', '$email', '$email2', '$phone', '$pwd')";
            break;
        case "docente":
            $query = "INSERT INTO docente(doc_numempleado, doc_nombre, doc_grupo, doc_correoP, doc_correoA, doc_telefono, doc_contras)";
            $query .= " VALUES ('$id', '$name', '$group', '$email', '$email2', '$phone', '$pwd')";
            break;
        case "alumno":
            $query = "INSERT INTO alumno(alum_boleta, alum_nombre, alum_grupo, alum_correoP, alum_correoA, alum_telefono, alum_contras)";
            $query .= " VALUES ('$id', '$name', '$groupl', '$email', '$email2', '$phone', '$pwd')";
            break;
    }
    if (isset($query)) {
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query Failed");
        }
        header("Location: index.php");
    }
}
?>
