<?php echo'
<!DOCTYPE html>
<html lang="pt- vBR">
<head>
    <meta charset="UTF-8">
    <title>Otimista</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/smile2.png" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/sandbox.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css">
</head>

<body>
    <nav role="navigation" class="navbar navbar-default menu-ac">
        <ul class="list-inline nav-justified">
            <li role="presentation"><a href="#"> Ir para o Conteúdo (Alt+1)</a></li>
            <li role="presentation"><a href="#"> Ir para o Menu (Alt+2)</a></li>
            <li role="presentation"><a href="#">A+</a></li>
            <li role="presentation"><a href="#">A-</a></li>
            <li role="presentation">
                <div class="circle"></div>
            </li>
            <li role="presentation">
                <div class="circle circle-w"></div>
            </li>
            <li role="presentation"><a href="#">Acessibilidade (Alt+3)</a></li>
            <li role="presentation"><a href="#">Mapa do Site (Alt+4)</a></li>
        </ul>
    </nav>
    <nav role="navigation" class="navbar navbar-default">
        <ul class="list-inline nav-justified">
            <li role="presentation"><a href="#"> Tema A</a></li>
            <li role="presentation"><a href="#"> Tema B</a></li>
            <li role="presentation"><a href="#"> Tema C</a></li>
            <li role="presentation"><a href="#"> Tema X</a></li>
            <li role="presentation"><a href="#"> Tema Y</a></li>
            <li role="presentation"><a href="#"> Tema Z</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
       <p>' .$datapub. ' </p>
        <h1 class="text-left">' .$title. '</h1>
        <h2 id="b">'.$resumo.'</h2>
        <p>'.$autor.'</p>
        <div class="row">
        <div class="col-md-4 pull-right">
            <img src="'.$imagennews.'" class="img-responsive center-block " id="paddez">
        </div>
            <p class="texto-noti">'.$texto1.'</p>

            <p class="texto-noti">'.$texto2.'</p>

            <p class="texto-noti">'.$texto3.'</p>

</div>

           <div class="col-xs-12 col-sm-4 col-md-4 news">
                <div class="thumbnail">
                    <h5><a href="'.$not1link.'" class="margin">' .$not1. '</a></h5>
                    <p><a href="'.$not1textlink.'" class="margin">'.$not1text.'</a>
                    </p>
                </div>
            </div>
           <div class="col-xs-12 col-sm-4 col-md-4 news">
                <div class="thumbnail">
                    <h5><a href="'.$not2link.'" class="margin">' .$not2. '</a></h5>
                    <p><a href="'.$not2textlink.'" class="margin">'.$not2text.'</a>
                    </p>
                </div>
            </div>
           <div class="col-xs-12 col-sm-4 col-md-4 news">
                <div class="thumbnail">
                    <h5><a href="'.$not3link.'" class="margin">' .$not3. '</a></h5>
                    <p><a href="'.$not3textlink.'" class="margin">'.$not3text.'</a>
                    </p>
                </div>
            </div>

        </div>
    </div>

    <footer>
    </footer>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</html>';
?>
