<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $privilege = $_POST['privilegio'];

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $sql = "INSERT INTO usuarios (username, password, privilegio) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }
    $stmt->bind_param("sss", $username, $password, $privilege);

    if ($stmt->execute()) {
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>