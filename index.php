<?php
require_once("Models/consultasUsuario.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <header>
            <div class="fixed-top navegacionHome">
            <nav class="navbar navbar-expand-lg bg-warning">
              <div class="container-fluid" >
                  <img class="logoNav" src="Views/images/logo.png" alt=""/>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <form class="d-flex rounded-3">
                          <button class="border-0 iconoBuscador ms-2" type="submit"><i class="bi bi-search"></i></button>
                          <input class="form-control me-2 border-0 shadow-none" type="search" placeholder="Search" name="producto" aria-label="Search"/>
                      </form>
                      <div class="ms-auto">
                          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                  <a href='index.php' class="nav-link" aria-current="page">Home</a>
                              </li>
                              <li class="nav-item">
                                  <a href='#' class="nav-link" aria-current="page" >Servicios</a>
                              </li>
                              <li class="nav-item">
                                  <a href='#'  class="nav-link" aria-current="page" >Productos</a>
                              </li>
                              <li class="nav-item">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger botonNavInicio" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                       Iniciar sesion
                                    </button>  
                            </li>
                            
                          </ul>
                      </div>
                  </div>
                </div>
                
            </nav>
            </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="headerModal">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <h2><img src="https://static.vecteezy.com/system/resources/previews/009/521/733/non_2x/dog-silhouette-dog-vector.jpg"  height="30px"  width="25px" alt="">Inicio Michidogs</h2>
                        <label for="" class="lineaDecorativa" ></label>
                        <div class="modal-body">
                            <form action="Controllers/cliente/inicioController.php" method="POST">
                                <div class="row">
                                  <div class="form-group col-md-12" >
                                    <input type="email"  class="form-control inputInicio" required name="usuario" id="email"  placeholder="Email"/>
                                  </div>
                                  <div class="form-group col-md-12" >
                                      <input type="password"  class="form-control inputInicios" required name="contrasena" id="conPassword"  placeholder="Confirmar Contraseña"/>
                                    </div>
                                </div>
                                <label for="" class="linkCuenta"> <a href="">Recuperar Contraseña</a> </label>
                                <button type="submit" class="botonIniciar">Iniciar Sesión</button>
                              </form>
                              <a href="Views/usuarios/registro.html" class="crearCuenta">¿Cliente nuevo?  Crear cuenta </a>
                        </div>
                    </div>
                    </div>
                </div>
  
        
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://laika.com.co/cdn-cgi/image/format=auto,quality=80,sharpen=1/https://laikapp.s3.amazonaws.com/dev_images_banners/97b49b73fd3dd35b15ffdf4b7a737c87_1701396143.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://laika.com.co/cdn-cgi/image/format=auto,quality=80,sharpen=1/https://laikapp.s3.amazonaws.com/dev_images_banners/327f731ac669d6bf165851ce1413d460_1704559810.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://laika.com.co/cdn-cgi/image/format=auto,quality=80,sharpen=1/https://laikapp.s3.amazonaws.com/dev_images_banners/f842937ec753b985f63c8e0e6cf34080_1703092439.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <i class="bi bi-arrow-left-circle"></i>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <i class="bi bi-arrow-right-circle"></i>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </header>
    <main>
      <section class="categoriaProductos">
          <div class="categoriaPerro">
              <img height="120px" width="120px" src="https://cdn.pixabay.com/photo/2023/10/19/12/42/logo-8326598_1280.jpg" alt="">
              <button>Perros</button>
          </div>
          <span>AQUI ENCONTRARÁS LOS MEJORES <br> PRODUCTOS PARA TUS MASCOTAS</span>
          <div class="categoriaGato">
              <img height="120px" width="120px" src="https://cdn.pixabay.com/photo/2023/11/08/19/17/ai-generated-8375638_1280.jpg" alt="">
              <button>Gatos</button>
          </div>
      </section>

      <div class="container mt-4">
        <h2 class="mb-4">Nuestros Productos</h2>
    
        <div id="productCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    <div class="row" >
                        <div class="col-md-3 col-sm-6" >
                            <div class="product-card">
                                <img src="https://petparadise.com.co/wp-content/uploads/2023/07/Chef-Guau-Especial-300x300.png" alt="Producto 1">
                                <h5 class="mt-3">Producto 1</h5>
                                <p>Descripción del producto 1. Precio: $10.99</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="product-card">
                                <img src="https://petparadise.com.co/wp-content/uploads/2023/07/Chef-Guau-Especial-300x300.png" alt="Producto 2">
                                <h5 class="mt-3">Producto 2</h5>
                                <p>Descripción del producto 2. Precio: $12.99</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="product-card">
                                <img src="https://petparadise.com.co/wp-content/uploads/2023/07/Chef-Guau-Especial-300x300.png" alt="Producto 3">
                                <h5 class="mt-3">Producto 3</h5>
                                <p>Descripción del producto 3. Precio: $14.99</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="product-card">
                                <img src="https://petparadise.com.co/wp-content/uploads/2023/07/Chef-Guau-Especial-300x300.png" alt="Producto 3">
                                <h5 class="mt-3">Producto 4</h5>
                                <p>Descripción del producto 4. Precio: $14.99</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="product-card">
                                <img src="https://petparadise.com.co/wp-content/uploads/2023/07/Chef-Guau-Especial-300x300.png" alt="Producto 4">
                                <h5 class="mt-3">Producto 5</h5>
                                <p>Descripción del producto 5. Precio: $16.99</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="product-card">
                                <img src="https://petparadise.com.co/wp-content/uploads/2023/07/Chef-Guau-Especial-300x300.png" alt="Producto 5">
                                <h5 class="mt-3">Producto 6</h5>
                                <p>Descripción del producto 6. Precio: $18.99</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="product-card">
                                <img src="https://petparadise.com.co/wp-content/uploads/2023/07/Chef-Guau-Especial-300x300.png" alt="Producto 6">
                                <h5 class="mt-3">Producto 7</h5>
                                <p>Descripción del producto 7. Precio: $20.99</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="product-card">
                                <img src="https://petparadise.com.co/wp-content/uploads/2023/07/Chef-Guau-Especial-300x300.png" alt="Producto 6">
                                <h5 class="mt-3">Producto 8</h5>
                                <p>Descripción del producto 8. Precio: $20.99</p>
                            </div>
                        </div>
                    </div>
                </div>
    
    
            </div>
            <a class="carousel-control-prev" href="#productCarousel" role="button" data-bs-slide="prev">
                <i class="bi bi-arrow-left-square"></i>
            </a>
            <a class="carousel-control-next" href="#productCarousel" role="button"  data-bs-slide="next">
                <i class="bi bi bi-arrow-right-square"></i>
            </a>
        </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
    <script>
<?php if (isset($_SESSION['mostrarModalInicioSesion']) && $_SESSION['mostrarModalInicioSesion'] == true) { ?>
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
    myModal.show();
    <?php unset($_SESSION['mostrarModalInicioSesion']); ?>
<?php } ?>
    </script>
</body>
</html>