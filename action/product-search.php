<?php
session_start();

// Conectar a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'plazitappbd');

if ($conn->connect_error) {
    echo "Error al conectar a la base de datos";
    exit;
}

// Si se recibe el término de búsqueda, usarlo para filtrar, si no, mostrar todos los productos
$fruta = isset($_POST['fruta']) ? mysqli_real_escape_string($conn, $_POST['fruta']) : '';

// Consulta SQL dinámica basada en si se ingresa un término de búsqueda
$query = "SELECT * FROM Productos";

if (!empty($fruta)) {
    $query .= " WHERE nombre LIKE '%$fruta%'";
}

$result = $conn->query($query);

require('../includes/class_users.php');
require('../includes/class_products.php');

// Obtener detalles del usuario
$user = new User();
$user = $user->detellesuser_email($_SESSION['usuario_email']);

$product = new Product();
$favoritos = $product->listar_productos_favoritos($user['usuario_id']);

// Crear un array con los IDs de productos favoritos
$favoritos_ids = array_map(function ($fav) {
    return $fav['producto_id'];
}, $favoritos);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    while ($product = $result->fetch_assoc()) {
        // Verificar si el producto actual está en favoritos
        $is_favorite = in_array($product['producto_id'], $favoritos_ids);
        $heart_class = $is_favorite ? 'bi-heart-fill text-danger' : 'bi-heart';

        echo "
        <div class='col'>
            <div class='card card-product'>
                <div class='card-body'>
                    <div class='text-center position-relative'>
                        <div class='position-absolute top-0 start-0'>
                            <form action='action/product-add-favorite.php' method='POST'>
                                <input type='hidden' name='producto_id' value='{$product['producto_id']}'>
                                
                                <button type='submit' class='btn-action' data-bs-toggle='tooltip' data-bs-html='true' title='Favorito'>
                                    <i class='bi $heart_class'></i>
                                </button>
                            </form>
                        </div>
                        <a href='#!'>
                            <img src='{$product['imagen_url']}' alt='Producto' class='mb-3 img-fluid' style='width: 150px; height: 150px; object-fit: cover;' />
                        </a>
                    </div>
                    
                    <h2 class='fs-6'><a href='pages/shop-single.html' class='text-inherit text-decoration-none'>{$product['nombre']}</a></h2>
                   
                    <div class='d-flex justify-content-between align-items-center mt-3'>
                        <div>
                            <span class='text-dark'>\${$product['precio']}</span>
                        </div>
                        <div>
                            <form action='action/product-add-car.php' method='POST'>
                                <input type='hidden' name='producto_id' value='{$product['producto_id']}'>
                                <button type='submit' class='btn btn-primary btn-sm'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-plus'>
                                        <line x1='12' y1='5' x2='12' y2='19'></line>
                                        <line x1='5' y1='12' x2='19' y2='12'></line>
                                    </svg>
                                    Add
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }
} else {
    echo '<div class="col-12">';
    echo '    <div class="alert alert-warning">No se encontraron resultados.</div>';
    echo '</div>';
}

// Cerrar la conexión
$conn->close();
?>
