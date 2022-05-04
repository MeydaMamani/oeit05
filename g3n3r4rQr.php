<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Generador de códigos QR con PHP</title>
    </head>
    <body>
        <div class='container'>
            <h1>Generador de códigos QR</h1>
            <form method='post' id="generador">
                <div class='row'>
                    <div class='col-md-4'>
                        <div class="form-group">
                            <label for="textqr">Ingresa el texto</label>
                            <input type="text" class="form-control" name="textqr" id="textqr"  placeholder="Ingresa el texto" required>
                        </div>
                        <button type="submit" name="sub" class="btn btn-primary">Generar</button>
                    </div>
                </div>
            </form>
            <div class='col-md-6'>
                <?php
                    include("phpqrcode/qrlib.php");
                    if(isset($_POST['sub'])){
                        $path = 'temp/';
                        if (!file_exists($path))
                            mkdir($path);

                        $file = $path.$_POST['textqr'].'.png';
                        $text = $_POST['textqr'];

                        //Parametros de Condiguración
                        $tamaño = 10; //Tamaño de Pixel
                        $level = 'L'; //Precisión Baja
                        $framSize = 2; //Tamaño en blanco

                        //Enviamos los parametros a la Función para generar código QR
                        QRcode::png($text, $file, $level, $tamaño, $framSize);
                        //Mostramos la imagen generada
                        echo '<img src="'.$path.basename($file).'" alt="Imagen Qr"';
                    }
                ?>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>