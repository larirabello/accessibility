<?php
ini_set('display_errors', 'on');

@session_start();
require '../php/idiomas.php';

$idioma = new idiomas();
$idioma = $idioma->BuscaIdioma('tecnologia', 'index');

// idioma irá retornar um array com 2 chaves('nav', 'content').
// o uso da chave 'content' será no corpo da página para a tradução das strings
// o uso da chave 'nav' será no arquivo 'nav.php', só.


//mexer daqui pra baixo
/* ------------------- 1° noticia -------------- */
$not1img = 'images/img1.jpg'; //imagem
$not1link ='noticia1.php'; //link da noticia

/* ------------------- 2° noticia -------------- */
$not2img = 'images/img2.jpg'; //imagem
$not2link ='noticia2.php'; //link da noticia

/* ------------------- 3° noticia -------------- */
$not3img = 'images/img3.jpg'; //imagem
$not3link ='noticia3.php'; //link da noticia

/* ------------------- 4° noticia -------------- */
$not4link ='noticia4.php'; //link da noticia

/* ------------------- 5° noticia -------------- */
$not5link ='noticia5.php'; //link da noticia

/* ------------------- 6° noticia -------------- */
$not6img = 'images/img6.jpg'; //imagem
$not6link ='noticia6.php'; //link da noticia

/* ------------------- 7° noticia -------------- */
$not7img = 'images/img7.jpg'; //imagem
$not7link ='noticia7.php'; //link da noticia

/* ------------------- 8° noticia -------------- */
$not8link ='noticia8.php'; //link da noticia

/* ------------------- 9° noticia -------------- */
$not9link ='noticia9.php'; //link da noticia

/* ------------------- 10° noticia -------------- */
$not10img = 'images/img10.jpg'; //imagem
$not10link ='noticia10.php'; //link da noticia

/* ------------------- 11° noticia -------------- */
$not11img = 'images/img11.jpg'; //imagem
$not11link ='noticia11.php'; //link da noticia

include '../partes/tema.php';
?>
