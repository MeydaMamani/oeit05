<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>OEIT - DIRESA</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="PAGINA DIRESA PASCO">
        <meta name="keywords" content="OEIT DIRESA-PASCO">
        <link rel="shortcut icon" href="./img/logo.jpg">
        <link rel="stylesheet" href="./css/estilos.css">

        <!-- bootstrap -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

        <!-- link para iconos -->
        <link rel="stylesheet" href="./css/materialdesignicons.css">
        <link rel="stylesheet" href="./css/materialdesignicons.min.css">
        
        <!-- JQUERY -->
        <script src="./js/jquery-3.6.0.min.js"></script>

        <!-- notificaciones toastr -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </head>
    <body id="mi_body"><br><br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-end">
                <div class="card">
                    <div class="card-body p-2 border border-primary">
                        <div class="row">
                            <div class="col-md-4 filter_fed mb-2 mt-1">
                                <input class="form-control validanumericos" type="text" name="documento" id="documento" placeholder="Ingrese su dni..." maxlength="8">
                            </div>
                            <div class="col-md-4 filter_fed mt-1">
                                <select class="form-select" name="type" id="type" aria-label="Default select example">
                                    <option value="1">Vacunas</option>
                                    <option value="2">Controles</option>
                                </select>
                            </div>
                            <div class="col-md-4 mt-1 p-0">
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-primary btn-sm m-1" id="btnBuscarVacuna" name="searchVaccine" type="button"><i class="mdi mdi-magnify"></i> Buscar</button>
                                    <button class="btn btn-secondary btn-sm m-1" type="button" id="clearV"><i class="mdi mdi-broom"></i> Limpiar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12"><br><br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card" style="box-shadow: 10px 10px 4px 0 rgba(0, 0, 0, 20%);">
                        <div class="card-body">
                            <div style="background: #3c82e9; width: 96%; height: 6em; position: absolute;"></div>
                            <div class="text-center position-relative">
                                <b class="img-covid">Mis Vacunas Contra la Covid-19</b>
                            </div>
                            <div class="row position-relative">
                                <div class="col-md-3 text-center">
                                    <img src="./img/profile_man.png" class="img-user mb-2" alt="Imagen Usuario" width="140">
                                    <h6 class="text-secondary">DNI: 70969129</h6>
                                </div>
                                <div class="col-md-9 mt-3 mb-2">
                                    <div class="d-flex">
                                        <div class="col-md-6">
                                            <p class="font-17 mb-1"><b>Primera Dosis</b></p>
                                            <p class="font-11 m-0"><b>Fecha: </b><span style="color: #3769b3;">15/04/1997</span></p>
                                            <p class="font-11 m-0"><b>Fab. Vacuna: </b><span style="color: #3769b3;">PFIZER</span></p>
                                            <p class="font-11 m-0"><b>Grupo de Riesgo: </b><span style="color: #3769b3;">Personas de 20 a 29 años</span></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="font-17 mb-1"><b>Segunda Dosis</b></p>
                                            <p class="font-11 m-0"><b>Fecha: </b><span style="color: #3769b3;">15/04/1997</span></p>
                                            <p class="font-11 m-0"><b>Fab. Vacuna: </b><span style="color: #3769b3;">PFIZER</span></p>
                                            <p class="font-11 m-0"><b>Grupo de Riesgo: </b><span style="color: #3769b3;">Personas de 20 a 29 años</span></p>
                                        </div>
                                    </div><br>
                                    <div class="d-flex">
                                        <div class="col-md-6">
                                            <p class="font-17 mb-1"><b>Tercera Dosis</b></p>
                                            <p class="font-11 m-0"><b>Fecha: </b><span style="color: #3769b3;">15/04/1997</span></p>
                                            <p class="font-11 m-0"><b>Fab. Vacuna: </b><span style="color: #3769b3;">PFIZER</span></p>
                                            <p class="font-11 m-0"><b>Grupo de Riesgo: </b><span style="color: #3769b3;">Personas de 20 a 29 años</span></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="font-17 mb-1"><b>Cuarta Dosis</b></p>
                                            <p class="font-11 m-0"><b>Fecha: </b><span style="color: #3769b3;">15/04/1997</span></p>
                                            <p class="font-11 m-0"><b>Fab. Vacuna: </b><span style="color: #3769b3;">PFIZER</span></p>
                                            <p class="font-11 m-0"><b>Grupo de Riesgo: </b><span style="color: #3769b3;">Personas de 20 a 29 años</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>