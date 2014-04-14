<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="robots" content="noindex, nofollow">
        <title>Pigeon</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='//fonts.googleapis.com/css?family=Titillium+Web:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        @section('style.header')
            <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        @show

        @section('script.header')
        @show
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">Vous utilisez un navigateur <strong>obsolète</strong>. Merci <a href="http://browsehappy.com/" target="_blank">de mettre à jour votre navigateur</a> pour améliorer votre expérience.</p>
        <![endif]-->

        <header>
        </header>

        <div class="container">
            @yield('content')
        </div>
        <footer>
        </footer>

        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        @section('script.footer')
        @show
    </body>
</html>
