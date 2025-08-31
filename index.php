<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="#" type="image/x-icon">

        <!-- CSS - Bootstrap 5.3.8 - CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <!-- CSS - FontAwesome 7.0.0 -->
        <link rel="stylesheet" href="Util/fontawesome/css/all.min.css">
        <!-- CSS - Toastr 2.1.4 - CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">

        <title>Carrito de Compras Online</title>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item ms-3">
                            <img src="Util/Img/cart.webp" type="button" width="30" height="30" alt="image">

                            <span id="counter" style="position:relative; bottom: 10px; right: 12px;" class="badge bg-dark">-</span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <h3>Shop</h3>

            <div class="row">
                <div class="col-md-2 mt-5">
                    <img src="Util/Img/Product/soda.png" width="175" height="175" alt="image">

                    <div class="text-start">
                        <strong style="font-size: 20px">Coca Cola</strong><br>
                        <strong>$4.00</strong><br>
                        <strong>100 sold</strong><br>
                        <button type="button"class="btn btn-outline-success">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </div><!-- /.col-md-2 -->

                <div class="col-md-2 mt-5">
                    <img src="Util/Img/Product/coffee.png" width="175" height="175" alt="image">

                    <div class="text-start">
                        <strong style="font-size: 20px">Coffee</strong><br>
                        <strong>$15.00</strong><br>
                        <strong>20 sold</strong><br>
                        <button type="button"class="btn btn-outline-success">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </div><!-- /.col-md-2 -->

                <div class="col-md-2 mt-5">
                    <img src="Util/Img/Product/eggs.webp" width="175" height="175" alt="image">

                    <div class="text-start">
                        <strong style="font-size: 20px">Eggs</strong><br>
                        <strong>$2.00</strong><br>
                        <strong>50 sold</strong><br>
                        <button type="button"class="btn btn-outline-success">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </div><!-- /.col-md-2 -->

                <div class="col-md-2 mt-5">
                    <img src="Util/Img/Product/lays.webp" width="175" height="175" alt="image">

                    <div class="text-start">
                        <strong style="font-size: 20px">Lays</strong><br>
                        <strong>$23.00</strong><br>
                        <strong>56 sold</strong><br>
                        <button type="button"class="btn btn-outline-success">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </div><!-- /.col-md-2 -->

                <div class="col-md-2 mt-5">
                    <img src="Util/Img/Product/milk.webp" width="175" height="175" alt="image">

                    <div class="text-start">
                        <strong style="font-size: 20px">Milk</strong><br>
                        <strong>$57.00</strong><br>
                        <strong>250 sold</strong><br>
                        <button type="button"class="btn btn-outline-success">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </div><!-- /.col-md-2 -->

                <div class="col-md-2 mt-5">
                    <img src="Util/Img/Product/pringles.png" width="175" height="175" alt="image">

                    <div class="text-start">
                        <strong style="font-size: 20px">Prigles</strong><br>
                        <strong>$30.00</strong><br>
                        <strong>55 sold</strong><br>
                        <button type="button"class="btn btn-outline-success">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </div><!-- /.col-md-2 -->

                <div class="col-md-2 mt-5">
                    <img src="Util/Img/Product/lays.webp" width="175" height="175" alt="image">

                    <div class="text-start">
                        <strong style="font-size: 20px">Lays</strong><br>
                        <strong>$7.00</strong><br>
                        <strong>23 sold</strong><br>
                        <button type="button"class="btn btn-outline-success">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </div><!-- /.col-md-2 -->

                <div class="col-md-2 mt-5">
                    <img src="Util/Img/Product/pringles.png" width="175" height="175" alt="image">

                    <div class="text-start">
                        <strong style="font-size: 20px">Pringles</strong><br>
                        <strong>$18.00</strong><br>
                        <strong>67 sold</strong><br>
                        <button type="button"class="btn btn-outline-success">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </div><!-- /.col-md-2 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </body>

    <!-- JS - jQuery 3.7.1 - CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- JS - Bootstrap 5.3.8 - CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!-- JS - Toastr 2.1.4 - CDN -->
    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
    <!-- SweetAlert2 v11.22.5 - CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Custom JS -->
    <script src="index.js"></script>
</html>