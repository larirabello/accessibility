<?php
ini_set('display_errors', 'on');

@session_start();
require '../php/idiomas.php';

$idioma = new idiomas();
$idioma = $idioma->BuscaIdioma('entretenimento', 'idiomasBia.php');
//$idioma = $idioma->BuscaIdioma('entreterimento', 'filmes');

// idioma irá retornar um array com 2 chaves('nav', 'content').
// o uso da chave 'content' será no corpo da página para a tradução das strings
// o uso da chave 'nav' será no arquivo 'nav.php', só.



//mexer daqui pra baixo
/* ------------------- 1° noticia -------------- */
$not1img = '../images/image1.jpg'; //imagem
$not1link ='noticia1.php'; //link da noticia

/* ------------------- 2° noticia -------------- */
$not2img = '../images/image2.jpg'; //imagem
$not2link ='../testnews.php'; //link da noticia

/* ------------------- 3° noticia -------------- */
$not3img = '../images/image3.jpg'; //imagem
$not3link ='../testnews.php'; //link da noticia

/* ------------------- 4° noticia -------------- */
$not4link ='../testnews.php'; //link da noticia

/* ------------------- 5° noticia -------------- */
$not5link ='../testnews.php'; //link da noticia

/* ------------------- 6° noticia -------------- */
$not6img = '../images/image6.jpg'; //imagem
$not6link ='../testnews.php'; //link da noticia

/* ------------------- 7° noticia -------------- */
$not7img = '../images/image7.jpg'; //imagem
$not7link ='../testnews.php'; //link da noticia

/* ------------------- 8° noticia -------------- */
$not8link ='../testnews.php'; //link da noticia

/* ------------------- 9° noticia -------------- */
$not9link ='../testnews.php'; //link da noticia

/* ------------------- 10° noticia -------------- */
$not10img = '../images/image10.jpg'; //imagem
$not10link ='../testnews.php'; //link da noticia

/* ------------------- 11° noticia -------------- */
$not11img = '../images/image11.jpg'; //imagem
$not11link ='../testnews.php'; //link da noticia

include '../partes/tema.php';
?>
