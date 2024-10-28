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
    public function agregar_usuario($nombre, $correo, $contrasena, $direccion, $telefono, $rol_id) {
        $sql = "INSERT INTO Usuarios (nombre, correo, contrasena, direccion, telefono, rol_id) 
                VALUES (:nombre, :correo, :contrasena, :direccion, :telefono, :rol_id)";
        
        // Hashear la contrasena antes de guardarla
        $hashedPassword = password_hash($contrasena, PASSWORD_BCRYPT);

        $guardar = $this->conn_db->prepare($sql);        
        $guardar->bindParam(':nombre', $nombre);    
        $guardar->bindParam(':correo', $correo);    
        $guardar->bindParam(':contrasena', $hashedPassword);    
        $guardar->bindParam(':direccion', $direccion);    
        $guardar->bindParam(':telefono', $telefono);
        $guardar->bindParam(':rol_id', $rol_id); 
        
        // Ejecutar y retornar true si fue exitoso, false si no lo fue
        $resultado = $guardar->execute();
        $guardar->closeCursor();
        
        return $resultado;
    }



    // Modificar un usuario existente
    public function modificar_usuario($id, $nombre, $correo,$contrasena, $direccion, $telefono) {
        $sql = "UPDATE Usuarios SET 
                nombre = :nombre, correo = :correo, contrasena = :contrasena, direccion = :direccion, telefono = :telefono
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
    public function validar_credenciales($correo, $contrasena) {
        $sql = "SELECT usuario_id, contrasena FROM Usuarios WHERE correo = :correo";
        $sentencia = $this->conn_db->prepare($sql);            
        $sentencia->bindParam(':correo', $correo);
        $sentencia->execute();
        $usuario = $sentencia->fetch(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();

        // Verificar si el usuario existe y validar la contrasena
        if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {
            return true;  
        } else {
            return password_verify($contrasena, $usuario['contrasena']);  
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

    // Método para verificar si el usuario es admin
    public function detellesuser_email($correo) {
        $sql = "SELECT * FROM Usuarios WHERE correo = :correo";
        $sentencia = $this->conn_db->prepare($sql);
        $sentencia->bindParam(':correo', $correo);
        $sentencia->execute();
        $usuario = $sentencia->fetch(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        
        return $usuario;
    }

    public function correo_existe($correo) {
        $sql = "SELECT COUNT(*) FROM Usuarios WHERE correo = :correo";
        $consulta = $this->conn_db->prepare($sql);
        $consulta->bindParam(':correo', $correo);
        $consulta->execute();
        
        // Si el resultado es mayor que 0, el correo ya está registrado
        return $consulta->fetchColumn() > 0;
    }
    

   

}
