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

// Verificar que el producto_id se ha enviado
if (isset($_POST['producto_id'])) {
    $producto_id = $_POST['producto_id'];
    $usuario_id = $user['usuario_id']; // Tomamos el usuario_id de la sesión

    // Obtener el lista_id de la lista de favoritos del usuario, o crear una nueva si no existe
    $stmt = $conn->prepare("SELECT lista_id FROM Listas_Compra WHERE usuario_id = ? LIMIT 1");
    $stmt->bind_param("i", $usuario_id);
    $stmt->execute();
    $stmt->bind_result($lista_id);
    $stmt->fetch();
    $stmt->close();

    // Crear una nueva lista si no existe
    if (!$lista_id) {
        $stmt = $conn->prepare("INSERT INTO Listas_Compra (usuario_id, nombre_lista) VALUES (?, 'Favoritos')");
        $stmt->bind_param("i", $usuario_id);
        $stmt->execute();
        $lista_id = $stmt->insert_id;
        $stmt->close();
    }

    // Verificar si el producto ya está en la lista
    $stmt = $conn->prepare("SELECT COUNT(*) FROM Lista_Productos WHERE lista_id = ? AND producto_id = ?");
    $stmt->bind_param("ii", $lista_id, $producto_id);
    $stmt->execute();
    $stmt->bind_result($exists);
    $stmt->fetch();
    $stmt->close();

    if ($exists) {
        // Eliminar el producto si ya está en la lista
        $stmt = $conn->prepare("DELETE FROM Lista_Productos WHERE lista_id = ? AND producto_id = ?");
        $stmt->bind_param("ii", $lista_id, $producto_id);
        if ($stmt->execute()) {
            echo "<script>
                    window.history.back();
                  </script>";
        } else {
            echo "<script>
                    alert('Error al eliminar el producto de favoritos');
                    window.history.back();
                  </script>";
        }
        $stmt->close();
    } else {
        // Insertar el producto si no existe
        $stmt = $conn->prepare("INSERT INTO Lista_Productos (lista_id, producto_id, cantidad) VALUES (?, ?, 1)");
        $stmt->bind_param("ii", $lista_id, $producto_id);
        if ($stmt->execute()) {
            echo "<script>
                    window.history.back();
                  </script>";
        } else {
            echo "<script>
                    alert('Error al añadir el producto a favoritos');
                    window.history.back();
                  </script>";
        }
        $stmt->close();
    }
}

// Cerrar la conexión
$conn->close();
?>
