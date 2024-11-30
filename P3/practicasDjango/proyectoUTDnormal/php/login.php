<?php
include 'conexion.php';


$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc(); 
    $_SESSION['username'] = $user['username'];
    header("Location: ../index.php");
    exit(); 
} else {
    echo "Usuario o contraseña incorrectos";
}

$conn->close();
?>