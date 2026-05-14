<?php
include 'conexion.php';
$con = conectar();
$queryAlbum = "SELECT * FROM album";
$ejecutarQueryAlbum = mysqli_query($con, $queryAlbum);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/galeria.css">
    <link rel='stylesheet' href="css/lc_lightbox.min.css" />
    <link rel='stylesheet' href="css/minimal.css" />
    <!-- <link rel="stylesheet" type="text/css" href="css/lightbox.css">-->
    <title>Document</title>
</head>

<body>

    <?php include 'header/nav.php'; ?>
    <div id="galeria">
        <div class="galeria container">
            <h2 class="text-center text-white pt-5 pb-5">GALERIA</h3>
                <div class="row">

                    <?php 
                foreach ($ejecutarQueryAlbum as $item) {?>
                    <div class="col-4 col-md-4">
                        <a class="<?php echo $id = $item['idAlbum']; ?>"
                            href="images/galeria/<?php echo $item['imagenPrincipal']; ?>" data-lcl-txt="Descripcion"
                            data-lcl-auto="Autor" title="PRIMERA SESIÓN">
                            <div id="box" class="view overlay zoom">
                                <img id="foto" src="images/galeria/<?php echo $item['imagenPrincipal']; ?>"
                                    class="img-fluid rounded ">
                                <div class="mask">
                                    <div class="title" style="opacity:1">
                                        <p class="white-text"><?php echo utf8_decode($item['nombreAlbum']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php 
                    
                    $queryImagen = "SELECT * FROM imagenes_album WHERE FK_ID_ALBUM = '$id' ";
                    $ejecutarQueryImagen = mysqli_query($con, $queryImagen);
                    foreach ($ejecutarQueryImagen as $r) {?>

                    <div class="col-4 col-md-4 d-none">
                        <a class="<?php echo $r['FK_ID_ALBUM']; ?>"
                            href="images/galeria/<?php echo $r['nombreImagen']; ?>"
                            data-lcl-txt="<?php echo $r['descripcionImagen']; ?>" data-lcl-auto="Autor"
                            title="<?php echo $r['tituloImagen']; ?>">
                            <div class="view overlay zoom">
                                <img src="images/galeria/<?php echo $r['nombreImagen']; ?>" class="img-fluid rounded ">
                                <div class="mask">

                                </div>
                            </div>
                        </a>
                    </div>

                    <?php }?>
                    <?php }?>
                    <div class="col-4 col-md-4" id="uso">
                        <a class="3" href="images/foto1.png" data-lcl-txt="Descripcion" data-lcl-auto="Autor"
                            title="PERSONAS QUE TOMAN STARGUD">
                            <div id="box2" class="view overlay zoom">
                                <img src="images/foto1.png" class="img-fluid rounded "
                                    style="display:block; margin:auto">
                                <div class="mask">
                                    <div class="title" style="opacity:1">
                                        <p class="white-text">PERSONAS QUE TOMAN STARGUD</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-md-4 d-none">
                        <a class="3" href="images/foto2.png" data-lcl-txt="Descripcion" data-lcl-auto="Autor"
                            title="PERSONAS QUE TOMAN STARGUD">
                            <div class="view overlay zoom">
                                <img src="images/foto2.png" class="img-fluid rounded "
                                    style="display:block; margin:auto">
                                <div class="mask">
                                    <div class="title" style="opacity:1">
                                        <p class="white-text">PERSONAS QUE TOMAN STARGUD</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-md-4 d-none">
                        <a class="3" href="images/foto3.png" data-lcl-txt="Descripcion" data-lcl-auto="Autor"
                            title="PERSONAS QUE TOMAN STARGUD">
                            <div class="view overlay zoom">
                                <img src="images/foto3.png" class="img-fluid rounded "
                                    style="display:block; margin:auto">
                                <div class="mask">
                                    <div class="title" style="opacity:1">
                                        <p class="white-text">PERSONAS QUE TOMAN STARGUD</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-md-4 d-none">
                        <a class="3" href="images/foto4.png" data-lcl-txt="Descripcion" data-lcl-auto="Autor"
                            title="PERSONAS QUE TOMAN STARGUD">
                            <div class="view overlay zoom">
                                <img src="images/foto4.png" class="img-fluid rounded "
                                    style="display:block; margin:auto">
                                <div class="mask">
                                    <div class="title" style="opacity:1">
                                        <p class="white-text">PERSONAS QUE TOMAN STARGUD</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-md-4 d-none">
                        <a class="3" href="images/foto5.png" data-lcl-txt="Descripcion" data-lcl-auto="Autor"
                            title="PERSONAS QUE TOMAN STARGUD">
                            <div class="view overlay zoom">
                                <img src="images/foto5.png" class="img-fluid rounded "
                                    style="display:block; margin:auto">
                                <div class="mask">
                                    <div class="title" style="opacity:1">
                                        <p class="white-text">PERSONAS QUE TOMAN STARGUD</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-md-4 d-none">
                        <a class="3" href="images/foto6.png" data-lcl-txt="Descripcion" data-lcl-auto="Autor"
                            title="PERSONAS QUE TOMAN STARGUD">
                            <div class="view overlay zoom">
                                <img src="images/foto6.png" class="img-fluid rounded "
                                    style="display:block; margin:auto">
                                <div class="mask">
                                    <div class="title" style="opacity:1">
                                        <p class="white-text">PERSONAS QUE TOMAN STARGUD</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>



                </div>

        </div>
    </div>
    <?php include 'footer/footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js">
    </script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>

    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="js/lc_lightbox.lite.min.js" type='text/javascript'></script>
    <!--<script type="text/javascript" src="js/lightbox.js"></script>-->

    <script>
    $(document).ready(function() {
        var clase;
        $('body').on('click', 'a', function() {
            clase = $(this).attr('class');


        })
        console.log(clase);
        lc_lightbox(clase, {
            wrap_class: 'lcl_fade_oc',
            gallery: true
        });
    })
    </script>
</body>



</html>