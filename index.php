<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.bootstrapdash.com/skydash/themes/vertical-default-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2024 07:52:31 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PlazitApp</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
  <link rel="stylesheet" href="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">

  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/vertical-layout-dark/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/images/LogoPlazitApp.png" />
</head>

<body>
  <div class="container-scroller">
    
    <!-- partial:partials/_navbar.html -->
      <?php include 'includes/navbar.php'; ?>
     
      <?php include 'includes/sidebar.php'; ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome John</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span
                      class="text-info">3 unread
                      alerts!</span></h6>
                </div>
                
              </div>
            </div>
          </div>
          <div class="container">
  <div class="row">
    <!-- Product Card Example -->
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card h-100">
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Nombre del Producto</h5>
          <p class="card-text">Descripción breve del producto.</p>
          <p class="card-text"><strong>Precio: $12.99</strong></p>
          <div class="mt-auto d-flex justify-content-between">
            <button class="btn btn-primary btn-sm" onclick="viewProductDetails()">Ver Detalles</button>
            <button class="btn btn-success btn-sm" onclick="addToCart()">Añadir al Carrito</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Repeat Product Cards as Needed -->
  </div>
</div>

          
          
         
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include 'includes/footer.php'; ?>
         
        

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/chart.umd.js"></script>
  <script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <!-- <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
  <script src="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <script src="assets/js/dataTables.select.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="assets/js/dashboard-dark.js"></script>
  <!-- End custom js for this page-->
  <script>
    function viewProductDetails() {
  // Lógica para mostrar detalles del producto en un modal o redirigir a la página de detalles
  alert("Detalles del producto.");
}

function addToCart() {
  // Lógica para añadir el producto al carrito
  alert("Producto añadido al carrito.");
}

  </script>




</body>


<!-- Mirrored from demo.bootstrapdash.com/skydash/themes/vertical-default-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2024 07:52:53 GMT -->
</html>