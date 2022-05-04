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
        <link rel="stylesheet" href="./css/styleVaccine.css">

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
        <script src="./js/hammer/hammer.min.js"></script>
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
                    <div class="vacunas_covid"></div>
                </div>
            </div>
        </div>
        <script src="./js/othres/p4t13nt_d3t41l.js"></script>
    </body>
</html>