<?php

class clFooter
{

    var $idioma = "pt";

    var $links = [
        "pt" => [
             "Comportamento" => [
                "h" => "../comportamento",
            ],
            "Esportes" => [
                "h" => "../esportes",
            ],
            "Entretenimento" => [
                "h" => "../entretenimento",
            ],
           "Jogos" => [
                "h" => "../jogos",
            ],
            "Mundo Pet" => [
                "h" => "../pet",
            ],
            "Tecnologia" => [
                "h" => "../tecnologia",
            ],
        ]
    ];


    function fnFooter($isSiteHome, $idioma2)
    {
        if (array_key_exists($idioma2, $this->links)) {
            $this->idioma = $idioma2;
        }
        $footer = '
            <div class="btn btn-warning" style="position: fixed; z-index: 999; bottom: 0">
                <span class="visible-xs">xs</span>
                <span class="visible-sm">sm</span>
                <span class="visible-md">md</span>
                <span class="visible-lg">lg</span>
            </div>
            <footer class="col-xs-12 text-center">
                <div class="container">
                <div class="col-xs-12 hTitle">Sitemap</div>
            ';

//                 <h1 class="col-xs-12">Mapa do site</h1>

        foreach (array_keys($this->links[$this->idioma]) as $v) {
            $footer .= '<div class="col-sm-4 col-md-2 col-xs-6 nms"><a href="' . ($isSiteHome ? str_replace('../', '', $this->links[$this->idioma][$v]['h']) : $this->links[$this->idioma][$v]['h']) . '">' . $v . '</a></div>';
        }
        $footer .= '</div>

<div class="container">
    <div class="text-center col-xs-12 hTitle">Desenvolvedores</div>
    <div class="col-sm-4 col-md-2 col-xs-6 nms">Caio Salgado</div>
    <div class="col-sm-4 col-md-2 col-xs-6 nms">Beatriz Guedes</div>
    <div class="col-sm-4 col-md-2 col-xs-6 nms">Larissa Rabello</div>
    <div class="col-sm-4 col-md-2 col-xs-6 nms">Rafael Ogrim</div>
    <div class="col-sm-4 col-md-2 col-xs-6 nms">Ricardo Ono</div>
    <div class="col-sm-4 col-md-2 col-xs-6 nms">Karen Lara</div>
</div>
</footer>';

        return $footer;
    }
}

?>
