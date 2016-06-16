<?php

echo '
<div class="navbar navbar-fixed-top">
<nav role="navigation" class="navbar navbar-default menu-ac">
        <ul class="list-inline nav-justified color">
            <li role="presentation"><a href="'.$linkirConteudo.'"> '.$idioma['nav']['irconteudo'].' (Alt+1)</a></li>
            <li role="presentation"><a href="'.$linkirMenu.'"> '.$idioma['nav']['irparamenu'].' (Alt+2)</a></li>
            <li role="presentation"><a href="javascript:mudaTamanho(\'texto\', 1);">A+</a></li>
            <li role="presentation"><a href="javascript:mudaTamanho(\'texto\', -1);">A-</a></li>
            <li>
               <form method="post" action="">
                    <input value="pt" name="idioma" type="submit">
                    <input value="en" name="idioma" type="submit">
                    <input value="es" name="idioma" type="submit">
               </form>
            </li>
            <li role="presentation">
                <div class="circle"></div>
            </li>
            <li role="presentation">
                <div class="circle circle-w"></div>
            </li>
            <li role="presentation"><a href="'.$acess.'">'.$idioma['nav']['acessibilidade'].' (Alt+3)</a></li>
            <li role="presentation"><a href="'.$sitemap.'">'.$idioma['nav']['mapadosite'].' (Alt+4)</a></li>
        </ul>
    </nav>
    <nav role="navigation" class="nav navbar menu-ac2"">
        <ul class="list-inline nav-justified">
            <li><img src="'.$imglogo.'" class="LogoNav" alt="Logotipo do site"></li>
            <li role="presentation"><a href="'.$temaA.'">'.$idioma['nav']['temaA'].'</a></li>
            <li role="presentation"><a href="'.$temaB.'">'.$idioma['nav']['temaB'].'</a></li>
            <li role="presentation"><a href="'.$temaC.'">'.$idioma['nav']['temaC'].'</a></li>
            <li role="presentation"><a href="'.$temaX.'">'.$idioma['nav']['temaX'].'</a></li>
            <li role="presentation"><a href="'.$temaY.'">'.$idioma['nav']['temaY'].'</a></li>
            <li role="presentation"><a href="'.$temaZ.'">'.$idioma['nav']['temaZ'].'</a></li>
        </ul>
    </nav>
</div>';
     ?>
