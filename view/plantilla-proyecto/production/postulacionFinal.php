<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Postulacion</title>

<!-- Bootstrap -->
<link href="View/plantilla-proyecto/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="View/plantilla-proyecto/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="View/plantilla-proyecto/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="View/plantilla-proyecto/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-fire"></i><span>Contra el Fuego</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>John Doe</h2>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="index2.html">Dashboard2</a></li>
                    <li><a href="index3.html">Dashboard3</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="form.html">General Form</a></li>
                    <li><a href="form_advanced.html">Advanced Components</a></li>
                    <li><a href="form_validation.html">Form Validation</a></li>
                    <li><a href="form_wizards.html">Form Wizard</a></li>
                    <li><a href="form_upload.html">Form Upload</a></li>
                    <li><a href="form_buttons.html">Form Buttons</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="tables.html">Tables</a></li>
                    <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="chartjs.html">Chart JS</a></li>
                    <li><a href="chartjs2.html">Chart JS2</a></li>
                    <li><a href="morisjs.html">Moris JS</a></li>
                    <li><a href="echarts.html">ECharts</a></li>
                    <li><a href="other_charts.html">Other Charts</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                    <li><a href="fixed_footer.html">Fixed Footer</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="page_403.html">403 Error</a></li>
                    <li><a href="page_404.html">404 Error</a></li>
                    <li><a href="page_500.html">500 Error</a></li>
                    <li><a href="plain_page.html">Plain Page</a></li>
                    <li><a href="login.html">Login Page</a></li>
                    <li><a href="pricing_tables.html">Pricing Tables</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="#level1_1">Level One</a>
                    </li>
                    <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li class="sub_menu"><a href="level2.html">Level Two</a>
                        </li>
                        <li><a href="#level2_1">Level Two</a>
                        </li>
                        <li><a href="#level2_2">Level Two</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#level1_2">Level One</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars" style="color:#000000"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown"
                  data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt="">John Doe
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:;"> Profile</a>
                  <a class="dropdown-item" href="javascript:;">
                    <span class="badge bg-red pull-right">50%</span>
                    <span>Settings</span>
                  </a>
                  <a class="dropdown-item" href="javascript:;">Help</a>
                  <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>

              <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown"
                  aria-expanded="false">
                  <i class="fa fa-envelope-o" style="color:#000000"></i>
                  <span class="badge bg-light">7</span>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="text-center">
                      <a class="dropdown-item">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Fase Postulacion</h3>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Datos Personales:&nbsp; </h2>
                  <h2>Halan Briones</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br>
                  <form class="form-label-left input_mask" method="post" action="?a=guardar">
                    <div class="row" style="padding: 15px;">
                      <div class="col-sm-12 col-md-6">
                        <div class="form-group col-sm-12">
                          <label class="col-form-label col-sm-6 ">Rut </label>
                          <div class="col-md-12  form-group has-feedback">
                            <input type="text" name="rut" class="form-control has-feedback-left" id="inputSuccess2" placeholder="19.325.256-2">
                            <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
              
                        <div class="form-group col-sm-12">
                          <label class="col-form-label col-sm-6 ">Nombres </label>
                          <div class="col-md-12 col-sm-12  form-group has-feedback">
                            <input type="text" name="nombre" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Halan Alberto">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
              
                        <div class="form-group col-sm-12">
                          <label class="col-form-label col-sm-6 ">Apellido Paterno </label>
                          <div class="col-md-12 col-sm-12  form-group has-feedback">
                            <input type="text" name="apellido_paterno" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Brito">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
              
                        <div class="form-group col-sm-12">
                          <label class="col-form-label col-sm-6 ">Apellido Materno </label>
                          <div class="col-md-12  form-group has-feedback">
                            <input type="text" name="apellido_materno" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Briones">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>

                        <div class="form-group col-sm-12">
                          <label class="col-form-label col-sm-6 ">Educacion </label>
                          <div class="col-md-12 col-sm- ">
                            <select class="select2_group form-control educ" name="nivel_estudio">
                              <option value="oo">Nivel de Educación</option>
                              <optgroup label="Enseñanza basica">
                                <option value="AK">No cursada</option>
                                <option value="HI">Incompleta</option>
                                <option value="WA">Completa</option>
                              </optgroup>
                              <optgroup label="Enseñanza media">
                                <option value="CA">No cursada</option>
                                <option value="NV">Incompleta</option>
                                <option value="OR">Completa</option>
                              </optgroup>
                              <optgroup label="Enseñanza superior">
                                <option value="AZ">Cursando</option>
                                <option value="CO">Completa</option>
                              </optgroup>
                            </select>
                            <span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
              
                        <div class="form-group col-sm-12">
                          <label class="col-form-label col-sm-6 ">Fecha Nacimiento </label>
                          <div class="col-md-12  form-group has-feedback">
                            <input type="date" name="fecha_nacimiento" class="form-control has-feedback-left" id="inputSuccess2">
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
              
                        <div class="form-group col-sm-12">
                          <label class="col-form-label col-sm-6 ">Direccion </label>
                          <div class="col-md-12  form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2"
                              placeholder="El Pino 845 Las lomas, Los angeles">
                            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
                      </div>
              
                      <div class="col-sm-12 col-md-6">
                        
              
                        <div class="form-group col-sm-12">
                          <label class="col-form-label col-sm-6 ">Region </label>
                          <div class="col-md-12 col-sm- ">
                            <select class="select2_group form-control educ" >
                               <option value="oo">Ingresar Region</option> 
                              <optgroup label="Regiones de Chile">
                                <option value="AA">Region de Arica y Parinacota</option>
                                <option value="BB">Region de Taparacá</option>
                                <option value="CC">Region de Antofagasta</option>
                                <option value="DD">Region de Atacama</option>
                                <option value="EE">Region de Coquimbo</option>
                                <option value="FF">Region de Valparaíso</option>
                                <option value="GG">Region Metropolitana</option>
                                <option value="HH">Region de O´Higgins</option>
                                <option value="II">Region del Maule</option>
                                <option value="JJ">Region de Ñuble</option>
                                <option value="KK">Region del BioBio</option>
                                <option value="LL">Region de la Araucanía</option>
                                <option value="MM">Region de Los Ríos</option>
                                <option value="NN">Region de Los Lagos</option>
                                <option value="OO">Region de Aysén</option>
                                <option value="PP">Region de Magallanes</option>
                              </optgroup>
                             
                            </select>
                            <span class="fa fa-arrows form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
              
                        <div class="form-group col-sm-12">
                          <label class="col-form-label col-sm-6 ">Telefono Personal </label>
                          <div class="col-md-12  form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="+569 48573923">
                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
              
                        <div class="form-group col-sm-12">
                          <label class="col-form-label col-sm-6 ">Telefono de Emergencia </label>
                          <div class="col-md-12  form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="+569 56764939">
                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
              
                        <div class="form-group col-sm-12">
                          <label class="col-form-label col-sm-6 ">Sexo </label>
                          <div class="col-md-12  form-group has-feedback">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                                checked>
                              <label class="form-check-label" for="exampleRadios1">
                                Masculino
                              </label>
                              <span class="fa fa-male form-control-feedback genero "></span>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                              <label class="form-check-label" for="exampleRadios2">
                                Femenino
                              </label>
                              <span class="fa fa-female form-control-feedback genero"></span>
                            </div>
              
              
                          </div>
                        </div>
              
                        <div class="form-group col-sm-12">
                          <label class="col-form-label col-sm-6 ">Email </label>
                          <div class="col-md-12  form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2"
                              placeholder="halan.briones1701@alumnos.ubiobio.cl">
                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
              
                        <div class="form-group col-sm-12">
                          <label class="col-form-label col-sm-6 ">Repetir Email </label>
                          <div class="col-md-12  form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2"
                              placeholder="halan.briones1701@alumnos.ubiobio.cl">
                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
              
                        <div class="form-group col-sm-12">
                          <label class="col-form-label col-sm-6 ">Campos de Enfermedades</label>
                          <div class="col-md-12  form-group has-feedback">
                            <textarea class="form-control has-feedback-left" name="" id="" cols="30" rows="5"> </textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <input class="btn btn-success shadow" type="submit" value="Enviar">
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Cedula de identidad <small>Adjuntar una foto/scaneo de la cedula de identidad</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br>
                  <a href="#">
                  <span class="fa fa-paperclip shadow form-control-feedback left" aria-hidden="true"></span>
                  <br>
                  <br>
                  <!--<input class="btn btn-default shadow   bg-white " type="submit" value="Subir Archivo">-->
                  </a>
                  <br>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 col-sm-12  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Certificado de antecedentes <small>Adjuntar el archivo .pdf del certificado de antecedentes</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br>
                  <a href="#">
                  <span class="fa fa-paperclip shadow form-control-feedback left" aria-hidden="true"></span>
                  <br>
                  <br>
                  <!--<input class="btn btn-default shadow   bg-white " type="submit" value="Subir Archivo">-->
                  </a>
                  <br>
                </div>
              </div>
            </div>
          </div>

          <div class="row justify-content-end">
            <button class="btn btn-success boton">Guardar</button>
          </div>

        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>


  <style>
    .educ {
      padding-left: 40px;
    }

    .genero {
      margin-top: -3px;
    }

    .boton{
      margin-right: 50px;
    }
  </style>

  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
</body>

</html>