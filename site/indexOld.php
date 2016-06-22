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
                        <h5><a href="jogos/index.php" class="title-float" accesskey="1">Jogos</a></h5>
                        <a href="jogos/index.php" class="text-float">
                            <p>
                               <a href="jogos/noticia1.php">
                                Novo Xbox One S é o destaque da Microsoft na E3 e chega ainda este ano
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
                            <h5><a href="esportes/index.php" accesskey="3">Esportes</a></h5>

                            <p>
                                <a href="esportes/noticia3.php">
                                   Brasil pode ter delegação recorde em paraolimpíadas
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
                            <h5><a href="tecnologia/index.php" accesskey="3">Tecnologia</a></h5>

                            <p>
                                <a href="tecnologia/noticia11.php">
                                  Apple registra patente de iPhone com tela dobrável
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
                    <h5><a href="comportamento/index.php" class="margin">Comportamento</a></h5>

                    <p class="pd"><a href="comportamento/noticia6.php" class="margin">
                      Cultura da hospitalidade: veja o país mais educado do mundo
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size2">
                    <h5><a href="entretenimento/index.php" class="margin">Entretenimento</a></h5>

                    <p><a href="entretenimento/noticia6.php" class="margin">
                          Quatro filmes feministas que toda mulher precisa assistir </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size2">
                    <h5><a href="pet/index.php" class="margin">Mundo Pet</a></h5>

                    <p><a href="pet/noticia4.php" class="margin">
                          O paraíso dos gatos de Roma
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size2">
                    <h5><a href="jogos/index.php" class="margin">Jogos</a></h5>

                    <p><a href="jogos/noticia2.php" class="margin">
                           Novo PS4 é confirmado pela Sony e chega poderoso com tecnologia 4K
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail size2">
                    <h5><a href="esportes/index.php" class="margin">Esportes</a></h5>

                    <p><a href="esportes/noticia6.php" class="margin">
                          Garoto sem braço deixa exemplo de superação no vôlei
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <div class="thumbnail size2">
                    <h5><a href="tecnologia/index.php" class="margin">Tecnologia</a></h5>

                    <p class="pd"><a href="tecnologia/noticia3.php" class="margin">
                          Homem que automatizou trabalho e ficou 6 anos "fazendo nada" é demitido
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row col-md-9 col-sm-9 col-xs-12 nopadlr">
            <div class="col-xs-12 col-sm-4 col-md-4 news">
                <div class="thumbnail size912">
                    <h5><a href="comportamento/index.php" class="margin">Comportamento</a></h5>

                    <p class="padtop"><a href="comportamento/noticia1.php" class="margin">
                          Doar comida agora por delivery!
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 news">
                <div class="thumbnail size1011">
                    <h5><a href="entretenimento/index.php" class="margin">Entretenimento</a></h5>

                    <p><a href="entretenimento/noticia1.php" class="margin">
                          Heroínas e heróis da DC vão estrelar livros voltados para o público jovem
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 news" id="onze">
                <div class="thumbnail size1011">
                    <h5><a href="jogos/index.php" class="margin">Jogos</a></h5>

                    <p><a href="jogos/noticia8.php" class="margin">Inédito modo história de Street Fighter 5 tem muito conteúdo na E3 2016</a>
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
                        <h5><a href="pet/index.php" class="margin">Mundo Pet</a></h5>

                        <p><a href="pet/noticia1.php" class="margin">Cães idosos precisam de cuidados redobrados e visitas ao veterinário regulares
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xs-12 col-sm-3 col-md-3 news " id="conteudo">
                <div class="thumbnail">
                    <h5><a href="esportes/index.php"  class="margin">Esportes</a></h5>

                    <p><a href="esportes/noticia2.php" class="margin">Daniel Dias é destaque no Mundial Paralímpico de Natação
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail">
                    <h5><a href="tecnologia/index.php" class="margin">Tecnologia</a></h5>

                    <p><a href="tecnologia/noticia9.php" class="margin">Profissão de TI pode ser regulamentada em breve no Brasil
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail">
                    <h5><a href="comportamento/index.php" class="margin">Comportamento</a></h5>

                    <p><a href="comportamento/noticia5.php" class="margin">Empresário ensina moradora de rua a ler na hora do almoço
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 news">
                <div class="thumbnail">
                    <h5><a href="entretenimento/noticia3.php" class="margin">Entretenimento</a></h5>

                    <p><a href="entretenimento/noticia3.php" class="margin">Oscar dos quadrinhos bate recorde de indicações a mulheres
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row col-md-6 col-sm-6 col-xs-12 nopadlr">
            <div class="col-xs-12 col-sm-12 col-md-12 news">
                <div class="thumbnail">
                    <h5><a href="pet/index.php" class="margin">Mundo Pet</a></h5>

                    <p><a href="pet/noticia9.php" class="margin">Cão foge de casa para visitar dono internado
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 news">
                <a href="comportamento/noticia11.php">
                    <div class="thumbnail">
                        <img src="images/img11.jpg" class="img-responsive" alt="Pessoas sorrindo para a foto ">
                </a>

                <h5><a href="comportamento/index.php" class="margin">Comportamento</a></h5>

                <p><a href="comportamento/noticia11.php" class="margin">Patrão leva funcionários para férias em hotel de luxo em Cancun
                    </a>
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 news">
            <a href="entretenimento/noticia7.php">
                <div class="thumbnail">
                    <img src="images/image7.jpg" class="img-responsive" alt="Desenho do Harry Potter">
            </a>
            <h5><a href="entretenimento/index.php" class="margin">Entretenimento</a></h5>

            <p><a href="entretenimento/noticia7.php" class="margin">Edição especial de ‘Harry Potter e a Pedra Filosofal’ será lançada
                </a>
            </p>
        </div>
    </div>
</div>
<div class="row col-md-6 col-sm-6 col-xs-12 nopadlr">
    <div class="col-xs-12 col-sm-6 col-md-6 news">
        <div class="thumbnail size123">
                  <img src="images/jogos6.jpg" class="img-responsive" alt="Desenho do Harry Potter">
            <h5><a href="jogos/index.php" class="margin">Jogos</a></h5>
   
            <p><a href="jogos/noticia6.php" class="margin">God of War procura se reiventar com ambientação e enredo na E3 2016
                </a>
            </p>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 news">
        <div class="thumbnail size20">
            <h5><a href="esportes/index.php" class="margin">Esportes</a></h5>

            <p><a href="esportes/noticia8.php" class="margin">Dançarina é a primeira professora de zumba com Down
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
