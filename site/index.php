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

    $imglogo = 'images/smile.png';
    $temaA = 'mundopet/index.php';
    $temaB = 'esportes/index.php';
    $temaC = 'esportes/index.php';
    $temaX = 'lifestyle/index.php';
    $temaY = 'tecnologia/index.php';
    $temaZ = 'entretenimento/index.php';
    $linkirConteudo = '#conteudo';
    $linkirMenu = '#';
    $acess = '#';
    $sitemap = '#';
    include 'partes/nav.php';
    ?>
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <div class="thumbnail size123">
                    <a href="#aa">
                        <img src="images/cute_baby_fox_wallpaper_hd_1080p.jpg" id="imgh" alt="OI MEU NOME É RICARDO">

                    </a>

                    <div class="title1">
                        <h5><a href="tema.php" class="title-float" accesskey="1">Tema 1</a></h5>
                        <a href="#aa" class="text-float">
                            <p>
                                <?php echo $idioma['content']['titulo'] ?>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size123">
                    <img src="images/HD-Space-Wallpaper-For-Background-22.jpg" height="450px" alt="...">

                    <div class="caption">
                        <div class="title2">
                            <h5><a href="#" accesskey="3">Tema 2</a></h5>

                            <p>
                                <a href="#">
                                    Nos acréscimos, Flamengo arranca empate com a Chapecoense
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size123 nopadlrtb">
                    <img src="images/cute_baby_fox_wallpaper_hd_1080p.jpg" class="img-reesponsive">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <div class="thumbnail size2">
                    <h5><a href="#" class="margin">Tema 3</a></h5>

                    <p class="pd"><a href="#" class="margin">
                            Renato ameaça reclamar de gol do Figueirense, mas vê lance normal
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size2">
                    <h5><a href="#" class="margin">Tema 4</a></h5>

                    <p><a href="#" class="margin">
                            Após críticas, Ricardo Gomes elogia atacantes Neilton e Ribamar </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size2">
                    <h5><a href="#" class="margin">Tema 5</a></h5>

                    <p><a href="#" class="margin">
                            Atlético de Madrid desembarca em Milão 2 dias antes da final da ...
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size2">
                    <h5><a href="#" class="margin">Tema 6</a></h5>

                    <p><a href="#" class="margin">
                            Ídolo do United, Ferdinand se antecipa e anuncia acerto com Mourinho
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size2">
                    <h5><a href="#" class="margin">Tema 7</a></h5>

                    <p><a href="#" class="margin">
                            Messi treina pela 1ª vez com companheiros da seleção argentina
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <div class="thumbnail size2">
                    <h5><a href="#" class="margin">Tema 8</a></h5>

                    <p class="pd"><a href="#" class="margin">
                            Corinthians domina a Ponte e volta a vencer após 36 dias
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row col-md-9 col-sm-9 col-xs-12 nopadlr">
            <div class="col-xs-12 col-sm-4 col-md-4 news">
                <div class="thumbnail size912">
                    <h5><a href="#" class="margin">Tema 9</a></h5>

                    <p class="padtop"><a href="#" class="margin">
                            Sede da final, Milão passará coroa da Champions para Madri de Real e ...
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 news">
                <div class="thumbnail size1011">
                    <h5><a href="#" class="margin">Tema 10</a></h5>

                    <p><a href="#" class="margin">
                            Guerra de números: Real é melhor no ataque, mas Atlético corre mais
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 news" id="onze">
                <div class="thumbnail size1011">
                    <h5><a href="#" class="margin">Tema 11</a></h5>

                    <p><a href="#" class="margin">San Siro sediará reencontro entre Zidane e Simeone em competições ...
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row col-md-3 col-sm-3 col-xs-12 nopadlr">
            <div class="col-xs-12 col-sm-12 col-md-12 news">
                <div class="thumbnail size912">
                    <img src="images/cute_baby_fox_wallpaper_hd_1080p.jpg" alt="...">

                    <div class="caption">
                        <h5><a href="#" class="margin">Tema 12</a></h5>

                        <p><a href="#" class="margin">Franceses vão às ruas contra reformas trabalhistas
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xs-12 col-sm-3 col-md-3 news " id="conteudo">
                <div class="thumbnail">
                    <h5><a href="#"  class="margin">Tema 13</a></h5>

                    <p><a href="#" class="margin">G7 debate crise migratória e economia mundial
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail">
                    <h5><a href="#" class="margin">Tema 14</a></h5>

                    <p><a href="#" class="margin">Confira onde serão montados tapetes de Corpus Christi
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail">
                    <h5><a href="#" class="margin">Tema 15</a></h5>

                    <p><a href="#" class="margin">Ministro não vê problema em receber Alexandre Frota
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail">
                    <h5><a href="#" class="margin">Tema 16</a></h5>

                    <p><a href="#" class="margin">O efeito Casemiro no Real Madrid que busca sua 11ª Liga dos Campeões
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row col-md-6 col-sm-6 col-xs-12 nopadlr">
            <div class="col-xs-12 col-sm-12 col-md-12 news">
                <div class="thumbnail">
                    <h5><a href="#" class="margin">Tema 17</a></h5>

                    <p><a href="#" class="margin">Real Madrid sofreu pouco no caminho até sua 14ª final de Champions
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <a href="#">
                    <div class="thumbnail">
                        <img src="images/cute_baby_fox_wallpaper_hd_1080p.jpg" class="img-responsive" alt="...">
                </a>

                <h5><a href="#" class="margin">Tema 18</a></h5>

                <p><a href="#" class="margin">Atlético leva vantagem sobre Real Madrid desde a final de Lisboa
                    </a>
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 news">
            <a href="#">
                <div class="thumbnail">
                    <img src="images/cute_baby_fox_wallpaper_hd_1080p.jpg" class="img-responsive" alt="...">
            </a>
            <h5><a href="#" class="margin">Tema 19</a></h5>

            <p><a href="#" class="margin">Sofrimento e superação levaram Atlético a revanche contra o Real na ...
                </a>
            </p>
        </div>
    </div>
</div>
<div class="row col-md-6 col-sm-6 col-xs-12 nopadlr">
    <div class="col-xs-12 col-sm-6 col-md-6 news">
        <div class="thumbnail size20 nopadlrtb">
            <img src="images/cute_baby_fox_wallpaper_hd_1080p.jpg" id="size" class="img-reesponsive">
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 news">
        <div class="thumbnail size20">
            <h5><a href="#" class="margin">Tema 20</a></h5>

            <p><a href="#" class="margin">De Lisboa a Milão: Real sob novo comando e Atlético com ataque ...
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
