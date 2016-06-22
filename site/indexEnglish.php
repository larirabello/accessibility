<?php
ini_set('display_errors', 'on');

@session_start();
require 'php/idiomas.php';

$idioma = new idiomas();
$idioma = $idioma->BuscaIdioma('index', null);
//$idioma = $idioma->BuscaIdioma('entreterimento', 'filmes');

// idioma irá retornar um array com 2 chaves('nav', 'content').
// o uso da chave 'content' será no corpo da página para a tradução das strings
// o uso da chave 'nav' será no arquivo 'nav.php', só.


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Otimista</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/smile2.png"/>
    <!-- Latest compiled and minified CSS -->

    <link href="css/bootstrap.min.css" rel="styleseet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/sandbox.css" rel="stylesheet" type="text/css">
</head>

<body style="margin-top:150px;">
<div id="texto">
    <?php

    $imglogo = 'images/logo.png';
    $temaA = 'comportamento/index.php';
    $temaB = 'esportes/index.php';
    $temaC = 'entretenimento/index.php';
    $temaX = 'jogos/index.php';
    $temaY = 'pet/index.php';
    $temaZ = 'tecnologia/index.php';
    $linkirConteudo = '#conteudo';
    $linkirMenu = '#';
    $acess = 'acessibilidade.php';
    $sitemap = 'acessibilidade.php';
    include 'partes/nav.php';
    ?>
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <div class="thumbnail size123">
                    <a href="jogos/noticia1.php">
                        <img src="images/jogos1.png" id="imgh" alt="Video game branco">

                    </a>

                    <div class="title1">
                        <h5><a href="jogos/index.php" class="title-float" accesskey="1">Games</a></h5>
                        <a href="jogos/index.php" class="text-float">
                            <p>
                               <a href="jogos/noticia1.php">
                               New Xbox One S is the highlight of Microsoft at E3 and still arrive this year
                                </a>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size123">
                    <a href="esportes/noticia3.php">
                    <img src="images/not3.jpg" height="450px" alt="Homens correndo">
</a>
                    <div class="caption">
                        <div class="title2">
                            <h5><a href="esportes/index.php" accesskey="3">Sports</a></h5>

                            <p>
                                <a href="esportes/noticia3.php">
                                   Brazil may have record delegation to Paralympics
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size123 nopadlrtb">
                    <a href="tecnologia/noticia11.php">
                    <img src="tecnologia/images/img11.jpg" class="img-reesponsive">
                        </a>
                    <div class="caption">
                        <div class="title2">
                            <h5><a href="tecnologia/index.php" accesskey="3">Technology</a></h5>

                            <p>
                                <a href="tecnologia/noticia11.php">
                                 Apple records iPhone patent with folding screen
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <div class="thumbnail size2">
                    <h5><a href="comportamento/index.php" class="margin">Lifestyle</a></h5>

                    <p class="pd"><a href="comportamento/noticia6.php" class="margin">
                     Culture of hospitality: know the most educated country around the World
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size2">
                    <h5><a href="entretenimento/index.php" class="margin">Entertainment</a></h5>

                    <p><a href="entretenimento/noticia6.php" class="margin">
                          Four feminist films that every woman needs to watch </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size2">
                    <h5><a href="pet/index.php" class="margin">Pet world</a></h5>

                    <p><a href="pet/noticia4.php" class="margin">
                         Paradise Cats of Rome
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size2">
                    <h5><a href="jogos/index.php" class="margin">Games</a></h5>

                    <p><a href="jogos/noticia2.php" class="margin">
                           New PS4 is confirmed by Sony and comes with powerful technology 4K
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size2">
                    <h5><a href="esportes/index.php" class="margin">Sports</a></h5>

                    <p><a href="esportes/noticia6.php" class="margin">
                       
                     Armless boy leaves example of overcoming in volleyball
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <div class="thumbnail size2">
                    <h5><a href="tecnologia/index.php" class="margin">Technology</a></h5>

                    <p class="pd"><a href="tecnologia/noticia3.php" class="margin">
                         Man automated work and was six years "doing nothing" is fired
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row col-md-9 col-sm-9 col-xs-12 nopadlr">
            <div class="col-xs-12 col-sm-4 col-md-4 news">
                <div class="thumbnail size912">
                    <h5><a href="comportamento/index.php" class="margin">Lifestyle</a></h5>

                    <p class="padtop"><a href="comportamento/noticia1.php" class="margin">
                        Now you can donate food by delivery!
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 news">
                <div class="thumbnail size1011">
                    <h5><a href="entretenimento/index.php" class="margin">Entertainment</a></h5>

                    <p><a href="entretenimento/noticia1.php" class="margin">
                        Heroines and heroes of DC will star oriented books for young people
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 news" id="onze">
                <div class="thumbnail size1011">
                    <h5><a href="jogos/index.php" class="margin">Games</a></h5>

                    <p><a href="jogos/noticia8.php" class="margin">Unheard of Street Fighter 5 story mode has a lot of content at E3 2016</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row col-md-3 col-sm-3 col-xs-12 nopadlr">
            <div class="col-xs-12 col-sm-12 col-md-12 news">
                <div class="thumbnail size912">
                    <a href="pet/noticia1.php">
                    <img src="images/animal1.jpg" alt="Cachorrinho preto sorrindo">
</a>
                    <div class="caption">
                        <h5><a href="pet/index.php" class="margin">Pet World</a></h5>

                        <p><a href="pet/noticia1.php" class="margin">Older dogs need extra care and regular visits to the vet
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xs-12 col-sm-3 col-md-3 news " id="conteudo">
                <div class="thumbnail">
                    <h5><a href="esportes/index.php"  class="margin">Sports</a></h5>

                    <p><a href="esportes/noticia2.php" class="margin">Daniel Dias is featured in the World Paralympic Swimming
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail">
                    <h5><a href="tecnologia/index.php" class="margin">Technology</a></h5>

                    <p><a href="tecnologia/noticia9.php" class="margin">IT profession may be regulated soon in Brazil
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail">
                    <h5><a href="comportamento/index.php" class="margin">Lifestyle</a></h5>

                    <p><a href="comportamento/noticia5.php" class="margin">Businessman teaches a homeless to read at his lunch time
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail">
                    <h5><a href="entretenimento/noticia3.php" class="margin">Entertainment</a></h5>

                    <p><a href="entretenimento/noticia3.php" class="margin">Oscar comics hits record information to women
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row col-md-6 col-sm-6 col-xs-12 nopadlr">
            <div class="col-xs-12 col-sm-12 col-md-12 news">
                <div class="thumbnail">
                    <h5><a href="pet/index.php" class="margin">Pet World</a></h5>

                    <p><a href="pet/noticia9.php" class="margin">Dog runs away from home to visit hospitalized owner
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <a href="comportamento/noticia11.php">
                    <div class="thumbnail">
                        <img src="images/img11.jpg" class="img-responsive" alt="Pessoas sorrindo para a foto ">
                </a>

                <h5><a href="comportamento/index.php" class="margin">Lifestyle</a></h5>

                <p><a href="comportamento/noticia11.php" class="margin">Boss takes luxury hotel on vacation for employees in Cancun
                    </a>
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 news">
            <a href="entretenimento/noticia7.php">
                <div class="thumbnail">
                    <img src="images/image7.jpg" class="img-responsive" alt="Desenho do Harry Potter">
            </a>
            <h5><a href="entretenimento/index.php" class="margin">Entertainment</a></h5>

            <p><a href="entretenimento/noticia7.php" class="margin">Special edition of Harry Potter and the Sorcerers Stone will be released
                </a>
            </p>
        </div>
    </div>
</div>
<div class="row col-md-6 col-sm-6 col-xs-12 nopadlr">
    <div class="col-xs-12 col-sm-6 col-md-6 news">
        <div class="thumbnail size123">
                  <img src="images/jogos6.jpg" class="img-responsive" alt="Desenho do Harry Potter">
            <h5><a href="jogos/index.php" class="margin">Games</a></h5>
   
            <p><a href="jogos/noticia6.php" class="margin">God of War seeks to reinvent itself with setting and plot at E3 2016
                </a>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 news">
        <div class="thumbnail size20">
            <h5><a href="esportes/index.php" class="margin">Sports</a></h5>

            <p><a href="esportes/noticia8.php" class="margin">Dancing girl is the first Zumba's teacher with Down
                </a>
            </p>
        </div>
    </div>
</div> <!-- fecha row -->
<?php

require 'partes/footer.php';
$footer = new clFooter;
echo $footer->fnFooter(true, 'en');

?>
</div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script src="js/plusminefont.js"></script>
</body>
</html>
