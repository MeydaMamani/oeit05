<?php
    // error_reporting(0);
    require('abrir.php');

    // if(isset($_GET['searchVaccine'])){
        $dni = $_POST['doc'];
        $consult_vaccine = "SELECT * FROM VACUNADOS where NUM_DOC='$dni'";
        $result_vaccine = sqlsrv_query($conn, $consult_vaccine);

        $information = "";
                while ($consulta = sqlsrv_fetch_array($result_vaccine)){
                    if(is_null ($consulta['PRIMERA']) ){ $newdate = '<span class="text-danger">Pendiente</span>'; }
                    else{ $newdate = $consulta['PRIMERA'] -> format('d/m/y');
                        $newdate = '<span style="color: #3769b3;">' . $newdate . '</span>';
                    }

                    if(is_null ($consulta['PRIMERA_FAB']) ){ $newdate2 = '<span class="text-danger">Pendiente</span>'; }
                    else{ $newdate2 = $consulta['PRIMERA_FAB'];
                        $newdate2 = '<span style="color: #3769b3;">' . $newdate2 . '</span>';
                    }

                    if(is_null ($consulta['PRIMERA_GRUPO']) ){ $newdate3 = '<span class="text-danger">Pendiente</span>'; }
                    else{ $newdate3 = str_replace("ni", "ñ", $consulta['PRIMERA_GRUPO']);
                        $newdate3 = '<span style="color: #3769b3;">' . $newdate3 . '</span>';
                    }

                    if(is_null ($consulta['SEGUNDA']) ){ $newdate4 = '<span class="text-danger">Pendiente</span>'; }
                    else{ $newdate4 = $consulta['SEGUNDA'] -> format('d/m/y');
                        $newdate4 = '<span style="color: #3769b3;">' . $newdate4 . '</span>';
                    }

                    if(is_null ($consulta['SEGUNDA_FAB']) ){ $newdate5 = '<span class="text-danger">Pendiente</span>'; }
                    else{ $newdate5 = $consulta['SEGUNDA_FAB'];
                        $newdate5 = '<span style="color: #3769b3;">' . $newdate5 . '</span>';
                    }

                    if(is_null ($consulta['SEGUNDA_GRUPO']) ){ $newdate6 = '<span class="text-danger">Pendiente</span>'; }
                    else{ $newdate6 = str_replace("ni", "ñ", $consulta['SEGUNDA_GRUPO']);
                        $newdate6 = '<span style="color: #3769b3;">' . $newdate6 . '</span>';
                    }

                    if(is_null ($consulta['TERCERA']) ){ $newdate7 = '<span class="text-danger">Pendiente</span>'; }
                    else{ $newdate7 = $consulta['TERCERA'] -> format('d/m/y');
                        $newdate7 = '<span style="color: #3769b3;">' . $newdate7 . '</span>';
                    }

                    if(is_null ($consulta['TERCERA_FAB']) ){ $newdate8 = '<span class="text-danger">Pendiente</span>'; }
                    else{ $newdate8 = $consulta['TERCERA_FAB'];
                        $newdate8 = '<span style="color: #3769b3;">' . $newdate8 . '</span>';
                    }

                    if(is_null ($consulta['TERCERA_GRUPO']) ){ $newdate9 = '<span class="text-danger">Pendiente</span>'; }
                    else{ $newdate9 = utf8_encode($consulta['TERCERA_GRUPO']);
                        $findme = "ni"; $findme2 = "±"; $findme3 = "ß";
                        $pos = strpos($newdate9, $findme); $pos2 = strpos($newdate9, $findme2); $pos3 = strpos($newdate9, $findme3);
                        if($pos == true){
                            $newdate9 = str_replace("ni", "ñ", $newdate9);
                            $newdate9 = '<span style="color: #3769b3;">' . $newdate9 . '</span>';
                        }else if($pos2 == true){
                            $newdate9 = str_replace("±", "ñ", $newdate9);
                            $newdate9 = '<span style="color: #3769b3;">' . $newdate9 . '</span>';
                        }else if($pos3 == true){
                            $newdate9 = str_replace("ß", "á", $newdate9);
                            $newdate9 = '<span style="color: #3769b3;">' . $newdate9 . '</span>';
                        }else{
                            $newdate9 = str_replace("ß", "á", $newdate9);
                            $newdate9 = '<span style="color: #3769b3;">' . $newdate9 . '</span>';
                        }
                    }

                    if(is_null ($consulta['CUARTA']) ){ $newdate10 = '<span class="text-danger">Pendiente</span>'; }
                    else{ $newdate10 = $consulta['CUARTA'] -> format('d/m/y');
                        $newdate10 = '<span style="color: #3769b3;">' . $newdate10 . '</span>';
                    }

                    if(is_null ($consulta['CUARTA_FAB']) ){ $newdate11 = '<span class="text-danger">Pendiente</span>'; }
                    else{ $newdate11 = $consulta['CUARTA_FAB'];
                        $newdate11 = '<span style="color: #3769b3;">' . $newdate11 . '</span>';
                    }

                    if(is_null ($consulta['CUARTA_GRUPO']) ){ $newdate12 = '<span class="text-danger">Pendiente</span>'; }
                    else{ $newdate12 = utf8_encode($consulta['CUARTA_GRUPO']);
                        $findme = "ni"; $findme2 = "±"; $findme3 = "ß";
                        $pos = strpos($newdate12, $findme); $pos2 = strpos($newdate12, $findme2); $pos3 = strpos($newdate12, $findme3);
                        if($pos == true){
                            $newdate12 = str_replace("ni", "ñ", $newdate12);
                            $newdate12 = '<span style="color: #3769b3;">' . $newdate12 . '</span>';
                        }else if($pos2 == true){
                            $newdate12 = str_replace("±", "ñ", $newdate12);
                            $newdate12 = '<span style="color: #3769b3;">' . $newdate12 . '</span>';
                        }else if($pos3 == true){
                            $newdate12 = str_replace("ß", "á", $newdate12);
                            $newdate12 = '<span style="color: #3769b3;">' . $newdate12 . '</span>';
                        }else{
                            $newdate12 = str_replace("ß", "á", $newdate12);
                            $newdate12 = '<span style="color: #3769b3;">' . $newdate12 . '</span>';
                        }
                    }

        $information .= '<div class="card" style="box-shadow: 10px 10px 4px 0 rgba(0, 0, 0, 20%);">
                            <div class="card-body">
                                <div style="background: #3c82e9; width: 96%; height: 6em; position: absolute;"></div><br>
                                <div class="text-center position-relative">
                                    <b class="img-covid">Mis Vacunas Contra la Covid-19</b>
                                </div>';

        $information .= '<div class="row position-relative">
                            <div class="col-md-3 text-center">';
                            if($consulta['GENERO'] == 'FEMENINO'){
        $information .= '<img src="./img/profile_woman.png" class="img-user mb-4" alt="Imagen Usuario" width="150">';
                            }else{
        $information .= '<img src="./img/profile_man.png" class="img-user mb-4" alt="Imagen Usuario" width="150">';
                            }
        $information .= '<h5 class="text-success">DNI: '. $consulta['NUM_DOC'] .'</h5>
                            </div>
                            <div class="col-md-7 mt-5 mb-2 p-0">
                                <div class="d-flex">
                                    <div class="col-md-6 p-2">
                                        <p class="font-17 mb-1"><b>Primera Dosis</b></p>
                                        <p class="font-11 m-0"><b>Fecha: </b>'. $newdate .'</p>
                                        <p class="font-11 m-0"><b>Fabricante: </b>'. $newdate2 .'</p>
                                        <p class="font-11 m-0"><b>Grupo de Riesgo: </b>'. $newdate3 .'</p>
                                    </div>
                                    <div class="col-md-6 p-2">
                                        <p class="font-17 mb-1"><b>Segunda Dosis</b></p>
                                        <p class="font-11 m-0"><b>Fecha: </b>'. $newdate4 .'</p>
                                        <p class="font-11 m-0"><b>Fabricante: </b>'. $newdate5 .'</p>
                                        <p class="font-11 m-0"><b>Grupo de Riesgo: </b>'. $newdate6 .'</p>
                                    </div>
                                </div><br>
                                <div class="d-flex">
                                    <div class="col-md-6 p-2">
                                        <p class="font-17 mb-1"><b>Tercera Dosis</b></p>
                                        <p class="font-11 m-0"><b>Fecha: </b>'. $newdate7 .'</p>
                                        <p class="font-11 m-0"><b>Fabricante: </b>'. $newdate8 .'</p>
                                        <p class="font-11 m-0"><b>Grupo de Riesgo: </b>'. $newdate9 .'</p>
                                    </div>
                                    <div class="col-md-6 p-2">
                                        <p class="font-17 mb-1"><b>Cuarta Dosis</b></p>
                                        <p class="font-11 m-0"><b>Fecha: </b>'. $newdate10 .'</p>
                                        <p class="font-11 m-0"><b>Fabricante: </b>'. $newdate11 .'</p>
                                        <p class="font-11 m-0"><b>Grupo de Riesgo: </b>'. $newdate12 .'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 mt-5 d-flex justify-content-center align-items-center">
                                <img src="./temp/'. $consulta['NUM_DOC'] .'.png" class="" alt="Imagen Usuario" width="120">
                            </div>
                        </div>';
        $information .= '</div> </div>';
        }
        sqlsrv_close($conn);
        echo $information;
    // }
?>