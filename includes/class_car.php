<?php    
require_once ('conn.php');

class Car extends conectarDB {        

    public function __construct() {                
        parent::__construct();
    }

    // Listar todos los productos en el carrito de un usuario
    public function listar_productos_carrito($usuario_id) {
        $sql = "SELECT p.producto_id,p.imagen_url, p.nombre, p.precio, cp.cantidad, (p.precio * cp.cantidad) AS total
                FROM Carrito_Productos cp
                INNER JOIN Productos p ON cp.producto_id = p.producto_id
                INNER JOIN Carritos c ON cp.carrito_id = c.carrito_id
                WHERE c.usuario_id = :usuario_id";
        
        $sentencia = $this->conn_db->prepare($sql);
        $sentencia->bindParam(':usuario_id', $usuario_id);
        $sentencia->execute();
        
        $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        
        return $resultados;
    }

    // Agregar un producto al carrito
    public function agregar_producto_carrito($usuario_id, $producto_id, $cantidad) {
        // Verificar si el carrito del usuario ya existe
        $carrito_id = $this->obtener_carrito_id($usuario_id);
        
        // Si no existe, crear un nuevo carrito
        if (!$carrito_id) {
            $carrito_id = $this->crear_carrito($usuario_id);
        }
        
        // Verificar si el producto ya está en el carrito
        $sql = "SELECT cantidad FROM Carrito_Productos WHERE carrito_id = :carrito_id AND producto_id = :producto_id";
        $consulta = $this->conn_db->prepare($sql);
        $consulta->bindParam(':carrito_id', $carrito_id);
        $consulta->bindParam(':producto_id', $producto_id);
        $consulta->execute();
        $producto = $consulta->fetch(PDO::FETCH_ASSOC);
        
        if ($producto) {
            // Si el producto ya está en el carrito, actualizar la cantidad
            $nueva_cantidad = $producto['cantidad'] + $cantidad;
            $sql = "UPDATE Carrito_Productos SET cantidad = :cantidad WHERE carrito_id = :carrito_id AND producto_id = :producto_id";
            $update = $this->conn_db->prepare($sql);
            $update->bindParam(':cantidad', $nueva_cantidad);
            $update->bindParam(':carrito_id', $carrito_id);
            $update->bindParam(':producto_id', $producto_id);
            $update->execute();
            $update->closeCursor();
        } else {
            // Si el producto no está en el carrito, agregarlo
            $sql = "INSERT INTO Carrito_Productos (carrito_id, producto_id, cantidad) VALUES (:carrito_id, :producto_id, :cantidad)";
            $insert = $this->conn_db->prepare($sql);
            $insert->bindParam(':carrito_id', $carrito_id);
            $insert->bindParam(':producto_id', $producto_id);
            $insert->bindParam(':cantidad', $cantidad);
            $insert->execute();
            $insert->closeCursor();
        }

        return true;
    }

    // Modificar la cantidad de un producto en el carrito
    public function modificar_cantidad_producto($usuario_id, $producto_id, $cantidad) {
        $carrito_id = $this->obtener_carrito_id($usuario_id);
        
        if ($carrito_id) {
            $sql = "UPDATE Carrito_Productos SET cantidad = :cantidad WHERE carrito_id = :carrito_id AND producto_id = :producto_id";
            $modificar = $this->conn_db->prepare($sql);
            $modificar->bindParam(':cantidad', $cantidad);
            $modificar->bindParam(':carrito_id', $carrito_id);
            $modificar->bindParam(':producto_id', $producto_id);
            $modificar->execute();
            $modificar->closeCursor();
            
            return true;
        }
        
        return false;
    }

    // Eliminar un producto del carrito
    public function eliminar_producto_carrito($usuario_id, $producto_id) {
        $carrito_id = $this->obtener_carrito_id($usuario_id);
        
        if ($carrito_id) {
            $sql = "DELETE FROM Carrito_Productos WHERE carrito_id = :carrito_id AND producto_id = :producto_id";
            $eliminar = $this->conn_db->prepare($sql);
            $eliminar->bindParam(':carrito_id', $carrito_id);
            $eliminar->bindParam(':producto_id', $producto_id);
            $eliminar->execute();
            $eliminar->closeCursor();
            
            return true;
        }
        
        return false;
    }

    // Vaciar el carrito de un usuario
    public function vaciar_carrito($usuario_id) {
        $carrito_id = $this->obtener_carrito_id($usuario_id);
        
        if ($carrito_id) {
            $sql = "DELETE FROM Carrito_Productos WHERE carrito_id = :carrito_id";
            $vaciar = $this->conn_db->prepare($sql);
            $vaciar->bindParam(':carrito_id', $carrito_id);
            $vaciar->execute();
            $vaciar->closeCursor();
            
            return true;
        }
        
        return false;
    }

    // Obtener el ID del carrito de un usuario
    private function obtener_carrito_id($usuario_id) {
        $sql = "SELECT carrito_id FROM Carritos WHERE usuario_id = :usuario_id";
        $consulta = $this->conn_db->prepare($sql);
        $consulta->bindParam(':usuario_id', $usuario_id);
        $consulta->execute();
        $carrito = $consulta->fetch(PDO::FETCH_ASSOC);
        $consulta->closeCursor();
        
        return $carrito ? $carrito['carrito_id'] : null;
    }

    // Crear un nuevo carrito para el usuario
    private function crear_carrito($usuario_id) {
        $sql = "INSERT INTO Carritos (usuario_id) VALUES (:usuario_id)";
        $insert = $this->conn_db->prepare($sql);
        $insert->bindParam(':usuario_id', $usuario_id);
        $insert->execute();
        
        $carrito_id = $this->conn_db->lastInsertId();
        $insert->closeCursor();
        
        return $carrito_id;
    }
}
