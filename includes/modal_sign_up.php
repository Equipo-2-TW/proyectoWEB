<div id="modal" class="modal">
    <div id="card" class="card">
        <form method="post" action="sign_up.php">
            <div id="title">Registrar:
                <select name="user" id="select_user_sign_up" class="user">
                    <option value="admin">Administrador</option>
                    <option value="docente">Docente</option>
                    <option value="alumno">Alumno</option>
                </select>
            </div>
            <div class="fields">
                <label for="id" id="idl">Numero de empleado:</label>
                <input type="text" name="id" id="id" pattern="[0-9]+" maxlength="11" required/>
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" pattern="[A-Za-z ]+" maxlength="50" required/>
                <label for="group" id="groupl">Grupo:</label>
                <input type="text" name="group" id="group"/>
                <select name="group_list" id="group_list">
                    <?php
                    $query = "SELECT * FROM docente";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>

                    <option value="<?=$row['doc_grupo']?>"><?=$row['doc_grupo']?></option>

                    <?php
                        }
                    }
                    ?>
                </select>
                <label for="email">Correo Principal:</label>
                <input type="text" name="email" id="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$" maxlength="35" required/>
                <label for="email2">Correo Alternativo:</label>
                <input type="text" name="email2" id="email2" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$" maxlength="35" required/>
                <label for="phone">Telefono:</label>
                <input type="text" name="phone" id="phone" pattern="[0-9]+" maxlength="11" required/>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" pattern="[A-Za-z\d@$!%*#?&]+" maxlength="8" required/>
                <input type="submit" name="sign_up" value="ENVIAR"/>
            </div>
        </form>
    </div>
</div>
