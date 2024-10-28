<?php
// Conectar a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'plazitappbd');

if ($conn->connect_error) {
    echo "Error al conectar a la base de datos";
    exit;
}

// Si se recibe el término de búsqueda, usarlo para filtrar, si no, mostrar todos los libros
$fruta = isset($_POST['fruta']) ? mysqli_real_escape_string($conn, $_POST['fruta']) : '';

// Consulta SQL dinámica basada en si se ingresa un término de búsqueda
$query = "SELECT * FROM Productos";

if (!empty($fruta)) {
    $query .= " WHERE nombre LIKE '%$fruta%'";
}

$result = $conn->query($query);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    while ($product = $result->fetch_assoc()) {
        echo "
        <div class='col'>
            <div class='card card-product'>
                <div class='card-body'>
                    <div class='text-center position-relative'>
                        <div class='position-absolute top-0 start-0'>
                            <button class='btn-action' data-bs-toggle='tooltip' data-bs-html='true' title='Favorito'><i class='bi bi-heart'></i></button>
                        </div>
                        <a href='#!'>
                            <img src='{$product['imagen_url']}' alt='Grocery Ecommerce Template' class='mb-3 img-fluid' style='width: 150px; height: 150px; object-fit: cover;' />
                        </a>
                    </div>
                    
                    <h2 class='fs-6'><a href='pages/shop-single.html' class='text-inherit text-decoration-none'>{$product['nombre']}</a></h2>
                   
                    <div class='d-flex justify-content-between align-items-center mt-3'>
                        <div>
                            <span class='text-dark'>{$product['precio']}</span>
                        </div>
                        <div>
                            <a href='#!' class='btn btn-primary btn-sm'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-plus'>
                                    <line x1='12' y1='5' x2='12' y2='19'></line>
                                    <line x1='5' y1='12' x2='19' y2='12'></line>
                                </svg>
                                Add
                            </a>
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