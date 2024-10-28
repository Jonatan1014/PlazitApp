<!-- barra de navegación -->
<?php
// session_start(); // Iniciar la sesión
// require_once('includes/class_users.php'); // Asegúrate de incluir la clase correcta
// $user = new User();
// $user = $user->detellesuser_email($_SESSION['usuario_email']);
// // var_dump($user);
?>

<div class="border-bottom">

    <div class="py-5">
        <div class="container">
            <div class="row w-100 align-items-center gx-lg-2 gx-0 d-flex justify-content-between">
                <div class="col-xxl-2 col-lg-3 col-md-6 col-5">
                    <a class="navbar-brand d-none d-lg-block" href="index.php">
                        <img src="assets/images/logo/freshcart-logo.svg" alt="Plantilla HTML de eCommerce" />
                    </a>
                    <div class="d-flex justify-content-between w-100 d-lg-none">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/logo/freshcart-logo.svg" alt="Plantilla HTML de eCommerce" />
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-xxl-2 text-end col-md-6 col-7">
                    <div class="list-inline d-flex align-items-center justify-content-end">

                        <div class="list-inline-item position-relative me-4">
                            <a class="nav-link dropdown-toggle d-inline" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                 <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                 <circle cx="12" cy="7" r="4"></circle>
                              </svg> </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" >Bienvendo</a></li>
                                <li><a class="dropdown-item"><?php echo $user['nombre'] ?> </a></li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">Mi cuenta</a>
                                    <ul class="dropdown-menu">
                                       
                                        <li><a class="dropdown-item" href="user-account-settings.php">Configuración</a></li>
                                      
                                      
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <!-- Ícono de Lista de Deseos -->
                        <div class="list-inline-item position-relative me-4">
                            <a href="product-like.php" class="text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-heart">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                    </path>
                                </svg>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">5</span>
                            </a>
                        </div>

                        <!-- Ícono de Carrito -->
                        <div class="list-inline-item position-relative me-4">
                            <a href="cart.php" class="text-muted position-relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-shopping-bag">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">1</span>
                            </a>
                        </div>

                        <!-- Botón de Menú para Pantallas Pequeñas -->
                        
                    </div>
                </div>

            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 pb-lg-4" aria-label="Offcanvas navbar grande">
        <div class="container">
            <div class="offcanvas offcanvas-start" tabindex="-1" id="navbar-default"
                aria-labelledby="navbar-defaultLabel">
                <div class="offcanvas-header pb-1">
                    <a href="index.php"><img src="assets/images/logo/freshcart-logo.svg"
                            alt="Plantilla HTML de eCommerce" /></a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
                </div>
                
            </div>
        </div>
    </nav>
</div>