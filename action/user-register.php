<?php 
require_once '../includes/class_users.php';  

// Verificar que los campos requeridos estén presentes y no vacíos
if (
    !empty($_POST['email']) &&
    !empty($_POST['password']) &&
    !empty($_POST['name']) &&
    !empty($_POST['last_name'])
) {    
    // Asignar las variables de entrada de forma más clara y utilizando los passs correctos
    $email = $_POST['email'] ?? null;
    $pass = $_POST['password'] ?? null;
    $name = $_POST['name'] ?? null;
    $last_name = $_POST['last_name'] ?? null;

    // Instanciar la clase y llamar al método correspondiente
    $Usuario_class = new User();
    
    
    try {
        // Ejecutar la operación de agregar estudiante
        $operar = $Usuario_class->r( $email, $pass);
        // Redireccionar si la operación es exitosa
        if ($operar) {
            session_start(); // Iniciar la sesión
            $_SESSION['usuario_email'] = $email;
            header('Location: ../index.php');
            exit(); // Asegurarse de detener la ejecución después de la redirección

        } else {
            echo "<script>
                    alert('Usuario no registrado y/o credenciales incorrectas');
                    window.location.href = '../login.php';
                  </script>";
            exit(); // Asegurarse de detener la ejecución después de la redirección
        }
    } catch (Exception $e) {
        // Manejar cualquier error que ocurra durante la operación
        echo "<script>
                alert('Error: " . $e->getMessage() . "');
                window.location.href = '../login.php';
              </script>";
        exit(); // Asegurarse de detener la ejecución después de la redirección
    }
} else {
    // Manejar el caso en que algún campo obligatorio esté vacío
    echo "<script>
            alert('Campos vacios o nulos.');
            window.location.href = '../login.php';
          </script>";
    exit(); // Asegurarse de detener la ejecución después de la redirección
}
?>
