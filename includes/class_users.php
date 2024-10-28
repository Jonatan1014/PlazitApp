<?php    
require_once ('conn.php');

class User extends conectarDB {        

    public function __construct() {                
        parent::__construct();
    }

    // Listar todos los usuarios
    public function listar_usuarios() {
        $sql = "SELECT * FROM Usuarios";
        $sentencia = $this->conn_db->prepare($sql);                        
        $sentencia->execute();            
        $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);            
        $sentencia->closeCursor();
        return $resultados;
    }    

    // Obtener detalles de un usuario por ID
    public function detallar_usuario($id) {
        $sql = "SELECT * FROM Usuarios WHERE usuario_id = :id";
        $sentencia = $this->conn_db->prepare($sql);            
        $sentencia->bindParam(':id', $id);        
        $sentencia->execute();
        $resultados = $sentencia->fetch(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        return $resultados;
    }

    // Agregar un nuevo usuario
	 public function agregar_usuario($nombre, $correo, $contraseña, $direccion, $telefono) {
        $sql = "INSERT INTO Usuarios (nombre, correo, contraseña, direccion, telefono) 
                VALUES (:nombre, :correo, :contraseña, :direccion, :telefono)";
        
        // Hashear la contraseña antes de guardarla
        $hashedPassword = password_hash($contraseña, PASSWORD_BCRYPT);

        $guardar = $this->conn_db->prepare($sql);        
        $guardar->bindParam(':nombre', $nombre);    
        $guardar->bindParam(':correo', $correo);    
        $guardar->bindParam(':contraseña', $hashedPassword);    
        $guardar->bindParam(':direccion', $direccion);    
        $guardar->bindParam(':telefono', $telefono);    
        $guardar->execute();
        $result = $this->conn_db->lastInsertId();
        $guardar->closeCursor();
        return $result;
    }

    // Modificar un usuario existente
    public function modificar_usuario($id, $nombre, $correo,$contrasena, $direccion, $telefono) {
        $sql = "UPDATE Usuarios SET 
                nombre = :nombre, correo = :correo, contraseña = :contrasena, direccion = :direccion, telefono = :telefono
                WHERE usuario_id = :id";
        $modificar = $this->conn_db->prepare($sql);    
        $modificar->bindParam(':id', $id);        
        $modificar->bindParam(':nombre', $nombre);    
        $modificar->bindParam(':correo', $correo);    
		$modificar->bindParam(':contrasena', $contrasena);  
        $modificar->bindParam(':direccion', $direccion);    
        $modificar->bindParam(':telefono', $telefono);    
        $modificar->execute();                    
        $result = true;
        $modificar->closeCursor();
        return $result;
    }    

	// Función para validar credenciales de usuario
    public function validar_credenciales($correo, $contraseña) {
        $sql = "SELECT usuario_id, contraseña FROM Usuarios WHERE correo = :correo";
        $sentencia = $this->conn_db->prepare($sql);            
        $sentencia->bindParam(':correo', $correo);
        $sentencia->execute();
        $usuario = $sentencia->fetch(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();

        // Verificar si el usuario existe y validar la contraseña
        if ($usuario && password_verify($contraseña, $usuario['contraseña'])) {
            return true;  
        } else {
            return password_verify($contraseña, $usuario['contraseña']);  
        }
    }

	// Método para verificar si el usuario es admin
    public function user_rol($correo) {
        $sql = "SELECT rol_id FROM Usuarios WHERE correo = :correo";
        $sentencia = $this->conn_db->prepare($sql);
        $sentencia->bindParam(':correo', $correo);
        $sentencia->execute();
        $usuario = $sentencia->fetch(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        
        return $usuario && $usuario['rol_id'] === 1; // Retorna true si es admin
    }

   

}
