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

      <h2 id="mapa" style="font-family:'Poiret One', cursive; font-size:5em;">Mapa do Site</h2>
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
                  <li><a href="./esportes/noticia1.php">Superação no esporte: “Eu pesava 133kg, era viciado em drogas e bebia muito whisky”</a></li>
                  <li><a href="./esportes/noticia2.php">Daniel Dias é destaque no Mundial Paralímpico de Natação</a></li>
                  <li><a href="./esportes/noticia3.php">Brasil pode ter delegação recorde em paraolimpíadas</a></li>
                  <li><a href="./esportes/noticia4.php">Pan da superação: de filhas de ex-traficante a medalhistas de prata no Pan-Toronto</a></li>
                  <li><a href="./esportes/noticia5.php">Dia do Atleta Paraolimpico: conheça um pouco mais sobre esse dia e sua realização</a></li>
                  <li><a href="./esportes/noticia6.php">Garoto sem braço deixa exemplo de superação no vôlei</a></li>
                  <li><a href="./esportes/noticia7.php">Garoto empresta muleta para colega assistir jogo: generosidade</a></li>
                  <li><a href="./esportes/noticia8.php">Dançarina é a primeira professora de zumba com Down</a></li>
                  <li><a href="./esportes/noticia9.php">É inacreditável", diz comandante de voo que leva Chama Olímpica ao Acre</a></li>
                  <li><a href="./esportes/noticia10.php">Na Olimpíada dos emojis, saltos ornamentais é o único a ficar fora</a></li>
                  <li><a href="./esportes/noticia11.php">Maratonista de 99 anos diz que “esporte é farmácia”</a></li>
                </ul>
            </li>     
            <li>
                <a href="./entretenimento">Entretenimento</a>
                        <ul>
                  <li><a href="./entretenimento/noticia1.php">Heroínas e heróis da DC vão estrelar livros voltados para o público jovem</a></li>
                  <li><a href="./entretenimento/noticia2.php">Música para surdo</a></li>
                  <li><a href="./entretenimento/noticia3.php">Oscar dos quadrinhos bate recorde de indicações a mulheres</a></li>
                  <li><a href="./entretenimento/noticia4.php">The Sims 4 agora conta com opções personalizadas de sexo</a></li>
                  <li><a href="./entretenimento/noticia5.php">Teclado analógico promete oferecer mais precisão a seus games</a></li>
                  <li><a href="./entretenimento/noticia6.php">Quatro filmes feministas que toda mulher precisa assistir</a></li>
                  <li><a href="./entretenimento/noticia7.php">Edição especial de ‘Harry Potter e a Pedra Filosofal será lançada</a></li>
                  <li><a href="./entretenimento/noticia8.php">Cinco filmes que vão te deixar super otimista</a></li>
                  <li><a href="./entretenimento/notentretenimentoicia9.php">3 motivos para ser otimista</a></li>
                  <li><a href="./entretenimento/noticia10.php">Inês Brasil aparece em vídeo Orange is the New Black e quebra a internet</a></li>
                  <li><a href="./entretenimento/noticia11.php">Netflix tem vídeo secreto, saiba como acessá-lojogos</a></li>
                </ul>
            </li>     
            <li>
                <a href="./jogos">Jogos</a>
                        <ul>
                  <li><a href="./jogos/noticia1.php">Novo Xbox One S é o destaque da Microsoft na E3 e chega ainda este ano</a></li>
                  <li><a href="./jogos/noticia2.php">Novo PS4 é confirmado pela Sony e chega poderoso com tecnologia 4K</a></li>
                  <li><a href="./jogos/noticia3.php">Fifa 15: EA anuncia versões para Nintendo Wii, 3DS e PlayStation Vita</a></li>
                  <li><a href="./jogos/noticia4.php">The Legend of Zelda: Nintendo anuncia novo jogo da franquia para Wii U</a></li>
                  <li><a href="./jogos/noticia5.php">The Witcher 3: edição de colecionador chega ao Brasil com preço salgado</a></li>
                  <li><a href="./jogos/noticia6.php">God of War procura se reiventar com ambientação e enredo na E3 2016</a></li>
                  <li><a href="./jogos/noticia7.php">Battlefield 1 melhora o multiplayer da franquia da EA na E3 2016</a></li>
                  <li><a href="./jogos/noticia8.php">Inédito modo história de Street Fighter 5 tem muito conteúdo na E3 2016</a></li>
                  <li><a href="./jogos/noticia9.php">PlayStation VR impressiona com o realismo de Resident Evil 7</a></li>
                  <li><a href="./jogos/noticia10.php">Clash Royale ganha primeiro torneio oficial que chega ao Brasil</a></li>
                  <li><a href="./jogos/noticia11.php">Conheça 4 campeões ‘baratinhos’ para comprar em League of Legends</a></li>
                </ul>
            </li> 
             <li>
                <a href="./pet">Mundo Pet</a>
                          <ul>
                  <li><a href="./pet/noticia1.php">Cães idosos precisam de cuidados redobrados e visitas ao veterinário regulares</a></li>
                  <li><a href="./pet/noticia2.php">A triste realidade dos zoológicos</a></li>
                  <li><a href="./pet/noticia3.php">Faça da sua casa um lar temporário para animais</a></li>
                  <li><a href="./pet/noticia4.php">O paraíso dos gatos de Roma</a></li>
                  <li><a href="./pet/noticia5.php">'O poder do amor entre humanos e animais </a></li>
                  <li><a href="./pet/noticia6.php">Cuidados especiais com os bichinhos no frio </a></li>
                  <li><a href="./pet/noticia7.php">Reflexões sobre o abandono de animais</a></li>
                  <li><a href="./pet/noticia8.php">Cachorros e gatos podem ser amigos?</a></li>
                  <li><a href="./pet/noticia9.php">Cão foge de casa para visitar dono internado</a></li>
                  <li><a href="./pet/noticia10.php">Luta pelo veganismo</a></li>
                  <li><a href="./pet/noticia11.php">A perfeição dos animais com deficiências</a></li>
                </ul>
            </li>                 
            <li>
                <a href="./tecnologia">Tecnologia</a>
                        <ul>
                  <li><a href="./tecnologia/noticia1.php">Robô foge de laboratório e gera problemas de trânsito</a></li>
                  <li><a href="./tecnologia/noticia2.php">Encomendas abaixo de US$ 100 agora são isentas de impostos</a></li>
                  <li><a href="./tecnologia/noticia3.php">Homem que automatizou trabalho e ficou 6 anos "fazendo nada" é demitido</a></li>
                  <li><a href="./tecnologia/noticia4.php">AZBox: como funciona o decodificador mais polêmico do Brasil?</a></li>
                  <li><a href="./tecnologia/noticia5.php">Como saber se tem alguém roubando minha conexão Wi-Fi?</a></li>
                  <li><a href="./tecnologia/noticia6.php">Anatel não vai mais proibir operadoras de limitarem planos de internet</a></li>
                  <li><a href="./tecnologia/noticia7.php">Lectro, uma bike elétrica para quem gosta de aventura</a></li>
                  <li><a href="./tecnologia/noticia8.php">O monstro chegou! OnePlus 3 é lançado com 6 GB de RAM</a></li>
                  <li><a href="./tecnologia/noticia9.php">Profissão de TI pode ser regulamentada em breve no Brasil</a></li>
                  <li><a href="./tecnologia/noticia10.php">Ônibus autônomos já são uma realidade</a></li>
                  <li><a href="./tecnologia/noticia11.php">Apple registra patente de iPhone com tela dobrável</a></li>
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
