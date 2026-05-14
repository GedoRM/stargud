<?php

include 'conexion.php';
$con = conectar();

$queryImagen = "SELECT * FROM imagenes";
$stmt = mysqli_query($con, $queryImagen);

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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mora.css">
    <link rel="stylesheet" href="css/limon.css">
    <link rel="stylesheet" href="css/naranja.css">
    <link rel="stylesheet" href="css/azul.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <title>Stargud</title>
    <style>
    .bx-wrapper {
        margin-bottom: 0px !important;
    }

    .bx-default-pager {
        display: none;
    }

    @media screen and (max-width: 780px) {}
    </style>

</head>

<body>

    <?php include 'header/nav.php' ?>

    <div class="share">
        <a href="#" class="nav-link waves-effect waves-light  fab fa-whatsapp fa-2x" target=»_blank></a>
    </div>

    <section>
        <div class="slider">
            <div>
                <video class="video-fluid w-100" controls autoload="autoload" loop>
                    <source src="video/FINAL.mp4" type="video/mp4" />
                </video>

            </div>
            <div>
                <img class="img-fluid w-100" src="images/principal.jpg" alt="">
            </div>
        </div>
    </section>


    <section id="noticias">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center wow fadeIn">UN STARGUD BIEN<br> FRÍO
                                PARA:</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 col-md-6 text-right m-auto d-block">
                            <img class="img-fluid wow fadeInUp" src="images/cono.png" alt="">
                        </div>
                        <div class="col-6 col-md-6">
                            <p id="txtS1" class="txtR text-left wow fadeInLeft">RECUPERARTE DE<br> LAS NOCHES <br>
                                LARGAS
                                Y LOS<BR> DESVELOS
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7" style="display:block; margin:auto">
                            <hr style="border:1px dashed;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 col-md-6">
                            <p id="txtS1" class="txtL text-right wow fadeInRight">DAR EL 100 Y<BR> AUMENTAR TU<BR>
                                RENDIMIENTO</p>
                        </div>
                        <div class="col-6 col-md-6 text-left m-auto d-block">
                            <img class="img-fluid wow fadeInUp" src="images/pie.png" alt="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7" style="display:block; margin:auto">
                            <hr style="border:1px dashed;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 col-md-6 text-right m-auto d-block">
                            <img class="img-fluid wow fadeInUp" src="images/energia.png" alt="">
                        </div>
                        <div class="col-6 col-md-6">
                            <p id="txtS1" class="wow fadeInLeft">RENDIR EN EL<br> TRABAJO Y<br> MANTENERTE<BR>
                                ACTIVO</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7" style="display:block; margin:auto">
                            <hr style="border:1px dashed;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 col-md-6 ">
                            <p id="txtS1" class="text-right wow fadeInRight">RECUPERARTE<BR> DEL CALOR Y<BR> RECOBRA
                                TU<BR> ENERGIA</p>
                        </div>
                        <div class="col-6 col-md-6 text-left m-auto d-block">
                            <img class="img-fluid wow fadeInUp" src="images/temperatura.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-1">

                </div>
                <br>
                <div class="col-md-6 wow fadeInUp">
                    <p style="color:green; font-weight:600; font-size:20px">PARA TODA OCASIÓN</p>
                    <p style="font-weight:600">..</p>
                    <br>

                    <div class="row mb-5">
                        <div class="col-4 col-md-4">
                            <a href="images/foto1.png" data-lightbox="galeria" data-title="#">
                                <img id="foto" src="images/foto1.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-4 col-md-4">
                            <a href="images/foto2.png" data-lightbox="galeria" data-title="#">
                                <img id="foto" src="images/foto2.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-4 col-md-4">
                            <a href="images/foto3.png" data-lightbox="galeria" data-title="#">
                                <img id="foto" src="images/foto3.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-md-4">
                            <a href="images/foto4.png" data-lightbox="galeria" data-title="#">
                                <img id="foto" src="images/foto4.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-4 col-md-4">
                            <a href="images/foto5.png" data-lightbox="galeria" data-title="#">
                                <img id="foto" src="images/foto5.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-4 col-md-4">
                            <a href="images/foto6.png" data-lightbox="galeria" data-title="#">
                                <img id="foto" src="images/foto6.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </section>
    <section class="wow fadeInDown" id="beneficios">
        <br><br><br>
        <div class="container wow fadeInUp">

            <h3 class="text-center font-weight-bold wow fadeIn" style="color:#00e099">BENEFICIOS</h3>
            <br><br>
            <div class="row" style="height:400px">
                <div class="col-12 col-md-4 m-auto d-block wow fadeInUp">
                    <div class="media">
                        <p id="num" class="d-flex m-auto d-block">01</p>
                        <div class="media-body ml-3">
                            <p id="txtB" class="text-justify">
                                Con formulación que potencia el sabor sin azúcares añadidos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 m-auto d-block wow fadeInUp">
                    <div class="media">
                        <p id="num" class="d-flex m-auto d-block">02</p>
                        <div class="media-body ml-3">
                            <p id="txtB" class="text-justify">
                                Stargud fue creado para una nueva generación de consumidores, que buscan
                                hidratación en diferentes
                                momentos y actividades del día a día.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-5 m-auto d-block wow fadeInUp">
                    <div class="media">
                        <p id="num" class="d-flex m-auto d-block">03</p>
                        <div class="media-body ml-3">
                            <p id="txtB" class="text-justify">
                                Regula tu temperatura <br>corporal.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-6 col-md-4 m-auto d-block wow fadeInUp">
                    <div class="media">
                        <p id="num" class="d-flex m-auto d-block">04</p>
                        <div class="media-body ml-3">
                            <p id="txtB" class="text-justify">
                                A diferencia de otras marcas, Stargud busca ser la primera opción del consumidor,
                                que busca los mismos beneficios a un menor costo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 m-auto d-block wow fadeInUp">
                    <div class="media">
                        <p id="num" class="d-flex m-auto d-block">05</p>
                        <div id="txtB" class="media-body ml-3">
                            Tiempo de vida de 6<br> meses.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 m-auto d-block">
                    <div class="media">
                        <p id="num" class="d-flex m-auto d-block"></p>
                        <div class="media-body ml-3">
                        </div>
                    </div>
                </div>
            </div>
            <div id="endB" class="row">

            </div>
        </div>

    </section>



    <section style="height:10px; background:black"></section>

    <section>
        <div class="slider">
            <div class="wow fadeInUp">
                <?php include 'productos/limon.php'; ?>
            </div>
            <div>
                <?php include 'productos/mora.php'; ?>
            </div>
            <div>
                <?php include 'productos/azul.php'; ?>
            </div>
            <div>
                <?php include 'productos/naranja.php'; ?>
            </div>
        </div>
    </section>
    <section style="height:10px; background:black"></section>

    <section id="tienda" style="height:500px;">
        <nav class="nav nav-tabs justify-content-center" style="background-color:rgb(39,36,96)">
            <li class="nav-item bg-white">
                <p style="color:black" class="mr-3 ml-3 mt-4 wow fadeIn">TIENDA EN LÍNEA</p>
            </li>
        </nav>
        <div class="container animated wow fadeInUp" id="sectienda">
            <div class="row mt-5 mb-5">
                <div id="iconosTienda" class="col-12 col-md-4 mb-5">
                    <img id="pronto" class="img-fluid d-block m-auto" src="images/pronto.png" alt="">
                </div>
                <div id="iconosTienda" class="col-12 col-md-4 mb-5">
                    <img id="logos" class="img-fluid d-block m-auto" src="images/yending.png" alt="">
                </div>
                <div id="iconosTienda" class="col-12 col-md-4 mb-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="media">
                                <p class="d-flex m-auto d-block"><i class="fas fa-map-marker-alt fa-3x"></i></p>
                                <div class="media-body ml-3">
                                    <p id="dire" class="text-justify">
                                        Av. Aviación #314, entre Plutarco Elias Calles y las Américas, Colonia
                                        Francisco I. Madero, C.P. 24190, Ciudad del Carmen Campeche.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="media">
                                <p class="d-flex m-auto d-block"><i class="fas fa-phone fa-2x"></i></p>
                                <div class="media-body ml-3 d-block">
                                    <p id="dire" class="text-justify">
                                        981-815-9132
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contacto" class=" img-fluid row m-0 vh-100 justify-content-center align-items-center">
        <div class="container wow fadeInUp">
            <div class="row">
                <div id="cardContacto" class="col-md-6 mb-5">
                    <div class="card" id="cardForm">
                        <h3 class="header text-white text-center">
                            CONTÁCTANOS
                        </h3>
                        <div class="card-body ">

                            <p class="card-text">
                            <form id="formulario" method="POST" action="mail.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class=" mb-4">
                                            <input id="nombre" name="nombre" class="form-control form-control-sm w-100"
                                                type="text" placeholder="NOMBRE" required>
                                        </div>
                                        <div class=" mb-4">
                                            <input id="email" name="email" class="form-control form-control-sm w-100"
                                                type="email" placeholder="EMAIL" required>
                                        </div>
                                        <div class=" mb-4">
                                            <input id="tel" name="telefono" class="form-control form-control-sm w-100"
                                                type="text" placeholder="TÉLEFONO" maxlength="10" required>
                                        </div>
                                        <div class="mb-4">
                                            <input id="ayuda" name="ayuda" class="form-control form-control-sm w-100"
                                                type="text" placeholder="¿CÓMO PODEMOS AYUDARTE?" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class=" mb-4">
                                            <textarea name="mensaje" class="md-textarea form-control w-100"
                                                name="opinion" id="mensaje" rows="7"
                                                placeholder="DÉJANOS TU MENSAJE"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-4 mb-2">
                                    <button id="enviar" type="submit" class="btn"
                                        style="background-color:rgb(22,219,155); color:white">ENVIAR
                                        <i class="fa fa-send ml-2"></i>
                                    </button>
                                </div>
                            </form>
                            <div id="msj"></div>
                            </p>
                        </div>

                    </div>
                </div>
                <div id="cardDirecciones" class="col-md-6">
                    <div class="card" style="background-color:rgba(255,255,255,0.5)">
                        <div class="card-body ">

                            <p class="card-text">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="header text-black text-center">
                                        Ciudad del Carmen, Campeche
                                    </h5>
                                    <div class="media">
                                        <p class="d-flex m-auto d-block"><i class="fas fa-map-marker-alt fa-3x"></i></p>
                                        <div class="media-body ml-3">
                                            <p id="dire" class="text-justify">
                                                Av. Aviación #314, entre Plutarco Elias Calles y las Américas, Colonia
                                                Francisco I. Madero, C.P. 24190, Ciudad del Carmen Campeche.
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>

                                <div class="col-md-12">
                                    <h5 class="header text-black text-center">
                                        Campeche, Campeche
                                    </h5>
                                    <div class="media">
                                        <p class="d-flex m-auto d-block"><i class="fas fa-map-marker-alt fa-3x"></i></p>
                                        <div class="media-body ml-3">
                                            <p id="dire" class="text-justify">
                                                Calle Zapateros 3B Parque Industrial Siglo XXI, C.P. 24065, Campeche,
                                                Campeche.
                                            </p>
                                            <p id="dire" class="text-justify">
                                                Calle Galeana #20 entre 12 y 14, Col. San Román, C.P. 24000, Campeche,
                                                Campeche.
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <h5 class="header text-black text-center">
                                        Merida, Yúcatan
                                    </h5>
                                    <div class="media">
                                        <p class="d-flex m-auto d-block"><i class="fas fa-map-marker-alt fa-3x"></i></p>
                                        <div class="media-body ml-3">
                                            <p id="dire" class="text-justify">
                                                Avenida Maquiladoras Tablaje Catastral 12975, Parque Industrias No
                                                Contaminantes, 97203 Mérida, Yucatán.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="seccion5" class="wow fadeInUp">
        <div class="top-content mt-5 mb-5">
            <div class="container-fluid">
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                            <img src="images/stargudCharge.jpg" class="img-fluid mx-auto d-block">
                        </div>

                        <?php foreach($stmt as $item) { ?>
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img id="<?php echo $cont; ?>" src="images/<?php echo $item['nombreImagen']; ?>"
                                class="img-fluid mx-auto d-block">
                        </div>
                        <?php } ?>

                    </div>
                    <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="seccion6" class="wow fadeInUp">
        <div class="container">
            <div class="text-center">
                <img id="rayosec6" class="img-fluid" src="images/rayoseccion6.png" alt="">
                <hr>
                <div class="row">
                    <div class="col-12 col-md-2"></div>
                    <div id="infosec6" class="col-12 col-md-2">
                        <p id="redes" class="font-weight-bold">SIGUE NUESTRAS<br> REDES</p>
                    </div>
                    <div id="infosec6" class="col-12 col-md-1">
                        <a style="color:black" href="https://acortar.link/vMSjo8" target="_blank">
                            <i class="fab fa-facebook-f fa-3x"></i>
                        </a>

                    </div>
                    <div id="infosec6" class="col-12 col-md-1">
                        <a href="https://acortar.link/OyKNLY" style="color:black" target="_blank">
                            <i class="fab fa-instagram fa-3x"></i>
                        </a>

                    </div>
                    <div id="infosec6" class="col-12 col-md-2">
                        <p>Elaborado por:<br> <strong>CASA RECA®</strong></p>
                    </div>
                    <div id="infosec6" class="col-12 col-md-2">
                        <img id="sinAzucar" class="img-fluid" src="images/sinAzucar.png" alt="">
                    </div>
                    <div class="col-12 col-md-2">

                    </div>
                </div>

                <hr>

            </div>

        </div>


    </section>

    <div class="share">
        <a href="https://api.whatsapp.com/send?phone=529811306385&text=Quiero información" class="fab fa-whatsapp fa-2x"
            target=»_blank></a>
    </div>

    <?php include 'footer/footer.php' ?>
    <!-- JQuery -->
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
    <script type="text/javascript" src="js/lightbox.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>

    <script>
         $(function() {
        $('.lazy').Lazy();
    });
    </script>

    <script>
    $(function() {
        new WOW().init();
    });
    </script>

    <script>
    $(document).ready(function() {

        $("#formulario").bind("submit", function() {
            $.ajax({
                type: $(this).attr("method"),
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(data) {
                    $("#msj").html(data);

                    $("#nombre").val('');
                    $("#email").val('');
                    $("#tel").val('');
                    $("#ayuda").val('');
                    $("#mensaje").val('');
                }
            });;
            return false;
        });
    });
    </script>



    <script>
    $(document).ready(function() {
        $('.slider').bxSlider();
    });
    </script>

    <script>
    $('#carousel-example').on('slide.bs.carousel', function(e) {
        /*
            CC 2.0 License Iatek LLC 2018 - Attribution required
        */
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 5;
        var totalItems = $('.carousel-item').length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
                // append slides to end
                if (e.direction == "left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                } else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
    });
    </script>
</body>


</html>