<?php
$email  = $_SESSION['email'];
$query  = "SELECT doc_grupo FROM docente WHERE doc_correoP = '$email'";
$result = mysqli_query($conn, $query);
if (!$result) die("Query Failed");
$row    = mysqli_fetch_assoc($result);
$group  = $row["doc_grupo"];
?>
<div class="info">
    <div class="title">Subir materiales</div>
    <div class="description center manage_themes">
        <form method="post" action="upload.php" enctype="multipart/form-data">
            <input name="group" class="hidden" value="<?=$group?>"/>
            <label for="unit">Bloque:</label>
            <input type="text" name="unit" id="unit"/>
            <label for="topic">Tema:</label>
            <input type="text" name="topic" id="topic"/>
            <label for="subtopic">Subtema:</label>
            <input type="text" name="subtopic" id="subtopic"/>
            <label for="type">Tipo de material:</label>
            <select name="type" id="type">
                <option value="video">Video</option>
                <option value="material">Material</option>
                <option value="imprimible">Imprimible</option>
                <option value="actividad">Actividad</option>
                <option value="examen">Examen</option>
            </select>
            <label for="activity">Actividad:</label>
            <input type="file" name="file" id="activity"/>
            <input type="submit" name="upload" value="Enviar"/>
        </form>
    </div>
</div>
