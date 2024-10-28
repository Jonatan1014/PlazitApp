<!DOCTYPE html>
<html lang="en">


<head>
   <!-- Required meta tags -->
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta content="Codescandy" name="author" />
   <title>Shop Grid 3 Column eCommerce HTML Template - FreshCart</title>
   <link href="assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet" />
   <link href="assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet" />
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

   <main>

      <!-- section -->
      <div class="mt-8 mb-lg-14 mb-8">
         <!-- container -->
         <div class="container">
            <!-- row -->
            <div class="row gx-10">
               <!-- col -->

               <section class="col-lg-12 col-md-12">
                  <!-- card -->
                  <div class="card mb-4 bg-light border-0">
                     <!-- card body -->
                     <div class="card-body p-9">
                        <h2 class="mb-0 fs-1">Snacks & Munchies</h2>
                     </div>
                  </div>
                  <!-- list icon -->
                  <div class="d-lg-flex justify-content-between align-items-center">
                     <div class="mb-3 mb-lg-0">
                        <p class="mb-0">
                           <span class="text-dark">24</span>
                           Products found
                        </p>
                     </div>

                     <div class="d-flex mt-2 mt-lg-0">

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
                  </div>
            </div>
            <!-- row -->
            <div class="row g-4 row-cols-xl-3 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2">
               <!-- col -->
               <div class="col">
                  <!-- card -->
                  <div class="card card-product">
                     <div class="card-body">
                        <!-- badge -->
                        <div class="text-center position-relative">
                           <div class="position-absolute top-0 start-0">
                              <span class="badge bg-danger">Sale</span>
                           </div>
                           <a href="shop-single.html">
                              <!-- img -->
                              <img src="assets/images/products/product-img-1.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                           </a>
                           <!-- action btn -->
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <!-- heading -->
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                        </div>
                        <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Haldiram's Sev Bhujia</a></h2>
                        <div>
                           <!-- rating -->
                           <small class="text-warning">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                           </small>
                           <span class="text-muted small">4.5(149)</span>
                        </div>
                        <!-- price -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div>
                              <span class="text-dark">$18</span>
                              <span class="text-decoration-line-through text-muted">$24</span>
                           </div>
                           <!-- btn -->
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
               <!-- col -->
               <div class="col">
                  <!-- card -->
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <div class="position-absolute top-0 start-0">
                              <span class="badge bg-success">14%</span>
                           </div>

                           <a href="shop-single.html">
                              <!-- img -->
                              <img src="assets/images/products/product-img-2.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                           </a>
                           <!-- action btn -->
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <!-- heading -->
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Bakery & Biscuits</small></a>
                        </div>
                        <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">NutriChoice Digestive</a></h2>
                        <div class="text-warning">
                           <!-- rating -->
                           <small>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                           </small>
                           <span class="text-muted small">4.5 (25)</span>
                        </div>
                        <!-- price -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div><span class="text-dark">$24</span></div>
                           <!-- btn -->
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
               <!-- col -->
               <div class="col">
                  <!-- card -->
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <a href="shop-single.html"><img src="assets/images/products/product-img-3.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           <!-- action btn -->
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <!-- heading -->
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Bakery & Biscuits</small></a>
                        </div>
                        <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Cadbury 5 Star Chocolate</a></h2>
                        <div class="text-warning">
                           <!-- rating -->
                           <small>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                           </small>
                           <span class="text-muted small">5 (469)</span>
                        </div>
                        <!-- price -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div>
                              <span class="text-dark">$32</span>
                              <span class="text-decoration-line-through text-muted">$35</span>
                           </div>
                           <!-- btn -->
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
               <!-- col -->
               <div class="col">
                  <!-- card -->
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <div class="position-absolute top-0">
                              <span class="badge bg-danger">Hot</span>
                           </div>

                           <a href="shop-single.html">
                              <!-- img -->
                              <img src="assets/images/products/product-img-4.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                           </a>
                           <!-- action btn -->
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <!-- heading -->
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                        </div>
                        <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Onion Flavour Potato</a></h2>
                        <div class="text-warning">
                           <!-- rating -->
                           <small>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                              <i class="bi bi-star"></i>
                           </small>
                           <span class="text-muted small">3.5 (456)</span>
                        </div>
                        <!-- price -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div>
                              <span class="text-dark">$3</span>
                              <span class="text-decoration-line-through text-muted">$5</span>
                           </div>
                           <!-- btn -->
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
               <!-- col -->
               <div class="col">
                  <!-- card -->
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <a href="shop-single.html"><img src="assets/images/products/product-img-5.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           <!-- action btn -->
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <!-- heading -->
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Instant Food</small></a>
                        </div>
                        <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Salted Instant Popcorn</a></h2>
                        <div class="text-warning">
                           <!-- rating -->
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
                           <!-- btn -->
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
               <!-- col -->
               <div class="col">
                  <!-- card -->
                  <div class="card card-product">
                     <div class="card-body">
                        <!-- badge -->
                        <div class="text-center position-relative">
                           <div class="position-absolute top-0 start-0">
                              <span class="badge bg-danger">Sale</span>
                           </div>
                           <a href="shop-single.html">
                              <!-- img -->
                              <img src="assets/images/products/product-img-6.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                           </a>
                           <!-- action btn -->
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <!-- heading -->
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread & Eggs</small></a>
                        </div>
                        <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Blueberry Greek Yogurt</a></h2>
                        <div>
                           <!-- rating -->
                           <small class="text-warning">
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                           </small>
                           <span class="text-muted small">4.5 (189)</span>
                        </div>
                        <!-- price -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div>
                              <span class="text-dark">$18</span>
                              <span class="text-decoration-line-through text-muted">$24</span>
                           </div>
                           <!-- btn -->
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
               <!-- col -->
               <div class="col">
                  <!-- card -->
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <a href="shop-single.html"><img src="assets/images/products/product-img-7.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           <!-- action btn -->
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <!-- heading -->
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread & Eggs</small></a>
                        </div>
                        <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Britannia Cheese Slices</a></h2>
                        <div class="text-warning">
                           <!-- rating -->
                           <small>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                           </small>
                           <span class="text-muted small">5 (345)</span>
                        </div>
                        <!-- price -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div><span class="text-dark">$24</span></div>
                           <!-- btn -->
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
               <!-- col -->
               <div class="col">
                  <!-- card -->
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <a href="shop-single.html"><img src="assets/images/products/product-img-8.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           <!-- action btn -->
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <!-- heading -->
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Instant Food</small></a>
                        </div>
                        <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Kellogg's Original Cereals</a></h2>
                        <div class="text-warning">
                           <!-- rating -->
                           <small>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                           </small>
                           <span class="text-muted small">4 (90)</span>
                        </div>
                        <!-- price -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div>
                              <span class="text-dark">$32</span>
                              <span class="text-decoration-line-through text-muted">$35</span>
                           </div>
                           <!-- btn -->
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
               <!-- col -->
               <div class="col">
                  <!-- card -->
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <a href="shop-single.html"><img src="assets/images/products/product-img-9.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           <!-- action btn -->
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <!-- heading -->
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Snack & Munchies</small></a>
                        </div>
                        <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Slurrp Millet Chocolate</a></h2>
                        <div class="text-warning">
                           <!-- rating -->
                           <small>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-fill"></i>
                              <i class="bi bi-star-half"></i>
                           </small>
                           <span class="text-muted small">4.5 (67)</span>
                        </div>
                        <!-- price -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                           <div>
                              <span class="text-dark">$3</span>
                              <span class="text-decoration-line-through text-muted">$5</span>
                           </div>
                           <!-- btn -->
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
               <!-- col -->
               <div class="col">
                  <!-- card -->
                  <div class="card card-product">
                     <div class="card-body">
                        <div class="text-center position-relative">
                           <a href="shop-single.html"><img src="assets/images/products/product-img-10.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           <!-- action btn -->
                           <div class="card-product-action">
                              <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                 <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                              </a>
                              <a href="shop-wishlist.html" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                           </div>
                        </div>
                        <!-- heading -->
                        <div class="text-small mb-1">
                           <a href="#!" class="text-decoration-none text-muted"><small>Dairy, Bread & Eggs</small></a>
                        </div>
                        <h2 class="fs-6"><a href="shop-single.html" class="text-inherit text-decoration-none">Amul Butter - 500 g</a></h2>
                        <div class="text-warning">
                           <!-- rating -->
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
                           <!-- btn -->
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
            <!-- row -->
            <div class="row mt-8">
               <div class="col">
                  <!-- nav -->
                  <nav>
                     <ul class="pagination">
                        <li class="page-item disabled">
                           <a class="page-link mx-1" href="#" aria-label="Previous">
                              <i class="feather-icon icon-chevron-left"></i>
                           </a>
                        </li>
                        <li class="page-item"><a class="page-link mx-1 active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link mx-1" href="#">2</a></li>

                        <li class="page-item"><a class="page-link mx-1" href="#">...</a></li>
                        <li class="page-item"><a class="page-link mx-1" href="#">12</a></li>
                        <li class="page-item">
                           <a class="page-link mx-1" href="#" aria-label="Next">
                              <i class="feather-icon icon-chevron-right"></i>
                           </a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
            </section>
         </div>
      </div>
      </div>
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

   <!-- Footer -->
   <?php
   include("includes/footer.php");
   ?>
   <!-- Javascript-->
   <script src="assets/libs/nouislider/dist/nouislider.min.js"></script>
   <script src="assets/libs/wnumb/wNumb.min.js"></script>
   <!-- Libs JS -->
   <!-- <script src="assets/libs/jquery/dist/jquery.min.js"></script> -->
   <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>

   <!-- Theme JS -->
   <script src="assets/js/theme.min.js"></script>

   <script src="assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
   <script src="assets/js/vendors/tns-slider.js"></script>
   <script src="assets/js/vendors/zoom.js"></script>
</body>

<!-- Mirrored from freshcart.codescandy.com/pages/shop-grid-3-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2024 14:14:31 GMT -->

</html>