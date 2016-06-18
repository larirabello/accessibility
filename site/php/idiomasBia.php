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
            'temaA' =>'Algo',
            'temaB' =>'Esportes',
            'temaC' =>'Esportes',
            'temaX' =>'Outro',
            'temaY' =>'Jogos',
            'temaZ' =>'Cavalo',
        ],
        'en' => [
            'irconteudo' => 'Go to Content',
            'irparamenu' => 'Go to Menu',
            'acessibilidade' => 'Acessibilility',
            'mapadosite' => 'Site map',
            'temaA' =>'Something',
            'temaB' =>'Sports',
            'temaC' =>'Sports',
            'temaX' =>'Other',
            'temaY' =>'Games',
            'temaZ' =>'Horse',
        ],
        'es' => [
            'irconteudo' => 'Menu',
            'irparamenu' => 'Go to Menu',
            'acessibilidade' => 'Acessibilility',
            'mapadosite' => 'Site map',
            'temaA' =>'Something',
            'temaB' =>'Sports',
            'temaC' =>'Sports',
            'temaX' =>'Other',
            'temaY' =>'Games',
            'temaZ' =>'Horse',
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
                    'temaName' => 'Entretenimento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Heroínas e heróis da DC vão estrelar livros voltados para o público jovem',
                    'resumo' => '',
                    'autor' => 'Ricardo T. Ono A',
                    'texto1' => 'O exército de super-heróis da DC Comics está prestes a conquistar mais um território. Nada de (mais) blockbusters ou séries de TV que exploram o universo expandido dos quadrinhos - desta vez, a empresa fez uma parceria com a editora Random House para levar algumas de suas personagens em novas aventuras literárias. Mulher-Maravilha, Batman, Super-Homem e Mulher-Gato vão protagonizar uma série de livros voltados para o público jovem-adulto.', //1° paragrafos,
                    'texto2' => 'Quem vai assinar as novas aventuras das heroínas e dos heróis é um time de autores conhecidos por obras voltadas para o público-alvo. O primeiro livro a chegar às prateleiras gringas, em agosto de 2017, será Mulher-Maravilha: a história da amazona será escrita por Leigh Bardugo, autora da Trilogia Grisha, composta pelos livros Sol e Tormenta (2012), Sombra e Ossos (2013) e Luz e Sombra (2014). Depois será a vez do morcegão - a aventura de Batman vai ser assinada por Marie Lu, chinesa radicada nos EUA e autora das trilogias Legend (2011-2013) e Jovens de Elites (2014-).', //2° paragrafos,
                    'texto3' => 'Quem vai encarar o Homem de Aço é Matt de la Peña, premiado autor responsável por obras como A Maldição dos Ancestrais (2013), The Living (2013) e Last Stop on Market Street (2015), ainda sem edições brasileiras. Por fim, Sarah J. Maas, autora da série Trono de Vidro (2012-), vai criar a nova aventura da ambígua anti-heroína Selina Kyle (a.k.a. Mulher-Gato). Os livros ainda não têm data de lançamento no Brasil.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Esta não é a primeira investida literária da DC. Em março deste ano, foi lançado Wonder Woman at Super Hero High, assinado pela autora Lisa Yee. Este é o primeiro livro da série infanto-juvenil Super Hero High, que acompanha super heroínas em treinamento que lidam tanto com o desenvolvimento de seus poderes quanto com os desafios da vida escolar. Além da Mulher-Maravilha, Supergirl, Katana, Harley Quinn, Batgirl e Era Venenosa são algumas das outras jovens personagens que estão de volta às aulas.', //4° paragrafos,
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
                
                'not2' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Música para surdo',
                    'resumo' => '',
                    'autor' => 'Ricardo T. Ono A',
                    'texto1' => 'A última novidade eletrônica de Londres é a rave para surdos. É simples: surdos, assim como todo mundo, sentem a música através da vibração. Ou você nunca ouviu uma pessoa dizendo “Sinta a música”? Ondas sonoras são vibrações que, ao atingirem os tímpanos, se transformam em impulsos elétricos graças aos nervos auditivos. Esses impulsos são interpretados pelo cérebro como vozes, notas, o que for. Uma pessoa surda não interpreta as ondas sonoras, muitas vezes por problemas nesse nervo. Mas ela sente a vibração da mesma forma que qualquer um, por meio dos graves que sacodem o chão ou batem no peito. Nada disso passou pela cabeça de Troi Lee quando ele decidiu organizar a primeira rave especialmente para a galera que não escuta. O que ele queria era se divertir: Lee é surdo de nascença e sempre gostou de sair para dançar, seguindo as vibrações da música. “Tocamos vários estilos, como drum’n’bass e hip hop. O importante é uma boa linha de baixo”, diz Lee. A Deaf Rave já se provou um sucesso, reunindo mil pessoas em sua última edição, em 10 de abril. Lee tem planos de organizar festas por todo o mundo, inclusive no Brasil. Mas, por enquanto, a próxima edição acontece em Londres, no dia 27 de agosto.', //1° paragrafos,
                    'texto2' => '', //2° paragrafos,
                    'texto3' => '', //3° paragrafos,
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
            'lifestyle' => [
                'index' => [
                  'temaName' => 'ZZZZZZZZZZZZZZZZZZZZZZZZZZZZZ'
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
                    'temaName' => 'Entertainment',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Heroines and heroes of DC will star oriented books for young people',
                    'resumo' => 'LITTE LITTLE LITTLE',
                    'autor' => 'Ono, Ricardo T.',
                    'texto1' => 'The army of superheroes of DC Comics is about to conquer more territory. No (more) blockbusters or TV series that explore the universe expanded comics - this time, the company has partnered with publisher Random House to take some of his characters in new literary adventures. Wonder Woman, Batman, Superman and Catwoman will star in a series of books aimed at the young-adult audience.', //1° paragrafos,
                    'texto2' => ' Who will sign the new adventures of the heroines and heroes is a team of authors known for works aimed at the target audience. The first book to reach the gringo shelves in August 2017, will be Wonder Woman: The Story of the Amazon will be written by Leigh Bardugo, author of the trilogy Grisha, made by Sun and Storm books (2012), Shadow and Bone (2013) and Light and Shadow (2014). Then it will be the turn of MORCEGÃO - Batman adventure will be signed by Marie Lu, China rooted in the US and author of trilogies Legend (2011-2013) and Youth Elites (2014 -).', //2° paragrafos,
                    'texto3' => 'Who will face the Man of Steel is Matt de la Peña, award-winning author responsible for works such as The Curse of the Ancients (2013), The Living (2013) and Last Stop on Market Street (2015), still without Brazilian editions. Finally, Sarah J. Maas, author of the Throne of Glass series (2012-), will create the new adventure of the ambiguous anti-hero Selina Kyle (Catwoman a.k.a.). The books still have no release date in Brazil.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'This is not the first literary foray DC. In March this year, was released Wonder Woman at Super Hero High, signed by the author Lisa Yee. This is the first book of childrens series Super Hero High, accompanying super heroines in training dealing both with the development of his powers as the challenges of school life. In addition to Wonder Woman, Supergirl, Katana, Harley Quinn, Batgirl and was Poisonous are some other young characters who are back to school.', //4° paragrafos,
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
                
                'not2' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entertainment',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Music for the deaf',
                    'resumo' => '',
                    'autor' => 'Ricardo T. Ono A',
                    'texto1' => 'The latest electronic novelty of London is the rave for the deaf. Its simple: deaf, like everyone else, they feel the music through vibration. Or have you ever heard a person saying Feel the music? Sound waves are vibrations that, when they reach the eardrum, are transformed into electrical impulses through the auditory nerves. These impulses are interpreted by the brain as voices, notes, whatever. A deaf person does not interpret sound waves, often for problems that nerve. But she feels the vibration in the same way that anyone, through serious wagging the ground or hit in the chest. None of this occurred to Troi Lee when he decided to organize the first rave especially for the guys who do not listen. What he wanted was to have fun: Lee is deaf from birth and always liked to go out dancing, following the vibrations of the music. We played various styles such as drum'n'bass and hip hop. The important thing is a good bass line, says Lee. The Deaf Rave has proved a success, bringing together a thousand people in its latest issue, on April 10. Lee plans to organize parties around the world, including Brazil. But for now, the next edition takes place in London on August 27.', //1° paragrafos,
                    'texto2' => '', //2° paragrafos,
                    'texto3' => '', //3° paragrafos,
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
            'lifestyle' => [
                'index' => [
                  'temaName' => 'YYYYYYYYYYYYYYYYYYYYYYYYY'
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
                      'temaName' => 'Entretenimiento',
                      'datapub' => '12/06/2015 as 09h30min',
                      'titulo' => 'Heroínas y héroes de DC serán los protagonistas de los libros orientada a los jóvenes',
                      'resumo' => 'LITTE LITTLE LITTLE',
                      'autor' => 'Ono, Ricardo T.',
                      'texto1' => 'El ejército de superhéroes de DC Comics está a punto de conquistar más territorio. No hay (más) éxitos de taquilla o series de televisión que exploran el universo expandido cómics - este tiempo, la compañía se ha asociado con la editorial Random House para tomar algunos de sus personajes en nuevas aventuras literarias. Mujer Maravilla, Batman, Superman y Catwoman serán los protagonistas de una serie de libros dirigidos al público joven-adulto.', //1° paragrafos,
                      'texto2' => '¿Quién va a firmar las nuevas aventuras de los héroes y heroínas es un equipo de autores conocidos para las obras destinadas a la audiencia objetivo. El primer libro para llegar a los estantes gringos en agosto de 2017, será la Mujer Maravilla: La historia de la Amazonia será escrito por Leigh Bardugo, autor de la trilogía Grisha, hecha por Sun y tormenta libros (2012), Sombra y hueso (2013) y la luz y la sombra (2014). Luego será el turno de MORCEGÃO - Batman aventura será firmado por Marie Lu, China arraigado en Estados Unidos y autor de La leyenda trilogías (2011-2013) y las élites jóvenes (2014 -).', //2° paragrafos,
                      'texto3' => '¿Quién se enfrentará al hombre de acero es Matt de la Peña, galardonado autor responsable de obras como La maldición de los Antiguos (2013), The Living (2013) y la última parada de la calle del mercado (2015), todavía sin ediciones brasileñas. Por último, Sarah J. Maas, autor del Trono de la Serie de cristal (2012-), creará la nueva aventura de la ambigua antihéroe Selina Kyle (Catwoman alias). Libros aún no tienen fecha de estreno en Brasil.', //3° paragrafos,
                      //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                      'texto4' => 'Esta no es la primera incursión literaria DC. En marzo de este año, fue lanzado a la Mujer Maravilla superhéroe alta, firmado por el autor Lisa Yee. Este es el primer libro de la serie infantil de superhéroe alta, acompañando súper heroínas en la formación de tratar tanto con el desarrollo de sus poderes como los desafíos de la vida escolar. Además de la Mujer Maravilla, Supergirl, Katana, Harley Quinn, Batgirl y era venenoso son algunos otros personajes jóvenes que están de vuelta a la escuela.', //4° paragrafos,
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
                  'not2' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimiento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => '>Música para sordos',
                    'resumo' => '',
                    'autor' => 'Ricardo T. Ono A',
                    'texto1' => 'La última novedad electrónica de Londres es el delirio para los sordos. Es muy sencillo: sordo, como todos los demás, se sienten la música a través de la vibración. O ¿ha oído hablar a una persona diciendo "Siente la música"? Las ondas de sonido son vibraciones que, cuando llegan al tímpano, se transforman en impulsos eléctricos a través de los nervios auditivos. Estos impulsos son interpretados por el cerebro como voces, notas, lo que sea. Una persona sorda no interpreta las ondas sonoras, a menudo por problemas de ese nervio. Pero ella se siente la vibración de la misma manera que cualquier persona, a través moviendo la gravedad de la tierra o un golpe en el pecho. Nada de esto ocurrió Troi Lee cuando decidió organizar el primer delirio especialmente para los chicos que no escuchan. Lo que quería era divertirse: Lee es sordo desde el nacimiento y siempre le gusta salir a bailar, a raíz de las vibraciones de la música. "Jugamos varios estilos como el drum'n'bass y el hip hop. Lo importante es una buena línea de bajo ", dice Lee. El Sordo Rave ha demostrado ser un éxito, que reúne a un millar de personas en su último número, el 10 de abril. Lee planea organizar fiestas en todo el mundo, incluyendo Brasil. Pero por ahora, la próxima edición tendrá lugar en Londres el 27 de agosto.', //1° paragrafos,
                    'texto2' => '', //2° paragrafos,
                    'texto3' => '', //3° paragrafos,
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
