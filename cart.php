<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_email'])) {
    header('Location: user-login.php');
    exit();
}

require('includes/class_users.php'); // Clase de usuario
require('includes/class_car.php');   // Clase de carrito

// Obtener el usuario actual
$user = new User();
$user = $user->detellesuser_email($_SESSION['usuario_email']);

require('includes/class_products.php'); // Asegúrate de incluir la clase correcta
$product = new Product();
$products = $product->listar_productos(); // Obtener los datos de los products

// Verificar si se obtuvo un usuario válido
if (!$user) {
    echo "Error al obtener los datos del user.";
    exit();
}

// Inicializar clase Car y obtener productos del carrito
$carrito = new Car();
$productos_carrito = $carrito->listar_productos_carrito($user['usuario_id']);

// Calcular subtotal del carrito
$subtotal = 0;
foreach ($productos_carrito as $producto) {
    $subtotal += $producto['total'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <title>Shop Cart - PlazitApp</title>
   <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
   <link href="assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
   <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="assets/css/theme.min.css" />
</head>
<body>
   <?php include("includes/navbar.php"); ?>

   <main>
      <section class="mb-lg-14 mb-8 mt-8">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="card py-1 border-0 mb-4">
                     <div>
                        <h1 class="fw-bold">Carrito</h1>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Productos en el carrito -->
            <div class="row">
               <div class="col-lg-8 col-md-7">
                  <div class="py-3">
                     <ul class="list-group list-group-flush">
                        <?php if (!empty($productos_carrito)): ?>
                           <?php foreach ($productos_carrito as $producto): ?>
                              <li class="list-group-item py-3 ps-0 border-top">
                                 <div class="row align-items-center">
                                    <div class="col-6 col-md-6 col-lg-7">
                                       <div class="d-flex">
                                          <img src="<?php echo htmlspecialchars($producto['imagen_url']); ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>" class="icon-shape icon-xxl" />
                                          <div class="ms-3">
                                             <a href="shop-single.html" class="text-inherit">
                                                <h6 class="mb-0"><?php echo htmlspecialchars($producto['nombre']); ?></h6>
                                             </a>
                                             <span><small class="text-muted"><?php echo htmlspecialchars($producto['cantidad']); ?> unidad(es)</small></span>
                                             <div class="mt-2 small lh-1">
                                                <a href="action/remove_from_cart.php?producto_id=<?php echo $producto['producto_id']; ?>" class="text-decoration-none text-inherit">
                                                   <span class="me-1 align-text-bottom">
                                                      <i class="bi bi-trash text-success"></i>
                                                   </span>
                                                   <span class="text-muted">Eliminar</span>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-3">
                                       <div class="input-group input-spinner">
                                          <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                                          <input type="number" step="1" max="10" value="<?php echo htmlspecialchars($producto['cantidad']); ?>" name="quantity" class="quantity-field form-control-sm form-input" />
                                          <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                                       </div>
                                    </div>
                                    <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                       <span class="fw-bold" data-price="<?php echo htmlspecialchars($producto['precio']); ?>">
                                          $<?php echo number_format($producto['total'], 2); ?>
                                       </span>
                                    </div>
                                 </div>
                              </li>
                           <?php endforeach; ?>
                        <?php else: ?>
                           <li class="list-group-item py-3 ps-0 border-top">
                              <div class="text-center">
                                 <p>Tu carrito está vacío.</p>
                              </div>
                           </li>
                        <?php endif; ?>
                     </ul>

                     <div class="d-flex justify-content-end mt-4">
                        <a href="index.php" class="btn btn-primary">Continuar comprando</a>
                     </div>
                  </div>
               </div>

               <!-- Resumen del pedido -->
               <div class="col-12 col-lg-4 col-md-5">
                  <div class="card mb-5 mt-6">
                     <div class="card-body p-6">
                        <h2 class="h5 mb-4">Resumen del pedido</h2>
                        <ul class="list-group list-group-flush">
                           <li class="list-group-item d-flex justify-content-between align-items-start">
                              <div>Subtotal</div>
                              <span id="subtotal">$<?php echo number_format($subtotal, 2); ?></span>
                           </li>
                           <li class="list-group-item d-flex justify-content-between align-items-start">
                              <div>Descuento</div>
                              <span>$0.00</span>
                           </li>
                           <li class="list-group-item d-flex justify-content-between align-items-start">
                              <div class="fw-bold">Total</div>
                              <span id="total" class="fw-bold">$<?php echo number_format($subtotal, 2); ?></span>
                           </li>
                        </ul>
                        <div class="d-grid mt-4">
                           <button class="btn btn-primary btn-lg d-flex justify-content-between align-items-center" type="submit">
                              Pagar
                              <span class="fw-bold">$<?php echo number_format($subtotal, 2); ?></span>
                           </button>
                        </div>
                        <p><small>Al realizar su pedido, acepta los <a href="#!">Términos de servicio</a> y <a href="#!">Política de privacidad</a> de PlazitApp.</small></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>

   <?php include("includes/footer.php"); ?>

   <script>
      document.addEventListener('DOMContentLoaded', function () {
         const quantityInputs = document.querySelectorAll('.quantity-field');
         const subtotalElement = document.querySelector('#subtotal');
         const totalElement = document.querySelector('#total');

         function updateTotal() {
            let newSubtotal = 0;

            // Recorremos todos los productos en el carrito
            document.querySelectorAll('.list-group-item').forEach(item => {
               const quantityInput = item.querySelector('.quantity-field');
               const priceElement = item.querySelector('.fw-bold');
               const price = parseFloat(priceElement.getAttribute('data-price'));
               const quantity = parseInt(quantityInput.value);

               if (!isNaN(quantity) && quantity > 0) {
                  newSubtotal += price * quantity;
               }
            });

            // Actualizar el subtotal y el total en el DOM
            subtotalElement.textContent = `$${newSubtotal.toFixed(2)}`;
            totalElement.textContent = `$${newSubtotal.toFixed(2)}`;
         }

         // Agregar eventos a los botones "+" y "-"
         document.querySelectorAll('.button-plus').forEach(button => {
            button.addEventListener('click', function () {
               const input = this.parentElement.querySelector('.quantity-field');
               input.value = parseInt(input.value) + 1;
               updateTotal();
            });
         });

         document.querySelectorAll('.button-minus').forEach(button => {
            button.addEventListener('click', function () {
               const input = this.parentElement.querySelector('.quantity-field');
               if (parseInt(input.value) > 1) {
                  input.value = parseInt(input.value) - 1;
                  updateTotal();
               }
            });
         });

         // También actualizar el total si el usuario modifica la cantidad manualmente
         quantityInputs.forEach(input => {
            input.addEventListener('input', updateTotal);
         });

         // Actualización inicial
         updateTotal();
      });
   </script>

   <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
   <script src="assets/js/theme.min.js"></script>
</body>
</html>
