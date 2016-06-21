<?php
ini_set('display_errors', 'on');

@session_start();
require '../php/idiomas.php';

$idioma = new idiomas();
$idioma = $idioma->BuscaIdioma('esportes', 'not3');
//$idioma = $idioma->BuscaIdioma('entreterimento', 'filmes');

// idioma irá retornar um array com 2 chaves('nav', 'content').
// o uso da chave 'content' será no corpo da página para a tradução das strings
// o uso da chave 'nav' será no arquivo 'nav.php', só.



//Imagem da materia
$imagennews ='../images/not3.jpg';

//Caso voce não tenha mais paragrafos não tem problema em deixar em branco
// --------------------------------------------------- //
// 1° noticia
$not1link = '../esportes'; //Link do tema
$not1textlink ='noticia5'; // texto da noticia

// 2° noticia
$not2link = '../esportes'; //Link do tema
$not2textlink = 'noticia10.php'; // Link da noticia

// 3° noticia
$not3link = '../esportes'; //Link do tema
$not3textlink = 'images/cute_baby_fox_wallpaper_hd_1080p.jpg'; // Link da noticia


include '../partes/materia.php';

require '../partes/footer.php';
$footer = new clFooter;
echo $footer->fnFooter(true, 'en');

?>
