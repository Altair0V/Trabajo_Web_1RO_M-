<?php
$conection = mysqli_connect("localhost", "root", "", "trabajo_Web");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    $sql = "SELECT * FROM usuario WHERE correo='$usuario' AND contrasena='$contrasena'";
    $res = mysqli_query($conection, $sql);

    if ($res && mysqli_num_rows($res) > 0) {
        header("Location: inicio.php");
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - CHOCOLATIS PARA TI</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <nav class="nav">
        <a href="inicio.php">INCIO</a>
        <a href="productos.php">PRODUCTOS</a>
        <a href="login.php">LOGIN</a>
    </nav>

    <main class="main">
        <h2>INICIAR SESION</h2>

        <?php
        if (isset($error)) {
            echo "<p style='color:red;'>$error</p>";
        }
        ?>

        <form action="login.php" method="POST">
            <label>USUARIO</label>
            <input type="text" name="usuario" required><br><br>

            <label>PASSWORD</label>
            <input type="password" name="contrasena" required><br><br>

            <button type="submit">INGRESAR</button>
        </form>
    </main>

    <footer class="footer">
        <aside class="section">
            <h3>REDES SOCIALES</h3>
            <a href="https://www.facebook.com/paratichocolates/about?locale=es_LA">Facebook</a><br>
            <a href="https://wa.me/72876647">Wasap</a>
        </aside>

        <aside class="section">
            <h3>UBICACION</h3>
            <a href="https://maps.app.goo.gl/D2PyV38n9AUCc4Sz5">Goolge maps</a><br>
            <label>Direccion</label>
        </aside>

        <aside class="section">
            <h3>DESARROLLADO POR</h3>
             <img src="foto.jpeg" alt="Desarrollador" width="100" height="100"><br>
            <label>foto</label><br>
            <label>informacion</label><br>
            <label>Harold, 25 años, Sistemas</label>
        </aside>
    </footer>

</body>
</html>