<?php
ini_set('display_errors', 'on');

@session_start();
require '../php/idiomas.php';

$idioma = new idiomas();
$idioma = $idioma->BuscaIdioma('comportamento', 'not10');
//$idioma = $idioma->BuscaIdioma('entreterimento', 'filmes');

// idioma irá retornar um array com 2 chaves('nav', 'content').
// o uso da chave 'content' será no corpo da página para a tradução das strings
// o uso da chave 'nav' será no arquivo 'nav.php', só.



//Imagem da materia
$imagennews ='../images/img10.jpg';

//Caso voce não tenha mais paragrafos não tem problema em deixar em branco
// --------------------------------------------------- //
// 1° noticia
$not1link = 'temaa.php'; //Link do tema
$not1textlink ='Focado no Paulistão, Santos tenta evitar zebra na Copa do Brasil Santos hu3hu3hu3h '; // texto da noticia

// 2° noticia
$not2link = 'temaa.php'; //Link do tema
$not2textlink = 'images/cute_baby_fox_wallpaper_hd_1080p.jpg'; // Link da noticia

// 3° noticia
$not3link = 'temaa.php'; //Link do tema
$not3textlink = 'images/cute_baby_fox_wallpaper_hd_1080p.jpg'; // Link da noticia


include '../partes/materia.php';

?>
