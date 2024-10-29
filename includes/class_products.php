<?php    
require_once ('conn.php');

class Product extends conectarDB {        
    
    public function __construct() {                
        parent::__construct();
    }

    // Listar todos los productos
    public function listar_productos() {
        $sql = "SELECT * FROM Productos";
        $sentencia = $this->conn_db->prepare($sql);                        
        $sentencia->execute();            
        $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);            
        $sentencia->closeCursor();
        return $resultados;
    }    

    // Obtener detalles de un producto por ID
    public function detallar_producto($id) {
        $sql = "SELECT * FROM Productos WHERE producto_id = :id";
        $sentencia = $this->conn_db->prepare($sql);            
        $sentencia->bindParam(':id', $id);        
        $sentencia->execute();
        $resultados = $sentencia->fetch(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        return $resultados;
    }

    // Agregar un nuevo producto
    public function agregar_producto($nombre, $descripcion, $precio, $stock, $imagen_url, $categoria_id) {
        $sql = "INSERT INTO Productos (nombre, descripcion, precio, stock, imagen_url, categoria_id) 
                VALUES (:nombre, :descripcion, :precio, :stock, :imagen_url, :categoria_id)";
        $guardar = $this->conn_db->prepare($sql);        
        $guardar->bindParam(':nombre', $nombre);    
        $guardar->bindParam(':descripcion', $descripcion);    
        $guardar->bindParam(':precio', $precio);    
        $guardar->bindParam(':stock', $stock);    
        $guardar->bindParam(':imagen_url', $imagen_url);    
        $guardar->bindParam(':categoria_id', $categoria_id);    
        $guardar->execute();
        $result = $this->conn_db->lastInsertId();
        $guardar->closeCursor();
        return $result;
    }

    // Modificar un producto existente
    public function modificar_producto($id, $nombre, $descripcion, $precio, $stock, $imagen_url, $categoria_id) {
        $sql = "UPDATE Productos SET 
                nombre = :nombre, descripcion = :descripcion, precio = :precio, 
                stock = :stock, imagen_url = :imagen_url, categoria_id = :categoria_id
                WHERE producto_id = :id";
        $modificar = $this->conn_db->prepare($sql);    
        $modificar->bindParam(':id', $id);        
        $modificar->bindParam(':nombre', $nombre);    
        $modificar->bindParam(':descripcion', $descripcion);    
        $modificar->bindParam(':precio', $precio);    
        $modificar->bindParam(':stock', $stock);    
        $modificar->bindParam(':imagen_url', $imagen_url);    
        $modificar->bindParam(':categoria_id', $categoria_id);    
        $modificar->execute();                    
        $result = true;
        $modificar->closeCursor();
        return $result;
    }    

    // Eliminar un producto por ID
    public function eliminar_producto($id) {
        $sql = "DELETE FROM Productos WHERE producto_id = :id";
        $eliminar = $this->conn_db->prepare($sql);    
        $eliminar->bindParam(':id', $id);        
        $eliminar->execute();                    
        $result = true;
        $eliminar->closeCursor();
        return $result;
    }

    public function listar_productos_favoritos($usuario_id) {
        $sql = "SELECT p.producto_id, p.nombre, p.descripcion, p.precio, p.stock, p.imagen_url, lp.cantidad 
                FROM Lista_Productos lp
                INNER JOIN Listas_Compra lc ON lp.lista_id = lc.lista_id
                INNER JOIN Productos p ON lp.producto_id = p.producto_id
                WHERE lc.usuario_id = :usuario_id";
        
        $stmt = $this->conn_db->prepare($sql);
        $stmt->bindParam(':usuario_id', $usuario_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

}
