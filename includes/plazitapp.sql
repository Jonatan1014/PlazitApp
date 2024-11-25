-- Tabla para almacenar las categorías de productos (frutas, verduras, etc.)
CREATE TABLE Categorias (
    categoria_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    descripcion TEXT
);

-- Tabla de productos, cada uno vinculado a una categoría
CREATE TABLE Productos (
    producto_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT DEFAULT 0,
    imagen_url VARCHAR(255),
    categoria_id INT,
    FOREIGN KEY (categoria_id) REFERENCES Categorias(categoria_id)
);

-- Tabla para almacenar roles (admin, user, etc.)
CREATE TABLE Roles (
    rol_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL UNIQUE
);

-- Tabla de usuarios con referencia a la tabla de roles
CREATE TABLE Usuarios (
    usuario_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) UNIQUE NOT NULL,
    contrasena VARCHAR(100) NOT NULL,
    direccion TEXT,
    telefono VARCHAR(20),
    rol_id INT DEFAULT 2, -- Rol por defecto es 'user'
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (rol_id) REFERENCES Roles(rol_id)
);


-- Tabla para listas de compras recurrentes (personalización)
CREATE TABLE Listas_Compra (
    lista_id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT,
    nombre_lista VARCHAR(100) NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id)
);

-- Productos en las listas de compras recurrentes
CREATE TABLE Lista_Productos (
    lista_id INT,
    producto_id INT,
    cantidad INT NOT NULL DEFAULT 1,
    PRIMARY KEY (lista_id, producto_id),
    FOREIGN KEY (lista_id) REFERENCES Listas_Compra(lista_id),
    FOREIGN KEY (producto_id) REFERENCES Productos(producto_id)
);

-- Carrito de compras (activo por usuario, hasta que se confirma un pedido)
CREATE TABLE Carritos (
    carrito_id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id)
);

-- Productos en el carrito de compras
CREATE TABLE Carrito_Productos (
    carrito_id INT,
    producto_id INT,
    cantidad INT NOT NULL DEFAULT 1,
    PRIMARY KEY (carrito_id, producto_id),
    FOREIGN KEY (carrito_id) REFERENCES Carritos(carrito_id),
    FOREIGN KEY (producto_id) REFERENCES Productos(producto_id)
);

-- Pedidos de los usuarios
CREATE TABLE Pedidos (
    pedido_id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT,
    estado ENUM('Pendiente', 'Pagado', 'Enviado', 'Entregado', 'Cancelado') DEFAULT 'Pendiente',
    total DECIMAL(10, 2) NOT NULL,
    fecha_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id)
);

-- Detalles de cada pedido
CREATE TABLE Detalle_Pedido (
    detalle_id INT PRIMARY KEY AUTO_INCREMENT,
    pedido_id INT,
    producto_id INT,
    cantidad INT NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (pedido_id) REFERENCES Pedidos(pedido_id),
    FOREIGN KEY (producto_id) REFERENCES Productos(producto_id)
);

-- Tabla para almacenar la información de pago
CREATE TABLE Pagos (
    pago_id INT PRIMARY KEY AUTO_INCREMENT,
    pedido_id INT,
    fecha_pago TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    monto DECIMAL(10, 2) NOT NULL,
    metodo ENUM('Tarjeta de Crédito', 'Paypal', 'Transferencia Bancaria'),
    estado ENUM('Completado', 'Pendiente', 'Fallido') DEFAULT 'Pendiente',
    FOREIGN KEY (pedido_id) REFERENCES Pedidos(pedido_id)
);

-- Inserción de categorías
INSERT INTO Categorias (nombre, descripcion) VALUES
('Frutas', 'Productos frescos y naturales de frutas'),
('Verduras', 'Variedad de verduras frescas'),
('Orgánico', 'Productos 100% orgánicos');

-- Inserción de roles básicos
INSERT INTO Roles (nombre) VALUES 
('admin'),
('user');


-- Inserción de productos
INSERT INTO Productos (nombre, descripcion, precio, stock, imagen_url, categoria_id) VALUES
('Manzana Roja', 'Manzanas rojas frescas y jugosas', 1.50, 100, 'https://img.freepik.com/psd-gratis/cerca-manzana-aislada_23-2151598148.jpg', 1),
('Banana', 'Bananas maduras listas para comer', 0.75, 120, 'https://img.freepik.com/vector-gratis/racimo-platano-amarillo-maduro-vector-aislado-sobre-fondo-blanco_1284-45456.jpg', 1),
('Espinaca', 'Espinacas frescas y verdes', 2.00, 80, 'https://img.freepik.com/fotos-premium/monton-hojas-espinaca_917856-23005.jpg', 2),
('Zanahoria', 'Zanahorias frescas y crujientes', 1.20, 90, 'https://img.freepik.com/fotos-premium/foto-zanahoria_1254967-2239.jpg', 2),
('Tomate Orgánico', 'Tomates orgánicos de alta calidad', 3.00, 50, 'https://img.freepik.com/fotos-premium/tomate-png_842076-6388.jpg', 3);

-- Inserción de usuarios con roles
INSERT INTO Usuarios (nombre, correo, contrasena, direccion, telefono, rol_id) VALUES
('Jonatan Cantillo', 'jonatan@gmail.com', PASSWORD('123'), 'Calle Falsa 123, Ciudad', '123456789', 1), -- admin
('Laura Perez', 'laura@gmail.com', PASSWORD('123'), 'Avenida Siempre Viva 456, Ciudad', '987654321', 2); -- user

-- Inserción de listas de compra
INSERT INTO Listas_Compra (usuario_id, nombre_lista) VALUES
(1, 'Lista de compras semanal'),
(2, 'Favoritos de Maria');

-- Inserción de productos en listas de compra
INSERT INTO Lista_Productos (lista_id, producto_id, cantidad) VALUES
(1, 1, 5),
(1, 3, 2),
(2, 2, 10),
(2, 5, 3);

-- Inserción de carritos de compra
INSERT INTO Carritos (usuario_id) VALUES
(1),
(2);

-- Inserción de productos en carritos de compra
INSERT INTO Carrito_Productos (carrito_id, producto_id, cantidad) VALUES
(1, 1, 3),
(1, 4, 1),
(2, 2, 6),
(2, 5, 2);

-- Inserción de pedidos
INSERT INTO Pedidos (usuario_id, estado, total) VALUES
(1, 'Pendiente', 15.50),
(2, 'Pagado', 25.00);

-- Inserción de detalles de pedido
INSERT INTO Detalle_Pedido (pedido_id, producto_id, cantidad, precio) VALUES
(1, 1, 5, 1.50),
(1, 3, 2, 2.00),
(2, 2, 10, 0.75),
(2, 5, 3, 3.00);

-- Inserción de pagos
INSERT INTO Pagos (pedido_id, monto, metodo, estado) VALUES
(1, 15.50, 'Tarjeta de Crédito', 'Completado'),
(2, 25.00, 'Paypal', 'Completado');
