<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>OEIT - DIRESA</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="PAGINA DIRESA PASCO">
    <meta name="keywords" content="OEIT DIRESA-PASCO">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <link rel="shortcut icon" href="./img/logo.jpg">

    <!-- link para iconos -->
    <link rel="stylesheet" href="./css/materialdesignicons.css">
    <link rel="stylesheet" href="./css/materialdesignicons.min.css">

	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	<!-- JQUERY -->
	<script src="./js/jquery-3.6.0.min.js"></script>

    <!-- VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <!-- archivos creados -->
	<link rel="stylesheet" href="./css/style2.css">
	<link rel="stylesheet" href="./css/estilos.css">
	<link rel="stylesheet" href="./css/fonts.css">
	<script src="./js/main.js"></script>

	<!-- link paginacion -->
	<link rel="stylesheet" href="./plugin/footable/css/footable.core.css">
	<link rel="stylesheet" href="./css/style_footable.css">

	<!-- link chartjs -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">

	<!-- select2 para buscardor -->
	<link rel="stylesheet" type="text/css" href="./css/select2.css">
	<script src="./plugin/select2/select2.js"></script>

	<!-- notificaciones toastr -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- para cargar archivos -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,900|Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./css/dropify.min.css">

    <link rel="stylesheet" href="./plugin/chartist-js/chartist.min.css">
    <link rel="stylesheet" href="./plugin/chartist-js/chartist-init.css">
    <link rel="stylesheet" href="./plugin/chartist-js/chartist-plugin-tooltip.min.js">
    <link rel="stylesheet" href="./plugin/chartist-js/css-chart.css">
</head>
<body>

<div class="mini-sidebar">
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <img src="./img/diresa1.jpg" alt="homepage" class="dark-logo" width="50"/>
                </a>
            </div>
            <div class="navbar-collapse justify-content-end">
                <ul class="navbar-nav mr-auto mt-md-0 col-1">
                    <li class="nav-item d-block d-sm-block d-md-none"> <a class="nav-link nav-toggler hidden-md-up text-white waves-effect waves-dark"><i class="mdi mdi-menu"></i></a> </li>
                    <li class="nav-item m-l-10 d-block d-sm-block d-md-none"> <a class="nav-link sidebartoggler hidden-sm-down text-white waves-effect waves-dark" id="sidebartoggler"><i class="mdi mdi-menu"></i></a> </li>
                </ul>
                <ul class="navbar-nav my-lg-0 col-11 justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="./img/profile_man.png" alt="user" class="profile-pic" /> &nbsp; Administrador</a>
                        <div class="dropdown-menu dropdown-menu-right scale-up">
                            <ul class="dropdown-user">
                                <li><a href="index.php"><i class="mdi mdi-power"></i> Cerrar Sesión</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- <div class="user-profile">
                <div class="profile-img"> <img src="./img/oeit.png" alt="user" /></div>
            </div> -->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-devider"></li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><img src="./img/menu/fed.png" width="30" alt="icon-fed"><span class="hide-menu"> Fed</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="#" class="has-arrow">Niños</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="r_pr3m4tur0.php">Niños Prematuros (CG SI-03)</a></li>
                                    <li><a href="r_tmz_n30.php">TMZ Neonatal (CG SI-02)</a></li>
                                    <li><a href="r_4m.php">Suplementación 4 meses (CG SI-04)</a></li>
                                    <li><a href="r_68m.php">Inicio Oportuno (CG SI-05)</a></li>
                                    <li><a href="r_cr3d_m35.php">Cred Avance Mensual</a></li>
                                    <li><a href="r_cr3d.php">CRED (CG SI-06)</a></li>
                                    <li><a href="r_p4qu3t3_n1n0.php">Paquete Completo</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="has-arrow">Gestantes</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="r_b4t3r14_c0mpl3t4.php">Bateria Completa (CG SI-01)</a></li>
                                    <li><a href="r_g35t4nt3_tr4t4m13nt0.php">Gestantes con TMZ e Inicio de Tratamiento por Violencia (CG VI-01)</a></li>
                                    <li><a href="r_u5u4r145_nu3v45.php">Usuarias Nuevas con TMZ de Violencia (CG VI-02)</a></li>
                                    <li><a href="r_p4qu3t3_g35t4nt3.php">Paquete Completo</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="has-arrow">Medicamentos</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="pr0f35510n4l5.php">Cantidad de Profesionales EPP (2020 FED)</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">SIS-COVID</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="s15c0v1d.php">SIS-COVID</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><img src="./img/menu/tracing.png" width="30" alt="icon-tracing"><span class="hide-menu"> Seguimiento</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="p4t13nt_d3t41l.php">Detalle Paciente</a></li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">Niños</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="s36_n30n4t4l.php">Tamizaje Neonatal</a></li>
                                    <li><a href="s36_4mV151t4.php">4 Meses con Suplementación y Visita</a></li>
                                </ul>
                            </li>
                            <li><a href="s36_pn.php">Padrón Nominal</a></li>
                            <li><a href="d35p4r4c1t4c10n.php">Desparacitación</a></li>
                            <li><a href="h0m0l0g4t10n.php">Homologación</a></li>
                            <li><a href="fl4t_f1l3.php">Archivos Planos</a></li>
                            <li><a href="pr0ms4.php">Promsa</a></li>
                            <li><a href="r40.php">R40</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><img src="./img/menu/indicartors.png" width="30" alt="icon-tracing"><span class="hide-menu"> Indicadores Diresa</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="c0nv3n105_635t10n.php">Convenios de Géstion</a></li>
                            <li><a href="pPr35upu35t4l35.php">Programas Presupuestales</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><img src="./img/menu/covid.png" width="30" alt="icon-tracing"><span class="hide-menu"> Covid-19</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="https://drive.google.com/file/d/1qR2KiCh3DRyp1OyiJZ2xjBJMpZQxmaSi/view" target="_blank">Descargar Consentimiento</a></li>
                            <li><a href="s36_y0urV4cc1n4t10n.php">Consulta tu Vacunación</a></li>
                            <li><a href="#">Consulta Padrón</a></li>
                            <li><a href="v4cun4c10n_c0v1d.php">Vacunación Covid</a></li>
                            <!-- <li><a href="r1sk_6r0up.php">Grupo de Riesgo</a></li> -->
                            <li><a href="c_v4cc1n3_C0n50l1d4t10n.php">Consolidado Vacuna</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><img src="./img/menu/pn.png" width="30" alt="icon-tracing"><span class="hide-menu"> Padrón Nominal</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="#">Padrón Niños</a></li>
                            <li><a href="pn_p4dr0n635t4nt35.php">Padrón Gestantes</a></li>
                        </ul>
                    </li>
                    <!-- <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-school"></i><span class="hide-menu"> Educación</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="reincorporacion.php">Reincorporación</a></li>
                        </ul>
                    </li> -->
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><img src="./img/menu/analytics.png" width="30" alt="icon-tracing"><span class="hide-menu"> Tableros</span></a>
                        <ul aria-expanded="false" class="collapse">
                        <li><a href="t4bl3r0.php">Tablero</a></li>
                        <li><a href="#">Avance de Convenios de Gestión</a></li>
                            <li><a href="#">Avance ESNI Regular</a></li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">Niño Sello</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="https://app.powerbi.com/view?r=eyJrIjoiYjlhNDlmNzItYTdlYS00ZjEwLWFhNjktOGZjOTUxMDA4MmZkIiwidCI6IjE2ZWJhMGRlLTYwNDktNDczNS1iMGE3LWIwOGE3YWE4YjdhNSJ9" target="_blank">Avance Covid</a></li>
                                    <!-- <li><a href="fed_indicator_board.php">Avance Indicadores FED</a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
</div>