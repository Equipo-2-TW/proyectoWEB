<?php

require_once "db_connection.php";

if (isset($_POST["upload"])) {
    $unit     = $_POST["unit"];
    $topic    = $_POST["topic"];
    $subtopic = $_POST["subtopic"];
    $type     = $_POST["type"];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];

    $name_exploded = explode(".",$filename);
    $new_filename  = $name_exploded[0].rand(0,1000).".$name_exploded[1]";
    move_uploaded_file($tempname,'files/'.$new_filename);

    $query = "INSERT INTO material(mat_id, mat_bloque, mat_tema, mat_subtema, mat_tipomaterial, mat_actividad)";
    $query .= " VALUES (NULL, '$unit', '$topic', '$subtopic', '$type', '$new_filename')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }
    header("Location: index.php?page=mng_themes");
}
?>
