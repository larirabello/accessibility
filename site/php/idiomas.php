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
            'comportamento' => [
                'index' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Comportamento',
                    /* ------------------- 1° noticia -------------- */
                    'not1alt' => '...',
                    'not1text' => 'Doar comida agora por delivery!',
                    /* ------------------- 2° noticia -------------- */
                    'not2alt' => 'Egoísmo não tem vez: casal decide investir na formação de 26 crianças ao invés de comprar iate',
                    'not2text' => 'Egoísmo não tem vez: casal decide investir na formação de 26 crianças ao invés de comprar iate',
                    /* ------------------- 3° noticia -------------- */
                    'not3alt' => 'Raposa vermelha de boca aberta aaaaaaaaaaaaa',
                    'not3text' => 'Raaa dda oijasd oisar oias pojh t aaaaaaaaaaaaaaaaaaaaaaaaaa',
                    /* ------------------- 4° noticia -------------- */
                    'not4text' => 'Da lama ao lar! Projeto transforma a lama do desastre de Mariana em tijolos para a reconstrução da cidade',
                    /* ------------------- 5° noticia -------------- */
                    'not5text' => 'Empresário ensina moradora de rua a ler na hora do almoço',
                    /* ------------------- 6° noticia -------------- */
                    'not6text' => 'Cultura da hospitalidade: veja o país mais educado do mundo',
                    'not6alt' => 'poasj posaj´p posd oiasrp k',
                    /* ------------------- 7° noticia -------------- */
                    'not7alt' => 'POKAS POASPO NAOIS POIDFJ GNAT ',
                    'not7text' => 'Cabeleireiro faz cortes em troca de histórias e transforma projeto em livro',
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
                    'temaName' => 'Comportamento',
                    'datapub' => '05/05/2016 as 09h30min',
                    'titulo' => 'Doar comida agora por delivery!',
                    'resumo' => 'Agora você pode utilizar o mesmo serviço de entrega comum nas pizzarias para ajudar o próximo. ',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'Uma ONG especializada na distribuição de alimentos teve uma ideia interessante para facilitar as doações no Brasil. A Banco de Alimentos criou o "Delivery Reverso". Funciona assim: você chama o serviço da mesma maneira que o fazia ao pedir uma pizza mas, nesse caso, entrega os alimentos não perecíveis ao motoboy, que levará os alimentos até uma pizzaria que se responsabilizou pela coleta. Então, eles redistribuem esses alimentos para instituições de caridade.', //1° paragrafos,
                    'texto2' => 'Atualmente, a fundadora do projeto busca aumentar essa rede de solidariedade com novos parceiros, que podem se cadastrar em http://www.reversedelivery.com.br/', //2° paragrafos,
                    'texto3' => 'Assista a um vídeo e conheça mais sobre o projeto

https://vimeo.com/164146082
', //3° paragrafos,
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

                ],
                 'not2' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Comportamento',
                    'datapub' => '22/04/2016 as 14h55min',
                    'titulo' => 'Egoísmo não tem vez!',
                    'resumo' => 'Casal decide investir na formação de 26 crianças ao invés de comprar iate.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'O casal Marty Burbank e Seon, moradores da Califórnia, são exemplo de como a atenção ao próximo pode mudar vidas. Partiu deles o financiamento da Universidade para 26 crianças que ainda estudam num jardim de infância. ', //1° paragrafos,
                    'texto2' => 'A ideia surgiu durante a reflexão da importância que a educação teve em suas vidas, sendo eles os primeiros de suas famílias a adquirirem um diploma, tornando a ideia de patrocinar a formação de crianças ainda mais especial pois, como afirmam, mesmo que pareça doloroso que se troque um bem como um iate por uma doação, esse é o melhor investimento que eles podiam realizar.', //2° paragrafos,
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

                ],
            ]
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
                    'not2alt' => '......... ',
                    'not2text' => '............ ',
                    /* ------------------- 3° noticia -------------- */
                    'not3alt' => 'Raposa vermelha de boca aberta aaaaaaaaaaaaa',
                    'not3text' => 'Raaa dda oijasd oisar oias pojh t aaaaaaaaaaaaaaaaaaaaaaaaaa',
                    /* ------------------- 4° noticia -------------- */
                    'not4text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 5° noticia -------------- */
                    'not5text' => '....',
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
            'comportamento' => [
                'index' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    /* ------------------- 1° noticia -------------- */
                    'not1alt' => '',
                    'not1text' => 'Now you can donate food by delivery!',
                    /* ------------------- 2° noticia -------------- */
                    'not2alt' => 'There’s no place to selfishness: a couple decide to invest on 26 children’s formation instead of buying a yacht. ',
                    'not2text' => 'There’s no place to selfishness: a couple decide to invest on 26 children’s formation instead of buying a yacht.  ',
                    /* ------------------- 3° noticia -------------- */
                    'not3alt' => 'Raposa vermelha de boca aberta aaaaaaaaaaaaa',
                    'not3text' => 'Now you can donate food by delivery!',
                    /* ------------------- 4° noticia -------------- */
                    'not4text' => 'From the mud to the home! Project turns mud from Mariana’s disaster into bricks to reconstruct the city.',
                    /* ------------------- 5° noticia -------------- */
                    'not5text' => 'Businessman teaches a homeless to read at his lunch time',
                    /* ------------------- 6° noticia -------------- */
                    'not6text' => 'Culture of hospitality: know the most educated country around the World',
                    'not6alt' => 'poasj posaj´p posd oiasrp k',
                    /* ------------------- 7° noticia -------------- */
                    'not7alt' => 'POKAS POASPO NAOIS POIDFJ GNAT ',
                    'not7text' => 'Hairdresser makes free hair cuts in exchange for stories and transforms them in a book',
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
                    'temaName' => 'lifestyle',
                    'datapub' => '05/05/2016 as 09h30min',
                    'titulo' => 'Now you can donate food by delivery!',
                    'resumo' => 'Now you can use the same delivery service that pizzerias used to use to help who needs.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'A Nonprofit Organization specialized in food distribution has an interesting idea to make donations easier in Brazil. Banco de Alimentos create the "Reverse Delivery". It works like this: you call the service as the same you do asking for a pizza but, instead, you give the courier all the non perishable food and he carry it to a pizzeria who was responsible for collect it. Then, they redistribute those food for carity institutions. ', //1° paragrafos,
                    'texto2' => 'Nowadays, the project foundress search for increase this solidarity network with new partners, who can register themselves in http://www.reversedelivery.com.br/

', //2° paragrafos,
                    'texto3' => 'Watch this video and know more about the project https://vimeo.com/164146082
', //3° paragrafos,
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

                ],
                'not2' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '04/22/2016 as 14h55min',
                    'titulo' => 'There’s no place to selfishness!',
                    'resumo' => 'A couple decide to invest on 26 children’s formation instead of buying a yacht.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'The Marty Burbank and Seon couple, who lives in California, are an example of how caring another people can change lifes. Started with them the college financing for 26 childrens whose still are studying on kindergarten.', //1° paragrafos,
                    'texto2' => 'The idea has become during the reflection of the importance that education had in their lives , they are the first in their families to acquire a degree , making the idea of sponsoring the education of children even more special because, as they say, even if it seems painful that to replace a well as a yacht for a donation , this is the best investment they could accomplish.', //2° paragrafos,
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

                ],
                'not3' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '05/05/2016 as 09h30min',
                    'titulo' => 'testing',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not4' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '05/05/2016 as 09h30min',
                    'titulo' => 'testing',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not5' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '05/05/2016 as 09h30min',
                    'titulo' => 'testing',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not6' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '05/05/2016 as 09h30min',
                    'titulo' => 'testing',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not7' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '05/05/2016 as 09h30min',
                    'titulo' => 'testing',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not8' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '05/05/2016 as 09h30min',
                    'titulo' => 'testing',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not9' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '05/05/2016 as 09h30min',
                    'titulo' => 'testing',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not10' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '05/05/2016 as 09h30min',
                    'titulo' => 'testing',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not11' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '05/05/2016 as 09h30min',
                    'titulo' => 'testing',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

              ],
              'comportamento' => [
                'index' => [
                    'home' => 'Inicio',
                    'temaName' => 'Comportamiento',
                    /* ------------------- 1° noticia -------------- */
                    'not1alt' => '',
                    'not1text' => 'Ahora se puede donar alimentos mediante la entrega!',
                    /* ------------------- 2° noticia -------------- */
                    'not2alt' => '',
                    'not2text' => 'No hay tiempo para el egoísmo : una pareja decide invertir en la formación de 26 de los niños en lugar de comprar un yate',
                    /* ------------------- 3° noticia -------------- */
                    'not3alt' => '',
                    'not3text' => '',
                    /* ------------------- 4° noticia -------------- */
                    'not4text' => 'Del barro a la casa! Proyecto resulta barro de desastres de Mariana en ladrillos para reconstruir la ciudad',
                    /* ------------------- 5° noticia -------------- */
                    'not5text' => 'Hombre de negocios enseña un hogar para leer en su tiempo de almuerzo',
                    /* ------------------- 6° noticia -------------- */
                    'not6text' => 'Cultura de la hospitalidad : conocer el país más culto en todo el mundo',
                    'not6alt' => '',
                    /* ------------------- 7° noticia -------------- */
                    'not7alt' => '',
                    'not7text' => 'El peluquero hace cortes de cabello gratis a cambio de historias y las transforma en un libro',
                    /* ------------------- 8° noticia -------------- */
                    'not8text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 9° noticia -------------- */
                    'not9text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 10° noticia -------------- */
                    'not10alt' => '',
                    'not10text' => 'apsoj spoidf oisajt poidjsf oitsd',
                    /* ------------------- 11° noticia -------------- */
                    'not11alt' => '',
                    'not11text' => 'apsoj spoidf oisajt poidjsf oitsd'
                ],
                'not1' => [
                    'home' => 'Inicio',
                    'temaName' => 'Comportamiento',
                    'datapub' => '05/05/2016 as 09h30min',
                    'titulo' => 'Ahora se puede donar alimentos mediante la entrega!',
                    'resumo' => 'Ahora puede utilizar los mismos servicios que las pizzerías se utilizan para ayudar a quien necesita.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'Una organización no lucrativa especializada en la distribución de alimentos tiene una idea interesante para hacer más fácil donaciones en Brasil . Banco de Alimentos crear la " Entrega inversa " . Funciona así : se llama al servicio de la misma como usted pedir una pizza, pero , en cambio, le dará el servicio de mensajería todos los alimentos no perecederos y llevarlo a una pizzería que era responsable de recogerla. A continuación , se redistribuyen los alimentos para instituciones Carity.', //1° paragrafos,
                    'texto2' => 'Hoy en día , la búsqueda fundadora proyecto para aumentar esta red de solidaridad con nuevos socios , que pueden inscribirse en http://www.reversedelivery.com.br/', //2° paragrafos,
                    'texto3' => 'Ver un video y aprender más sobre el proyecto https://vimeo.com/164146082', //3° paragrafos,
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

                ],
                'not2' => [
                    'home' => 'Inicio',
                    'temaName' => 'Comportamiento',
                    'datapub' => '22/04/2016 as 14h55min',
                    'titulo' => 'No hay tiempo para el egoísmo!',
                    'resumo' => 'Una pareja decide invertir en la formación de 26 de los niños en lugar de comprar un yate.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not3' => [
                    'home' => 'Inicio',
                    'temaName' => 'Comportamiento',
                    'datapub' => '22/04/2016 as 14h55min',
                    'titulo' => 'teste',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not4' => [
                    'home' => 'Inicio',
                    'temaName' => 'Comportamiento',
                    'datapub' => '22/04/2016 as 14h55min',
                    'titulo' => 'teste',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not5' => [
                    'home' => 'Inicio',
                    'temaName' => 'Comportamiento',
                    'datapub' => '22/04/2016 as 14h55min',
                    'titulo' => 'teste',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not6' => [
                    'home' => 'Inicio',
                    'temaName' => 'Comportamiento',
                    'datapub' => '22/04/2016 as 14h55min',
                    'titulo' => 'teste',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not7' => [
                    'home' => 'Inicio',
                    'temaName' => 'Comportamiento',
                    'datapub' => '22/04/2016 as 14h55min',
                    'titulo' => 'teste',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not8' => [
                    'home' => 'Inicio',
                    'temaName' => 'Comportamiento',
                    'datapub' => '22/04/2016 as 14h55min',
                    'titulo' => 'teste',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not9' => [
                    'home' => 'Inicio',
                    'temaName' => 'Comportamiento',
                    'datapub' => '22/04/2016 as 14h55min',
                    'titulo' => 'teste',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not10' => [
                    'home' => 'Inicio',
                    'temaName' => 'Comportamiento',
                    'datapub' => '22/04/2016 as 14h55min',
                    'titulo' => 'teste',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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

                ],
                'not11' => [
                    'home' => 'Inicio',
                    'temaName' => 'Comportamiento',
                    'datapub' => '22/04/2016 as 14h55min',
                    'titulo' => 'teste',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '', //1° paragrafos,
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
