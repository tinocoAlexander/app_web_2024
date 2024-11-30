<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Acerca de|PHP Proyecto UTD
    </title>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>
<body>
    <header>
        <div id="logotipo">
            <img src="../img/logophp.png" alt="Imagen Django" title="Django">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php" >Inicio</a></li>
            <?php if (!isset($_SESSION['username'])): ?>
                <li><a href="register.php">Registro</a></li>
                <li><a href="login.php">Iniciar Sesion</a></li>
            <?php else: ?>
                <li><a href="acercade.php">Acerca de</a></li>
                <li><a href="mision.php">Mision</a></li>
                <li><a href="vision.php">Vision</a></li>
                <li><a href="categorias.php">Categorías</a></li>
                <li><a href="articulos.php">Articulos</a></li>
                <li><a href="../php/logout.php">Cerrar Sesion</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <section id="content">
       <div class="box">
       <h1>Iniciar Sesion</h1>
            <hr>
            <form action="../php/login.php" method="post">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <input type="submit" value="Iniciar Sesion">
            </form>
       </div>
    </section>
    <footer>
        <p>Curso de Django con Dagonline &copy; 2024 | Visitado el: <?php echo date('d/m/y'); ?></p>
    </footer>
</body>
</html>