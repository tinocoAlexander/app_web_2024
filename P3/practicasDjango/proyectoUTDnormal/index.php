<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Inicio|PHP Proyecto UTD
    </title>
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>
<body>
    <header>
        <div id="logotipo">
            <img src="img/logophp.png" alt="Imagen Django" title="Django">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php" >Inicio</a></li>
            <?php if (!isset($_SESSION['username'])): ?>
                <li><a href="html/register.php">Registro</a></li>
                <li><a href="html/login.php">Iniciar Sesion</a></li>
            <?php else: ?>
                <li><a href="html/acercade.php">Acerca de</a></li>
                <li><a href="html/mision.php">Mision</a></li>
                <li><a href="html/vision.php">Vision</a></li>
                <li><a href="html/categorias.php">Categorías</a></li>
                <li><a href="html/articulos.php">Articulos</a></li>
                <li><a href="php/logout.php">Cerrar Sesion</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <section id="content">
       <div class="box">
            <h1>Inicio</h1>
            <hr>
            <?php if (!isset($_SESSION['username'])): ?>
                <p>.:: ¡Bienvenido a mi pagina de Inicio! ::.</p>
                <p>Por favor, <a href="html/login.php">inicie sesión</a> para continuar.</p>
                <p>Si no tiene cuenta, <a href="html/register.php">Registrese</a> para continuar.</p>
            <?php else: ?>
                <p>.:: ¡Bienvenido a mi pagina de Inicio! ::.</p>
                <p>Usted ha iniciado sesión como: <strong><?php echo $_SESSION['username']; ?></strong></p>

                <p>Por favor, seleccione una opción del menú.</p>
            <?php endif; ?>
       </div>
    </section>
    <footer>
        <p>Django con Dagonline &copy; 2024 | Visitado el: <?php echo date('d/m/y'); ?></p>
    </footer>
</body>
</html>