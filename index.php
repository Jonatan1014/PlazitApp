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

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta content="Codescandy" name="author" />
   <title>PlazitApp</title>

   <link href="assets/libs/slick-carousel/slick/slick.css" rel="stylesheet" />
   <link href="assets/libs/slick-carousel/slick/slick-theme.css" rel="stylesheet" />
   <link href="assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />

   <!-- Favicon icon-->
   <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico" />

   <!-- Libs CSS -->
   <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
   <link href="assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
   <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

   <!-- Theme CSS -->
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
   <?php
   include("includes/navbar.php");
   ?>




   <script src="assets/js/vendors/validation.js"></script>

   <main>

      <section class="mt-8">
         <div class="container">
            <div class="hero-slider">
               <div style="background: url(assets/images/slider/slider-image-1.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                  <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                     <span class="badge text-bg-warning">Descuento de venta de apertura 50%</span>

                     <h2 class="text-dark display-5 fw-bold mt-4">Comestibles frescos</h2>
                     <p class="lead">Introdujo un nuevo modelo para compras de comestibles en línea y entrega a domicilio conveniente.</p>
                     <a href="#productos" class="btn btn-dark mt-3">
                        Comprar ahora
                        <i class="feather-icon icon-arrow-right ms-1"></i>
                     </a>
                  </div>
               </div>
               <div style="background: url(assets/images/slider/slider-2.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                  <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                     <span class="badge text-bg-warning">Envío gratuito - pedidos superiores a $100</span>
                     <h2 class="text-dark display-5 fw-bold mt-4">
                        Envío gratuito en
                        <br />
                        pedidos terminados
                        <span class="text-primary">$100</span>
                     </h2>
                     <p class="lead">Envío gratuito solo para clientes nuevos</p>
                     <a href="#!" class="btn btn-dark mt-3">
                        Comprar ahora
                        <i class="feather-icon icon-arrow-right ms-1"></i>
                     </a>
                  </div>
               </div>
               <div style="background: url(assets/images/slider/hero-img-slider-2.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                  <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                     <span class="badge text-bg-warning">Frescura garantizada al mejor precio</span>

                     <h2 class="text-dark display-5 fw-bold mt-4">Calidad en cada mordida</h2>
                     <p class="lead">Descubre nuestras frutas y verduras frescas, entregadas a tu puerta para una experiencia natural y saludable.</p>
                     <a href="#productos" class="btn btn-dark mt-3">
                        Comprar ahora
                        <i class="feather-icon icon-arrow-right ms-1"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Popular Products Start-->
      <section class="my-lg-14 my-8">
         <div class="container">
            <div class="d-lg-flex justify-content-between align-items-center pb-4">

               <div class="row">
                  <div class="col-12 ">
                     <h3 class="mb-0" id="productos">Productos populares</h3>
                  </div>
               </div>
               <div class="d-flex justify-content-center align-items-center ">
                     <div class="input-group">
                        <input class="form-control rounded" type="search" name="fruta" placeholder="Buscar productos..." />
                        <span class="input-group-append">
                           <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-search">
                                 <circle cx="11" cy="11" r="8"></circle>
                                 <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                              </svg>
                           </button>
                        </span>
                     </div>
               </div>
               <div>
                  <!-- select option -->
                  <select class="form-select">
                     <option selected>Ordenar por: Destacados</option>
                     <option value="Low to High">Precio: de menor a mayor</option>
                     <option value="High to Low">Precio: de mayor a menor</option>
                  </select>
               </div>
            </div>

            <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3" id="resultados">

            
                     
                  
               
            </div>
         </div>
      </section>
      <!-- Popular Products End-->

      <section class="my-lg-14 my-8">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-lg-3">
                  <div class="mb-8 mb-xl-0">
                     <div class="mb-6"><img src="assets/images/icons/clock.svg" alt="" /></div>
                     <h3 class="h5 mb-3">10 minutos de compras ahora</h3>
                     <p>Reciba su pedido en la puerta de su casa lo antes posible.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="mb-8 mb-xl-0">
                     <div class="mb-6"><img src="assets/images/icons/gift.svg" alt="" /></div>
                     <h3 class="h5 mb-3">Mejores precios y ofertas</h3>
                     <p>Precios más baratos que los de tu supermercado local y excelentes ofertas de reembolso para colmo. Obtenga los mejores precios y ofertas.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="mb-8 mb-xl-0">
                     <div class="mb-6"><img src="assets/images/icons/package.svg" alt="" /></div>
                     <h3 class="h5 mb-3">Amplio surtido</h3>
                     <p>Elige entre más de 500 variedades de frutas y verduras frescas, de temporada y exóticas, listas para tu mesa.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="mb-8 mb-xl-0">
                     <div class="mb-6"><img src="assets/images/icons/refresh-cw.svg" alt="" /></div>
                     <h3 class="h5 mb-3">Devoluciones fáciles</h3>
                     <p>
                        ¿No estás satisfecho con un producto? Devuélvalo en la puerta y obtenga un reembolso en cuestión de horas.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>


   <!-- footer -->
   <?php
   include("includes/footer.php");
   ?>

   <!-- Javascript-->

   <!-- Libs JS -->
   <!-- <script src="./assets/libs/jquery/dist/jquery.min.js"></script> -->
   <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>

   <!-- Theme JS -->
   <script src="assets/js/theme.min.js"></script>

   <script src="assets/js/vendors/jquery.min.js"></script>
   <script src="assets/js/vendors/countdown.js"></script>
   <script src="assets/libs/slick-carousel/slick/slick.min.js"></script>
   <script src="assets/js/vendors/slick-slider.js"></script>
   <script src="assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
   <script src="assets/js/vendors/tns-slider.js"></script>
   <script src="assets/js/vendors/zoom.js"></script>

   <script>
        $(document).ready(function() {
            // Función para cargar todos los libros al iniciar
            function cargarLibros(fruta = '') {
                $.ajax({
                    url: 'action/product-search.php',
                    type: 'POST',
                    data: {
                        fruta: fruta
                    },
                    success: function(response) {
                        $('#resultados').html(response);
                    },
                    error: function() {
                        $('#resultados').html(
                            '<div class="alert alert-danger">Error al realizar la búsqueda.</div>'
                            );
                    }
                });
            }

            // Cargar todos los libros al iniciar la página
            cargarLibros();

            // Función para hacer la búsqueda dinámica
            $('input[name="fruta"]').on('keyup', function() {
                var fruta = $(this).val();
                cargarLibros(fruta); // Hacer la búsqueda en función del término ingresado
            });
        });
        </script>


</body>

<!-- Mirrored from freshcart.codescandy.com/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2024 14:14:14 GMT -->

</html>