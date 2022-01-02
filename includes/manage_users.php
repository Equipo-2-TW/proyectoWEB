<div class="manage_users">
    <div class="content_">
        <div class="title">
            <?php
            $type = $_GET['type'];
            switch ($type) {
                case "all":      echo "Todos los usuarios"; break;
                case "admin":    echo "Administradores";    break;
                case "educator": echo "Docentes";           break;
                case "student":  echo "Estudiantes";        break;
            }
            ?>
        </div>
        <div class="table">
            <div>Nombre completo</div>
            <div>Correo principal</div>
            <div>Correo alterno</div>
            <div>Tipo de usuario</div>
            <div>Teléfono</div>
            <div>Boleta empleado</div>
            <div>Contraseña</div>
            <div>Opciones</div>
            <?php
            if ($type == "admin" || $type == "all") {
                $query    = "SELECT * FROM administrador";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div><?=$row['admin_nombre']?></div>
            <div><?=$row['admin_correoP']?></div>
            <div><?=$row['admin_correoA']?></div>
            <div>Administrador</div>
            <div><?=$row['admin_telefono']?></div>
            <div><?=$row['admin_numempleado']?></div>
            <div><?=$row['admin_contras']?></div>
            <div class="options">
                <span>🖉</span><span>🗑</span>
            </div>
            <?php
                    }
                }
            }
            if ($type == "educator" || $type == "all") {
                $query = "SELECT * FROM docente";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div><?=$row['doc_nombre']?></div>
            <div><?=$row['doc_correoP']?></div>
            <div><?=$row['doc_correoA']?></div>
            <div>Docente</div>
            <div><?=$row['doc_telefono']?></div>
            <div><?=$row['doc_numempleado']?></div>
            <div><?=$row['doc_contras']?></div>
            <div class="options">
                <span>🖉</span><span>🗑</span>
            </div>
            <?php
                    }
                }
            }
            if ($type == "student" || $type == "all") {
                $query  = "SELECT * FROM alumno";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div><?=$row['alum_nombre']?></div>
            <div><?=$row['alum_correoP']?></div>
            <div><?=$row['alum_correoA']?></div>
            <div>Alumno</div>
            <div><?=$row['alum_telefono']?></div>
            <div><?=$row['alum_boleta']?></div>
            <div><?=$row['alum_contras']?></div>
            <div class="options">
                <span>🖉</span><span>🗑</span>
            </div>
            <?php
                    }
                }
            }
            ?>
        </div>
    </div>
    <div class="footer_">
        <input type="button" onclick="window.print()" value="Imprimir"/>
    </div>
</div>
