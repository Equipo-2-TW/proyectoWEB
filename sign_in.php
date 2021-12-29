<?php

require_once "db_connection.php";

if (isset($_POST["login"])) {
    $user   = $_POST["user"];
    $email   = $_POST["email"];
    $pwd    = $_POST["password"];
    switch ($user) {
        case "admin":
            $query = "SELECT * FROM administrador WHERE admin_correo = '$email' AND admin_contras = '$pwd'";
            break;
        case "docente":
            $query = "SELECT * FROM alumno WHERE alum_correo = '$email' AND alum_contras = '$pwd'";
            break;
        case "alumno":
            $query = "SELECT * FROM docente WHERE doc_correo = '$email' AND doc_contras = '$pwd'";
            break;
    }
    if (isset($query)) {
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query Failed");
        }
        $count = mysqli_num_rows($result);
        if($count >= 1) {
            $_SESSION['user'] = $user;
            header("Location: index.php");
        }
    }
}
?>
