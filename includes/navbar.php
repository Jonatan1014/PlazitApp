<!-- navbar -->
<div class="border-bottom">
    
    <div class="py-5">
        <div class="container">
            <div class="row w-100 align-items-center gx-lg-2 gx-0">
                <div class="col-xxl-2 col-lg-3 col-md-6 col-5">
                    <a class="navbar-brand d-none d-lg-block" href="index.php">
                        <img src="assets/images/logo/freshcart-logo.svg" alt="eCommerce HTML Template" />
                    </a>
                    <div class="d-flex justify-content-between w-100 d-lg-none">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/logo/freshcart-logo.svg" alt="eCommerce HTML Template" />
                        </a>
                    </div>
                </div>
                <div class="col-xxl-5 col-lg-5 d-none d-lg-block">
                    <form action="#">
                        <div class="input-group">
                            <input class="form-control rounded" type="search" placeholder="Search for products" />
                            <span class="input-group-append">
                                <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end"
                                    type="button">
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
                <div class="col-md-2 col-xxl-3 d-none d-lg-block">
                    
                </div>
                <div class="col-lg-2 col-xxl-2 text-end col-md-6 col-7">
    <div class="list-inline d-flex align-items-center justify-content-end">

<!-- Ícono de Usuario y Dropdown de Cuenta -->
<div class="list-inline-item position-relative me-4">
            <!-- <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </a> -->
            <a class="nav-link dropdown-toggle d-inline" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Account</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pages/signin.html">Sign in</a></li>
                <li><a class="dropdown-item" href="pages/signup.html">Signup</a></li>
                <li class="dropdown-submenu dropend">
                    <a class="dropdown-item dropdown-toggle" href="#">My Account</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="pages/account-orders.html">Orders</a></li>
                        <li><a class="dropdown-item" href="pages/account-settings.html">Settings</a></li>
                        <li><a class="dropdown-item" href="pages/account-address.html">Address</a></li>
                        <li><a class="dropdown-item" href="pages/account-payment-method.html">Payment Method</a></li>
                        <li><a class="dropdown-item" href="pages/account-notification.html">Notification</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Ícono de Lista de Deseos -->
        <div class="list-inline-item position-relative me-4">
            <a href="pages/shop-wishlist.html" class="text-muted">
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
            <a href="#!" class="text-muted position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                role="button" aria-controls="offcanvasRight">
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
        <div class="list-inline-item d-inline-block d-lg-none">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#navbar-default" aria-controls="navbar-default" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-text-indent-left text-primary" viewBox="0 0 16 16">
                    <path
                        d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 pb-lg-4" aria-label="Offcanvas navbar large">
        <div class="container">
            <div class="offcanvas offcanvas-start" tabindex="-1" id="navbar-default"
                aria-labelledby="navbar-defaultLabel">
                <div class="offcanvas-header pb-1">
                    <a href="index.php"><img src="assets/images/logo/freshcart-logo.svg"
                            alt="eCommerce HTML Template" /></a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="d-block d-lg-none mb-4">
                        <form action="#">
                            <div class="input-group">
                                <input class="form-control rounded" type="search" placeholder="Search for products" />
                                <span class="input-group-append">
                                    <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end"
                                        type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <div class="mt-2">
                            <button type="button" class="btn btn-outline-gray-400 text-muted w-100"
                                data-bs-toggle="modal" data-bs-target="#locationModal">
                                <i class="feather-icon icon-map-pin me-2"></i>
                                Pick Location
                            </button>
                        </div>
                    </div>
                    <!-- <div class="d-block d-lg-none mb-4">
                        <a class="btn btn-primary w-100 d-flex justify-content-center align-items-center"
                            data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                            aria-controls="collapseExample">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </span>
                            All Departments
                        </a>
                        <div class="collapse mt-2" id="collapseExample">
                            <div class="card card-body">
                                <ul class="mb-0 list-unstyled">
                                    <li><a class="dropdown-item" href="pages/shop-grid.html">Dairy, Bread & Eggs</a>
                                    </li>
                                    <li><a class="dropdown-item" href="pages/shop-grid.html">Snacks & Munchies</a></li>
                                    <li><a class="dropdown-item" href="pages/shop-grid.html">Fruits & Vegetables</a>
                                    </li>
                                    <li><a class="dropdown-item" href="pages/shop-grid.html">Cold Drinks & Juices</a>
                                    </li>
                                    <li><a class="dropdown-item" href="pages/shop-grid.html">Breakfast & Instant
                                            Food</a></li>
                                    <li><a class="dropdown-item" href="pages/shop-grid.html">Bakery & Biscuits</a></li>
                                    <li><a class="dropdown-item" href="pages/shop-grid.html">Chicken, Meat & Fish</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="dropdown me-3 d-none d-lg-block">
                        <button class="btn btn-primary px-6" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </span>
                            All Departments
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="pages/shop-grid.html">Dairy, Bread & Eggs</a></li>
                            <li><a class="dropdown-item" href="pages/shop-grid.html">Snacks & Munchies</a></li>
                            <li><a class="dropdown-item" href="pages/shop-grid.html">Fruits & Vegetables</a></li>
                            <li><a class="dropdown-item" href="pages/shop-grid.html">Cold Drinks & Juices</a></li>
                            <li><a class="dropdown-item" href="pages/shop-grid.html">Breakfast & Instant Food</a></li>
                            <li><a class="dropdown-item" href="pages/shop-grid.html">Bakery & Biscuits</a></li>
                            <li><a class="dropdown-item" href="pages/shop-grid.html">Chicken, Meat & Fish</a></li>
                        </ul>
                    </div> -->
                    <div>
                        <ul class="navbar-nav align-items-center">
                           
                            
                            
                            <li class="nav-item w-100 w-lg-auto">
                                <a class="nav-link" href="dashboard/index.php">Dashboard</a>
                            </li>
                            <!-- <li class="nav-item dropdown w-100 w-lg-auto dropdown-flyout">
                              <a class="nav-link" href="#" id="navbarDropdownDocs" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                              <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarDropdownDocs">
                                 <a class="dropdown-item align-items-start" href="docs/index.php">
                                    <div>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-text text-primary" viewBox="0 0 16 16">
                                          <path
                                             d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                          <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                       </svg>
                                    </div>
                                    <div class="ms-3 lh-1">
                                       <h6 class="mb-1">Documentations</h6>
                                       <p class="mb-0 small">Browse the all documentation</p>
                                    </div>
                                 </a>
                                 <a class="dropdown-item align-items-start" href="docs/changelog.html">
                                    <div>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-layers text-primary" viewBox="0 0 16 16">
                                          <path
                                             d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
                                       </svg>
                                    </div>
                                    <div class="ms-3 lh-1">
                                       <h6 class="mb-1">
                                          Changelog
                                          <span class="text-primary ms-1">v1.3.0</span>
                                       </h6>
                                       <p class="mb-0 small">See what's new</p>
                                    </div>
                                 </a>
                              </div>
                           </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>