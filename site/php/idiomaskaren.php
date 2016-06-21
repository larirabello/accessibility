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
            'pet' => [
                'index' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Mundo Pet',
                    /* ------------------- 1° noticia -------------- */
                    'not1alt' => 'Cachorro preto idoso com expressão feliz',
                    'not1text' => 'Cães idosos precisam de cuidados redobrados e visitas ao veterinário regulares',
                    /* ------------------- 2° noticia -------------- */
                    'not2alt' => 'Gorila carregando seus filhotes no zoologico',
                    'not2text' => 'A triste realidade dos zoológicos',
                    /* ------------------- 3° noticia -------------- */
                    'not3alt' => 'Gatinho e cachorrinho brincando juntos',
                    'not3text' => 'Faça da sua casa um lar temporário para animais',
                    /* ------------------- 4° noticia -------------- */
                    'not4text' => 'O paraíso dos gatos de Roma',
                    /* ------------------- 5° noticia -------------- */
                    'not5text' => 'O poder do amor entre humanos e animais ',
                    /* ------------------- 6° noticia -------------- */
                    'not6text' => 'Cuidados especiais com os bichinhos no frio ',
                    'not6alt' => 'Gatinho caminhando na neve com cachecol e touca rosa',
                    /* ------------------- 7° noticia -------------- */
                    'not7alt' => 'Cachorrinhos abandonados em cima de pneus',
                    'not7text' => 'Reflexões sobre o abandono de animais',
                    /* ------------------- 8° noticia -------------- */
                    'not8text' => 'Cachorros e gatos podem ser amigos?',
                    /* ------------------- 9° noticia -------------- */
                    'not9text' => 'Cão foge de casa para visitar dono internado',
                    /* ------------------- 10° noticia -------------- */
                    'not10alt' => 'bezerro marrom com manchas brancas',
                    'not10text' => 'Luta pelo veganismo',
                    /* ------------------- 11° noticia -------------- */
                    'not11alt' => 'cachorro preto com a patinha amputada',
                    'not11text' => 'A perfeição dos animais com deficiências'
                ],
                'not1' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Mundo Pet',
                    'datapub' => '10/05/2016 às 08:30min',
                    'titulo' => 'Cães idosos precisam de cuidados redobrados e visitas ao veterinário regulares',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'Os cuidados com os cães vão muito além de dar comida e carinho, principalmente quando eles são idosos. Em geral, os cães apresentam os primeiros sinais de velhice em torno do sétimo ou décimo ano de idade.', //1° paragrafos,
                    'texto2' => 'Para detectar problemas nos cães, os tutores devem ficar atentos aos animais. Quando atingem uma idade mais avançada, os animais exigem visitas com uma frequência maior ao veterinário para a realização de exames periódicos.', //2° paragrafos,
                    'texto3' => 'A alimentação é um fator bastante relevante para manter a longevidade do animal. É importante que os tutores saibam controlar a qualidade e a quantidade de calorias dos alimentos oferecidos ao animal.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Mundo Pet', // tema
                    'not1text' => 'A triste realidade dos zoológicos',  // texto
                    //2° noticia
                    'tema2not' => 'Mundo Pet', // tema
                    'not2text' => 'Faça da sua casa um lar temporário para animais',  // texto
                    //3° noticia
                    'tema3not' => 'Mundo Pet', // tema
                    'not3text' => 'O paraíso dos gatos de  Roma'   // texto

                ],
                 'not2' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Mundo Pet',
                    'datapub' => '20/05/2016 às 10:20min',
                    'titulo' => 'A triste realidade dos zoológicos',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'A triste história de Harambe, um gorila de 17 anos, morto no zoológico de Cincinnati em 28 de Maio levanta questionamentos sobre a validade e a moralidade desses estabelecimentos.', //1° paragrafos,
                    'texto2' => 'Harambe foi morto a tiros sob o pretexto de salvar uma criança de quatro anos que estava em sua jaula. Porém, um vídeo feito por um espectador revelou que Harambe parecia tentar proteger a criança com a qual ficou de mãos dadas por alguns momentos.', //2° paragrafos,
                    'texto3' => 'Manter animais selvagens em jaulas para o benefício dos seres humanos pode resultar em tragédias como essa.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Mundo Pet', // tema
                    'not1text' => 'Cães idosos precisam de cuidados redobrados e visitas ao veterinário regulares',  // texto
                    //2° noticia
                    'tema2not' => 'Mundo Pet', // tema
                    'not2text' => 'Faça da sua casa um lar temporário para animais',  // texto
                    //3° noticia
                    'tema3not' => 'Mundo Pet', // tema
                    'not3text' => 'O poder do amor entre humanos e animais'   // texto
    
                
            ],
                'not3' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Mundo Pet',
                    'datapub' => '01/06/2016 às 12:30min',
                    'titulo' => 'Faça da sua casa um lar temporário para animais',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'Tirar um animal da rua e se responsabilizar por ele até que ganhe uma família definitiva ajuda, não só ao próprio animal, mas também a você mesmo – que terá uma companhia com muito amor para dar.', //1° paragrafos,
                    'texto2' => 'Para oferecer um lar temporário você precisa ter mais de 18 anos e o consentimento de todas as pessoas que moram junto com você, além de ser capaz de sustentar o novo animal, afinal, podem demorar algumas semanas e talvez meses, até que ele encontre uma nova casinha.', //2° paragrafos,
                    'texto3' => 'O lar temporário é uma opção solidária para ajudar a reduzir o número de animais abandonados e desabrigados.

', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Mundo Pet', // tema
                    'not1text' => 'O poder do amor entre humanos e animais',  // texto
                    //2° noticia
                    'tema2not' => 'Mundo Pet', // tema
                    'not2text' => 'Cuidados especiais com os bichinhos no frio ',  // texto
                    //3° noticia
                    'tema3not' =>'Mundo Pet', // tema
                    'not3text' => 'Reflexões sobre o abandono de animais'   // texto
                    
                     ],
                'not4' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Mundo Pet',
                    'datapub' => '07/06/2016 às 14:00min',
                    'titulo' => 'O paraíso dos gatos de  Roma',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'As ruínas de Torre Argentina, no centro histórico de Roma, são um verdadeiro paraíso de gatos.', //1° paragrafos,
                    'texto2' => 'Trata-se de um santuário milenar onde muitos gatos encontram abrigo e comida.', //2° paragrafos,
                    'texto3' => 'Estima-se que em Roma existam no total cerca de 250 mil gatos nas ruas, distribuídos por cerca de 2 mil colônias.

', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Os voluntários da associação Torre Argentina cuidam diariamente da alimentação, higiene e cuidados de saúde dos mais de 250 gatos que habitam nas ruínas. Também esterilizam os animais e promovem a sua adoção.', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Mundo Pet', // tema
                    'not1text' => 'Cão foge de casa para visitar dono internado',  // texto
                    //2° noticia
                    'tema2not' => 'Mundo Pet', // tema
                    'not2text' => 'Cuidados especiais com os bichinhos no frio ',  // texto
                    //3° noticia
                    'tema3not' => 'Mundo Pet', // tema
                    'not3text' => 'Cachorros e gatos podem ser amigos?'   // texto
                    
                ],
                'not5' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Mundo Pet',
                    'datapub' => '09/06/2016 às 16:00min',
                    'titulo' => 'O poder do amor entre humanos e animais ',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'Rafael e seu cachorro Bob dividiram aventuras nos últimos 15 anos. Recentemente, ele teve que lidar com uma notícia triste. Seu cão foi diagnosticado com câncer, e não há mais muito tempo para os dois passarem juntos.Para homenagear seu velho amigo, Rafael resolveu recriar fotos icônicas dessa amizade; ele pegou Bob no colo e repetiu a pose feita no jardim da casa de sua avó, na Bélgica, quando ele tinha 15 e 25 anos.', //1° paragrafos,
                    'texto2' => '“Ele pode continuar bem por mais seis meses, mas também pode adoecer novamente bem rápido, e desta vez seria a última vez”', //2° paragrafos,
                    'texto3' => '“Meu coração fica em pedaços só de pensar uma coisa dessas, mas nós temos tantas aventuras nesse tempo todo. Eu sou grato por ele ter feito parte da minha vida”,disse Rafael.

', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Mundo Pet', // tema
                    'not1text' => 'O paraíso dos gatos de  Roma',  // texto
                    //2° noticia
                    'tema2not' => 'Mundo Pet', // tema
                    'not2text' => 'Luta pelo veganismo',  // texto
                    //3° noticia
                    'tema3not' => 'Mundo Pet', // tema
                    'not3text' => 'A perfeição dos animais com deficiências'   // texto
                    
                    
                    
                     ],
                'not6' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Mundo Pet',
                    'datapub' => '12/06/2016 às 05:00min',
                    'titulo' => 'Cuidados especiais com os bichinhos no frio  ',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'Com a chegada do frio, é bom tomar algumas precauções para que seu animal fique protegido e quentinho.', //1° paragrafos,
                    'texto2' => 'Medidas como evitar passear com seu cachorro no inverno nos momentos mais frios do dia, roupinhas, abrigos adequados, não expor o cãozinho a ambientes externos logo após o banho e até algumas vacinas podem fazer com que seu peludo desfrute dos dias gelados com muita saúde e disposição.', //2° paragrafos,
                    'texto3' => '', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Mundo Pet', // tema
                    'not1text' => 'A triste realidade dos zoológicos',  // texto
                    //2° noticia
                    'tema2not' => 'Mundo Pet', // tema
                    'not2text' => 'Reflexões sobre o abandono de animais',  // texto
                    //3° noticia
                    'tema3not' => 'Mundo Pet', // tema
                    'not3text' => 'Cachorros e gatos podem ser amigos?'   // texto
                    
                    
                ],
                'not7' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Mundo Pet',
                    'datapub' => '15/06/2016 às 11:00min',
                    'titulo' => 'Reflexões sobre o abandono de animais',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'Todo o ambiente que rodeia um animal o afeta emocionalmente, é preciso ter um grande cuidado, respeito e consideração por eles. Pela vida deles. No entanto, o abandono é algo comum.', //1° paragrafos,
                    'texto2' => 'Os animais sentem e sofrem em medidas muito iguais aos seres humanos. Antes de adotar ou comprar um animal, pense duas vezes. Ou três. Cães e gatos necessitam de alimentação diária e cuidados veterinários imprescindíveis', //2° paragrafos,
                    'texto3' => 'A partir do momento em que as pessoas deixam de abandonar, o mundo se torna um lugar melhor.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Mundo Pet', // tema
                    'not1text' => 'Cuidados especiais com os bichinhos no frio',  // texto
                    //2° noticia
                    'tema2not' => 'Mundo Pet', // tema
                    'not2text' => 'O paraíso dos gatos de  Roma',  // texto
                    //3° noticia
                    'tema3not' => 'Mundo Pet', // tema
                    'not3text' => 'Cães idosos precisam de cuidados redobrados e visitas ao veterinário regulares'   // texto
                    
                    
                     ],
                'not8' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Mundo Pet',
                    'datapub' => '19/06/2016 às 22:00min',
                    'titulo' => 'Cachorros e gatos podem ser amigos?',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'Cães e gatos geralmente são vistos como inimigos naturais e a decisão de os juntar na mesma casa costuma levar as pessoas a pensar duas vezes. Mas na realidade, são inúmeros os exemplos de gatos e cães que se tornaram amigos inseparáveis.', //1° paragrafos,
                    'texto2' => 'É normal que animais de espécies diferentes se estranhem quando se encontram, e também é verdade que os cães e os gatos falam línguas diferentes, com personalidade e estilos de vida por vezes opostos.', //2° paragrafos,
                    'texto3' => 'Mas desde quando as diferenças são um obstáculo para uma boa amizade?', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'A amizade improvável entre animais de diferentes espécies é algo que nos consegue perceber o amor além das diferenças.', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Mundo Pet', // tema
                    'not1text' => 'Cão foge de casa para visitar dono internado',  // texto
                    //2° noticia
                    'tema2not' => 'Mundo Pet', // tema
                    'not2text' => 'Luta pelo veganismo',  // texto
                    //3° noticia
                    'tema3not' => 'Mundo Pet', // tema
                    'not3text' => 'A perfeição dos animais com deficiências'   // texto
                    
                    
                      ],
                'not9' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Mundo Pet',
                    'datapub' => '02/06/2016 às 23:00min',
                    'titulo' => 'Cão foge de casa para visitar dono internado',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'O cãozinho chama-se Peludinho e foi adotado numa associação de animais abandonados há cerca de cinco anos. O seu dono foi hospitalizado com um problema cardíaco e Peludinho, incomodado com a sua ausência, não teve meias medidas: fugiu de casa e partiu à procura do dono.', //1° paragrafos,
                    'texto2' => 'De uma forma inacreditável, Peludinho  foi direitinho ao hospital onde o dono se encontrava internado. O cão nunca tinha estado nem naquele nem em qualquer outro hospital anteriormente, não conhecia os caminhos e, por isso, a única explicação plausível é ter conseguido seguir o rastro do dono através do olfato.', //2° paragrafos,
                    'texto3' => '', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Mundo Pet', // tema
                    'not1text' => 'Faça da sua casa um lar temporário para animais',  // texto
                    //2° noticia
                    'tema2not' => 'Mundo Pet', // tema
                    'not2text' => 'A perfeição dos animais com deficiências',  // texto
                    //3° noticia
                    'tema3not' => 'Mundo Pet', // tema
                    'not3text' => 'Luta pelo veganismo'   // texto
                    
                    
                    
                      
                      ],
                'not10' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Mundo Pet',
                    'datapub' => '18/06/2016 às 07:00min',
                    'titulo' => 'Luta pelo veganismo',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'Atualmente, Josh é um defensor dos direitos animais e, no começo, ele não queria falar sobre seus anos de funcionário de um matadouro.', //1° paragrafos,
                    'texto2' => 'Ele se sentia envergonhado por sua própria cumplicidade com a indústria de assassinato. Ele também percebeu outra realidade incômoda: a sociedade envergonha aqueles que fazem o trabalho sujo de matar por ela.', //2° paragrafos,
                    'texto3' => 'Essa não é apenas a história dele, mas de todos os animais que temem e enfrentam mortes horríveis e de todos os funcionários que realizam um trabalho que destroem suas almas.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Mundo Pet', // tema
                    'not1text' => 'Cães idosos precisam de cuidados redobrados e visitas ao veterinário regulares',  // texto
                    //2° noticia
                    'tema2not' => 'Mundo Pet', // tema
                    'not2text' => 'A triste realidade dos zoológicos',  // texto
                    //3° noticia
                    'tema3not' => 'Mundo Pet', // tema
                    'not3text' => 'Faça da sua casa um lar temporário para animais'   // texto
                    
                    
                        
                      ],
                'not11' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Mundo Pet',
                    'datapub' => '05/06/2016 às 09:30min',
                    'titulo' => 'A perfeição dos animais com deficiências',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'A missão a que a fotógrafa australiana Alex Cearns se propôs é simples: provar que todos os animais – independentemente da sua condição física – são belos.', //1° paragrafos,
                    'texto2' => 'A Australiana possui um projeto de adoções para animais com deficiências e retrata através das fotos, o amor e carinho destes animais.', //2° paragrafos,
                    'texto3' => 'A maioria dos animais com problemas não se debruça sobre eles. Adaptam-se aos seus corpos sem reclamar e sobrevivem com determinação.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Mundo Pet', // tema
                    'not1text' => 'Reflexões sobre o abandono de animais',  // texto
                    //2° noticia
                    'tema2not' => 'Mundo Pet', // tema
                    'not2text' => 'Cachorros e gatos podem ser amigos?',  // texto
                    //3° noticia
                    'tema3not' => 'Mundo Pet', // tema
                    'not3text' => 'Luta pelo veganismo'   // texto
                
                
                
                
            ]
         
            ]
        
        
            
            
            
            
            
            /* ingles ---------------------------------------------------------- */
            
        ],
        'en' => [
            'index' => [
                'titulo' => 'OtimisAAAt',
                'irparaconteudo' => 'Go to content',
                'irparamenu' => 'Go to the menu',
                'acessibilidade' => 'Acessibility',
                'mapadosite' => 'Sitemap'
            ],
            'pet' => [
                'index' => [
                    'home' => 'Home',
                    'temaName' => 'Pet World',
                    /* ------------------- 1° noticia -------------- */
                    'not1alt' => 'old black dog with happy expression',
                    'not1text' => 'Older dogs need extra care and regular visits to the vet',
                    /* ------------------- 2° noticia -------------- */
                    'not2alt' => 'Gorilla carrying her cubs in zoo',
                    'not2text' => 'The sad reality of zoos',
                    /* ------------------- 3° noticia -------------- */
                    'not3alt' => 'Kitten and puppy playing together',
                    'not3text' => 'Make your house a temporary home for animals',
                    /* ------------------- 4° noticia -------------- */
                    'not4text' => 'Paradise Cats of Rome',
                    /* ------------------- 5° noticia -------------- */
                    'not5text' => 'The power of love between humans and animals',
                    /* ------------------- 6° noticia -------------- */
                    'not6text' => 'Special care for the animals in the cold',
                    'not6alt' => 'Kitten walking in the snow with scarf and pink cap',
                    /* ------------------- 7° noticia -------------- */
                    'not7alt' => 'Puppies abandoned tires on',
                    'not7text' => 'Reflections on the abandonment of animals',
                    /* ------------------- 8° noticia -------------- */
                    'not8text' => 'Dogs and cats can be friends?',
                    /* ------------------- 9° noticia -------------- */
                    'not9text' => 'Dog runs away from home to visit hospitalized owner',
                    /* ------------------- 10° noticia -------------- */
                    'not10alt' => 'brown calf with white spots',
                    'not10text' => 'Fighting for veganism',
                    /* ------------------- 11° noticia -------------- */
                    'not11alt' => 'black dog with amputated paw',
                    'not11text' => 'The perfection of animals with disabilities'
                ],
                'not1' => [
                    'home' => 'Home',
                    'temaName' => 'Pet World',
                    'datapub' => '05/10/2016 at 08:30am',
                    'titulo' => 'Older dogs need extra care and regular visits to the vet',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'The dog care go far beyond giving food and affection , especially when they are elderly . In general , dogs show the first signs of aging around the seventh or tenth year of age.', //1° paragrafos,
                    'texto2' => 'To detect problems in dogs , the guardians should watch for animals. When they reach an older age , the animals require visits more frequently to the veterinarian to carry out periodic examinations .', //2° paragrafos,
                    'texto3' => 'Food is a very important factor to maintain the longevity of the animal. It is important to know that the guardians monitor the quality and quantity of food calories offered to the animal.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Pet World', // tema
                    'not1text' => 'The sad reality of zoos',  // texto
                    //2° noticia
                    'tema2not' => 'Pet World', // tema
                    'not2text' => 'Make your house a temporary home for animals',  // texto
                    //3° noticia
                    'tema3not' => 'Pet World', // tema
                    'not3text' => 'Paradise Cats of Rome'   // texto
                    
            ],
                'not2' => [
                    'home' => 'Home',
                    'temaName' => 'Pet World',
                    'datapub' => '05/20/2016 at 10:20am',
                    'titulo' => 'The sad reality of zoos',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'The sad story of Harambe , a gorilla of 17 years , died in Cincinnati Zoo in May 28 raises questions about the validity and morality of these establishments .', //1° paragrafos,
                    'texto2' => 'Harambe was shot under the pretext of saving a four year old who was in his cage. However, a video made by a spectator showed that Harambe seemed to try to protect the child with whom held hands for a few moments .', //2° paragrafos,
                    'texto3' => 'Keeping wild animals in cages for the benefit of humans can result in tragedies like this .', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Pet World', // tema
                    'not1text' => 'Older dogs need extra care and regular visits to the vet',  // texto
                    //2° noticia
                    'tema2not' => 'Pet World', // tema
                    'not2text' => 'Make your house a temporary home for animals',  // texto
                    //3° noticia
                    'tema3not' => 'Pet World', // tema
                    'not3text' => 'The power of love between humans and animals'   // texto
                    
         ],
                'not3' => [
                    'home' => 'Home',
                    'temaName' => 'Pet World',
                    'datapub' => '06/01/2016 at 12:30pm',
                    'titulo' => 'Make your house a temporary home for animals',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'Taking an animal from the street and take responsibility for it until it gains a permanent family helps not only to the animal itself , but also to yourself - that will have a company with a lot of love to give.', //1° paragrafos,
                    'texto2' => 'To provide a temporary home you need to have more than 18 years and the consent of all the people who live with with you , and be able to sustain the new animal, after all, can take a few weeks and maybe months , until he finds a new house.', //2° paragrafos,
                    'texto3' => 'The temporary home is a supportive option to help reduce the number of abandoned and homeless animals .', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Pet World', // tema
                    'not1text' => 'The power of love between humans and animals',  // texto
                    //2° noticia
                    'tema2not' => 'Pet World', // tema
                    'not2text' => 'Special care for the animals in the cold',  // texto
                    //3° noticia
                    'tema3not' => 'Pet World', // tema
                    'not3text' => 'Reflections on the abandonment of animals'   // texto
                    
                     ],
                'not4' => [
                    'home' => 'Home',
                    'temaName' => 'Pet World',
                    'datapub' => '06/07/2016 at 14:00pm',
                    'titulo' => 'Paradise Cats of Rome',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'The ruins of Torre Argentina , in the historic center of Rome , is a true paradise for cats.', //1° paragrafos,
                    'texto2' => ' It is an ancient sanctuary where many cats find shelter and food. ', //2° paragrafos,
                    'texto3' => 'It is estimated that in Rome there are a total of about 250,000 cats in the streets, spread over approximately 2000 colonies. ', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Volunteers from the association Torre Argentina take care of daily food, hygiene and health care of more than 250 cats living in the ruins. Also sterilize the animals and promote their adoption.
', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Pet World', // tema
                    'not1text' => 'Dog runs away from home to visit hospitalized owner',  // texto
                    //2° noticia
                    'tema2not' => 'Pet World', // tema
                    'not2text' => 'Special care for the animals in the cold',  // texto
                    //3° noticia
                    'tema3not' => 'Pet World', // tema
                    'not3text' => 'Dogs and cats can be friends?'   // texto
                    
                    
            ],
                'not5' => [
                    'home' => 'Home',
                    'temaName' => 'Pet World',
                    'datapub' => '06/09/2016 at 16:00pm',
                    'titulo' => 'The power of love between humans and animals',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'Rafael and his dog Bob shared adventures in the past 15 years. He recently had to deal with some sad news . Your dog was diagnosed with cancer , and there is no longer for the two pass juntos.Para honor his old friend , Rafael decided to recreate iconic photos of this friendship,Bob he took in his arms and repeated the pose made in the house of her grandmother is garden in Belgium when he was 15 and 25 years.', //1° paragrafos,
                    'texto2' => ' "He may well continue for another six months , but can also become ill again very quickly , and this time was the last time "', //2° paragrafos,
                    'texto3' => '"My heart is in pieces to think such a thing, but we have so many adventures in this all the time. I am grateful that he had been part of my life ",said Rafael ', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Pet World', // tema
                    'not1text' => 'Paradise Cats of Rome',  // texto
                    //2° noticia
                    'tema2not' => 'Pet World', // tema
                    'not2text' => 'Fighting for veganism',  // texto
                    //3° noticia
                    'tema3not' => 'Pet World', // tema
                    'not3text' => 'The perfection of animals with disabilities'   // texto

                    
                             
            ],
                'not6' => [
                    'home' => 'Home',
                    'temaName' => 'Pet World',
                    'datapub' => '06/12/2016 at 05:00am',
                    'titulo' => 'Special care for the animals in the cold',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'With the arrival of cold weather , it is good to take some precautions so that your pet is protected and warm.', //1° paragrafos,
                    'texto2' => ' Measures to avoid walking with your dog in winter in the colder times of the day , clothes , adequate shelter , do not expose the puppy the outdoors right after bathing and even some vaccines can cause your furry enjoy the frosty days with good health and disposal.', //2° paragrafos,
                    'texto3' => '', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Pet World', // tema
                    'not1text' => 'The sad reality of zoos',  // texto
                    //2° noticia
                    'tema2not' => 'Pet World', // tema
                    'not2text' => 'Reflections on the abandonment of animals',  // texto
                    //3° noticia
                    'tema3not' => 'Pet World', // tema
                    'not3text' => 'Dogs and cats can be friends?'   // texto
                    
                    
                    
                       ],
                'not7' => [
                    'home' => 'Home',
                    'temaName' => 'Pet World',
                    'datapub' => '06/15/2016 at 11:00am',
                    'titulo' => 'Reflections on the abandonment of animals',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'The whole environment around an animal affects emotionally , you need to take great care , respect and consideration for them. For their lives . However , the abandonment is common .', //1° paragrafos,
                    'texto2' => 'Animals feel and suffer in much the same measures to humans. Before adopting or buying a pet , think twice . Or three. Dogs and cats need daily food and vital veterinary care', //2° paragrafos,
                    'texto3' => 'From the moment people stop leaving , the world becomes a better place.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Pet World', // tema
                    'not1text' => 'Special care for the animals in the cold',  // texto
                    //2° noticia
                    'tema2not' => 'Pet World', // tema
                    'not2text' => 'Paradise Cats of Rome',  // texto
                    //3° noticia
                    'tema3not' => 'Pet World', // tema
                    'not3text' => 'Older dogs need extra care and regular visits to the vet'   // texto
                    
                    
                       
                ],
                'not8' => [
                    'home' => 'Home',
                    'temaName' => 'Pet World',
                    'datapub' => '06/19/2016 at 22:00pm',
                    'titulo' => 'Dogs and cats can be friends?',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'Dogs and cats are generally seen as natural enemies and the decision to join in the same house often leads people to think twice. But in reality , there are many examples of cats and dogs that have become inseparable friends.', //1° paragrafos,
                    'texto2' => 'It is normal for animals of different species estranhem when they meet, and it is also true that dogs and cats speak different languages , with personality and lifestyles sometimes opposites.', //2° paragrafos,
                    'texto3' => 'But since when differences are an obstacle to good friends ?', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'The unlikely friendship between animals of different species is something that we can see the love beyond differences .', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Pet World', // tema
                    'not1text' => 'Dog runs away from home to visit hospitalized owner',  // texto
                    //2° noticia
                    'tema2not' => 'Pet World', // tema
                    'not2text' => 'Fighting for veganism',  // texto
                    //3° noticia
                    'tema3not' => 'Pet World', // tema
                    'not3text' => 'The perfection of animals with disabilities'   // texto
                    
                       ],
                'not9' => [
                    'home' => 'Home',
                    'temaName' => 'Pet World',
                    'datapub' => '06/02/2016 at 23:00pm',
                    'titulo' => 'Dog runs away from home to visit hospitalized owner',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'The dog is called furry and has been adopted an association of abandoned animals for about five years. Its owner was hospitalized with a heart problem and furry , bothered by his absence , had no half measures : ran away from home and went looking for the owner.', //1° paragrafos,
                    'texto2' => 'An unbelievable way, furry was straight to the hospital where the owner was hospitalized . The dog had never been neither that nor any other hospital before, did not know the ways and therefore the only plausible explanation is to have been able to follow the trail through the owner of smell.', //2° paragrafos,
                    'texto3' => '', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Pet World', // tema
                    'not1text' => 'Make your house a temporary home for animals',  // texto
                    //2° noticia
                    'tema2not' => 'Pet World', // tema
                    'not2text' => 'The perfection of animals with disabilities',  // texto
                    //3° noticia
                    'tema3not' => 'Pet World', // tema
                    'not3text' => 'Fighting for veganism'   // texto
                    
                    
                  
                       ],
                'not10' => [
                    'home' => 'Home',
                    'temaName' => 'Pet World',
                    'datapub' => '06/18/2016 at 07:00am',
                    'titulo' => 'Fighting for veganism',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'Currently, Josh is a supporter of animal rights and at first he did not want to talk about his years of employee of a slaughterhouse.', //1° paragrafos,
                    'texto2' => 'He felt ashamed of their own complicity in the murder industry. He also noticed another disturbing reality : a society shames those who do the dirty work of killing her.', //2° paragrafos,
                    'texto3' => 'This is not just his story , but all the animals fear and face horrible deaths and all employees who perform work that destroy their souls.

', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Pet World', // tema
                    'not1text' => 'Older dogs need extra care and regular visits to the vet',  // texto
                    //2° noticia
                    'tema2not' => 'Pet World', // tema
                    'not2text' => 'The sad reality of zoos',  // texto
                    //3° noticia
                    'tema3not' => 'Pet World', // tema
                    'not3text' => 'Make your house a temporary home for animals'   // texto
                    
                      
                    
                    
                    
                    
                       ],
                'not11' => [
                    'home' => 'Home',
                    'temaName' => 'Pet World',
                    'datapub' => '06/05/2016 at 09:30am',
                    'titulo' => 'The perfection of animals with disabilities',
                    'resumo' => '',
                    'autor' => 'Karen Cristina P. Lara',
                    'texto1' => 'The mission of the Australian photographer Alex Cearns proposed is simple : to prove that all animals - regardless of their physical condition - are beautiful.', //1° paragrafos,
                    'texto2' => 'The Australian has a project adoptions for animals with disabilities and depicts through the photos , the love and care of these animals.', //2° paragrafos,
                    'texto3' => 'Most animals with problems does not address them. Adapt to their bodies without complaint and survive with determination.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Pet World', // tema
                    'not1text' => 'Reflections on the abandonment of animals',  // texto
                    //2° noticia
                    'tema2not' => 'Pet World', // tema
                    'not2text' => 'Dogs and cats can be friends?',  // texto
                    //3° noticia
                    'tema3not' => 'Pet World', // tema
                    'not3text' => 'Dog runs away from home to visit hospitalized owner'   // texto



                ]
           
            ]
            
            
            
            
            
            
            
            
            
            
            
            
     /* ESPANHOL ------------------------------------------------------- */  
            
            
            
            
        ],
        'es' => [
              'index' => [
                  'titulo' => 'Otemesti',
                  'irparaconteudo' => 'Go to content',
                  'irparamenu' => 'Go to the menu',
                  'acessibilidade' => 'Acessibility',
                  'mapadosite' => 'Sitemap'
              ],
              'pet' => [
                  'index' => [
                      'home' => 'Página de inicio',
                      'temaName' => 'Mundo Pet',
                      /* ------------------- 1° noticia -------------- */
                      'not1alt' => 'viejo perro negro con la expresión feliz',
                      'not1text' => 'Los perros mayores necesitan un cuidado especial y las visitas regulares al veterinario',
                      /* ------------------- 2° noticia -------------- */
                      'not2alt' => 'Gorila llevar a sus cachorros en el zoológico',
                      'not2text' => 'La triste realidad de los zoológicos',
                      /* ------------------- 3° noticia -------------- */
                      'not3alt' => 'Gatito y perrito que juegan juntos',
                      'not3text' => 'Haga de su casa un hogar temporal para los animales',
                      /* ------------------- 4° noticia -------------- */
                      'not4text' => 'Paraíso de los gatos de Roma',
                      /* ------------------- 5° noticia -------------- */
                      'not5text' => 'El poder del amor entre los seres humanos y animales',
                      /* ------------------- 6° noticia -------------- */
                      'not6text' => 'Atención especial para los animales en el frío',
                      'not6alt' => 'Kitten caminar en la nieve con la bufanda y gorra de color rosa',
                      /* ------------------- 7° noticia -------------- */
                      'not7alt' => 'Cachorros neumáticos abandonados en',
                      'not7text' => 'Reflexiones sobre el abandono de animales',
                      /* ------------------- 8° noticia -------------- */
                      'not8text' => 'Los perros y gatos pueden ser amigos ?',
                      /* ------------------- 9° noticia -------------- */
                      'not9text' => 'Perro se escapa de casa para visitar propietario hospitalizado',
                      /* ------------------- 10° noticia -------------- */
                      'not10alt' => 'becerro marrón con manchas blancas',
                      'not10text' => 'luchar por el veganismo',
                      /* ------------------- 11° noticia -------------- */
                      'not11alt' => 'perro negro con la pata amputada',
                      'not11text' => 'La perfección de los animales con discapacidad'
                  ],
                  'not1' => [
                      'home' => 'Página de inicio',
                      'temaName' => 'Mundo Pet',
                      'datapub' => '10/05/2016 la 08:30min',
                      'titulo' => 'Los perros mayores necesitan un cuidado especial y las visitas regulares al veterinario',
                      'resumo' => '',
                      'autor' => 'Karen Cristina P. Lara',
                      'texto1' => 'El cuidado del perro ir mucho más allá de dar comida y afecto , sobre todo cuando son ancianos . En general, los perros muestran los primeros signos de envejecimiento alrededor del séptimo o décimo año de edad.', //1° paragrafos,
                      'texto2' => 'Para detectar problemas en los perros , los tutores deben estar atentos a los animales . Cuando llegan a una edad más avanzada , los animales requieren visitas con mayor frecuencia al veterinario para llevar a cabo exámenes periódicos.', //2° paragrafos,
                      'texto3' => 'La comida es un factor muy importante para mantener la longevidad del animal. Es importante saber que los guardianes monitorear la calidad y la cantidad de calorías de los alimentos que se ofrecen al animal.', //3° paragrafos,
                      //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                      'texto4' => '', //4° paragrafos,
                      'texto5' => '', //5° paragrafos
                      // Section de noticia
                      //1° noticia
                      'tema1not' => 'Mundo Pet', // tema
                      'not1text' => 'La triste realidad de los zoológicos',  // texto
                      //2° noticia
                      'tema2not' => 'Mundo Pet', // tema
                      'not2text' => 'Haga de su casa un hogar temporal para los animales',  // texto
                      //3° noticia
                      'tema3not' => 'Mundo Pet', // tema
                      'not3text' => 'ONO'   // texto
                     
                      
                  ],
                  'not2' => [
                      'home' => 'Página de inicio',
                      'temaName' => 'Mundo Pet',
                      'datapub' => '20/05/2016 la 10:20min',
                      'titulo' => 'La triste realidad de los zoológicos',
                      'resumo' => '',
                      'autor' => 'Karen Cristina P. Lara',
                      'texto1' => 'La triste historia de Harambe , un gorila de 17 años , murió en el zoológico de Cincinnati el 28 de mayo plantea preguntas acerca de la validez y la moralidad de estos establecimientos .', //1° paragrafos,
                      'texto2' => 'Harambe recibió un disparo con el pretexto de salvar una de cuatro años que estaba en su jaula. Sin embargo , un video hecho por un espectador mostró que Harambe parecía tratar de proteger al niño con quien tomado de las manos durante unos instantes .', //2° paragrafos,
                      'texto3' => 'El mantenimiento de animales salvajes en jaulas para el beneficio de los seres humanos puede resultar en tragedias como ésta .', //3° paragrafos,
                      //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                      'texto4' => '', //4° paragrafos,
                      'texto5' => '', //5° paragrafos
                      // Section de noticia
                      //1° noticia
                      'tema1not' => 'Mundo Pet', // tema
                      'not1text' => 'Los perros mayores necesitan un cuidado especial y las visitas regulares al veterinario',  // texto
                      //2° noticia
                      'tema2not' => 'Mundo Pet', // tema
                      'not2text' => 'Haga de su casa un hogar temporal para los animales',  // texto
                      //3° noticia
                      'tema3not' => 'Mundo Pet', // tema
                      'not3text' => 'El poder del amor entre los seres humanos y animales'   // texto
                  
                      
                  ],
                  'not3' => [
                      'home' => 'Página de inicio',
                      'temaName' => 'Mundo Pet',
                      'datapub' => '01/06/2016 la 12:30min',
                      'titulo' => 'Haga de su casa un hogar temporal para los animales',
                      'resumo' => '',
                      'autor' => 'Karen Cristina P. Lara',
                      'texto1' => 'Tomando un animal de la calle y tomar la responsabilidad de ella hasta que se obtiene una familia permanente ayuda no sólo para el propio animal , sino también a sí mismo - que tendrá una empresa con mucho amor para dar .', //1° paragrafos,
                      'texto2' => 'Para proporcionar un hogar temporal es necesario tener más de 18 años y el consentimiento de todas las personas que viven con contigo, y ser capaz de sostener el nuevo animal , después de todo, puede tomar unas pocas semanas y tal vez meses , hasta que encuentra una nueva casa .', //2° paragrafos,
                      'texto3' => 'El hogar temporal es una opción de apoyo para ayudar a reducir el número de animales abandonados y sin hogar .', //3° paragrafos,
                      //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                      'texto4' => '', //4° paragrafos,
                      'texto5' => '', //5° paragrafos
                      // Section de noticia
                      //1° noticia
                      'tema1not' => 'Mundo Pet', // tema
                      'not1text' => 'El poder del amor entre los seres humanos y animales',  // texto
                      //2° noticia
                      'tema2not' => 'Mundo Pet', // tema
                      'not2text' => 'Atención especial para los animales en el frío',  // texto
                      //3° noticia
                      'tema3not' => 'Mundo Pet', // tema
                      'not3text' => 'Reflexiones sobre el abandono de animales'   // texto
                      
                      
                        ],
                  'not4' => [
                      'home' => 'Página de inicio',
                      'temaName' => 'Mundo Pet',
                      'datapub' => '07/06/2016 la 14:00min',
                      'titulo' => 'Paraíso de los gatos de Roma',
                      'resumo' => '',
                      'autor' => 'Karen Cristina P. Lara',
                      'texto1' => 'Las ruinas de Torre Argentina , en el centro histórico de Roma , es un verdadero paraíso para los gatos .', //1° paragrafos,
                      'texto2' => 'Es un antiguo santuario donde muchos gatos encuentran refugio y alimento .', //2° paragrafos,
                      'texto3' => 'Se estima que en Roma hay un total de unos 250.000 gatos en las calles , repartidas en aproximadamente 2.000 colonias .', //3° paragrafos,
                      //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                      'texto4' => 'Los voluntarios de la asociación Torre Argentina se encargan de la alimentación diaria , higiene y cuidado de la salud de más de 250 gatos que viven en las ruinas . También esterilizar a los animales y promover su adopción

', //4° paragrafos,
                      'texto5' => '', //5° paragrafos
                      // Section de noticia
                      //1° noticia
                      'tema1not' => 'Mundo Pet', // tema
                      'not1text' => 'Perro se escapa de casa para visitar propietario hospitalizado',  // texto
                      //2° noticia
                      'tema2not' => 'Mundo Pet', // tema
                      'not2text' => 'Atención especial para los animales en el frío',  // texto
                      //3° noticia
                      'tema3not' => 'Mundo Pet', // tema
                      'not3text' => 'Los perros y gatos pueden ser amigos ?'   // texto
                      
                      
                    ],
                  'not5' => [
                      'home' => 'Página de inicio',
                      'temaName' => 'Mundo Pet',
                      'datapub' => '09/06/2016 la 16:00min',
                      'titulo' => 'El poder del amor entre los seres humanos y animales',
                      'resumo' => '',
                      'autor' => 'Karen Cristina P. Lara',
                      'texto1' => 'Rafael y su perro Bob comparten aventuras en los últimos 15 años . Hace poco tuvo que lidiar con una triste noticia . Su perro fue diagnosticado con cáncer , y ya no es para los dos pase juntos.Para honor a su viejo amigo , Rafael decidió recrear fotos icónicas de esta amistad ; Bob tomó en sus brazos y repite la pose hecho en la casa del jardín de su abuela en Bélgica cuando tenía 15 y 25 años .', //1° paragrafos,
                      'texto2' => '" Bien puede continuar durante otros seis meses , pero también puede enfermar de nuevo muy rápidamente , y esta vez fue la última vez “', //2° paragrafos,
                      'texto3' => '" Mi corazón está en pedazos para pensar tal cosa , pero tenemos tantas aventuras en esto todo el tiempo . Estoy agradecido de que él había sido parte de mi vida ",dicho Rafael', //3° paragrafos,
                      //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                      'texto4' => '', //4° paragrafos,
                      'texto5' => '', //5° paragrafos
                      // Section de noticia
                      //1° noticia
                      'tema1not' => 'Mundo Pet', // tema
                      'not1text' => 'Paraíso de los gatos de Roma',  // texto
                      //2° noticia
                      'tema2not' => 'Mundo Pet', // tema
                      'not2text' => 'La lucha por el veganismo',  // texto
                      //3° noticia
                      'tema3not' => 'Mundo Pet', // tema
                      'not3text' => 'La perfección de los animales con discapacidad'   // texto
                      
                         
                    ],
                  'not6' => [
                      'home' => 'Página de inicio',
                      'temaName' => 'Mundo Pet',
                      'datapub' => '12/06/2016 la 05:00min',
                      'titulo' => 'Atención especial para los animales en el frío',
                      'resumo' => '',
                      'autor' => 'Karen Cristina P. Lara',
                      'texto1' => 'Con la llegada del clima frío , es bueno tomar algunas precauciones para que su mascota está protegido y cálido .', //1° paragrafos,
                      'texto2' => 'Las medidas para evitar que recorre con su perro en invierno en las épocas más frías del día , ropa, vivienda adecuada , no exponer al cachorro al aire libre justo después de bañarse e incluso algunas vacunas pueden causar que su peludo disfrutar de los días con heladas con buena salud y disposición.

', //2° paragrafos,
                      'texto3' => '', //3° paragrafos,
                      //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                      'texto4' => '', //4° paragrafos,
                      'texto5' => '', //5° paragrafos
                      // Section de noticia
                      //1° noticia
                      'tema1not' => 'Mundo Pet', // tema
                      'not1text' => 'La triste realidad de los zoológicos',  // texto
                      //2° noticia
                      'tema2not' => 'Mundo Pet', // tema
                      'not2text' => 'Reflexiones sobre el abandono de animales',  // texto
                      //3° noticia
                      'tema3not' => 'Mundo Pet', // tema
                      'not3text' => 'Los perros y gatos pueden ser amigos ?'   // texto
                      
                            
                    ],
                  'not7' => [
                      'home' => 'Página de inicio',
                      'temaName' => 'Mundo Pet',
                      'datapub' => '15/06/2016 la 11:00min',
                      'titulo' => 'Reflexiones sobre el abandono de animales',
                      'resumo' => '',
                      'autor' => 'Karen Cristina P. Lara',
                      'texto1' => 'Todo el ambiente en torno a un animal afecta emocionalmente , es necesario tener mucho cuidado , respeto y consideración por ellos. Por sus vidas . Sin embargo , el abandono es común.', //1° paragrafos,
                      'texto2' => 'Los animales sienten y sufren en gran parte las mismas medidas a los seres humanos . Antes de adoptar o comprar una mascota , piense dos veces . O tres. Perros y gatos necesitan comida diaria y cuidados veterinarios vitales', //2° paragrafos,
                      'texto3' => 'Desde el momento en la gente deja de salir, el mundo passe un lugar mejor .', //3° paragrafos,
                      //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                      'texto4' => '', //4° paragrafos,
                      'texto5' => '', //5° paragrafos
                      // Section de noticia
                      //1° noticia
                      'tema1not' => 'Mundo Pet', // tema
                      'not1text' => 'Atención especial para los animales en el frío',  // texto
                      //2° noticia
                      'tema2not' => 'Mundo Pet', // tema
                      'not2text' => 'Paraíso de los gatos de Roma',  // texto
                      //3° noticia
                      'tema3not' => 'Mundo Pet', // tema
                      'not3text' => 'Los perros mayores necesitan un cuidado especial y las visitas regulares al veterinario'   // texto
                      
                      
                                 
                    ],
                  'not8' => [
                      'home' => 'Página de inicio',
                      'temaName' => 'Mundo Pet',
                      'datapub' => '19/06/2016 la 22:00min',
                      'titulo' => 'Los perros y gatos pueden ser amigos ?',
                      'resumo' => '',
                      'autor' => 'Karen Cristina P. Lara',
                      'texto1' => 'Los perros y los gatos son generalmente vistos como enemigos naturales y la decisión de unirse en la misma casa a menudo lleva a la gente a pensar dos veces. Pero, en realidad , hay muchos ejemplos de perros y gatos que se han convertido en amigos inseparables .', //1° paragrafos,
                      'texto2' => 'Es normal que los animales de diferentes especies estranhem cuando se encuentran, y también es cierto que los perros y gatos hablan idiomas diferentes , con personalidad y estilos de vida a veces opuestos .', //2° paragrafos,
                      'texto3' => 'Pero ya que cuando las diferencias son un obstáculo para los buenos amigos ?', //3° paragrafos,
                      //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                      'texto4' => 'La improbable amistad entre animales de diferentes tipos es algo que podemos ver el amor más allá de las diferencias .', //4° paragrafos,
                      'texto5' => '', //5° paragrafos
                      // Section de noticia
                      //1° noticia
                      'tema1not' => 'Mundo Pet', // tema
                      'not1text' => 'Perro se escapa de casa para visitar propietario hospitalizado',  // texto
                      //2° noticia
                      'tema2not' => 'Mundo Pet', // tema
                      'not2text' => 'La lucha por el veganismo',  // texto
                      //3° noticia
                      'tema3not' => 'Mundo Pet', // tema
                      'not3text' => 'La perfección de los animales con discapacidad'   // texto
                      
                      
                      
                       ],
                  'not9' => [
                      'home' => 'Página de inicio',
                      'temaName' => 'Mundo Pet',
                      'datapub' => '02/06/2016 la 23:00min',
                      'titulo' => 'Perro se escapa de casa para visitar propietario hospitalizado',
                      'resumo' => '',
                      'autor' => 'Karen Cristina P. Lara',
                      'texto1' => 'El perro se llama peludo y se ha adoptado una asociación de animales abandonados durante unos cinco años. Su propietario fue hospitalizado con un problema cardíaco y peludo, molestado por su ausencia , no tenía las medias tintas : escapó de su casa y fue a buscar a su dueño.', //1° paragrafos,
                      'texto2' => 'Una manera increíble , peludo fue directamente al hospital , donde fue hospitalizado el propietario. El perro nunca había sido ni eso ni cualquier otro hospital antes , no conocía los caminos y por lo tanto la única explicación plausible es que ha sido capaz de seguir el rastro a través del dueño del olfato .', //2° paragrafos,
                      'texto3' => '', //3° paragrafos,
                      //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                      'texto4' => '', //4° paragrafos,
                      'texto5' => '', //5° paragrafos
                      // Section de noticia
                      //1° noticia
                      'tema1not' => 'Mundo Pet', // tema
                      'not1text' => 'Haga de su casa un hogar temporal para los animales',  // texto
                      //2° noticia
                      'tema2not' => 'Mundo Pet', // tema
                      'not2text' => 'La perfección de los animales con discapacidad',  // texto
                      //3° noticia
                      'tema3not' => 'Mundo Pet', // tema
                      'not3text' => 'La lucha por el veganismo'   // texto
                      
                      
                         
                       ],
                  'not10' => [
                      'home' => 'Página de inicio',
                      'temaName' => 'Mundo Pet',
                      'datapub' => '18/06/2016 la 07:00min',
                      'titulo' => 'La lucha por el veganismo',
                      'resumo' => '',
                      'autor' => 'Karen Cristina P. Lara',
                      'texto1' => 'Actualmente , Josh es un defensor de derechos de los animales y al principio no quería hablar de sus años de empleado de un matadero.', //1° paragrafos,
                      'texto2' => 'Se sintió avergonzado de su propia complicidad en la industria de asesinato. También se dio cuenta de otra realidad preocupante: una sociedad avergüenza a los que hacen el trabajo sucio de matarla .', //2° paragrafos,
                      'texto3' => 'Esto no es sólo su historia, pero todos los animales temen y se enfrentan a una muerte horrible y todos los empleados que realizan trabajos que destruyen sus almas .', //3° paragrafos,
                      //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                      'texto4' => '', //4° paragrafos,
                      'texto5' => '', //5° paragrafos
                      // Section de noticia
                      //1° noticia
                      'tema1not' => 'Mundo Pet', // tema
                      'not1text' => 'Los perros mayores necesitan un cuidado especial y las visitas regulares al veterinario',  // texto
                      //2° noticia
                      'tema2not' => 'Mundo Pet', // tema
                      'not2text' => 'La triste realidad de los zoológicos',  // texto
                      //3° noticia
                      'tema3not' => 'Mundo Pet', // tema
                      'not3text' => 'Haga de su casa un hogar temporal para los animales'   // texto
                      
                      
                           
                       ],
                  'not11' => [
                      'home' => 'Página de inicio',
                      'temaName' => 'Mundo Pet',
                      'datapub' => '05/06/2016 la 09:30min',
                      'titulo' => 'La perfección de los animales con discapacidad',
                      'resumo' => '',
                      'autor' => 'Karen Cristina P. Lara',
                      'texto1' => 'La misión del fotógrafo australiano Alex Cearns propuesto es simple : para demostrar que todos los animales - independientemente de su condición física - son hermosas .', //1° paragrafos,
                      'texto2' => 'El australiano tiene un proyecto para adopciones animales con discapacidad y representa a través de las fotos, el amor y el cuidado de estos animales .', //2° paragrafos,
                      'texto3' => 'La mayoría de los animales con problemas no se ocupa de ellos. Adaptarse a sus cuerpos sin queja y sobrevivir con determinación .', //3° paragrafos,
                      //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                      'texto4' => '', //4° paragrafos,
                      'texto5' => '', //5° paragrafos
                      // Section de noticia
                      //1° noticia
                      'tema1not' => 'Mundo Pet', // tema
                      'not1text' => 'Reflexiones sobre el abandono de animales',  // texto
                      //2° noticia
                      'tema2not' => 'Mundo Pet', // tema
                      'not2text' => 'Los perros y gatos pueden ser amigos ?',  // texto
                      //3° noticia
                      'tema3not' => 'Mundo Pet', // tema
                      'not3text' => 'Perro se escapa de casa para visitar propietario hospitalizado'   // texto
                      
                      
                      
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
