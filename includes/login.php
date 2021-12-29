<div class="login">
    <div class="title">Inicio de sesión</div>
    <form method="post" action="sign_in.php">
        <label for="login_name">Usuario</label>
        <input type="text" name="email" id="login_name" placeholder="email"/>
        <label for="login_password">Contraseña</label>
        <input type="password" name="password" id="login_password"/>
        <select name="user" class="user">
            <option value="admin">Administrador</option>
            <option value="docente">Docente</option>
            <option value="alumno">Alumno</option>
        </select>
        <input type="submit" name="login" value="aceptar"/>
    </form>
    <div class="links">
        <a href="" id="registrarse">registrarse</a>
        <a href="">se te olvidó la contraseña</a>
    </div>
</div>
