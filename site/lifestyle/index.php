<?php
ini_set('display_errors', 'on');

@session_start();
require '../php/idiomas.php';

$idioma = new idiomas();
$idioma = $idioma->BuscaIdioma('lifestyle', 'index');
//$idioma = $idioma->BuscaIdioma('entreterimento', 'filmes');

// idioma irá retornar um array com 2 chaves('nav', 'content').
// o uso da chave 'content' será no corpo da página para a tradução das strings
// o uso da chave 'nav' será no arquivo 'nav.php', só.
$imglogo = '../images/smile.png';
$temaA = 'tema.php';
$temaB = 'esportes/index.php';
$temaX = 'AAA';
$temaY = '';
$temaZ = '';
$linkirConteudo = '#conteudo';
$linkirMenu = '#';
$acess = '#';
$sitemap = '#';
//Tema
$title = 'Esportes';
$temaName = $title;
/* ------------------- 1° noticia -------------- */
$not1img = 'images/cute_baby_fox_wallpaper_hd_1080p.jpg'; //imagem
$not1alt = 'raposa vermelha bocechando'; //alt da imagem
$not1link ='testnews.php'; //link da noticia
$not1text = '“Eu pesava 133kg, era viciado em drogas e bebia muito whisky”... A'; //resumo da noticia

/* ------------------- 2° noticia -------------- */
$not2img = 'images/cute_baby_fox_wallpaper_hd_1080p.jpg'; //imagem
$not2alt = 'raposa vermelha as'; //alt da imagem
$not2link ='testnews.php'; //link da noticia
$not2text = 'Neque porro quisqu asd am est qui dolorem ipsum quia dolor sit amet'; //resumo da noticia

/* ------------------- 3° noticia -------------- */
$not3img = 'images/cute_baby_fox_wallpaper_hd_1080p.jpg'; //imagem
$not3alt = 'raposa vermelha as'; //alt da imagem
$not3link ='testnews.php'; //link da noticia
$not3text = 'Neque porro quisqu asd am est qui dolorem ipsum quia dolor sit amet'; //resumo da noticia

/* ------------------- 4° noticia -------------- */
$not4link ='testnews.php'; //link da noticia
$not4text = 'Neque porro quisqu asd am est qui dolorem ipsum quia dolor sit amet'; //resumo da noticia

/* ------------------- 5° noticia -------------- */
$not5link ='testnews.php'; //link da noticia
$not5text = 'Neque porro quisqu asd am est qui dolorem ipsum quia dolor sit amet'; //resumo da noticia

/* ------------------- 6° noticia -------------- */
$not6img = 'images/cute_baby_fox_wallpaper_hd_1080p.jpg'; //imagem
$not6alt = 'raposa vermelha as'; //alt da imagem
$not6link ='testnews.php'; //link da noticia
$not6text = 'Neque porro quisqu vermelho am est qui dolorem ipsum quia dolor sit amet'; //resumo da noticia

/* ------------------- 7° noticia -------------- */
$not7img = 'images/cute_baby_fox_wallpaper_hd_1080p.jpg'; //imagem
$not7alt = 'raposa vermelha as'; //alt da imagem
$not7link ='testnews.php'; //link da noticia
$not7text = 'Neque porro quisqu vermelho am e as sssssst qui dolorem ipsum quia dolor sit amet'; //resumo da noticia

/* ------------------- 8° noticia -------------- */
$not8link ='testnews.php'; //link da noticia
$not8text = 'Neque porro quisqu asd am est qui dolorem ipsum quia dolor sit amet'; //resumo da noticia

/* ------------------- 9° noticia -------------- */
$not9link ='testnews.php'; //link da noticia
$not9text = 'Neque porro quisqu asd am est qui dolorem ipsum quia dolor sit amet'; //resumo da noticia

/* ------------------- 10° noticia -------------- */
$not10img = 'images/cute_baby_fox_wallpaper_hd_1080p.jpg'; //imagem
$not10alt = 'raposa vermelha as'; //alt da imagem
$not10link ='testnews.php'; //link da noticia
$not10text = 'Neque porro quisqu vermelho am e as sssssst qui dolorem ipsum quia dolor sit amet'; //resumo da noticia

/* ------------------- 11° noticia -------------- */
$not11img = 'images/cute_baby_fox_wallpaper_hd_1080p.jpg'; //imagem
$not11alt = 'raposa vermelha as'; //alt da imagem
$not11link ='testnews.php'; //link da noticia
$not11text = 'Neque porro quisqu vermelho am e as sssssst qui dolorem ipsum quia dolor sit amet'; //resumo da noticia

include '../partes/tema.php';
?>
