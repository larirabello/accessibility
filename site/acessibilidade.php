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
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/sandbox.css" rel="stylesheet" type="text/css">
    <link href="css/acessibilidade.css" rel="stylesheet" type="text/css">
</head>

<body class="container" style="margin-top:150px;">
<div id="texto" style="padding-bottom:100px;">
    <?php

    $imglogo = 'images/logo.png';
    $temaA = 'comportamento/index.php';
    $temaB = 'esportes/index.php';
    $temaC = 'entretenimento/index.php';
    $temaX = 'jogos/index.php';
    $temaY = 'mundopet/index.php';
    $temaZ = 'tecnologia/index.php';
    $linkirConteudo = '#conteudo';
    $linkirMenu = '#';
    $acess = 'acessibilidade.php';
    $sitemap = 'acessibilidade.php#mapa';
    include 'partes/nav.php';
    ?>
      <h1 style="font-family:'Poiret One', cursive; font-size:5em;">Acessibilidade</h1>
      <p class="text-justify">“<span style="font-size:1.3em;">Acessibilidade</span> são as condições e possibilidades de alcance para utilização, com segurança e autonomia, de edificações públicas, privadas e particulares, seus espaços, mobiliários e equipamentos urbanos, proporcionando a maior independência possível e dando ao cidadão deficiente ou àqueles com dificuldade de locomoção, o direito de ir e vir a todos os lugares que necessitar, seja no trabalho, estudo ou lazer, o que ajudará e levará à reinserção na sociedade”.</p>
      <p>Com o intuito de levar boas notícias para todos aqueles que as desejam ter, o Otimista dispõe de facilidades em seu acesso.</p>
      <p>Confira abaixo as funções de acessibilidade de nossa página:</p>

      <h3> Teclas de atalho</h3>
      <ul>
        <li>
          <h4>Alt + 1: </h4>
          <p>Ir para o conteúdo</p>
        </li>
        <li>
          <h4>Alt + 2: </h4>
          <p>Ir para o menu</p></li>
        <li>
          <h4>Alt + 3: </h4>
          <p>Ir para a página de Acessibilidade</p>
        </li>
        <li>
          <h4>Alt + 4: </h4>
          <p>Ir para o Mapa do Site</p>
        </li>
      </ul>

      <h3 id="mapa"> Sugestões de programas disponíveis para pessoas com deficiência</h3>
      <ul style="padding-bottom:50px;">
        <li>NVDA: software livre para ler tela – vários idiomas (Windows);</li>
        <li>DOSVOX: sistema para deficientes visuais (Windows ou Linux)</li>
        <li>Jaws for Windows: leitor de tela – vários idiomas</li>
      </ul>
      <hr style="padding:20px;">

      <h2  style="font-family:'Poiret One', cursive; font-size:5em;">Mapa do Site</h2>
         <ul>
            <li>
              <a href="./">Home</a>
            </li>       
            <li>
                <a href="./acessibilidade.php">Acessibilidade</a>
            </li>   
            <li>
                <a href="./comportamento">Comportamento</a>
                <ul>
                  <li><a href="./comportamento/noticia1.php">Doar comida agora por delivery!</a></li>
                  <li><a href="./comportamento/noticia2.php">Egoísmo não tem vez!</a></li>
                  <li><a href="./comportamento/noticia3.php">Cabeleireiro faz cortes em troca de histórias e transforma projeto em livro</a></li>
                  <li><a href="./comportamento/noticia4.php">Da lama ao lar!</a></li>
                  <li><a href="./comportamento/noticia5.php">Empresário ensina moradora de rua a ler na hora do almoço</a></li>
                  <li><a href="./comportamento/noticia6.php">Cultura da hospitalidade: veja o país mais educado do mundo</a></li>
                  <li><a href="./comportamento/noticia7.php">Professor chinês dá aulas por meio de desenhos</a></li>
                  <li><a href="./comportamento/noticia8.php">Jovem recorre a internet para arrecadar 94 cartões para aniversário da avó</a></li>
                  <li><a href="./comportamento/noticia9.php">Ducha permite banhos infinitos com apenas 10 litros de água</a></li>
                  <li><a href="./comportamento/noticia10.php">Quatro universidades brasileiras estão entre as 10 melhores da América Latina</a></li>
                  <li><a href="./comportamento/noticia11.php">Patrão leva funcionários para férias em hotel de luxo em Cancun</a></li>
                </ul>
            </li>    
            <li>
                <a href="./esportes">Esportes</a>
                        <ul>
                  <li><a href="./comportamento/noticia1.php">Doar comida agora por delivery!</a></li>
                  <li><a href="./comportamento/noticia2.php">Egoísmo não tem vez!</a></li>
                  <li><a href="./comportamento/noticia3.php">Cabeleireiro faz cortes em troca de histórias e transforma projeto em livro</a></li>
                  <li><a href="./comportamento/noticia4.php">Da lama ao lar!</a></li>
                  <li><a href="./comportamento/noticia5.php">Empresário ensina moradora de rua a ler na hora do almoço</a></li>
                  <li><a href="./comportamento/noticia6.php">Cultura da hospitalidade: veja o país mais educado do mundo</a></li>
                  <li><a href="./comportamento/noticia7.php">Professor chinês dá aulas por meio de desenhos</a></li>
                  <li><a href="./comportamento/noticia8.php">Jovem recorre a internet para arrecadar 94 cartões para aniversário da avó</a></li>
                  <li><a href="./comportamento/noticia9.php">Ducha permite banhos infinitos com apenas 10 litros de água</a></li>
                  <li><a href="./comportamento/noticia10.php">Quatro universidades brasileiras estão entre as 10 melhores da América Latina</a></li>
                  <li><a href="./comportamento/noticia11.php">Patrão leva funcionários para férias em hotel de luxo em Cancun</a></li>
                </ul>
            </li>     
            <li>
                <a href="./entretenimento">Entretenimento</a>
                        <ul>
                  <li><a href="./comportamento/noticia1.php">Doar comida agora por delivery!</a></li>
                  <li><a href="./comportamento/noticia2.php">Egoísmo não tem vez!</a></li>
                  <li><a href="./comportamento/noticia3.php">Cabeleireiro faz cortes em troca de histórias e transforma projeto em livro</a></li>
                  <li><a href="./comportamento/noticia4.php">Da lama ao lar!</a></li>
                  <li><a href="./comportamento/noticia5.php">Empresário ensina moradora de rua a ler na hora do almoço</a></li>
                  <li><a href="./comportamento/noticia6.php">Cultura da hospitalidade: veja o país mais educado do mundo</a></li>
                  <li><a href="./comportamento/noticia7.php">Professor chinês dá aulas por meio de desenhos</a></li>
                  <li><a href="./comportamento/noticia8.php">Jovem recorre a internet para arrecadar 94 cartões para aniversário da avó</a></li>
                  <li><a href="./comportamento/noticia9.php">Ducha permite banhos infinitos com apenas 10 litros de água</a></li>
                  <li><a href="./comportamento/noticia10.php">Quatro universidades brasileiras estão entre as 10 melhores da América Latina</a></li>
                  <li><a href="./comportamento/noticia11.php">Patrão leva funcionários para férias em hotel de luxo em Cancun</a></li>
                </ul>
            </li>     
            <li>
                <a href="./jogos">Jogos</a>
                        <ul>
                  <li><a href="./comportamento/noticia1.php">Doar comida agora por delivery!</a></li>
                  <li><a href="./comportamento/noticia2.php">Egoísmo não tem vez!</a></li>
                  <li><a href="./comportamento/noticia3.php">Cabeleireiro faz cortes em troca de histórias e transforma projeto em livro</a></li>
                  <li><a href="./comportamento/noticia4.php">Da lama ao lar!</a></li>
                  <li><a href="./comportamento/noticia5.php">Empresário ensina moradora de rua a ler na hora do almoço</a></li>
                  <li><a href="./comportamento/noticia6.php">Cultura da hospitalidade: veja o país mais educado do mundo</a></li>
                  <li><a href="./comportamento/noticia7.php">Professor chinês dá aulas por meio de desenhos</a></li>
                  <li><a href="./comportamento/noticia8.php">Jovem recorre a internet para arrecadar 94 cartões para aniversário da avó</a></li>
                  <li><a href="./comportamento/noticia9.php">Ducha permite banhos infinitos com apenas 10 litros de água</a></li>
                  <li><a href="./comportamento/noticia10.php">Quatro universidades brasileiras estão entre as 10 melhores da América Latina</a></li>
                  <li><a href="./comportamento/noticia11.php">Patrão leva funcionários para férias em hotel de luxo em Cancun</a></li>
                </ul>
            </li> 
             <li>
                <a href="./pet">Mundo Pet</a>
                          <ul>
                  <li><a href="./comportamento/noticia1.php">Doar comida agora por delivery!</a></li>
                  <li><a href="./comportamento/noticia2.php">Egoísmo não tem vez!</a></li>
                  <li><a href="./comportamento/noticia3.php">Cabeleireiro faz cortes em troca de histórias e transforma projeto em livro</a></li>
                  <li><a href="./comportamento/noticia4.php">Da lama ao lar!</a></li>
                  <li><a href="./comportamento/noticia5.php">Empresário ensina moradora de rua a ler na hora do almoço</a></li>
                  <li><a href="./comportamento/noticia6.php">Cultura da hospitalidade: veja o país mais educado do mundo</a></li>
                  <li><a href="./comportamento/noticia7.php">Professor chinês dá aulas por meio de desenhos</a></li>
                  <li><a href="./comportamento/noticia8.php">Jovem recorre a internet para arrecadar 94 cartões para aniversário da avó</a></li>
                  <li><a href="./comportamento/noticia9.php">Ducha permite banhos infinitos com apenas 10 litros de água</a></li>
                  <li><a href="./comportamento/noticia10.php">Quatro universidades brasileiras estão entre as 10 melhores da América Latina</a></li>
                  <li><a href="./comportamento/noticia11.php">Patrão leva funcionários para férias em hotel de luxo em Cancun</a></li>
                </ul>
            </li>                 
            <li>
                <a href="./tecnologia">Tecnologia</a>
                        <ul>
                  <li><a href="./comportamento/noticia1.php">Doar comida agora por delivery!</a></li>
                  <li><a href="./comportamento/noticia2.php">Egoísmo não tem vez!</a></li>
                  <li><a href="./comportamento/noticia3.php">Cabeleireiro faz cortes em troca de histórias e transforma projeto em livro</a></li>
                  <li><a href="./comportamento/noticia4.php">Da lama ao lar!</a></li>
                  <li><a href="./comportamento/noticia5.php">Empresário ensina moradora de rua a ler na hora do almoço</a></li>
                  <li><a href="./comportamento/noticia6.php">Cultura da hospitalidade: veja o país mais educado do mundo</a></li>
                  <li><a href="./comportamento/noticia7.php">Professor chinês dá aulas por meio de desenhos</a></li>
                  <li><a href="./comportamento/noticia8.php">Jovem recorre a internet para arrecadar 94 cartões para aniversário da avó</a></li>
                  <li><a href="./comportamento/noticia9.php">Ducha permite banhos infinitos com apenas 10 litros de água</a></li>
                  <li><a href="./comportamento/noticia10.php">Quatro universidades brasileiras estão entre as 10 melhores da América Latina</a></li>
                  <li><a href="./comportamento/noticia11.php">Patrão leva funcionários para férias em hotel de luxo em Cancun</a></li>
                </ul>
            </li>
            
                       
          </ul>
      </div>
          
    
<?php

require 'partes/footer.php';
$footer = new clFooter;
echo $footer->fnFooter(true, 'en');

?>
</div>
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
