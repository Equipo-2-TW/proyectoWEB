<div class="manage">
    <?php
    $email  = $_SESSION['email'];
    $user   = $_SESSION['user'];
    $id     = $_GET["id"];
    $action = $_GET["action"];
    $url = "index.php?page=mng_themes";
    if($action == "delete") {
        $query = "DELETE FROM material WHERE mat_id = $id";
        if (isset($query)) {
            $result = mysqli_query($conn, $query);
            if (!$result) die("Query Failed");
            header("Location: $url");
        }
    }
    if ($user == "docente") {
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
    <?php
    }
    ?>
    <div class="materials">
        <?php
        $email  = $_SESSION['email'];
        $query  = "SELECT * FROM material";
        $query .= $user == "docente" ? " WHERE mat_grupo = '$group'" : "";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $link_update = "$url&action=edit&id=".$row["mat_id"];
                $link_delete = "$url&action=delete&id=".$row["mat_id"];
        ?>
        <div class="material">
            <div class="options">
                <a href="<?=$link_update?>">🖉</a>
                <a href="<?=$link_delete?>">🗑</a>
            </div>
            Bloque:
            <div><?=$row['mat_bloque']?></div>
            Tema:
            <div><?=$row['mat_tema']?></div>
            Subtema:
            <div><?=$row['mat_subtema']?></div>
            Tipo de material:
            <div><?=$row['mat_tipomaterial']?></div>
            Actividad:
            <div class="download">
                <a href="download.php?file=<?=$row['mat_actividad']?>" target="_blank">
                    <?=$row['mat_actividad']?>
                </a>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>
</div>
