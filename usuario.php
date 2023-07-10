<?php
    include('conexion.php');
    $usuario=$_POST['txtusuario'];
    $password1=$_POST['password1'];
    $consulta=mysqli_query($conexion,
                          "INSERT INTO usuario (usuario,password1) 
                          VALUES('$usuario','$password1')") 
                            or die("Error al insertar datos".mysqli_error($conexion));
    echo "Usuario registrado";
//esto es un comentario 
?>
<br>
<a href="Registro.php">Registrarse</a>
<br>
<a href="Login.php">Iniciar sesion</a>
