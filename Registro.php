<html>
    <head>
        <title> Regresitro de usuarios</title>
    </head>
    <body>
        <a style="color: #005CA5;" href="Login.php">Iniciar sesion</a>
        <div align="center">
            <h3 class="titulo">Regresitro de usuarios</h3>
            <br>
            <form method="post" action="usuario.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <img src="user.png">
                <div>
                <label for="usuario">Usuario: </label>
                <br>
                <input type="text" id="txtusuario" name="txtusuario" required>
                </div>
                <label>La contraseña debe contener al menos 8 caracteres, incluyendo al menos una letra mayúscula, una letra minúscula y un número. </label>
                <div>    
                <label for="password1">Contraseña: </label>
                <br>
                <input type="password" id="password1" name="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                </div>
                <div>
                <input type="submit" value="Crear">
            </form>
        </div>
    </body>
</html>



<!---<table>
                    <tr>
                    <label for="usuario">Usuario</label>
        <input type="text" class="form-control" id="usuario" value="usuariogenial" required>
                        <td><span>Usuario:</span></td>
                        <td><input type="text" name="txtusuario" required> </td>
                    </tr>
                    <tr>
                        <td><span>Contraseña:</span></td>
                        <td><input type="password" name="txtpass" required></td>
                    </tr>
                </table>