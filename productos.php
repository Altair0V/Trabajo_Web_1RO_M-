<?php
$conection = mysqli_connect("localhost", "root", "", "trabajo_Web");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente = $_POST['cliente'] ?? '';
    $producto = $_POST['producto'] ?? '';
    $cantidad = $_POST['cantidad'] ?? '';
    $direccion = $_POST['direccion'] ?? '';

    $sql = "INSERT INTO pedidos (cliente, producto, cantidad, direccion) VALUES ('$cliente', '$producto', '$cantidad', '$direccion')";
    mysqli_query($conection, $sql);
}

$sql_productos = "SELECT * FROM productos";
$resultado_productos = mysqli_query($conection, $sql_productos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS - CARRITO</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>

    <nav class="nav">
        <a href="inicio.php">INCIO</a>
        <a href="productos.php">PRODUCTOS</a>
        <a href="login.php">LOGIN</a>
    </nav>

    <main class="main">
        <h2>CARRITO DE COMPRAS</h2>

        <form action="productos.php" method="POST">
            <label>Nombre Cliente</label><br>
            <input type="text" name="cliente" required><br><br>

            <label>Producto Seleccionado</label><br>
            <select name="producto" required>
                <option value="">-- Selecciona un chocolate --</option>
                <?php
                if ($resultado_productos && mysqli_num_rows($resultado_productos) > 0) {
                    while ($p = mysqli_fetch_assoc($resultado_productos)) {
                        echo '<option value="' . $p['nombre'] . '">' . $p['nombre'] . '</option>';
                    }
                }
                ?>
            </select><br><br>

            <label>Cantidad</label><br>
            <input type="number" name="cantidad" required><br><br>

            <label>Direccion de Entrega</label><br>
            <input type="text" name="direccion" required><br><br>

            <button type="submit">CONFIRMAR COMPRA</button>
        </form>

        <aside id="right">
            <h1>DETALLE DEL PEDIDO</h1>
            <ul>
                <li>Cacao 100% puro</li>
                <li>Chocolate Amargo 70%</li>
                <li>Caja Chocolatis de 100 piezas</li>
            </ul>
        </aside>
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