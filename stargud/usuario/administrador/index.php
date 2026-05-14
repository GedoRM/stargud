
<!DOCTYPE html>
<html class='no-js' lang='en'>

<head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Dashboard</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link href="../assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../assets/images/favicon.ico" rel="icon" type="image/ico" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <!-- Google Fonts -->
    <!-- Bootstrap core CSS -->

</head>

<body class='main page'>
    <!-- Navbar -->
    <?php include '../header/nav.php' ?>
    <!-- Content -->
    <div id='content'>

        <div class='panel-body'>
        <form>
              <fieldset>
                <legend>ALBÚM</legend>
                <div class='form-group'>
                  <label class='control-label'>TÍTULO</label>
                  <input class='form-control' placeholder='Ingrese un título para la foto' type='text'>
                </div>
                <div class='form-group'>
                  <label class='control-label'>ENLACE</label>
                  <input class='form-control' placeholder='INGRESE UNA URL' type='password'>
                </div>
                <div class='form-group'>
                  <label class='control-label'>DESCRIPCIÓN</label>
                  <textarea class='form-control' rows='4'></textarea>
                </div>
                <div class='form-group'>
                  <label class='control-label'>AGREGA UNA IMAGEN</label>
                  <input type='file'>
                </div>
                
              </fieldset>
              
              <div class='form-actions'>
                <button class='btn btn-default' type='submit'>GUARDAR</button>
                <a class='btn' href='#'>CANCELAR</a>
              </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    <!-- Footer -->
    <!-- Javascripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
    <!-- Google Analytics -->
    <script>
    var _gaq = [
        ['_setAccount', 'UA-XXXXX-X'],
        ['_trackPageview']
    ];
    (function(d, t) {
        var g = d.createElement(t),
            s = d.getElementsByTagName(t)[0];
        g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s)
    }(document, 'script'));
    </script>
</body>

</html>