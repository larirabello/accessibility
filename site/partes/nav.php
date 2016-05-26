<?php
$gotocontent = '#onze';
$gotomenu = '#';
$Aplus = '';
$Aminus = '';
$acess = '';
$sitemap = '';
$temaA = 'tema.php';
$temaB = '';
$temaC = '';
$temaX = '';
$temaY = '';
$temaZ = '';
echo '<nav role="navigation" class="navbar navbar-default menu-ac">
        <ul class="list-inline nav-justified">
            <li role="presentation"><a href="'.$gotocontent.'"> Ir para o Conteúdo (Alt+1)</a></li>
            <li role="presentation"><a href="'.$gotomenu.'"> Ir para o Menu (Alt+2)</a></li>
            <li role="presentation"><a href="">A+</a></li>
            <li role="presentation"><a href="">A-</a></li>
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
    <nav role="navigation" class="navbar navbar-default">
        <ul class="list-inline nav-justified">
            <li role="presentation"><a href="'.$temaA.'"> Tema A</a></li>
            <li role="presentation"><a href="'.$temaB.'"> Tema B</a></li>
            <li role="presentation"><a href="'.$temaC.'> Tema C</a></li>
            <li role="presentation"><a href="'.$temaX.'"> Tema X</a></li>
            <li role="presentation"><a href="'.$temaY.'"> Tema Y</a></li>
            <li role="presentation"><a href="'.$temaZ.'"> Tema Z</a></li>
        </ul>
    </nav>';
     ?>
