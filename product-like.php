<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_email'])) {
    header('Location: user-login.php');
    exit();
}

require('includes/class_users.php');
require('includes/class_products.php');

// Obtener detalles del usuario
$user = new User();
$user = $user->detellesuser_email($_SESSION['usuario_email']);

// Instanciar productos y obtener la lista de favoritos
$product = new Product();
$favoritos = $product->listar_productos_favoritos($user['usuario_id']);


require('includes/class_car.php');   // Clase de carrito
// Inicializar clase Car y obtener productos del carrito
$carrito = new Car();
$productos_carrito = $carrito->listar_productos_carrito($user['usuario_id']);

// var_dump($productos_carrito);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Mis Productos Favoritos - PlazitApp</title>
   <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
   <link href="assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet">
   <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/theme.min.css">
</head>
<body>
   <?php include("includes/navbar.php"); ?>

   <main>
      <section class="mt-8 mb-14">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="mb-8">
                     <h1 class="mb-1">Mis Productos Favoritos</h1>
                     <p>Productos que has guardado en tu lista de favoritos</p>
                  </div>
                  <div class="table-responsive">
                     <table class="table text-nowrap table-with-checkbox">
                        <thead class="table-light">
                           <tr>
                              <th>Producto</th>
                              <th>Descripción</th>
                              <th>Precio</th>
                              <th>Stock</th>
                              <th>Acciones</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php if (!empty($favoritos)): ?>
                              <?php foreach ($favoritos as $producto): ?>
                                 <tr>
                                    <td>
                                       <a href="#"><img src="<?php echo htmlspecialchars($producto['imagen_url']); ?>" alt="" class="icon-shape icon-xxl"></a>
                                       <div>
                                          <h5 class="fs-6 mb-0"><a href="#" class="text-inherit"><?php echo htmlspecialchars($producto['nombre']); ?></a></h5>
                                       </div>
                                    </td>
                                    <td><?php echo htmlspecialchars($producto['descripcion']); ?></td>
                                    <td>$<?php echo number_format($producto['precio'], 2); ?> </td>
                                    <td>
                                       <?php echo $producto['stock'] > 0 ? '<span class="badge bg-success">En stock</span>' : '<span class="badge bg-danger">Agotado</span>'; ?>
                                    </td>
                                    <td>
                                       

                                    <form action="action/product-add-car.php" method="POST">
                                       <input type="hidden" name="producto_id" value="<?php echo htmlspecialchars($producto['producto_id']); ?>">
                                       <button type="submit" class="btn btn-primary btn-sm">Añadir al Carrito</button>
                                    </form>


                                    </td>
                                 </tr>
                              <?php endforeach; ?>
                           <?php else: ?>
                              <tr>
                                 <td colspan="6" class="text-center">No tienes productos en tu lista de favoritos.</td>
                              </tr>
                           <?php endif; ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>

   <?php include("includes/footer.php"); ?>

   <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
   <script src="assets/js/theme.min.js"></script>
</body>
</html>
