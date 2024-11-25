<?php
session_start(); // Iniciar la sesión

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
if (isset($_GET['producto_id'])) {
    $producto_id = $_GET['producto_id'];
    $usuario_id = $user['usuario_id']; // Tomamos el usuario_id de la sesión

    // Obtener el carrito del usuario
    $stmt = $conn->prepare("SELECT carrito_id FROM Carritos WHERE usuario_id = ? LIMIT 1");
    $stmt->bind_param("i", $usuario_id);
    $stmt->execute();
    $stmt->bind_result($carrito_id);
    $stmt->fetch();
    $stmt->close();

    if ($carrito_id) {
        // Eliminar el producto del carrito
        $stmt = $conn->prepare("DELETE FROM Carrito_Productos WHERE carrito_id = ? AND producto_id = ?");
        $stmt->bind_param("ii", $carrito_id, $producto_id);

        if ($stmt->execute()) {
            echo "<script>
                    alert('Producto eliminado del carrito');
                    window.history.back();
                  </script>";
        } else {
            echo "<script>
                    alert('Error al eliminar el producto del carrito');
                    window.history.back();
                  </script>";
        }

        $stmt->close();
    } else {
        echo "<script>
                alert('No se encontró el carrito del usuario');
                window.history.back();
              </script>";
    }
} else {
    echo "<script>
            alert('No se especificó el producto a eliminar');
            window.history.back();
          </script>";
}

// Cerrar la conexión
$conn->close();
?>
