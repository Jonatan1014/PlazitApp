<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_email'])) {
    header('Location: user-login.php');
    exit();
}
require('../includes/class_users.php'); // Clase de usuario


// Obtener el usuario actual
$user = new User();
$user = $user->detellesuser_email($_SESSION['usuario_email']);



// Conectar a la base de datos
$conn = new mysqli('localhost', 'root', '', 'plazitappbd');

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar que se haya enviado el producto_id
if (isset($_POST['producto_id'])) {
    $producto_id = $_POST['producto_id'];
    $usuario_id = $user['usuario_id'];

    // Verificar si el carrito del usuario ya existe o crearlo
    $stmt = $conn->prepare("SELECT carrito_id FROM Carritos WHERE usuario_id = ? LIMIT 1");
    $stmt->bind_param("i", $usuario_id);
    $stmt->execute();
    $stmt->bind_result($carrito_id);
    $stmt->fetch();
    $stmt->close();

    // Si no existe, creamos un nuevo carrito
    if (!$carrito_id) {
        $stmt = $conn->prepare("INSERT INTO Carritos (usuario_id) VALUES (?)");
        $stmt->bind_param("i", $usuario_id);
        $stmt->execute();
        $carrito_id = $stmt->insert_id;
        $stmt->close();
    }

    // Verificar si el producto ya está en el carrito para actualizar la cantidad o agregarlo
    $stmt = $conn->prepare("SELECT cantidad FROM Carrito_Productos WHERE carrito_id = ? AND producto_id = ?");
    $stmt->bind_param("ii", $carrito_id, $producto_id);
    $stmt->execute();
    $stmt->bind_result($cantidad_existente);
    $stmt->fetch();
    $stmt->close();

    if ($cantidad_existente) {
        // Si el producto ya está en el carrito, incrementamos la cantidad
        $nueva_cantidad = $cantidad_existente + 1;
        $stmt = $conn->prepare("UPDATE Carrito_Productos SET cantidad = ? WHERE carrito_id = ? AND producto_id = ?");
        $stmt->bind_param("iii", $nueva_cantidad, $carrito_id, $producto_id);
    } else {
        // Si no está en el carrito, lo agregamos con cantidad = 1
        $stmt = $conn->prepare("INSERT INTO Carrito_Productos (carrito_id, producto_id, cantidad) VALUES (?, ?, 1)");
        $stmt->bind_param("ii", $carrito_id, $producto_id);
    }

    // Ejecutar y confirmar la operación
    if ($stmt->execute()) {
        echo "<script>
                alert('Producto añadido al carrito');
                window.history.back();
              </script>";
    } else {
        echo "<script>
                alert('Error al añadir el producto al carrito');
                window.history.back();
              </script>";
    }

    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>
