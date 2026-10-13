<?php
$conection = mysqli_connect("localhost", "root", "", "trabajo_Web");
$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conection, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHOCOLATES PARA TI - INICIO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="nav">
        <a href="inicio.php">INCIO</a>
        <a href="productos.php">PRODUCTOS</a>
        <a href="login.php">LOGIN</a>
    </nav>

    <main class="main">
        <strong>Lista de chocolates y productos</strong><br><br>

        <?php
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
        ?>
            <article class="section">
                <img src="<?php echo $fila['imagen']; ?>" width="100" height="100"><br>
                <strong><?php echo $fila['nombre']; ?></strong><br>
                <label>Precio: Bs. <?php echo $fila['precio']; ?></label><br>
                <a href="productos.php?id=<?php echo $fila['id']; ?>">Añadir al carrito</a>
            </article>
        <?php
            }
        }
        ?>
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