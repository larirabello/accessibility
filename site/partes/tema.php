<?php
  echo'
  <!DOCTYPE html>
  <html lang="pt-BR">

  <head>
      <meta charset="UTF-8">
      <title>Otimista</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/smile2.png" />
      <!-- Latest compiled and minified CSS -->

      <link href="css/bootstrap.min.css" rel="styleseet" type="text/css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" type="text/css">
      <link href="css/style.css" rel="stylesheet" type="text/css">
      <link href="css/sandbox.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div id="texto">';


  include'partes/nav.php';


  echo '<div class="container">
        <h1 class="text-center upper">'.$temaName.'</h1>

        <div class="row">
            <!-- PRIMEIRO BLOCO DE NOTÍCIAS -->
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <a href="'.$not1link.'">
                    <div class="thumbnail size123">
                        <img src="'.$not1img.'" class="img-responsive images" alt="'.$not1alt.'">
                    </div>
                </a>
                <div class="title">
                    <a href="'.$not1link.'" class="text-float">
                        <p>'.$not1text.'</p>
                    </a>
                </div>
            </div>

            <!-- SEGUNDO BLOCO DE NOTÍCIAS -->
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <div class="thumbnail size123">
                    <img src="'.$not2img.'" class="img-responsive images pull-right img-2" alt="'.$not2alt.'">
                    <div class="caption">
                        <p>
                            <a href="'.$not2link.'"> '.$not2text.' </a>
                        </p>
                    </div>
                 </div>
            </div>
        </div>
        <div class="row">
        <!-- TERCEIRO BLOCO DE NOTÍCIAS -->
            <div class="col-md-3 col-sm-3 col-xs-12 nopadlr">
                <div class="col-xs-12 col-sm-12 col-md-12 news">
                    <div class="thumbnail size912a">
                        <img src="'.$not3img.'" alt="'.$not3alt.'">
                        <div class="caption">
                            <p><a href="'.$not3link.'" class="margin">
                  São Paulo vence e vai para as 4° São Paulo vence e va
                </a>
                            </p>
                        </div> <!-- fecha caption -->
                    </div> <!-- fecha thumbnail -->
                </div> <!-- fecha col-12 news -->
            </div> <!-- fecha col-3 nopadlr -->


            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <div class="row">
                 <!-- QUARTO BLOCO DE NOTÍCIAS -->
                    <div class="thumbnail size91">
                        <p><a href="'.$not4link.'" class="margin">
                        '.$not4text.'
              </a>
                        </p>
                    </div>
                    <!-- QUINTO BLOCO DE NOTÍCIAS -->
                    <div class="thumbnail size91">
                        <p><a href="'.$not5link.'" class="margin">
              '.$not5text.'</a>
                        </p>
                    </div>
                </div> <!-- fecha rowzinha -->
        </div> <!-- Fecha col-6 -->

        <!-- SEXTO BLOCO DE NOTÍCIAS -->
        <div class="col-md-3 col-sm-3 col-lg-3 col-xs-12 nopadlr">
            <div class="col-xs-12 col-sm-12 col-md-12 news">
                <div class="thumbnail size912a">
                    <img src="'.$not6img.'" alt="'.$not6alt.'">
                    <div class="caption">
                        <p><a href="'.$not6link.'" class="margin">
            '.$not6text.'</a>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- fecha row -->
        <div class="row ">

        <!-- SETIMO BLOCO DE NOTÍCIAS -->
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <a href="'.$not7link.'">
                    <div class="thumbnail size280">
                        <img src="'.$not7img.'" class="img-responsive center-block img-7" alt="'.$not7alt.'">
                    </div>
                </a>
                <div class="title">
                    <a href="'.$not7link.'" class="text-float">
                        <p>
                        '.$not7text.'
                        </p>
                    </a>
                </div>
            </div>
            <!-- OITAVO BLOCO DE NOTÍCIAS -->
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <div class="thumbnail size91">
                    <p><a href="'.$not8link.'" class="margin">
          '.$not8text.'</a>
                    </p>
                </div>
            </div>
             <!-- NONO BLOCO DE NOTÍCIAS -->
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <div class="thumbnail size91">
                    <p><a href="'.$not9link.'" class="margin">
          '.$not9text.'</a>
                    </p>
                </div>
            </div>
        </div> <!-- fecha row -->
        <!-- DÉCIMO BLOCO DE NOTÍCIAS -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                    <div class="thumbnail size123">
                        <img src="'.$not10img.'" class="img-responsive images pull-right img-2" alt="'.$not10alt.'">
                        <div class="caption">
                            <p>
                                <a href="'.$not10link.'"> '.$not10text.' </a>
                            </p>
                        </div> <!-- fecha caption -->
                     </div> <!-- fecha thumbnail -->
                </div> <!-- fecha col-6 news -->


            <!-- DÉCIMO PRIMEIRO BLOCO DE NOTÍCIAS -->
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <div class="thumbnail size123">
                    <img src="'.$not11img.'" class="img-responsive images pull-right img-2" alt="'.$not11alt.'">
                    <div class="caption">
                        <p>
                            <a href="'.$not11link.'"> '.$not11text.' </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- fecha container -->
    <footer></footer>

    <script src="js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/plusminefont.js"></script>
    </body>
    </html>
    ';
 ?>
