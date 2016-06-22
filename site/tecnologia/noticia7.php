<?php
ini_set('display_errors', 'on');

@session_start();
require '../php/idiomas.php';

$idioma = new idiomas();
$idioma = $idioma->BuscaIdioma('tecnologia', 'not7');

// o uso da chave 'content' será no corpo da página para a tradução das strings
// o uso da chave 'nav' será no arquivo 'nav.php', só.

//Imagem da materia
$imagennews ='images/img7.jpg';

//Caso voce não tenha mais paragrafos não tem problema em deixar em branco
// --------------------------------------------------- //
// 1° noticia
$not1link = '../tecnologia'; //Link do tema
$not1textlink ='noticia10.php'; // texto da noticia

// 2° noticia
$not2link = '../tecnologia'; //Link do tema
$not2textlink = 'noticia8.php'; // Link da noticia

// 3° noticia
$not3link = '../tecnologia'; //Link do tema
$not3textlink = 'noticia5.php'; // Link da noticia


include '../partes/materia.php';

require '../partes/footer.php';
$footer = new clFooter;
echo $footer->fnFooter(true, 'pt');
?>
