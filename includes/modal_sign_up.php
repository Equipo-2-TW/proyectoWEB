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
                <input type="text" name="id" id="id"/>
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name"/>
                <label for="group" id="groupl">Grupo:</label>
                <input type="text" name="group" id="group"/>
                <label for="email">Correo Principal:</label>
                <input type="text" name="email" id="email"/>
                <label for="email2">Correo Alternativo:</label>
                <input type="text" name="email2" id="email2"/>
                <label for="phone">Telefono:</label>
                <input type="text" name="phone" id="phone"/>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password"/>
                <input type="submit" name="sign_up" value="ENVIAR"/>
            </div>
        </form>
    </div>
</div>
