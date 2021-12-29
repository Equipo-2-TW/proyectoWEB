<?php

require_once "db_connection.php";

if (isset($_POST["sign_up"])) {
    $user   = $_POST["user"];
    $name   = $_POST["name"];
    $email  = $_POST["email"];
    $email2 = $_POST["email2"];
    $pwd    = $_POST["password"];
    switch ($user) {
        case "admin":
            $query = "INSERT INTO administrador(admin_id, admin_nombre, admin_correo, admin_contras)";
            $query .= " VALUES (NULL, '$name', '$email', '$pwd')";
            break;
        case "docente":
            $query = "INSERT INTO alumno(alum_id, alum_nombre, alum_correo, alum_correop, alum_contras)";
            $query .= " VALUES (NULL, '$name', '$email', '$email2', '$pwd')";
            break;
        case "alumno":
            $query = "INSERT INTO docente(doc_id, doc_nombre, doc_correo, doc_correop, doc_contras)";
            $query .= " VALUES (NULL, '$name', '$email', '$email2', '$pwd')";
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
