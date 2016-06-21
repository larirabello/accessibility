<?php
ini_set('display_errors', 'on');

@session_start();
require '../php/idiomas.php';

$idioma = new idiomas();
$idioma = $idioma->BuscaIdioma('jogos', 'not8');
//$idioma = $idioma->BuscaIdioma('entreterimento', 'filmes');

// idioma irá retornar um array com 2 chaves('nav', 'content').
// o uso da chave 'content' será no corpo da página para a tradução das strings
// o uso da chave 'nav' será no arquivo 'nav.php', só.



//Imagem da materia
$imagennews ='../images/jogos8.jpg';


//Caso voce não tenha mais paragrafos não tem problema em deixar em branco
// --------------------------------------------------- //
// 1° noticia
$not1link = './'; //Link do tema
$not1textlink ='./noticia9.php'; // texto da noticia

// 2° noticia
$not2link = './'; //Link do tema
$not2textlink = './noticia10.php'; // Link da noticia

// 3° noticia
$not3link = './'; //Link do tema
$not3textlink = './noticia11.php'; // Link da noticia


include '../partes/materia.php';

require '../partes/footer.php';
$footer = new clFooter;
echo $footer->fnFooter(true, 'en');

?>
