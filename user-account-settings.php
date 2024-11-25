<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_email'])) {
   // Si no ha iniciado sesión, redirigir a la página de inicio de sesión
   header('Location: user-login.php');
   exit();
}

require('includes/class_users.php'); // Asegúrate de incluir la clase correcta
$user = new User();
$user = $user->detellesuser_email($_SESSION['usuario_email']); // Obtener los datos de los products

require('includes/class_products.php'); // Asegúrate de incluir la clase correcta
$product = new Product();
$products = $product->listar_productos(); // Obtener los datos de los products

require('includes/class_car.php');   // Clase de carrito
// Inicializar clase Car y obtener productos del carrito
$carrito = new Car();
$productos_carrito = $carrito->listar_productos_carrito($user['usuario_id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Metadatos requeridos -->
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta content="Codescandy" name="author" />
   <title>Configuración - FreshCart</title>
   <!-- Icono de Favicon-->
   <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico" />

   <!-- CSS de Bibliotecas -->
   <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
   <link href="assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
   <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

   <!-- CSS del Tema -->
   <link rel="stylesheet" href="assets/css/theme.min.css" />
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
   <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
         dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-M8S4MT3EYG");
   </script>
   <script type="text/javascript">
      (function(c, l, a, r, i, t, y) {
         c[a] =
            c[a] ||
            function() {
               (c[a].q = c[a].q || []).push(arguments);
            };
         t = l.createElement(r);
         t.async = 1;
         t.src = "https://www.clarity.ms/tag/" + i;
         y = l.getElementsByTagName(r)[0];
         y.parentNode.insertBefore(t, y);
      })(window, document, "clarity", "script", "kuc8w5o9nt");
   </script>
</head>

<body>
   <!-- navbar -->
   <?php include('includes/navbar.php'); ?>
   <!-- Modal -->


   <!-- Shop Cart -->



   <!-- Modal -->


   <script src="assets/js/vendors/validation.js"></script>

   <main>
      <!-- section -->
      <section>
         <!-- container -->
         <div class="container">
            <!-- row -->
            <div class="row">
               <!-- col -->
               <div class="col-12">
                  <div class="d-flex justify-content-between align-items-center d-md-none py-4">
                     <!-- heading -->
                     <h3 class="fs-5 mb-0">Configuración de Cuenta</h3>
                     <!-- button -->
                     <a class="nav-link" href="action/destroy_session.php">
                        <i class="feather-icon icon-log-out me-2"></i>
                        Cerrar sesión
                     </a>
                     <!-- <button
                           class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3"
                           type="button"
                           data-bs-toggle="offcanvas"
                           data-bs-target="#offcanvasAccount"
                           aria-controls="offcanvasAccount">
                           <i class="bi bi-text-indent-left fs-3"></i>
                        </button> -->
                  </div>
               </div>
               <!-- col -->
               <div class="col-lg-3 col-md-4 col-12 border-end">
                  <div class="pt-10 pe-lg-10">
                     <!-- nav item -->
                     <ul class="nav flex-column nav-pills nav-pills-dark d-none d-md-block">

                        <!-- nav item -->
                        <li class="nav-item">
                           <a class="nav-link active" href="user-account-settings.php">
                              <i class="feather-icon icon-settings me-2"></i>
                              Configuración
                           </a>
                        </li>

                        <li class="nav-item ">
                           <hr />
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                           <a class="nav-link" href="action/destroy_session.php">
                              <i class="feather-icon icon-log-out me-2"></i>
                              Cerrar sesión
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-9 col-md-8 col-12">
                  <div class="py-6 p-md-6 p-lg-10">
                     <div class="mb-6">
                        <!-- heading -->
                        <h2 class="mb-0">Configuración de Cuenta</h2>
                     </div>
                     <div>
                        <!-- heading -->
                        <h5 class="mb-4">Detalles de la Cuenta</h5>
                        <div class="row">
                           <div class="col-lg-5">
                              <!-- form -->
                              <form>
                                 <!-- input -->
                                 <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $user['nombre']  ?>" />
                                 </div>
                                 <!-- input -->
                                 <div class="mb-3">
                                    <label class="form-label">Correo electrónico</label>
                                    <input type="email" class="form-control" value="<?php echo $user['correo']  ?>" disabled />
                                 </div>
                                 <!-- input -->
                                 <div class="mb-5">
                                    <label class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" name="phone" value="<?php echo $user['telefono']  ?>" />
                                 </div>
                                 <!-- button -->
                                 <div class="mb-3">
                                    <button class="btn btn-primary">Actualizar Datos</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <hr class="my-10" />
                     <div class="pe-lg-14">
                        <!-- heading -->
                        <h5 class="mb-4">Contraseña</h5>
                        <form class="row row-cols-1 row-cols-lg-2">
                           <!-- input -->
                           <div class="mb-3 col">
                              <label class="form-label">Nueva Contraseña</label>
                              <input type="password" class="form-control" placeholder="**********" name="password-new" />
                           </div>
                           <!-- input -->
                           <div class="mb-3 col">
                              <label class="form-label">Contraseña Actual</label>
                              <input type="password" class="form-control" placeholder="**********" name="password-old" />
                           </div>
                           <!-- input -->
                           <div class="col-12">

                              <a href="#" class="btn btn-primary">Actualizar Contraseña</a>
                           </div>
                        </form>
                     </div>
                     <hr class="my-10" />

                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>

   <!-- modal -->


   <!-- Footer -->
   <?php include('includes/footer.php'); ?>
   <!-- Javascript-->
   <!-- Libs JS -->
   <!-- <script src="assets/libs/jquery/dist/jquery.min.js"></script> -->
   <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>

   <!-- Theme JS -->
   <script src="assets/js/theme.min.js"></script>
</body>

</html>