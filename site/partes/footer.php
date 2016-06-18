<?php

class clFooter
{

    var $idioma = "pt";

    var $links = [
        "pt" => [
            "Jogos" => [
                "h" => "../jogos",
                "Página 1" => '../jogos/pag1.php'],
            "Esportes" => [
                "h" => "../esportes",
                "Página 2" => '../esportes/pag1.php',
                "Página 3" => '../esportes/pag2.php'],
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
            <footer class="col-xs-12">
                <div class="container text-center">
            ';

//                 <h1 class="col-xs-12">Mapa do site</h1>

        foreach (array_keys($this->links[$this->idioma]) as $v) {

            $footer .= '
              <ul class="col-sm-4 col-md-2 col-xs-6">
                  <li><a href="' . ($isSiteHome ? str_replace('../', '', $this->links[$this->idioma][$v]['h']) : $this->links[$this->idioma][$v]['h']) . '">' . $v . '</a></li>';

            foreach (array_keys($this->links[$this->idioma][$v]) as $v2) {
                if ($v2 != 'h') {
                    $footer .= '<li><a href="' . ($isSiteHome ? str_replace('../', '', $this->links[$this->idioma][$v][$v2]) : $this->links[$this->idioma][$v][$v2]) . '">' . $v2 . '</a></li>';
                }
            }

            $footer .= '</ul>';
        }

        $footer .= '</div></footer>';

        return $footer;
    }
}

?>
