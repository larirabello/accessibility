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
    }

    public $nav = [
        'pt' => [
            'irconteudo' => 'Ir para Conteúdo',
            'irparamenu' => 'Ir para Menu',
            'acessibilidade' => 'Acessibilidade',
            'mapadosite' => 'Mapa do Site',
            'temaA' =>'Comportamento',
            'temaB' =>'Esportes',
            'temaC' =>'Entretenimento',
            'temaX' =>'Jogos',
            'temaY' =>'Mundo PET',
            'temaZ' =>'Tecnologia',
        ],
        'en' => [
            'irconteudo' => 'Go to Content',
            'irparamenu' => 'Go to Menu',
            'acessibilidade' => 'Accessibility',
            'mapadosite' => 'Site Map',
            'temaA' =>'lifestyle',
            'temaB' =>'Sports',
            'temaC' =>'Entertainment',
            'temaX' =>'Games',
            'temaY' =>'PET World',
            'temaZ' =>'Technology',
        ],
        'es' => [
            'irconteudo' => 'Ir al contenido',
            'irparamenu' => 'Ir al Menú',
            'acessibilidade' => 'Accesibilidad',
            'mapadosite' => 'Mapa del sitio',
            'temaA' =>'Comportamiento',
            'temaB' =>'Deportes',
            'temaC' =>'Entretenimiento',
            'temaX' =>'Juegos',
            'temaY' =>'Mundo PET',
            'temaZ' =>'Tecnología',
        ]
    ];

    public $idioma = [
        'pt' => [
            'index' => [
                'titulo' => 'Otimista',
                'irparaconteudo' => 'Ir para o conteúdo',
                'irparamenu' => 'Ir para o menu',
                'acessibilidade' => 'Acessibilidade',
                'mapadosite' => 'Mapa do Site 1',
            ],
            'esportes' => [
                'index' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Esportes',
                    /* ------------------- 1° noticia -------------- */
                    'not1alt' => 'Raposa vermelha de boca aberta',
                    'not1text' => 'Raaa dda oijasd oisar oias pojh t',
                    /* ------------------- 2° noticia -------------- */
                    'not2alt' => 'Raposa vermelha de boca aberta aaaaaaaaaaaaa',
                    'not2text' => 'Raaa dda oijasd oisar oias pojh t aaaaaaaaaaaaaaaaaaaaaaaaaa',
                    /* ------------------- 3° noticia -------------- */
                    'not3alt' => 'Raposa vermelha de boca aberta aaaaaaaaaaaaa',
                    'not3text' => 'Raaa dda oijasd oisar oias pojh t aaaaaaaaaaaaaaaaaaaaaaaaaa',
                    /* ------------------- 4° noticia -------------- */
                    'not4text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 5° noticia -------------- */
                    'not5text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 6° noticia -------------- */
                    'not6text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    'not6alt' => 'poasj posaj´p posd oiasrp k',
                    /* ------------------- 7° noticia -------------- */
                    'not7alt' => 'POKAS POASPO NAOIS POIDFJ GNAT ',
                    'not7text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 8° noticia -------------- */
                    'not8text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 9° noticia -------------- */
                    'not9text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 10° noticia -------------- */
                    'not10alt' => 'OPA´PS LK ISAIUD OTHJA',
                    'not10text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 11° noticia -------------- */
                    'not11alt' => 'ONZE',
                    'not11text' => 'apsoj spoidf oisajt poidjsf oitsd'
                ],
                'not1' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Esportes',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Eu pesava....................',
                    'resumo' => 'RESUMO RESUMO RESUMO RESUMO RESUMO RESUMO',
                    'autor' => 'Ricardo T. Ono A',
                    'texto1' => 'AAAAAAAAAAAAAADDDDDDDDDDDDDDDD', //1° paragrafos,
                    'texto2' => 'AAAAAAAAAAAAAADDDDDDDDDDDDDDDD', //2° paragrafos,
                    'texto3' => 'AAAAAAAAAAAAAADDDDDDDDDDDDDDDD', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'A', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'B', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'C', // tema
                    'not3text' => 'ONO'   // texto

                ]
            ],
            'Comportamento' => [
                'index' => [
                  'temaName' => 'Comportamento'
                ]
            ]
            // 'entreterimento' => [
            //     'index' => [
            //         'titulo' => 'Otimista'
            //     ],
            //     'filmes' => [
            //         'titulo' => 'bia teste'
            //     ]
            // ]
        ],
        'en' => [
            'index' => [
                'titulo' => 'OtimisAAAt',
                'irparaconteudo' => 'Go to content',
                'irparamenu' => 'Go to the menu',
                'acessibilidade' => 'Acessibility',
                'mapadosite' => 'Sitemap'
            ],
            'esportes' => [
                'index' => [
                    'home' => 'Home',
                    'temaName' => 'Sports',
                    /* ------------------- 1° noticia -------------- */
                    'not1alt' => 'Raposa vermelha de boca aberta',
                    'not1text' => 'Raaa dda oijasd oisar oias pojh t',
                    /* ------------------- 2° noticia -------------- */
                    'not2alt' => 'Raposa vermelha de boca aberta aaaaaaaaaaaaa',
                    'not2text' => 'Raaa dda oijasd oisar oias pojh t aaaaaaaaaaaaaaaaaaaaaaaaaa',
                    /* ------------------- 3° noticia -------------- */
                    'not3alt' => 'Raposa vermelha de boca aberta aaaaaaaaaaaaa',
                    'not3text' => 'Raaa dda oijasd oisar oias pojh t aaaaaaaaaaaaaaaaaaaaaaaaaa',
                    /* ------------------- 4° noticia -------------- */
                    'not4text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 5° noticia -------------- */
                    'not5text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 6° noticia -------------- */
                    'not6text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    'not6alt' => 'poasj posaj´p posd oiasrp k',
                    /* ------------------- 7° noticia -------------- */
                    'not7alt' => 'POKAS POASPO NAOIS POIDFJ GNAT ',
                    'not7text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 8° noticia -------------- */
                    'not8text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 9° noticia -------------- */
                    'not9text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 10° noticia -------------- */
                    'not10alt' => 'OPA´PS LK ISAIUD OTHJA',
                    'not10text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 11° noticia -------------- */
                    'not11alt' => 'ONZE',
                    'not11text' => 'apsoj spoidf oisajt poidjsf oitsd'
                ],
                'not1' => [
                    'home' => 'Home',
                    'temaName' => 'Sports',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'I weight....................',
                    'resumo' => 'LITTE LITTLE LITTLE',
                    'autor' => 'Ono, Ricardo T.',
                    'texto1' => 'BBBBBBBBBBBBBBBBBBBBBBBBBB', //1° paragrafos,
                    'texto2' => 'CCCCCCCCCCCCCCCCCCCCCCCCC', //2° paragrafos,
                    'texto3' => 'DDDDDDDDDDDDDDDDDDDDDDDDDD', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'A', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'B', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'C', // tema
                    'not3text' => 'ONO'   // texto

                ]
            ],
            'Comportamento' => [
                'index' => [
                  'temaName' => 'Comportamento'
                ]
            ]
        ],
        'es' => [
              'index' => [
                  'titulo' => 'Otemesti',
                  'irparaconteudo' => 'Go to content',
                  'irparamenu' => 'Go to the menu',
                  'acessibilidade' => 'Acessibility',
                  'mapadosite' => 'Sitemap'
              ],
              'esportes' => [
                  'index' => [
                      'home' => 'Homessss',
                      'temaName' => 'Sports',
                      /* ------------------- 1° noticia -------------- */
                      'not1alt' => 'Raposa vermelha de boca aberta',
                      'not1text' => 'Raaa dda oijasd oisar oias pojh t',
                      /* ------------------- 2° noticia -------------- */
                      'not2alt' => 'Raposa vermelha de boca aberta aaaaaaaaaaaaa',
                      'not2text' => 'Raaa dda oijasd oisar oias pojh t aaaaaaaaaaaaaaaaaaaaaaaaaa',
                      /* ------------------- 3° noticia -------------- */
                      'not3alt' => 'Raposa vermelha de boca aberta aaaaaaaaaaaaa',
                      'not3text' => 'Raaa dda oijasd oisar oias pojh t aaaaaaaaaaaaaaaaaaaaaaaaaa',
                      /* ------------------- 4° noticia -------------- */
                      'not4text' => 'apsoj spoidf oisajt poidjsf oitsd',
                      /* ------------------- 5° noticia -------------- */
                      'not5text' => 'apsoj spoidf oisajt poidjsf oitsd',
                      /* ------------------- 6° noticia -------------- */
                      'not6text' => 'apsoj spoidf oisajt poidjsf oitsd',
                      'not6alt' => 'poasj posaj´p posd oiasrp k',
                      /* ------------------- 7° noticia -------------- */
                      'not7alt' => 'POKAS POASPO NAOIS POIDFJ GNAT ',
                      'not7text' => 'apsoj spoidf oisajt poidjsf oitsd',
                      /* ------------------- 8° noticia -------------- */
                      'not8text' => 'apsoj spoidf oisajt poidjsf oitsd',
                      /* ------------------- 9° noticia -------------- */
                      'not9text' => 'apsoj spoidf oisajt poidjsf oitsd',
                      /* ------------------- 10° noticia -------------- */
                      'not10alt' => 'OPA´PS LK ISAIUD OTHJA',
                      'not10text' => 'apsoj spoidf oisajt poidjsf oitsd',
                      /* ------------------- 11° noticia -------------- */
                      'not11alt' => 'ONZE',
                      'not11text' => 'apsoj spoidf oisajt poidjsf oitsd'
                  ],
                  'not1' => [
                      'home' => 'Home',
                      'temaName' => 'Sports',
                      'datapub' => '12/06/2015 as 09h30min',
                      'titulo' => 'I weight....................',
                      'resumo' => 'LITTE LITTLE LITTLE',
                      'autor' => 'Ono, Ricardo T.',
                      'texto1' => 'BBBBBBBBBBBBBBBBBBBBBBBBBB', //1° paragrafos,
                      'texto2' => 'CCCCCCCCCCCCCCCCCCCCCCCCC', //2° paragrafos,
                      'texto3' => 'DDDDDDDDDDDDDDDDDDDDDDDDDD', //3° paragrafos,
                      //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                      'texto4' => '', //4° paragrafos,
                      'texto5' => '', //5° paragrafos
                      // Section de noticia
                      //1° noticia
                      'tema1not' => 'A', // tema
                      'not1text' => 'RICARDO',  // texto
                      //2° noticia
                      'tema2not' => 'B', // tema
                      'not2text' => 'TADASHI',  // texto
                      //3° noticia
                      'tema3not' => 'C', // tema
                      'not3text' => 'ONO'   // texto
                  ]
              ]
        ]
      ];

    function BuscaIdioma($tema, $pagina)
    {
        $idioma = $_SESSION['idioma'];
        $content = null;
        if($tema == 'index'){
            $content = $this->idioma[$idioma][$tema];
        }else {
            $content = $this->idioma[$idioma][$tema][$pagina];
        }

        return [
            'nav' => $this->nav[$idioma],
            'content' => $content
        ];
    }
}
