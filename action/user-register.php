<?php 
require_once '../includes/class_users.php';  

// Verificar que los campos requeridos estén presentes y no vacíos
if (
    !empty($_POST['email']) &&
    !empty($_POST['password']) &&
    !empty($_POST['name']) &&
    !empty($_POST['last_name']) &&
    !empty($_POST['address']) &&  // Nuevo campo para la dirección
    !empty($_POST['phone'])        // Nuevo campo para el teléfono
) {    
    // Asignar las variables de entrada de forma más clara y utilizando los campos correctos
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $rol_id = 2;

    // Concatenar nombre y apellido si se requiere un solo campo de nombre completo
    $full_name = $name . ' ' . $last_name;

    // Instanciar la clase y llamar al método correspondiente
    $Usuario_class = new User();

    try {
        // Verificar si el correo ya existe en la base de datos
        if ($Usuario_class->correo_existe($email)) {
            echo "<script>
                    alert('El correo ya está registrado. Intenta con otro correo.');
                    window.location.href = '../user-register.php';
                  </script>";
            exit();
        }

        // Ejecutar la operación de agregar usuario y guardar el resultado en la variable $operar
        $operar = $Usuario_class->agregar_usuario($full_name, $email, $pass, $address, $phone, $rol_id);
        var_dump(value: $operar);

        // Redireccionar si la operación es exitosa
        if ($operar) {
            session_start(); // Iniciar la sesión
            $_SESSION['usuario_email'] = $email;
            header('Location: ../index.php');
            exit(); // Asegurarse de detener la ejecución después de la redirección
        } else {
            echo "<script>
                    alert('Usuario no registrado y/o credenciales incorrectas');
                    window.location.href = '../user-register.php';
                  </script>";
            exit();
        }
    } catch (Exception $e) {
        // Manejar cualquier error que ocurra durante la operación
        echo "<script>
                alert('Error: " . $e->getMessage() . "');
                window.location.href = '../user-register.php';
              </script>";
        exit();
    }
} else {
    // Manejar el caso en que algún campo obligatorio esté vacío
    echo "<script>
            alert('Campos vacios o nulos.');
            window.location.href = '../user-register.php';
          </script>";
    exit();
}
