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
$product = $product->listar_productos(); // Obtener los datos de los products



?>




<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from freshcart.codescandy.com/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2024 14:13:53 GMT -->

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta content="Codescandy" name="author" />
   <title>Homepage v1 - eCommerce HTML Template - FreshCart</title>

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

   <!-- Shop Cart -->

   <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header border-bottom">
         <div class="text-start">
            <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
            <small>Location in 382480</small>
         </div>
         <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
         <div>
            <!-- alert -->
            <div class="alert alert-danger p-2" role="alert">
               You’ve got FREE delivery. Start
               <a href="#!" class="alert-link">checkout now!</a>
            </div>
            <ul class="list-group list-group-flush">
               <!-- list group -->
               <li class="list-group-item py-3 ps-0 border-top">
                  <!-- row -->
                  <div class="row align-items-center">
                     <div class="col-6 col-md-6 col-lg-7">
                        <div class="d-flex">
                           <img src="assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                           <div class="ms-3">
                              <!-- title -->
                              <a href="pages/shop-single.html" class="text-inherit">
                                 <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                              </a>
                              <span><small class="text-muted">.98 / lb</small></span>
                              <!-- text -->
                              <div class="mt-2 small lh-1">
                                 <a href="#!" class="text-decoration-none text-inherit">
                                    <span class="me-1 align-text-bottom">
                                       <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          width="14"
                                          height="14"
                                          viewBox="0 0 24 24"
                                          fill="none"
                                          stroke="currentColor"
                                          stroke-width="2"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          class="feather feather-trash-2 text-success">
                                          <polyline points="3 6 5 6 21 6"></polyline>
                                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                          <line x1="10" y1="11" x2="10" y2="17"></line>
                                          <line x1="14" y1="11" x2="14" y2="17"></line>
                                       </svg>
                                    </span>
                                    <span class="text-muted">Remove</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- input group -->
                     <div class="col-4 col-md-3 col-lg-3">
                        <!-- input -->
                        <!-- input -->
                        <div class="input-group input-spinner">
                           <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                           <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                           <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                        </div>
                     </div>
                     <!-- price -->
                     <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                        <span class="fw-bold">$5.00</span>
                     </div>
                  </div>
               </li>
               <!-- list group -->
               <li class="list-group-item py-3 ps-0">
                  <!-- row -->
                  <div class="row align-items-center">
                     <div class="col-6 col-md-6 col-lg-7">
                        <div class="d-flex">
                           <img src="assets/images/products/product-img-2.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                           <div class="ms-3">
                              <a href="pages/shop-single.html" class="text-inherit">
                                 <h6 class="mb-0">NutriChoice Digestive</h6>
                              </a>
                              <span><small class="text-muted">250g</small></span>
                              <!-- text -->
                              <div class="mt-2 small lh-1">
                                 <a href="#!" class="text-decoration-none text-inherit">
                                    <span class="me-1 align-text-bottom">
                                       <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          width="14"
                                          height="14"
                                          viewBox="0 0 24 24"
                                          fill="none"
                                          stroke="currentColor"
                                          stroke-width="2"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          class="feather feather-trash-2 text-success">
                                          <polyline points="3 6 5 6 21 6"></polyline>
                                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                          <line x1="10" y1="11" x2="10" y2="17"></line>
                                          <line x1="14" y1="11" x2="14" y2="17"></line>
                                       </svg>
                                    </span>
                                    <span class="text-muted">Remove</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- input group -->
                     <div class="col-4 col-md-3 col-lg-3">
                        <!-- input -->
                        <!-- input -->
                        <div class="input-group input-spinner">
                           <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                           <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                           <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                        </div>
                     </div>
                     <!-- price -->
                     <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                        <span class="fw-bold text-danger">$20.00</span>
                        <div class="text-decoration-line-through text-muted small">$26.00</div>
                     </div>
                  </div>
               </li>
               <!-- list group -->
               <li class="list-group-item py-3 ps-0">
                  <!-- row -->
                  <div class="row align-items-center">
                     <div class="col-6 col-md-6 col-lg-7">
                        <div class="d-flex">
                           <img src="assets/images/products/product-img-3.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                           <div class="ms-3">
                              <!-- title -->
                              <a href="pages/shop-single.html" class="text-inherit">
                                 <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
                              </a>
                              <span><small class="text-muted">1 kg</small></span>
                              <!-- text -->
                              <div class="mt-2 small lh-1">
                                 <a href="#!" class="text-decoration-none text-inherit">
                                    <span class="me-1 align-text-bottom">
                                       <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          width="14"
                                          height="14"
                                          viewBox="0 0 24 24"
                                          fill="none"
                                          stroke="currentColor"
                                          stroke-width="2"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          class="feather feather-trash-2 text-success">
                                          <polyline points="3 6 5 6 21 6"></polyline>
                                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                          <line x1="10" y1="11" x2="10" y2="17"></line>
                                          <line x1="14" y1="11" x2="14" y2="17"></line>
                                       </svg>
                                    </span>
                                    <span class="text-muted">Remove</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- input group -->
                     <div class="col-4 col-md-3 col-lg-3">
                        <!-- input -->
                        <!-- input -->
                        <div class="input-group input-spinner">
                           <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                           <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                           <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                        </div>
                     </div>
                     <!-- price -->
                     <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                        <span class="fw-bold">$15.00</span>
                        <div class="text-decoration-line-through text-muted small">$20.00</div>
                     </div>
                  </div>
               </li>
               <!-- list group -->
               <li class="list-group-item py-3 ps-0">
                  <!-- row -->
                  <div class="row align-items-center">
                     <div class="col-6 col-md-6 col-lg-7">
                        <div class="d-flex">
                           <img src="assets/images/products/product-img-4.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                           <div class="ms-3">
                              <!-- title -->
                              <!-- title -->
                              <a href="pages/shop-single.html" class="text-inherit">
                                 <h6 class="mb-0">Onion Flavour Potato</h6>
                              </a>
                              <span><small class="text-muted">250g</small></span>
                              <!-- text -->
                              <div class="mt-2 small lh-1">
                                 <a href="#!" class="text-decoration-none text-inherit">
                                    <span class="me-1 align-text-bottom">
                                       <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          width="14"
                                          height="14"
                                          viewBox="0 0 24 24"
                                          fill="none"
                                          stroke="currentColor"
                                          stroke-width="2"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          class="feather feather-trash-2 text-success">
                                          <polyline points="3 6 5 6 21 6"></polyline>
                                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                          <line x1="10" y1="11" x2="10" y2="17"></line>
                                          <line x1="14" y1="11" x2="14" y2="17"></line>
                                       </svg>
                                    </span>
                                    <span class="text-muted">Remove</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- input group -->
                     <div class="col-4 col-md-3 col-lg-3">
                        <!-- input -->
                        <!-- input -->
                        <div class="input-group input-spinner">
                           <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                           <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                           <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                        </div>
                     </div>
                     <!-- price -->
                     <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                        <span class="fw-bold">$15.00</span>
                        <div class="text-decoration-line-through text-muted small">$20.00</div>
                     </div>
                  </div>
               </li>
               <!-- list group -->
               <li class="list-group-item py-3 ps-0 border-bottom">
                  <!-- row -->
                  <div class="row align-items-center">
                     <div class="col-6 col-md-6 col-lg-7">
                        <div class="d-flex">
                           <img src="assets/images/products/product-img-5.jpg" alt="Ecommerce" class="icon-shape icon-xxl" />
                           <div class="ms-3">
                              <!-- title -->
                              <a href="pages/shop-single.html" class="text-inherit">
                                 <h6 class="mb-0">Salted Instant Popcorn</h6>
                              </a>
                              <span><small class="text-muted">100g</small></span>
                              <!-- text -->
                              <div class="mt-2 small lh-1">
                                 <a href="#!" class="text-decoration-none text-inherit">
                                    <span class="me-1 align-text-bottom">
                                       <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          width="14"
                                          height="14"
                                          viewBox="0 0 24 24"
                                          fill="none"
                                          stroke="currentColor"
                                          stroke-width="2"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          class="feather feather-trash-2 text-success">
                                          <polyline points="3 6 5 6 21 6"></polyline>
                                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                          <line x1="10" y1="11" x2="10" y2="17"></line>
                                          <line x1="14" y1="11" x2="14" y2="17"></line>
                                       </svg>
                                    </span>
                                    <span class="text-muted">Remove</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- input group -->
                     <div class="col-4 col-md-3 col-lg-3">
                        <!-- input -->
                        <!-- input -->
                        <div class="input-group input-spinner">
                           <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                           <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                           <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                        </div>
                     </div>
                     <!-- price -->
                     <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                        <span class="fw-bold">$15.00</span>
                        <div class="text-decoration-line-through text-muted small">$25.00</div>
                     </div>
                  </div>
               </li>
            </ul>
            <!-- btn -->
            <div class="d-flex justify-content-between mt-4">
               <a href="#!" class="btn btn-primary">Continue Shopping</a>
               <a href="#!" class="btn btn-dark">Update Cart</a>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal -->
   <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body p-6">
               <div class="d-flex justify-content-between align-items-start">
                  <div>
                     <h5 class="mb-1" id="locationModalLabel">Choose your Delivery Location</h5>
                     <p class="mb-0 small">Enter your address and we will specify the offer you area.</p>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="my-5">
                  <input type="search" class="form-control" placeholder="Search your area" />
               </div>
               <div class="d-flex justify-content-between align-items-center mb-2">
                  <h6 class="mb-0">Select Location</h6>
                  <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Clear All</a>
               </div>
               <div>
                  <div data-simplebar style="height: 300px">
                     <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action active">
                           <span>Alabama</span>
                           <span>Min:$20</span>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                           <span>Alaska</span>
                           <span>Min:$30</span>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                           <span>Arizona</span>
                           <span>Min:$50</span>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                           <span>California</span>
                           <span>Min:$29</span>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                           <span>Colorado</span>
                           <span>Min:$80</span>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                           <span>Florida</span>
                           <span>Min:$90</span>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                           <span>Arizona</span>
                           <span>Min:$50</span>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                           <span>California</span>
                           <span>Min:$29</span>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                           <span>Colorado</span>
                           <span>Min:$80</span>
                        </a>
                        <a href="#" class="list-group-item d-flex justify-content-between align-items-center px-2 py-3 list-group-item-action">
                           <span>Florida</span>
                           <span>Min:$90</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script src="assets/js/vendors/validation.js"></script>

   <main>



      <section class="mt-8">
         <div class="container">
            <div class="hero-slider">
               <div style="background: url(assets/images/slider/slider-image-1.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                  <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                     <span class="badge text-bg-warning">Opening Sale Discount 50%</span>

                     <h2 class="text-dark display-5 fw-bold mt-4">SuperMarket For Fresh Grocery</h2>
                     <p class="lead">Introduced a new model for online grocery shopping and convenient home delivery.</p>
                     <a href="#!" class="btn btn-dark mt-3">
                        Shop Now
                        <i class="feather-icon icon-arrow-right ms-1"></i>
                     </a>
                  </div>
               </div>
               <div style="background: url(assets/images/slider/slider-2.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                  <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                     <span class="badge text-bg-warning">Free Shipping - orders over $100</span>
                     <h2 class="text-dark display-5 fw-bold mt-4">
                        Free Shipping on
                        <br />
                        orders over
                        <span class="text-primary">$100</span>
                     </h2>
                     <p class="lead">Free Shipping to First-Time Customers Only, After promotions and discounts are applied.</p>
                     <a href="#!" class="btn btn-dark mt-3">
                        Shop Now
                        <i class="feather-icon icon-arrow-right ms-1"></i>
                     </a>
                  </div>
               </div>
               <div style="background: url(assets/images/slider/hero-img-slider-2.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                  <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                     <span class="badge text-bg-warning">Free Shipping - orders over $100</span>
                     <h2 class="text-dark display-5 fw-bold mt-4">
                        Free Shipping on
                        <br />
                        orders over
                        <span class="text-primary">$100</span>
                     </h2>
                     <p class="lead">Free Shipping to First-Time Customers Only, After promotions and discounts are applied.</p>
                     <a href="#!" class="btn btn-dark mt-3">
                        Shop Now
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
                     <h3 class="mb-0">Productos populares</h3>
                  </div>
               </div>
               <div class="d-flex justify-content-center align-items-center ">
                  <form action="#">
                     <div class="input-group">
                        <input class="form-control rounded" type="search" placeholder="Buscar productos..." />
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
                  </form>
               </div>
               <div>
                  <!-- select option -->
                  <select class="form-select">
                     <option selected>Sort by: Featured</option>
                     <option value="Low to High">Price: Low to High</option>
                     <option value="High to Low">Price: High to Low</option>
                     <option value="Release Date">Release Date</option>
                     <option value="Avg. Rating">Avg. Rating</option>
                  </select>
               </div>
            </div>

            <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
               <div class="col">
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <div class="position-absolute top-0 start-0">
                              <span class="badge bg-danger">Sale</span>
                           </div>
                           <a href="#!"><img src="assets/images/products/product-img-1.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>

                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                        </div>
                        <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Haldiram's Sev Bhujia</a></h2>
                        <div>
                           <small class="text-warning">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                           </small>
                           <span class="text-muted small">4.5(149)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div>
                              <span class="text-dark">$18</span>
                              <span class="text-decoration-line-through text-muted">$24</span>
                           </div>
                           <div>
                              <a href="#!" class="btn btn-primary btn-sm">
                                 <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                 </svg>
                                 Add
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <div class="position-absolute top-0 start-0">
                              <span class="badge bg-success">14%</span>
                           </div>
                           <a href="pages/shop-single.html"><img src="assets/images/products/product-img-2.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="pages/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Bakery & Biscuits</small></a>
                        </div>
                        <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">NutriChoice Digestive</a></h2>
                        <div class="text-warning">
                           <small>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                           </small>
                           <span class="text-muted small">4.5 (25)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div><span class="text-dark">$24</span></div>
                           <div>
                              <a href="#!" class="btn btn-primary btn-sm">
                                 <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                 </svg>
                                 Add
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <a href="pages/shop-single.html"><img src="assets/images/products/product-img-3.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="pages/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Bakery & Biscuits</small></a>
                        </div>
                        <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Cadbury 5 Star Chocolate</a></h2>
                        <div class="text-warning">
                           <small>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                           </small>
                           <span class="text-muted small">5 (469)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div>
                              <span class="text-dark">$32</span>
                              <span class="text-decoration-line-through text-muted">$35</span>
                           </div>
                           <div>
                              <a href="#!" class="btn btn-primary btn-sm">
                                 <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                 </svg>
                                 Add
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <a href="pages/shop-single.html"><img src="assets/images/products/product-img-4.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="pages/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                           <div class="position-absolute top-0 start-0">
                              <span class="badge bg-danger">Hot</span>
                           </div>
                        </div>
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                        </div>
                        <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Onion Flavour Potato</a></h2>
                        <div class="text-warning">
                           <small>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                              <i class="bi bi-star"></i>
                           </small>
                           <span class="text-muted small">3.5 (456)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div>
                              <span class="text-dark">$3</span>
                              <span class="text-decoration-line-through text-muted">$5</span>
                           </div>
                           <div>
                              <a href="#!" class="btn btn-primary btn-sm">
                                 <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                 </svg>
                                 Add
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <a href="pages/shop-single.html"><img src="assets/images/products/product-img-5.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="pages/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Instant Food</small></a>
                        </div>
                        <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Salted Instant Popcorn</a></h2>
                        <div class="text-warning">
                           <small>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                           </small>
                           <span class="text-muted small">4.5 (39)</span>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                           <div>
                              <span class="text-dark">$13</span>
                              <span class="text-decoration-line-through text-muted">$18</span>
                           </div>
                           <div>
                              <a href="#!" class="btn btn-primary btn-sm">
                                 <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                 </svg>
                                 Add
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <div class="position-absolute top-0 start-0">
                              <span class="badge bg-danger">Sale</span>
                           </div>
                           <a href="#!"><img src="assets/images/products/product-img-6.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="pages/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread & Eggs</small></a>
                        </div>
                        <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Blueberry Greek Yogurt</a></h2>
                        <div>
                           <small class="text-warning">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                           </small>
                           <span class="text-muted small">4.5 (189)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div>
                              <span class="text-dark">$18</span>
                              <span class="text-decoration-line-through text-muted">$24</span>
                           </div>
                           <div>
                              <a href="#!" class="btn btn-primary btn-sm">
                                 <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                 </svg>
                                 Add
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <a href="pages/shop-single.html"><img src="assets/images/products/product-img-7.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="pages/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread & Eggs</small></a>
                        </div>
                        <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Britannia Cheese Slices</a></h2>
                        <div class="text-warning">
                           <small>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                           </small>
                           <span class="text-muted small">5 (345)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div><span class="text-dark">$24</span></div>
                           <div>
                              <a href="#!" class="btn btn-primary btn-sm">
                                 <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                 </svg>
                                 Add
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <a href="pages/shop-single.html"><img src="assets/images/products/product-img-8.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="pages/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Instant Food</small></a>
                        </div>
                        <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Kellogg's Original Cereals</a></h2>
                        <div class="text-warning">
                           <small>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                           </small>
                           <span class="text-muted small">4 (90)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div>
                              <span class="text-dark">$32</span>
                              <span class="text-decoration-line-through text-muted">$35</span>
                           </div>
                           <div>
                              <a href="#!" class="btn btn-primary btn-sm">
                                 <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                 </svg>
                                 Add
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <a href="pages/shop-single.html"><img src="assets/images/products/product-img-9.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="pages/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                        </div>
                        <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Slurrp Millet Chocolate</a></h2>
                        <div class="text-warning">
                           <small>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                           </small>
                           <span class="text-muted small">4.5 (67)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div>
                              <span class="text-dark">$3</span>
                              <span class="text-decoration-line-through text-muted">$5</span>
                           </div>
                           <div>
                              <a href="#!" class="btn btn-primary btn-sm">
                                 <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                 </svg>
                                 Add
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <a href="pages/shop-single.html"><img src="assets/images/products/product-img-10.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="pages/shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread & Eggs</small></a>
                        </div>
                        <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Amul Butter - 500 g</a></h2>
                        <div class="text-warning">
                           <small>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                              <i class="bi bi-star"></i>
                           </small>
                           <span class="text-muted small">3.5 (89)</span>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                           <div>
                              <span class="text-dark">$13</span>
                              <span class="text-decoration-line-through text-muted">$18</span>
                           </div>
                           <div>
                              <a href="#!" class="btn btn-primary btn-sm">
                                 <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                 </svg>
                                 Add
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
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
                     <h3 class="h5 mb-3">10 minute grocery now</h3>
                     <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near you.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="mb-8 mb-xl-0">
                     <div class="mb-6"><img src="assets/images/icons/gift.svg" alt="" /></div>
                     <h3 class="h5 mb-3">Best Prices & Offers</h3>
                     <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get best pricess & offers.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="mb-8 mb-xl-0">
                     <div class="mb-6"><img src="assets/images/icons/package.svg" alt="" /></div>
                     <h3 class="h5 mb-3">Wide Assortment</h3>
                     <p>Choose from 5000+ products across food, personal care, household, bakery, veg and non-veg & other categories.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3">
                  <div class="mb-8 mb-xl-0">
                     <div class="mb-6"><img src="assets/images/icons/refresh-cw.svg" alt="" /></div>
                     <h3 class="h5 mb-3">Easy Returns</h3>
                     <p>
                        Not satisfied with a product? Return it at the doorstep & get a refund within hours. No questions asked
                        <a href="#!">policy</a>
                        .
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>

   <!-- Modal -->
   <div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body p-8">
               <div class="position-absolute top-0 end-0 me-3 mt-3">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="row">
                  <div class="col-lg-6">
                     <!-- img slide -->
                     <div class="product productModal" id="productModal">
                        <div class="zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/products/product-single-img-1.jpg)">
                           <!-- img -->
                           <img src="assets/images/products/product-single-img-1.jpg" alt="" />
                        </div>
                        <div>
                           <div class="zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/products/product-single-img-2.jpg)">
                              <!-- img -->
                              <img src="assets/images/products/product-single-img-2.jpg" alt="" />
                           </div>
                        </div>
                        <div>
                           <div class="zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/products/product-single-img-3.jpg)">
                              <!-- img -->
                              <img src="assets/images/products/product-single-img-3.jpg" alt="" />
                           </div>
                        </div>
                        <div>
                           <div class="zoom" onmousemove="zoom(event)" style="background-image: url(assets/images/products/product-single-img-4.jpg)">
                              <!-- img -->
                              <img src="assets/images/products/product-single-img-4.jpg" alt="" />
                           </div>
                        </div>
                     </div>
                     <!-- product tools -->
                     <div class="product-tools">
                        <div class="thumbnails row g-3" id="productModalThumbnails">
                           <div class="col-3" class="tns-nav-active">
                              <div class="thumbnails-img">
                                 <!-- img -->
                                 <img src="assets/images/products/product-single-img-1.jpg" alt="" />
                              </div>
                           </div>
                           <div class="col-3">
                              <div class="thumbnails-img">
                                 <!-- img -->
                                 <img src="assets/images/products/product-single-img-2.jpg" alt="" />
                              </div>
                           </div>
                           <div class="col-3">
                              <div class="thumbnails-img">
                                 <!-- img -->
                                 <img src="assets/images/products/product-single-img-3.jpg" alt="" />
                              </div>
                           </div>
                           <div class="col-3">
                              <div class="thumbnails-img">
                                 <!-- img -->
                                 <img src="assets/images/products/product-single-img-4.jpg" alt="" />
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="ps-lg-8 mt-6 mt-lg-0">
                        <a href="#!" class="mb-4 d-block">Bakery Biscuits</a>
                        <h2 class="mb-1 h1">Napolitanke Ljesnjak</h2>
                        <div class="mb-4">
                           <small class="text-warning">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                           </small>
                           <a href="#" class="ms-2">(30 reviews)</a>
                        </div>
                        <div class="fs-4">
                           <span class="fw-bold text-dark">$32</span>
                           <span class="text-decoration-line-through text-muted">$35</span>
                           <span><small class="fs-6 ms-2 text-danger">26% Off</small></span>
                        </div>
                        <hr class="my-6" />
                        <div class="mb-4">
                           <button type="button" class="btn btn-outline-secondary">250g</button>
                           <button type="button" class="btn btn-outline-secondary">500g</button>
                           <button type="button" class="btn btn-outline-secondary">1kg</button>
                        </div>
                        <div>
                           <!-- input -->
                           <!-- input -->
                           <div class="input-group input-spinner">
                              <input type="button" value="-" class="button-minus btn btn-sm" data-field="quantity" />
                              <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input" />
                              <input type="button" value="+" class="button-plus btn btn-sm" data-field="quantity" />
                           </div>
                        </div>
                        <div class="mt-3 row justify-content-start g-2 align-items-center">
                           <div class="col-lg-4 col-md-5 col-6 d-grid">
                              <!-- button -->
                              <!-- btn -->
                              <button type="button" class="btn btn-primary">
                                 <i class="feather-icon icon-shopping-bag me-2"></i>
                                 Add to cart
                              </button>
                           </div>
                           <div class="col-md-4 col-5">
                              <!-- btn -->
                              <a class="btn btn-light" href="#" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Compare"><i class="bi bi-arrow-left-right"></i></a>
                              <a class="btn btn-light" href="#!" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Wishlist"><i class="feather-icon icon-heart"></i></a>
                           </div>
                        </div>
                        <hr class="my-6" />
                        <div>
                           <table class="table table-borderless">
                              <tbody>
                                 <tr>
                                    <td>Product Code:</td>
                                    <td>FBB00255</td>
                                 </tr>
                                 <tr>
                                    <td>Availability:</td>
                                    <td>In Stock</td>
                                 </tr>
                                 <tr>
                                    <td>Type:</td>
                                    <td>Fruits</td>
                                 </tr>
                                 <tr>
                                    <td>Shipping:</td>
                                    <td>
                                       <small>
                                          01 day shipping.
                                          <span class="text-muted">( Free pickup today)</span>
                                       </small>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
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
</body>

<!-- Mirrored from freshcart.codescandy.com/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2024 14:14:14 GMT -->

</html>