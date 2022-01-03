<div class="materials">
    <?php
    $email  = $_SESSION['email'];
    $type   = $_GET['type'];

    $query  = "SELECT alum_grupo FROM alumno WHERE alum_correoP = '$email'";
    $result = mysqli_query($conn, $query);
    if (!$result) die("Query Failed");
    $row    = mysqli_fetch_assoc($result);
    $group  = $row["alum_grupo"];

    $query  = "SELECT * FROM material WHERE mat_tipomaterial='$type' AND mat_grupo = '$group'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="material">
        Bloque:
        <div><?=$row['mat_bloque']?></div>
        Tema:
        <div><?=$row['mat_tema']?></div>
        Subtema:
        <div><?=$row['mat_subtema']?></div>
        Tipo de material:
        <div><?=$row['mat_tipomaterial']?></div>
        Actividad:
        <div>
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
