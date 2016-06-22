<?php

/**
 * Created by PhpStorm.
 * User: rafael.ogrim
 * Date: 27/04/2016
 * Time: 19:59
 */
class idiomas
{
    function __construct()
    {
        if(array_key_exists('idioma', $_POST)){
            $_SESSION['idioma'] = $_POST['idioma'];
        }else if(!array_key_exists('idioma', $_SESSION)){
            $_SESSION['idioma'] = 'pt';
        }

        $this->jogos = require 'idiomasRafael.php';
        $this->comportamento = require 'idiomasLari.php';
        $this->tecnologia = require 'idiomasCaio.php';
        $this->entretenimento = require 'idiomasBia.php';
        $this->esportes = require 'idiomasRic.php';
    }

     public $nav = [
        'pt' => [
            'irconteudo' => 'Ir para Conteúdo',
            'irparamenu' => 'Ir para Menu',
            'acessibilidade' => 'Acessibilidade',
            'mapadosite' => 'Mapa do Site',
            'temaA' => 'Comportamento',
            'temaB' => 'Esportes',
            'temaC' => 'Entretenimento',
            'temaX' => 'Jogos',
            'temaY' => 'Mundo PET',
            'temaZ' => 'Tecnologia',
        ],
        'en' => [
            'irconteudo' => 'Go to Content',
            'irparamenu' => 'Go to Menu',
            'acessibilidade' => 'Accessibility',
            'mapadosite' => 'Site Map',
            'temaA' => 'lifestyle',
            'temaB' => 'Sports',
            'temaC' => 'Entertainment',
            'temaX' => 'Games',
            'temaY' => 'PET World',
            'temaZ' => 'Technology',
        ],
        'es' => [
            'irconteudo' => 'Ir al contenido',
            'irparamenu' => 'Ir al Menú',
            'acessibilidade' => 'Accesibilidad',
            'mapadosite' => 'Mapa del sitio',
            'temaA' => 'Comportamiento',
            'temaB' => 'Deportes',
            'temaC' => 'Entretenimiento',
            'temaX' => 'Juegos',
            'temaY' => 'Mundo PET',
            'temaZ' => 'Tecnología',
        ]
    ];

    
        ],
        ];

    $idioma['pt']['jogos'] = $this->jogos['pt'];
    $idioma['en']['jogos'] = $this->jogos['en'];
    $idioma['es']['jogos'] = $this->jogos['es'];

    $idioma['pt']['comportamento'] = $this->comportamento['pt'];
    $idioma['en']['comportamento'] = $this->comportamento['en'];
    $idioma['es']['comportamento'] = $this->comportamento['es'];

    $idioma['es']['tecnologia'] = $this->tecnologia['es'];
    $idioma['en']['tecnologia'] = $this->tecnologia['en'];
    $idioma['pt']['tecnologia'] = $this->tecnologia['pt'];


    $idioma['es']['entretenimento'] = $this->entretenimento['es'];
    $idioma['en']['entretenimento'] = $this->entretenimento['en'];
    $idioma['pt']['entretenimento'] = $this->entretenimento['pt'];

    $idioma['es']['esportes'] = $this->esportes['es'];
    $idioma['en']['esportes'] = $this->esportes['en'];
    $idioma['pt']['esportes'] = $this->esportes['pt'];

        return $idioma;
    }

    function BuscaIdioma($tema, $pagina)
    {
        $idioma = $_SESSION['idioma'];
        $arrIdioma = $this->retIdioma();

        $content = null;
        if($tema == 'index'){
            $content = $arrIdioma[$idioma][$tema];
        }else {
            $content = $arrIdioma[$idioma][$tema][$pagina];
        }

        return [
            'nav' => $this->nav[$idioma],
            'content' => $content
        ];
    }
}
