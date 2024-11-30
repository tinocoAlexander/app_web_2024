<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Mision|PHP Proyecto UTD
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
            <h1>Misión</h1>
            <h2>La mision de la empresa</h2>
            <p>La mision de la empresa es importante</p>
       </div>
    </section>
    <footer>
        <p>Curso de PHP con Dagonline &copy; 2024 | Visitado el: <?php echo date('d/m/y'); ?></p>
    </footer>
</body>
</html>