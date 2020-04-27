<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Unidad Educatica Fiscomisional La Dolorosa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/estilos.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="icon" type="../../assets/img/logo.png" href="/imágenes/mifavicon.png" />
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <body class="home">
        <div class="container-fluid display-table">
            <div class="row display-table-row">
                <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">

                    <div class="logo">
                        <h1>Docentes</h1>
                        <a hef="home.html"><img src="../../assets/img/logo.png" alt="merkery_logo" alt="merkery_logo" class="hidden-xs hidden-sm">
                            <img src="../../assets/img/logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                        </a>

                    </div>
                    <div class="navi">
                        <ul>
                            <li><a href="docente.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Resumen</span></a></li>
                            <li><a href="RevisionAvance.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Revisión de Avances</span></a></li>
                            <li><a href="CriteriosEvaluacion.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Criterios de Evaluación</span></a></li>
                            <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calificaciones</span></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-10 col-sm-11 display-table-cell v-align">
                    <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                    <div class="row">
                        <header id="l1">

                            <div class="col-md-12">
                                <div class="header-rightside">
                                    <ul class="list-inline header-top pull-right">


                                        <li>
                                            <a href="#" class="icon-info">
                                                <i class="fa fa-bell" aria-hidden="true" style="color:white"></i>

                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../../assets/img/teacher.png" alt="user">
                                                <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="navbar-content">
                                                        <span>Jorge Sarmiento Zumba </span>

                                                        <div class="divider">
                                                        </div>
                                                        <a href="#" data-toggle="modal" data-target="#add_project">Editar perfil</a>

                                                    </div>
                                                </li>
                                                <div class="navbar-content">
                                                    <li class="tooltips-general exit-system-button" data-href="../../
                                                    Database/logout.php" data-placement="bottom" title="Salir del sistema"><a href="../../Database/logout.php">Salir</a>
                                                        <i class="zmdi zmdi-power"></i>
                                                    </li>
                                                </div>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </header>
                    </div>
                    <div class="user-dashboard">
                        <ul class="list-group">
                            <li class="list-group-item">

                                <form class="form-horizontal">
                                    <fieldset>
                                        <legend>Busqueda de Estudainte</legend>

                                        <!-- Text input http://getbootstrap.com/css/#forms -->
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Paralelo</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>A</option>
                                                        <option>D</option>
                                                        <option>E</option>
                                                        <option>F</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <!-- Text input http://getbootstrap.com/css/#forms -->

                                                <label for="exampleFormControlSelect1">Proyecto</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Sistema Monográfico</option>
                                                    <option>Planta desalinizadora</option>
                                                    <option>Sistema Financiero</option>
                                                    <option>Plataforma educativa</option>
                                                    <option>Sistema de cultivos</option>
                                                </select>

                                            </div>
                                            <div class="col-sm-4">
                                                <!-- Text input http://getbootstrap.com/css/#forms -->

                                                <label for="exampleFormControlSelect1">Estudiante</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>ABRIGO SUING SANTIAGO JOSUE</option>
                                                    <option>ACARO CURIPOMA ANDY	ALEXANDER</option>
                                                    <option>ALBITO CAJAMARC AJOHATHAN CRISTIAN</option>
                                                    <option>ALVARADO ARIAS JOEL FRANCISCO </option>
                                                    <option>ALVAREZ	LLIVIZACA EDWIN ALEXANDER </option>
                                                    <option>AMAY JUMBO ANNDY JONATHAN</option>
                                                    <option>ARMIJOS	SARMIENTO JOSE PAUL	</option>
                                                    <option>ARMIJOS	SUAREZ EDISON DAVID </option>
                                                    <option>ASTUDILLO SANCHEZNAHIM ALEJANDRO</option>
                                                    <option>AYORA MERINO STEVEN	EDUARDO</option>
                                                    <option>BECERRA	OCHOA DAVID	ANDRES </option>
                                                    <option>BRAVO TAMBO CAMILO EDUARDO	</option>
                                                    <option>BRAVO VASQUEZ ISRAEL ANDRES </option>
                                                </select>
                                                
                                            </div>
                                            <div class="col-sm-1">
                                                <!-- Text input http://getbootstrap.com/css/#forms -->

                                                <button type="button" class="btn btn-primary">Buscar</button>
                                            </div>

                                        </div>
                                    </fieldset>
                                </form>
                            </li>

                        </ul>

                        <div class="panel panel-default">



                            <div class="bs-callout bs-callout-danger">
                                <h4>EDISON DAVID ARMIJOS SUAREZ</h4>

                                <table class="table table-striped table-responsive ">
                                    <thead>
                                        <tr>
                                            <th>Avance</th>
                                            <th>Archivo</th>
                                            <th>Estado</th>
                                            <th>Calificacion</th>
                                            <th>Revisar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Avanse semana 3</td>
                                            <td><img src="../../assets/img/pdf.png"></td>
                                            <td><span class="label label-warning">Por revisar</span></td>
                                            <td>0</td>
                                            <td><a href="#" data-toggle="modal" data-target="#ver1"><button type="button" class="btn btn-primary">Ver</button></a> </td>

                                        </tr>
                                        <tr>
                                            <td>Avanse semana 2</td>
                                            <td><img src="../../assets/img/pdf.png"></td>
                                            <td><span class="label label-success">Revisado</span></td>
                                            <td>100</td>
                                            <td><a href="#" data-toggle="modal" data-target="#ver1"><button type="button" class="btn btn-primary">Ver</button></a> </td>

                                        </tr>
                                        <tr>
                                            <td>Avanse semana 1</td>
                                            <td><img src="../../assets/img/pdf.png"></td>
                                            <td><span class="label label-success">Revisado</span></td>
                                            <td>100</td>
                                            <td><a href="#" data-toggle="modal" data-target="#ver1"><button type="button" class="btn btn-primary">Ver</button></a> </td>

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



        <!-- Modal -->
        <div id="add_project" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header login-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Editar Perfil</h4>
                    </div>


                    <div class="text-center">
                        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                        <h6>Upload a different photo...</h6>
                        <input type="file" class="text-center center-block file-upload">
                    </div>

                    <div class="modal-body">
                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name">
                                        <h4>First name</h4>
                                    </label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name">
                                        <h4>Last name</h4>
                                    </label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone">
                                        <h4>Phone</h4>
                                    </label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile">
                                        <h4>Mobile</h4>
                                    </label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Email</h4>
                                    </label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Location</h4>
                                    </label>
                                    <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password">
                                        <h4>Password</h4>
                                    </label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2">
                                        <h4>Verify</h4>
                                    </label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="cancel" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="add-project" data-dismiss="modal">Guardar</button>
                    </div>
                </div>

            </div>
        </div>









        <div id="ver1" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header login-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Calificacion</h4>
                    </div>

                    <div class="modal-body">
                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">

                                <div class="col-xs-12">
                                    <ul class="list-group">
                                        
                                           
                                                <table>
                                                    <th>
                                                        <tr>
                                                            <td>Criterio </td>
                                                            <td>Parte Monografica</td>
                                                            <td>Califiación</td>
                                                                        <td>Ponderación</td>
                                                        </tr>
                                                    <th>
                                                        <tr>
                                                            <td>Criterio Paralelo A</td>
                                                            <td>Introduccion</td>
                                                            <td> <input type="text" class="form-control" name="first_name" id="first_name" ></td>
                                                            <td>/15</td>
                                                            </tr>
                                                            <tr>
                                                            <td>Criterio Paralelo A</td>
                                                            <td>Objetivos</td>
                                                            <td> <input type="text" class="form-control" name="first_name" id="first_name" ></td>
                                                            <td>/20</td>
                                                        </tr>
                                                        <tr>
                                                    <td>Criterio Paralelo A</td>
                                                    <td>Marco Teorico</td>
                                                    <td> <input type="text" class="form-control" name="first_name" id="first_name" ></td>
                                                    <td>/30</td>
                                                    </tr>
                                                    <tr>
                                                    <td>Criterio Paralelo A</td>
                                                    <td>Desarrollo</td>
                                                    <td> <input type="text" class="form-control" name="first_name" id="first_name" ></td>
                                                    <td>/30</td>
                                                    </tr>
                                                    <tr>
                                                    <td>Criterio Paralelo A</td>
                                                    <td>Bibliografía</td>
                                                    <td> <input type="text" class="form-control" name="first_name" id="first_name" ></td>
                                                    <td>/5</td>
                                                    </tr>
                                                </table>
                                          
                                       
                                        
                                    </ul>
                                </div>
                            </div>


                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="cancel" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="add-project" data-dismiss="modal">Guardar</button>
                    </div>
                </div>

            </div>
        </div>

    </body>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="offcanvas"]').click(function() {
                $("#navigation").toggleClass("hidden-xs");
            });
        });
    </script>
</body>

</html>