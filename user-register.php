<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Metadatos requeridos -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Codescandy" name="author" />
    <title>Registro en eCommerce - FreshCart</title>
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
    <!-- navegación -->
    <div class="border-bottom shadow-sm">
        <nav class="navbar navbar-light py-2">
            <div class="container justify-content-center justify-content-lg-between">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo/freshcart-logo.svg" alt="" class="d-inline-block align-text-top" />
                </a>

            </div>
        </nav>
    </div>

    <main>
        <!-- sección -->

        <section class="my-lg-14 my-8">
            <!-- contenedor -->
            <div class="container">
                <!-- fila -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                        <!-- imagen -->
                        <img src="assets/images/svg-graphics/signup-g.svg" alt="" class="img-fluid" />
                    </div>
                    <!-- columna -->
                    <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                        <div class="mb-lg-9 mb-5">
                            <h1 class="mb-1 h2 fw-bold">Comienza a Comprar</h1>
                            <p>¡Bienvenido a FreshCart! Ingresa tu correo electrónico para comenzar.</p>
                        </div>
                        <!-- formulario -->
                        <form class="needs-validation" novalidate>
                            <div class="row g-3">
                                <!-- Campo Nombre -->
                                <div class="col">
                                    <label for="formSignupNombre" class="form-label visually-hidden">Nombre</label>
                                    <input type="text" class="form-control" id="formSignupNombre" name="nombre"
                                        placeholder="Nombre" required />
                                    <div class="invalid-feedback">Por favor, ingresa el nombre.</div>
                                </div>

                                <!-- Campo Apellido -->
                                <div class="col">
                                    <label for="formSignupApellido" class="form-label visually-hidden">Apellido</label>
                                    <input type="text" class="form-control" id="formSignupApellido" name="apellido"
                                        placeholder="Apellido" required />
                                    <div class="invalid-feedback">Por favor, ingresa el apellido.</div>
                                </div>

                                <!-- Campo Correo Electrónico -->
                                <div class="col-12">
                                    <label for="formSignupEmail" class="form-label visually-hidden">Correo
                                        electrónico</label>
                                    <input type="email" class="form-control" id="formSignupEmail" name="correo"
                                        placeholder="Correo electrónico" required />
                                    <div class="invalid-feedback">Por favor, ingresa el correo electrónico.</div>
                                </div>

                                <!-- Campo Contraseña -->
                                <div class="col-12">
                                    <div class="password-field position-relative">
                                        <label for="formSignupPassword"
                                            class="form-label visually-hidden">Contraseña</label>
                                        <input type="password" class="form-control" id="formSignupPassword"
                                            name="contraseña" placeholder="Contraseña" required />
                                        <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                        <div class="invalid-feedback">Por favor, ingresa la contraseña.</div>
                                    </div>
                                </div>

                                <!-- Campo Dirección -->
                                <div class="col-12">
                                    <label for="formSignupDireccion"
                                        class="form-label visually-hidden">Dirección</label>
                                    <input type="text" class="form-control" id="formSignupDireccion" name="direccion"
                                        placeholder="Dirección" required />
                                    <div class="invalid-feedback">Por favor, ingresa la dirección.</div>
                                </div>

                                <!-- Campo Teléfono -->
                                <div class="col-12">
                                    <label for="formSignupTelefono" class="form-label visually-hidden">Teléfono</label>
                                    <input type="tel" class="form-control" id="formSignupTelefono" name="telefono"
                                        placeholder="Teléfono" required />
                                    <div class="invalid-feedback">Por favor, ingresa el teléfono.</div>
                                </div>

                                <!-- Campo Rol (Oculto) -->
                                <input type="hidden" name="rol_id" value="2"> <!-- Rol por defecto es 'user' -->

                                <!-- Botón de Registro -->
                                <div class="col-12 d-grid">
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                </div>

                                <!-- Términos y Política -->
                                <p>
                                    <small>
                                        Al continuar, aceptas nuestros
                                        <a href="#!">Términos de Servicio</a>
                                        y
                                        <a href="#!">Política de Privacidad</a>
                                    </small>
                                </p>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Pie de página -->
    <?php include 'includes/footer.php';?>
    <!-- JavaScript-->
    <!-- Bibliotecas JS -->
    <!-- <script src="assets/libs/jquery/dist/jquery.min.js"></script> -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- JS del Tema -->
    <script src="assets/js/theme.min.js"></script>

    <script src="assets/js/vendors/password.js"></script>

    <script src="assets/js/vendors/validation.js"></script>
</body>

</html>