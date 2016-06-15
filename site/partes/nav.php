<?php
$gotocontent = '#a';
$gotomenu = '#';
$acess = '';
$sitemap = '';
$temaA = 'tema.php';
$temaB = '';
$temaX = '';
$temaY = '';
$temaZ = '';
echo '
<div class="navbar navbar-fixed-top">
<nav role="navigation" class="navbar navbar-default menu-ac">
        <ul class="list-inline nav-justified color">
            <li role="presentation"><a href="'.$gotocontent.'"> Ir para o Conteúdo (Alt+1)</a></li>
            <li role="presentation"><a href="'.$gotomenu.'"> Ir para o Menu (Alt+2)</a></li>
            <li role="presentation"><a href="javascript:mudaTamanho(\'texto\', 1);">A+</a></li>
            <li role="presentation"><a href="javascript:mudaTamanho(\'texto\', -1);">A-</a></li>
            <li role="presentation">
                <div class="circle"></div>
            </li>
            <li role="presentation">
                <div class="circle circle-w"></div>
            </li>
            <li role="presentation"><a href="'.$acess.'">Acessibilidade (Alt+3)</a></li>
            <li role="presentation"><a href="'.$sitemap.'">Mapa do Site (Alt+4)</a></li>
        </ul>
    </nav>
    <nav role="navigation" class="nav navbar menu-ac2"">
        <ul class="list-inline nav-justified">
            <li><img src="images/smile.png" class="LogoNav" alt="Logotipo do site"></li>
            <li role="presentation"><a href="'.$temaA.'"> Tema A</a></li>
            <li role="presentation"><a href="'.$temaB.'"> Tema B</a></li>
            <li role="presentation"><a href="'.$temaX.'"> Tema X</a></li>
            <li role="presentation"><a href="'.$temaY.'"> Tema Y</a></li>
            <li role="presentation"><a href="'.$temaZ.'"> Tema Z</a></li>
        </ul>
    </nav>
</div>';
     ?>
