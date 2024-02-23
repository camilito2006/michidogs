    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Focus Admin: Creative Admin Dashboard</title>
        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
        <!-- Styles -->
        <link href="../dashboard/css/style.css" rel="stylesheet">
        <link href="../dashboard/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
        <link href="../dashboard/css/lib/chartist/chartist.min.css" rel="stylesheet">
        <link href="../dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
        <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
        <link href="../dashboard/css/lib/owl.carousel.min.css" rel="stylesheet" />
        <link href="../dashboard/css/lib/owl.theme.default.min.css" rel="stylesheet" />
        <link href="../dashboard/css/lib/weather-icons.css" rel="stylesheet" />
        <link href="../dashboard/css/lib/menubar/sidebar.css" rel="stylesheet">
        <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
        <link href="../dashboard/css/lib/helper.css" rel="stylesheet">
    </head>

    <body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <ul>
                    <div class="logo"><a href="index.html"><img src="../../Views/images/logo.png" height="80px" width="80px" alt="logo perro y gato" /></a></div>

                        <li><a href="home.php"><i class="ti-home"></i> inicio</a></li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> Usuarios <span
                                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="registrarUser.php">Registrar</a></li>
                                <li><a href="verUsers.php">Ver</a></li>
                                <li><a href="reportesUser.php">Reportes</a></li>

                            </ul>
                        </li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-bag"></i> Productos <span
                                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="#">Registrar Productos</a></li>
                                <li><a href="../dashborad/chart-flot.html">Ver Productos</a></li>
                                <li><a href="../dashborad/chart-morris.html">Envio</a></li>

                            </ul>
                        </li>
                        
                        <li><a class="sidebar-sub-toggle"><i class="ti-bag"></i> Inventario <span
                                    class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="#">Entradas</a></li>
                                <li><a href="#">Salidas</a></li>
                                <li><a href="#">Cantidad Disponible</a></li>
                                <li><a href="#">Inventario</a></li>

                            </ul>
                        </li>
                        

                        <li><a><i class="ti-close"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->

        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="float-right">
                            <div class="dropdown dib">
                                <div class="header-icon" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <div class="drop-down dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">Recent Notifications</span>
                                        </div>
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                            src="images/avatar/3.jpg" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                                PM</small>
                                                            <div class="notification-heading">Mr. John</div>
                                                            <div class="notification-text">5 members joined today </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                            src="images/avatar/3.jpg" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                                PM</small>
                                                            <div class="notification-heading">Mariam</div>
                                                            <div class="notification-text">likes a photo of you</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                            src="images/avatar/3.jpg" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                                PM</small>
                                                            <div class="notification-heading">Tasnim</div>
                                                            <div class="notification-text">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                            src="images/avatar/3.jpg" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                                PM</small>
                                                            <div class="notification-heading">Mr. John</div>
                                                            <div class="notification-text">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="text-center">
                                                    <a href="#" class="more-link">See All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown dib">
                                <div class="header-icon" data-toggle="dropdown">
                                    <i class="ti-email"></i>
                                    <div class="drop-down dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">2 New Messages</span>
                                            <a href="../dashboard/email.html">
                                                <i class="ti-pencil-alt pull-right"></i>
                                            </a>
                                        </div>
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li class="notification-unread">
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                            src="../dashboard/images/avatar/1.jpg" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                                PM</small>
                                                            <div class="notification-heading">Michael Qin</div>
                                                            <div class="notification-text">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="notification-unread">
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                            src="../dashboard/images/avatar/2.jpg" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                                PM</small>
                                                            <div class="notification-heading">Mr. John</div>
                                                            <div class="notification-text">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                            src="images/avatar/3.jpg" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                                PM</small>
                                                            <div class="notification-heading">Michael Qin</div>
                                                            <div class="notification-text">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                            src="images/avatar/2.jpg" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                                PM</small>
                                                            <div class="notification-heading">Mr. John</div>
                                                            <div class="notification-text">Hi Teddy, Just wanted to let you
                                                                ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="text-center">
                                                    <a href="#" class="more-link">See All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown dib">
                                <div class="header-icon" data-toggle="dropdown">
                                    <span class="user-avatar">John
                                        <i class="ti-angle-down f-s-10"></i>
                                    </span>
                                    <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">Upgrade Now</span>
                                            <p class="trial-day">30 Days Trail</p>
                                        </div>
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="ti-user"></i>
                                                        <span>Profile</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ti-email"></i>
                                                        <span>Inbox</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="ti-settings"></i>
                                                        <span>Setting</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ti-lock"></i>
                                                        <span>Lock Screen</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="ti-power-off"></i>
                                                        <span>Logout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
              
                    <!-- /# row -->
                    <section id="main-content">
                            
                            <div class="row">
                            <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h1>REGISTRAR PRODUCTOS - ADMINISTRADOR</h1>
                                    <h4>Completa los campos para registrar los productos</h4>

                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                 <form action="../../Controllers/administrador/registrarProducto.php" method="POST">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Nombre Producto</label>
                                        <input type="text"  name="nombreProducto"class="form-control" placeholder="Nombre Producto">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Marca Producto</label>
                                        <input type="text"  name="marca"class="form-control" placeholder="Marca Producto">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Precio</label>
                                        <input type="number" name="precio" class="form-control" placeholder="Precio">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Fecha Vencimiento</label>
                                        <input type="date" name="fecha" class="form-control" placeholder="Fecha">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Stock</label>
                                        <input type="number" name="stock" class="form-control" placeholder="Cantidad">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Peso</label>
                                        <input type="text" name="peso" class="form-control" placeholder="Peso">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Disponibilidad</label>
                                        <select class="form-control" name="disponibilidad" id="">
                                             <option>Seleccione una opcion</option>
                                             <option value="si">Si</option>
                                             <option value="no">No</option>
                                        </select>
                                    </div>

                                    <div  class="form-group col-md-6">                                      
                                          <label>Tipo Mascota</label>
                                        <select  class="form-control" name="tipoMascota" id="">
                                            <option >Seleccione una opcion</option>
                                            <option value="gato">Gato</option>
                                            <option value="perro">Perro</option>
                                        </select>
                                    </div>
                                    <div  class="form-group col-md-6">                                      
                                          <label>Categoria</label>
                                        <select  class="form-control" name="categoria" id="">
                                            <option >Seleccione una opcion</option>
                                            <option value="1">Juguete</option>
                                            <option value="2">Accesorio</option>
                                            <option value="3">Alimento</option>
                                            <option value="4">Snack</option>
                                            <option value="5">Medicamento</option>  
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Imagen</label>
                                        <input type="file" aceept=".png,.jpg,.jpeg,.gif" name="imagen" class="form-control" placeholder="imagen">
                                    </div>
                                    <div  class="form-group col-md-12">                                            
                                            <textarea  placeholder="Descripcion Producto" name="descripcion" id="" cols="207" rows="5"></textarea>
                                    </div>
                                </div>

                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Registrar Usuario</button>
                               


                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- jquery vendor -->
        <script src="../dashboard/js/lib/jquery.min.js"></script>
        <script src="../dashboard/js/lib/jquery.nanoscroller.min.js"></script>
        <!-- nano scroller -->
        <script src="../dashboard/js/lib/menubar/sidebar.js"></script>
        <script src="../dashboard/js/lib/preloader/pace.min.js"></script>
        <!-- sidebar -->

        <script src="../dashboard/js/lib/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <!-- bootstrap -->

        <script src="../dashboard/js/lib/calendar-2/moment.latest.min.js"></script>
        <script src="../dashboard/js/lib/calendar-2/pignose.calendar.min.js"></script>
        <script src="../dashboard/js/lib/calendar-2/pignose.init.js"></script>


        <script src="../dashboard/js/lib/weather/jquery.simpleWeather.min.js"></script>
        <script src="../dashboard/js/lib/weather/weather-init.js"></script>
        <script src="../dashboard/js/lib/circle-progress/circle-progress.min.js"></script>
        <script src="../dashboard/js/lib/circle-progress/circle-progress-init.js"></script>
        <script src="../dashboard/js/lib/chartist/chartist.min.js"></script>
        <script src="../dashboard/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
        <script src="../dashboard/js/lib/sparklinechart/sparkline.init.js"></script>
        <script src="../dashboard/js/lib/owl-carousel/owl.carousel.min.js"></script>
        <script src=../dashboard/js/lib/owl-carousel/owl.carousel-init.js"></script>
        <!-- scripit init-->
        <script src="js/dashboard2.js"></script>
    </body>

    </html>