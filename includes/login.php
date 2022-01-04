<div class="login">
    <div class="title">Inicio de sesión</div>
    <form method="post" action="sign_in.php">
        <label for="login_name">Usuario</label>
        <input type="text" name="email" id="login_name" placeholder="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$" maxlength="35" required/>
        <label for="login_password">Contraseña</label>
        <input type="password" name="password" id="login_password" pattern="[A-Za-z\d@$!%*#?&]+" maxlength="8" required/>
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
