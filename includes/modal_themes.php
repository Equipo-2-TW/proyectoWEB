<?php
if($action == "edit") {
    $query  = "SELECT * FROM material WHERE mat_id = $id";
    $result = mysqli_query($conn, $query);
    $row    = mysqli_fetch_assoc($result);
    $unit     = $row["mat_bloque"];
    $topic    = $row["mat_tema"];
    $subtopic = $row["mat_subtema"];
    $type     = $row["mat_tipomaterial"];
    if (!$result) die("Query Failed");
}
function is_select($type_) {
    return $GLOBALS["type"] == $type_ ? "selected='selected'" : "";
}
?>
<div id="modal_theme" class="modal <?=$action == "edit" ? "active" : ""?>">
    <div id="card_theme" class="card">
        <form method="post" action="update.php">
            <div id="title">Editar</div>
            <div class="fields">
                <input name="id" class="hidden" value="<?=$id?>"/>
                <label for="unit">Bloque:</label>
                <input type="text" name="unit" id="unit" value="<?=$unit?>"/>
                <label for="topic">Tema:</label>
                <input type="text" name="topic" id="topic" value="<?=$topic?>"/>
                <label for="subtopic">Subtema:</label>
                <input type="text" name="subtopic" id="subtopic" value="<?=$subtopic?>"/>
                <label for="type">Tipo de material:</label>
                <select name="type" id="type">
                    <option value="video" <?=is_select("video")?>>Video</option>
                    <option value="material" <?=is_select("material")?>>Material</option>
                    <option value="imprimible" <?=is_select("imprimible")?>>Imprimible</option>
                    <option value="actividad" <?=is_select("actividad")?>>Actividad</option>
                    <option value="examen" <?=is_select("examen")?>>Examen</option>
                </select>
                <input type="submit" name="update_mat_info" value="Enviar"/>
            </div>
        </form>
    </div>
</div>
