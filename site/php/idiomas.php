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
                    'not1alt' => 'Doar comida agora por delivery!',
                    'not1text' => 'Doar comida agora por delivery!',
                    /* ------------------- 2° noticia -------------- */
                    'not2alt' => 'Egoísmo não tem vez: casal decide investir na formação de 26 crianças ao invés de comprar iate',
                    'not2text' => 'Egoísmo não tem vez: casal decide investir na formação de 26 crianças ao invés de comprar iate',
                    /* ------------------- 3° noticia -------------- */
                    'not3alt' => 'Cabeleireiro faz cortes em troca de histórias e transforma projeto em livro',
                    'not3text' => 'Cabeleireiro faz cortes em troca de histórias e transforma projeto em livro',
                    /* ------------------- 4° noticia -------------- */
                    'not4text' => 'Da lama ao lar! Projeto transforma a lama do desastre de Mariana em tijolos para a reconstrução da cidade',
                    /* ------------------- 5° noticia -------------- */
                    'not5text' => 'Empresário ensina moradora de rua a ler na hora do almoço',
                    /* ------------------- 6° noticia -------------- */
                    'not6text' => 'Cultura da hospitalidade: veja o país mais educado do mundo',
                    'not6alt' => 'Cultura da hospitalidade: veja o país mais educado do mundo',
                    /* ------------------- 7° noticia -------------- */
                    'not7alt' => 'Professor chinês dá aulas por meio de desenhos',
                    'not7text' => 'Professor chinês dá aulas por meio de desenhos',
                    /* ------------------- 8° noticia -------------- */
                    'not8text' => 'Jovem recorre a internet para arrecadar 94 cartões para aniversário da avó',
                    /* ------------------- 9° noticia -------------- */
                    'not9text' => 'Ducha permite banhos infinitos com apenas 10 litros de água',
                    /* ------------------- 10° noticia -------------- */
                    'not10alt' => 'Imagem ilustrativa: capelo',
                    'not10text' => 'Quatro universidades brasileiras estão entre as 10 melhores da América Latina',
                    /* ------------------- 11° noticia -------------- */
                    'not11alt' => 'Na foto, o patrão e seus funcionários em Cancun',
                    'not11text' => 'Patrão leva funcionários para férias em hotel de luxo em Cancun'
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
                    'tema1not' => 'Comportamento', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Comportamento', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Comportamento', // tema
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
                    'tema1not' => 'Comportamento', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Comportamento', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Comportamento', // tema
                    'not3text' => 'ONO'   // texto

                ],
                 'not3' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Comportamento',
                    'datapub' => '17/06/2016 as 12h05min',
                    'titulo' => 'Cabeleireiro faz cortes em troca de histórias e transforma projeto em livro',
                    'resumo' => 'Sua história de vida vale um corte de cabelo. E ela pode acabar nas páginas de um livro. Isso tudo se você cruzar por aí com Fernando Spud, 38, cabeleireiro e idealizador do Salão Itinerante.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => ' O projeto, que começou por acaso, há sete anos, na porta de uma balada em São Paulo, ganha registro impresso para que as histórias sobrevivam mais do que o corte do momento.', //1° paragrafos,
                    'texto2' => 'A cada dois meses, Fernando escolhe um local "com vida" para espalhar suas tesouras e aguardar por boas histórias. Pode ser uma festa, uma praça, uma mesa de bar ou uma comunidade carente. "Geralmente demora para a primeira pessoa topar. Mas assim que eu começo a cortar um cabelo surge uma fila de interessados em oferecer histórias em troca de uma mudança no visual", explica.', //2° paragrafos,
                    'texto3' => 'Das centenas de histórias que já passaram pelas navalhas de Fernando Spud, 45 registros foram selecionados para virar livro. A ideia surgiu a partir de amigos que sentiam falta de um registro mais duradouro. Ele agora trabalha em parceria com a amiga Dani Louzada, que assume a tarefa de passar as histórias para o papel, na organização e edição do livro e ainda busca uma editora interessada no trabalho.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Cabeleireiro profissional há 12 anos, Fernando é formado em visagismo e história da moda. Ele também atuou por um ano em Londres, onde atendia seus clientes em casa. Daí surgiu o nome Salão Itinerante, ainda sem a veia social.', //4° paragrafos,
                    'texto5' => '"Isso surgiu como uma brincadeira, mas uma brincadeira que acabou ficando muito séria e gera um impacto positivo na vida de quem participa". Prova disso é que, pela primeira vez, Spud resolveu voltar a um local por onde o Salão Itinerante já passou: a favela de Paraisópolis.', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Comportamento', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Comportamento', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Comportamento', // tema
                    'not3text' => 'ONO'   // texto

                ],
                 'not4' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Comportamento',
                    'datapub' => '22/04/2016 as 14h55min',
                    'titulo' => 'Da lama ao lar! ',
                    'resumo' => 'Projeto transforma a lama do desastre de Mariana em tijolos para a reconstrução da cidade.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '
Uma campanha criada num site de financiamento coletivo tem o objetivo de coletar R$400 mil para financiar o projeto de montar uma fábrica de tijolos com produção em escala industrial. 
', //1° paragrafos,
                    'texto2' => 'O projeto que usa tecnologias da Universidade Federal de Minas Gerais (UFMG) pretende devolver 80 empregos diretos e indiretos à comunidade afetada. ', //2° paragrafos,
                    'texto3' => 'A perspectiva é de que a cada ano mais de 1 bilhão de quilos de lama sejam retirados do meio ambiente e transformá-la numa quantidade de tijolos que ajudem na construção de 1200 casas.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Comportamento', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Comportamento', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Comportamento', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not5' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Comportamento',
                    'datapub' => '18/06/2016 as 14h55min',
                    'titulo' => 'Empresário ensina moradora de rua a ler na hora do almoço',
                    'resumo' => 'Além da refeição, o que você faz de proveitoso no seu horário de almoço? Greg Smith, que mora em Orlando, EUA, aproveita o intervalo no trabalho para ensinar uma moradora de rua a ler.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'Depois de descobrir o drama de vida de Amy Joe, o empresário decidiu ajudá-la de maneira nobre.', //1° paragrafos,
                    'texto2' => 'Ele soube que em vez de comprar comida com o dinheiro que recebia, a mulher alugava livros para aprender a ler. Desde então, Greg a ajuda em seu horário de almoço.', //2° paragrafos,
                    'texto3' => 'Assim, desde o final do mês de abril, às terças, Smith lê com Amy Joe um livro emprestado da biblioteca.', //4° paragrafos,
                    'texto5' => 'Nos outros dias da semana, ela estuda por conta própria. “Em meia ou uma hora, vejo como ela é uma pessoa positiva, mesmo que não tenha nada”, conta.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Greg também ajudou Amy no visual. Levou a mulher para cortar os cabelos, comprar roupas novas… nasceu uma amizade entre eles.', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Comportamento', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Comportamento', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Comportamento', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not6' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Comportamento',
                    'datapub' => '08/06/2016 as 14h55min',
                    'titulo' => 'Cultura da hospitalidade: veja o país mais educado do mundo',
                    'resumo' => 'Pra ser educado ao extremo é preciso ser igualmente disciplinado e o Japão tem isso de sobra.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'O Omotenashi é um estilo de vida japonês, um termo que pode ser traduzido como “hospitalidade japonesa”.', //1° paragrafos,
                    'texto2' => 'Na prática, a expressão combina a educação e uma polidez requintada, com um desejo de manter a harmonia e evitar o conflito.', //2° paragrafos,
                    'texto3' => 'Mas, de onde vem toda essa cortesia e educação? Para Isao Kumakura, professor emérito no Museu Nacional de Etnologia, em Osaka, grande parte da etiqueta japonesa tem origem nos rituais formais de cerimônias de chá e de artes marciais.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Na verdade, a palavra omotenashi, literalmente “espírito de serviço”, vem da cerimônia de chá. O anfitrião dessas cerimônias trabalha duro para proporcionar o clima certo para entreter convidados, escolhendo a louça, flores e decoração sem esperar nada em troca.', //4° paragrafos,
                    'texto5' => 'Seria ótimo se todo visitante levasse um pouco de omotenashi para casa e espalhasse esse modo vida em seu próprio país. “O efeito cascata poderia mudar o mundo”', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Comportamento', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Comportamento', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Comportamento', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not7' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Comportamento',
                    'datapub' => '09/06/2016 as 17h17min',
                    'titulo' => 'Professor chinês dá aulas por meio de desenhos',
                    'resumo' => 'Ao invés de realizar leituras com os estudantes, professor apresenta os conceitos do curso com ilustrações na lousa.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'Chuan-Bin Chung, nascido na China, é um ser humano comum. Não é, no entanto, um professor comum. Funcionário do Departamento de Comunicações Visuais da Universidade de Design de Shu-Te, em Taiwan, Chung se destaca por dar aulas com desenhos.', //1° paragrafos,
                    'texto2' => 'Ao invés de realizar leituras com os estudantes, ele apresenta os conceitos do curso com ilustrações na lousa. O professor introduz uma nova maneira de educar e prender a atenção dos alunos sem que a utilização de livros didáticos seja necessária.', //2° paragrafos,
                    'texto3' => '“Sim, nós temos livros didáticos. Mas não os lemos, os desenhamos. Estudantes desta área não conseguem aprender somente lendo imagens nos livros. Em vez disso, nós aprendemos enquanto desenhamos alguma coisa. Nas minhas aulas, os alunos devem desenhar o que estou mostrando na lousa”, disse Chung em entrevista ao Bored Panda.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Comportamento', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Comportamento', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Comportamento', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not8' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Comportamento',
                    'datapub' => '22/04/2016 as 14h55min',
                    'titulo' => 'Jovem recorre a internet para arrecadar 94 cartões para aniversário da avó',
                    'resumo' => 'Uma jovem paulista de 23 anos lançou uma campanha na internet em comemoração ao aniversário de 94 anos da avó.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'Sarah Dina Arroyo Amorim não quer dinheiro, muito menos presentes de valor. O único objetivo é arrecadar nada mais do que 94 cartões de aniversários para dona Olga Amorim.', //1° paragrafos,
                    'texto2' => '"Resolvi perguntar a minha vó o que ela gostaria de receber de presente de aniversário. A primeira resposta foi "nada". Mas, depois de insistir bastante, ela disse que ficaria muito feliz em receber um cartão. Um cartão? Isso era muito pouco perto do que merece", disse Sarah, ao justificar o vídeo que publicou no Facebook ao pedir a ajuda de conhecidos e desconhecidos. ', //2° paragrafos,
                    'texto3' => '"Pensei que todos nós poderíamos nos juntar para conseguir realizar esse presente para ela. Seriam 94 cartões, em comemoração a cada ano de vida dela", explicou Sarah no post que já tem mais de 6,6 mil visualizações.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Dona Olga, como conta a neta, adora receber cartões e guarda cada um deles, até mesmo os recebidos por bancos. "No Dia das Mães, escrevi em um papel qualquer: "vó, Feliz Dias das Mães, porque vó é mãe duas vezes". Ela gostou tanto que colou aquele papel do lado da TV, lugar de maior visualização para ela", lembra Sarah.', //4° paragrafos,
                    'texto5' => '"Tenho certeza que ela vai gostar de cada um dos cartões e fará o possível e impossível para responder um por um. Será um excelente e prazeroso passatempo para ela", diz a neta.', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Comportamento', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Comportamento', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Comportamento', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not9' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Comportamento',
                    'datapub' => '01/06/2016 as 14h55min',
                    'titulo' => 'Ducha permite banhos infinitos com apenas 10 litros de água',
                    'resumo' => 'Você conseguiria tomar um banho com 10 litros de água? E vários banhos com essa mesma água?',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'O Showerlopp permite que você tome infinitos banhos porque um filtro muito eficaz limpa completamente a água utilizada, reciclando-a em tempo real toda vez que se toma banho.', //1° paragrafos,
                    'texto2' => 'Quando escorre pelo ralo, a água passa por um filtro de micro-fibra, areia, carvão ativado e luz ultravioleta que purifica e esteriliza a água, tornando-a novamente apta para uso. Quando termina a filtragem, a água é novamente bombeada para a ducha e o processo recomeça.', //2° paragrafos,
                    'texto3' => 'O projeto, feito por um grupo de jovens técnicos finlandeses, está em fase piloto e aceita a contribuição de especialistas que queiram melhorar o sistema.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'O Showerlopp é feito no sistema ‘open source’, ou seja, seu esquema de funcionamento é de acesso público.', //4° paragrafos,
                    'texto5' => 'Mesmo assim já é possível encomendar um kit de instalação, que está à venda por 1.500 euros, quase 6 mil reais.', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Comportamento', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Comportamento', // tema
                    'not2text' => 'ADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Comportamento', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not10' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Comportamento',
                    'datapub' => '15/06/2016 as 20h45min',
                    'titulo' => 'Quatro universidades brasileiras estão entre as 10 melhores da América Latina',
                    'resumo' => 'As quatro instituições brasileiras aparecem no Top 10 de uma lista de melhores universidades ',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'Para a consultoria britânica em educação superior Quacquarelli Symonds (QS), a USP ocupa o lugar de melhor instituição de ensino superior da América Latina pelo segundo ano consecutivo. O Brasil é o país com mais instituições no ranking divulgado no dia 14 de junho: das 300 universidades da lista, 76 são brasileiras.', //1° paragrafos,
                    'texto2' => 'Além da USP, as outras três brasileiras que aparecem no top 10 são a Universidade Estadual de Campinas (Unicamp), Universidade Federal do Rio de Janeiro (UFRJ) e Universidade de Brasília (UnB).', //2° paragrafos,
                    'texto3' => 'O levantamento, considerado um dos mais prestigiados do mundo, foi feito com base em sete indicadores de qualidade: reputação acadêmica, reputação entre empregadores, proporção professor/aluno, citações por artigo científico, quantidade de docentes com doutorado e presença da instituição na internet.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Comportamento', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Comportamento', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Comportamento', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not11' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Comportamento',
                    'datapub' => '19/06/2016 as 14h55min',
                    'titulo' => 'Patrão leva funcionários para férias em hotel de luxo em Cancun',
                    'resumo' => 'O que o seu patrão faz para motivar seus funcionários quando a empresa dele atinge as metas de faturamento?',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'Em Braga, Portugal, um empresário da área de segurança paga férias para os funcionários, em hotéis de luxo, há 3 anos consecutivos, sempre que o grupo bate suas metas.', //1° paragrafos,
                    'texto2' => 'Em 2014, eles foram para a República Dominicana, no ano passado conheceram Cuba e este ano a viagem foi para Cancun.', //2° paragrafos,
                    'texto3' => 'A empresa BC Segurança – do grupo Bernardo Costa – ofereceu uma semana de férias no México aos seus 34 funcionários.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Dezesseis aceitaram e o restante, que não quis viajar, recebeu um salário extra de 960 euros – cerca de 3.900 reais – que é a média salarial na empresa.', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Comportamento', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Comportamento', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Comportamento', // tema
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
                    'not1alt' => 'Now you can donate food by delivery!',
                    'not1text' => 'Now you can donate food by delivery!',
                    /* ------------------- 2° noticia -------------- */
                    'not2alt' => 'There’s no place to selfishness: a couple decide to invest on 26 children’s formation instead of buying a yacht. ',
                    'not2text' => 'There’s no place to selfishness: a couple decide to invest on 26 children’s formation instead of buying a yacht.  ',
                    /* ------------------- 3° noticia -------------- */
                    'not3alt' => 'Hairdresser makes free hair cuts in exchange for stories and transforms them in a book',
                    'not3text' => 'Hairdresser makes free hair cuts in exchange for stories and transforms them in a book',
                    /* ------------------- 4° noticia -------------- */
                    'not4text' => 'From the mud to the home! Project turns mud from Mariana’s disaster into bricks to reconstruct the city.',
                    /* ------------------- 5° noticia -------------- */
                    'not5text' => 'Businessman teaches a homeless to read at his lunch time',
                    /* ------------------- 6° noticia -------------- */
                    'not6text' => 'Culture of hospitality: know the most educated country around the World',
                    'not6alt' => 'Culture of hospitality: know the most educated country around the World',
                    /* ------------------- 7° noticia -------------- */
                    'not7alt' => 'Chinese Profesor teachs through drawings',
                    'not7text' => 'Chinese Profesor teachs through drawings',
                    /* ------------------- 8° noticia -------------- */
                    'not8text' => 'Young girl uses the Internet to collect 94 cards for grandma birthday',
                    /* ------------------- 9° noticia -------------- */
                    'not9text' => 'Shower allows infinite baths with only 10 liters of water',
                    /* ------------------- 10° noticia -------------- */
                    'not10alt' => 'Four Brazilian universities are among the 10 best in Latin America',
                    'not10text' => 'Four Brazilian universities are among the 10 best in Latin America',
                    /* ------------------- 11° noticia -------------- */
                    'not11alt' => '...',
                    'not11text' => 'Boss takes luxury hotel on vacation for employees in Cancun'
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
                    'tema1not' => 'Lifestyle', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Lifestyle', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Lifestyle', // tema
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
                    'tema1not' => 'Lifestyle', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Lifestyle', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Lifestyle', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not3' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '06/17/2016 as 12h05min',
                    'titulo' => 'Hairdresser makes free hair cuts in exchange for stories and transforms them in a book',
                    'resumo' => 'His story of life worth a haircut. And she can Ending the pages of a book. This all you Cruising around with Spud Fernando, 38, hairdresser and creator hacer Hall Itinerant.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'The project, which began by chance seven years ago, at the door of a club in São Paulo, wins printed record for the stories survive more than cutting the time.', //1° paragrafos,
                    'texto2' => 'Every two months, Fernando chooses a location "alive" to spread their scissors and wait for good stories. It may be a party, a square, a bar table or a poor community. "Usually it takes for the first person stumble. But as soon as I start to cut a hair comes a queue interested in offering stories in exchange for a change in the look," he explains.', //2° paragrafos,
                    'texto3' => 'Of the hundreds of stories that have passed through Razors Fernando Spud, 45 records were selected to flip book. The idea came from friends who felt the lack of a more lasting record. He now works in partnership with her friend Dani Louzada, who takes on the task of passing the stories for the role, organization and editing of the book and still seeking a publisher interested in the job.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Professional hairdresser for 12 years, Fernando has a degree in cosmetology and fashion history. He also served for a year in London, where he met clients at home. Hence arose the name Hall Itinerant, even without the social vein.', //4° paragrafos,
                    'texto5' => '"This came as a joke, but a joke that ended up being very serious and has a positive impact on the lives of those who participate." Proof of this is that for the first time, Spud decided to return to a place where the Itinerant Hall has passed: the slum Paraisópolis.', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Lifestyle', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Lifestyle', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Lifestyle', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not4' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '05/05/2016 as 09h30min',
                    'titulo' => 'From the mud to the home! ',
                    'resumo' => 'Project turns mud from Mariana’s disaster into bricks to reconstruct the city.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'A campaign created on a crowdfunding has the aim to collect R$400 thousands to fund a project to create a brick’s factory with industrial scale.
', //1° paragrafos,
                    'texto2' => 'The project who uses technologies from Universidade Federal de Minas Gerais (UFMG)  intend to return 80 direct and indirect jobs to the affected community.', //2° paragrafos,
                    'texto3' => 'The perspective is that at an year, more than 1 billion kilos of mud will be removed from environment and transformed into a quantity of bricks enough to help constructing 1200 houses.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Lifestyle', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Lifestyle', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Lifestyle', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not5' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '06/18/2016 as 09h30min',
                    'titulo' => 'Businessman teaches a homeless to read at his lunch time',
                    'resumo' => 'In addition to the meal, what you do profitably on your lunch break ? Greg Smith , who lives in Orlando , USA, takes advantage of the break from work to teach a homeless woman to read.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'After discovering the drama of life of Amy Joe , the manager decided to help her nobly.', //1° paragrafos,
                    'texto2' => 'He learned that instead of buying food with the money he received, the woman was renting books to learn to read. Since then , Gregs help on your lunch break.', //2° paragrafos,
                    'texto3' => 'So from the end of the month of April, on Tuesday, Smith read with Amy Joe borrow a library book.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Greg also helped Amy visual . He took the woman to cut her hair, buy new clothes ... was born a friendship between them.', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Lifestyle', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Lifestyle', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Lifestyle', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not6' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '06/08/2016 as 09h30min',
                    'titulo' => 'Culture of hospitality: know the most educated country around the World',
                    'resumo' => 'To be polite to the extreme we must also be disciplined and Japan have it to spare.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'The omotenashi is a Japanese lifestyle, a term that can be translated as "Japanese Hospitality"', //1° paragrafos,
                    'texto2' => 'In practice , the term combines education and an exquisite politeness , with a desire to maintain harmony and avoid conflict .', //2° paragrafos,
                    'texto3' => 'But where does all this courtesy and education? To Isao Kumakura , professor emeritus at the National Museum of Ethnology in Osaka , much of Japanese etiquette originates from the formal rituals of tea and martial arts ceremonies.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'In fact , the word omotenashi literally " spirit of service " , comes from the tea ceremony . The host these ceremonies work hard to provide the right atmosphere for entertaining guests , choosing the dishes, flowers and decor without expecting anything in return .', //4° paragrafos,
                    'texto5' => 'It would be great if every visitor took a little omotenashi home and spread this way of life on your own . " The ripple effect could change the world".', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Lifestyle', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Lifestyle', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Lifestyle', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not7' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '06/09/2016 as 17h17min',
                    'titulo' => 'Chinese Profesor teachs through drawings',
                    'resumo' => 'Instead of performing readings with students , he presents the course concepts with illustrations on the blackboard.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'Chuan -Bin Chung , born in China, is an ordinary human being . It is , however , a common teacher. Employee Department of Visual Communications at the University of Design Shu- Te , Taiwan, Chung stands out for teaching with drawings.', //1° paragrafos,
                    'texto2' => 'Instead of performing readings with students , he presents the course concepts with illustrations on the blackboard. The teacher introduces a new way to educate and hold the attention of students without the use of textbooks is required.', //2° paragrafos,
                    'texto3' => '" Yes, we have textbooks. But not read the draw . Students of this area can not only learn reading images in the books. Instead, we learn as we design something. In my classes , students must draw what Im showing on the board , "said Chung in an interview with Bored Panda.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Lifestyle', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Lifestyle', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Lifestyle', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not8' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '06/17/2016 as 18h16min',
                    'titulo' => 'Young girl uses the Internet to collect 94 cards for grandma birthday',
                    'resumo' => 'A young girl from São Paulo launched a campaign on the Internet commemorating her 94 years old grandmothers anniversary.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'Sarah Dina Arroyo Amorim do not want money, much less present value. The only goal is to collect no more than 94 birthday cards for Madame Olga Amorim.', //1° paragrafos,
                    'texto2' => '"I decided to ask my grandmother what she would like to receive a birthday present . The first answer was "no" . But after insisting a lot, she said she would be happy to receive a card . A card that was very little near it deserves, " said Sarah , in justifying the video posted on Facebook to ask for help from both known and unknown .', //2° paragrafos,
                    'texto3' => '"I thought we could all get together to accomplish this for her . They would be 94 cards to commemorate each year of her life ," said Sarah in the post that already has more than 6,600 views .', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Lady Olga , as has her granddaughter, loves receiving cards and store each of them, even those received by banks . " On Mothers Day , I wrote on a paper any : . " Grandmother, Happy Days Mother because grandmothers are mother twice". She liked it so much that you have pasted that paper side of the TV , larger viewing place for it ," recalls Sarah .', //4° paragrafos,
                    'texto5' => '" I am sure she will like each of the cards and will do everything possible and impossible to answer one by one. It will be a great and enjoyable pastime for her," says her granddaughter.', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Lifestyle', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Lifestyle', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Lifestyle', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not9' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '06/01/2016 as 09h30min',
                    'titulo' => 'Shower allows infinite baths with only 10 liters of water',
                    'resumo' => 'You could take a shower with 10 liters of water? And several baths with that water?',
                    'autor' => 'Larissa Rabello',
                    'texto1' => '"The Showerlopp allows you to take endless baths because a very effective filter thoroughly cleaned water used by recycling it in real time every time you bathe.', //1° paragrafos,
                    'texto2' => 'When down the drain, the water passes through a micro-fiber filter, sand, activated carbon and ultraviolet light sterilizes and purifies water, making it suitable for use again. When finishing filtration, water is again pumped to the shower and the process begins again.', //2° paragrafos,
                    'texto3' => 'The project, done by a group of Finnish young technicians, is in pilot phase and accepts the contribution of experts who want to improve the system.', //3° paragrafos,
                    'texto4' => 'The Showerlopp is done in the "open source" system, ie its operating scheme is public access.', //4° paragrafos,
                    'texto5' => 'Still it is possible to order an installation kit, which is on sale for 1,500 euros, almost 6 thousand.', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Lifestyle', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Lifestyle', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'Lifestyle', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not10' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '06/15/2016 as 20h45min',
                    'titulo' => 'Four Brazilian universities are among the 10 best in Latin America',
                    'resumo' => 'The four Brazilian institutions appear in the Top 10 list of best universities.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'For the British consulting higher education Quacquarelli Symonds (QS), USP takes the place of best higher education institution in Latin America for the second consecutive year. Brazil is the country with most institutions in the ranking published on 14 June: the 300 list of universities, 76 are Brazilian.', //1° paragrafos,
                    'texto2' => 'In addition to USP, the other three Brazilian appearing in the top 10 are the State University of Campinas (Unicamp), Federal University of Rio de Janeiro (UFRJ) and the University of Brasilia (UNB).', //2° paragrafos,
                    'texto3' => 'The survey, one of the most prestigious in the world, was made based on seven quality indicators: academic reputation, reputation among employers, ratio teacher / student, citations per scientific article, number of teachers with doctorates and presence of the institution on the internet.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Lifestyle', // tema
                    'not1text' => 'RICARDO',  // texto
                    //2° noticia
                    'tema2not' => 'Lifestyle', // tema
                    'not2text' => 'TADASHI',  // texto
                    //3° noticia
                    'tema3not' => 'C', // tema
                    'not3text' => 'ONO'   // texto

                ],
                'not11' => [
                    'home' => 'Home',
                    'temaName' => 'lifestyle',
                    'datapub' => '06/19/2016 as 09h30min',
                    'titulo' => 'Boss takes luxury hotel on vacation for employees in Cancun',
                    'resumo' => 'What your boss do to motivate their employees when the company reaches his billing goals?',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'In Braga, Portugal , a business security area paid holidays for employees at luxury hotels, for 3 consecutive years , where the group hits its targets .
', //1° paragrafos,
                    'texto2' => 'In 2014 , they went to the Dominican Republic last year met Cuba and this year the trip was to Cancun .', //2° paragrafos,
                    'texto3' => 'BC Security company - Bernardo Costa group - offered a week of vacation in Mexico to its 34 employees.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Sixteen accepted and the rest , who did not travel , received an extra salary of 960 euros - about 3,900 real - which is the average salary in the company.', //4° paragrafos,
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
                    'not2alt' => 'No hay tiempo para el egoísmo : una pareja decide invertir en la formación de 26 de los niños en lugar de comprar un yate',
                    'not2text' => 'No hay tiempo para el egoísmo : una pareja decide invertir en la formación de 26 de los niños en lugar de comprar un yate',
                    /* ------------------- 3° noticia -------------- */
                    'not3alt' => 'El peluquero hace cortes de cabello gratis a cambio de historias y las transforma en un libro',
                    'not3text' => 'El peluquero hace cortes de cabello gratis a cambio de historias y las transforma en un libro',
                    /* ------------------- 4° noticia -------------- */
                    'not4text' => 'Del barro a la casa! Proyecto resulta barro de desastres de Mariana en ladrillos para reconstruir la ciudad',
                    /* ------------------- 5° noticia -------------- */
                    'not5text' => 'Hombre de negocios enseña un hogar para leer en su tiempo de almuerzo',
                    /* ------------------- 6° noticia -------------- */
                    'not6text' => 'Cultura de la hospitalidad : conocer el país más culto en todo el mundo',
                    'not6alt' => '',
                    /* ------------------- 7° noticia -------------- */
                    'not7alt' => 'Profesor de chino enseña a través de dibujos',
                    'not7text' => 'Profesor de chino enseña a través de dibujos',
                    /* ------------------- 8° noticia -------------- */
                    'not8text' => 'Niña utiliza el Internet para recoger 94 tarjetas de cumpleaños de la abuela',
                    /* ------------------- 9° noticia -------------- */
                    'not9text' => 'Ducha permite infinitos baños con sólo 10 litros de agua',
                    /* ------------------- 10° noticia -------------- */
                    'not10alt' => 'Cuatro universidades brasileñas están entre las 10 mejores de América Latina',
                    'not10text' => 'Cuatro universidades brasileñas están entre las 10 mejores de América Latina',
                    /* ------------------- 11° noticia -------------- */
                    'not11alt' => 'Jefe e empleados en Cancún',
                    'not11text' => 'Jefe toma hotel de lujo de vacaciones para los empleados en Cancún'
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
                    'texto1' => 'La pareja Marty Burbank y Seon , que vive en California , son un ejemplo de cómo cuidar a otro pueblo pueden cambiar vidas . Comienza con ellos la financiación de la universidad durante 26 niños cuyas todavía están estudiando en la guardería .', //1° paragrafos,
                    'texto2' => 'La idea se ha convertido en el reflejo de la importancia que la educación tiene en sus vidas , ellos son los primeros en sus familias para adquirir un grado , por lo que la idea de patrocinar la educación de los niños aún más especial , ya que, como se dice, incluso si parece dolorosa que para sustituir a un así como un yate para una donación , esta es la mejor inversión que podían lograr.', //2° paragrafos,
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
                    'titulo' => 'El peluquero hace cortes de cabello gratis a cambio de historias y las transforma en un libro',
                    'resumo' => 'Su historia de vida es digno de un corte de pelo . Y puede terminar en las páginas de un libro. Todo esto si se cruza por ahí con Spud Fernando , 38 , peluquería y creador de Itinerante Hall.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'El proyecto, que comenzó por casualidad hace siete años, en la puerta de un club de Sao Paulo, gana impreso récord para las historias sobreviven más de cortar el tiempo.', //1° paragrafos,
                    'texto2' => 'Cada dos meses, Fernando elige un lugar "vivo" para difundir sus tijeras y esperar a que las buenas historias. Puede ser una fiesta, una plaza, una mesa de bar o de una comunidad pobre. "Por lo general se necesita para la primera persona tropiezo. Pero tan pronto como comience a cortar un pelo viene una cola interesados ​​en ofrecer historias a cambio de un cambio en la mirada", explica.
', //2° paragrafos,
                    'texto3' => 'e los cientos de historias que han pasado por las maquinillas de afeitar Fernando Spud, se seleccionaron 45 registros para voltear libro. La idea surgió de amigos que sentían la falta de un registro más duradera. En la actualidad trabaja en colaboración con su amigo Dani Louzada, que asume la tarea de transmitir las historias para el papel, la organización y la edición del libro y sigue buscando un editor interesado en el trabajo.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'el peluquero profesional durante 12 años, Fernando tiene un título en cosmetología y la historia de la moda. También se desempeñó durante un año en Londres, donde conoció a los clientes en casa. De ahí surgió el nombre de Sala Itinerante, incluso sin la vena social.', //4° paragrafos,
                    'texto5' => '"Esto fue una broma, pero una broma que terminó siendo muy grave y tiene un impacto positivo en las vidas de los que participan". Prueba de ello es que, por primera vez, Spud decide volver a un lugar donde el Itinerante Hall ha pasado: la favela Paraisópolis.', //5° paragrafos
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
                    'titulo' => 'Del barro a la casa! ',
                    'resumo' => 'Proyecto resulta barro de desastres de Mariana en ladrillos para reconstruir la ciudad.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'La campaña creada en el crowdfunding tiene como objetivo llevar a R $ 400 mil para financiar un proyecto de creación de una fábrica de ladrillos con escala industrial.', //1° paragrafos,
                    'texto2' => 'El proyecto que utiliza las tecnologías de la Universidade Federal de Minas Gerais ( UFMG ) tiene la intención de volver 80 puestos de trabajo directos e indirectos a la comunidad afectada.', //2° paragrafos,
                    'texto3' => 'La perspectiva es a un año Que, de más de 1 mil millones de kilos de barro se eliminarán de medio ambiente y transformado en una cantidad de ladrillos suficientes para ayudar a la construcción de 1.200 casas.', //3° paragrafos,
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
                    'datapub' => '18/06/2016 as 14h55min',
                    'titulo' => 'Hombre de negocios enseña un hogar para leer en su tiempo de almuerzo',
                    'resumo' => 'Además de la comida , lo que hace rentable en su almuerzo romper ? Greg Smith , que vive en Orlando , EE.UU. , se aprovecha de la pausa en el trabajo para enseñar a una mujer sin hogar a leer .',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'Después de descubrir el drama de la vida de Amy Joe , el entrenador decidió ayudarla noblemente .', //1° paragrafos,
                    'texto2' => 'Se enteró de que en vez de comprar alimentos con el dinero que recibió, la mujer estaba alquilando libros para aprender a leer . Desde entonces , la ayuda de Greg en su almuerzo .', //2° paragrafos,
                    'texto3' => 'Así que desde el final del mes de abril , el martes , Smith leyó con Amy Joe prestado un libro de la biblioteca ', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Greg también ayudó a Amy visual. Él tomó a la mujer cortarse el pelo, comprar ropa nueva ... nació una amistad entre ellos .', //4° paragrafos,
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
                    'datapub' => '08/06/2016 as 14h55min',
                    'titulo' => 'Cultura de la hospitalidad : conocer el país más culto en todo el mundo',
                    'resumo' => '',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'El omotenashi es un estilo de vida japonés , un término que puede traducirse como "hospitalidad japonesa".', //1° paragrafos,
                    'texto2' => 'En la práctica , el término combina la educación y una exquisita cortesía, con el deseo de mantener la armonía y evitar el conflicto.', //2° paragrafos,
                    'texto3' => 'Pero ¿de dónde viene todo esto cortesía y la educación ? Para Isao Kumakura , profesor emérito en el Museo Nacional de Etnología en Osaka , gran parte de la etiqueta japonesa se ​​origina a partir de los rituales formales de té y de artes marciales ceremonias.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'De hecho , la palabra omotenashi literalmente " espíritu de servicio " , proviene de la ceremonia del té . El anfitrión estas ceremonias trabajan duro para proporcionar el ambiente adecuado para entretener a los invitados , la elección de los platos, flores y decoración , sin esperar nada a cambio.', //4° paragrafos,
                    'texto5' => 'Sería muy bueno si cada visitante tomó un poco omotenashi casa y difundir este modo de vida por su cuenta. " El efecto dominó podría cambiar el mundo".', //5° paragrafos
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
                    'datapub' => '09/06/2016 as 14h55min',
                    'titulo' => 'profesor de chino enseña a través de dibujos',
                    'resumo' => 'En lugar de realizar lecturas con los estudiantes , que presenta los conceptos del curso con ilustraciones en la pizarra.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'Chuan -Bin Chung , nacido en China , es un ser humano ordinario . Es, sin embargo , un maestro común. Departamento empleado de Comunicación Visual en la Universidad de Diseño Shu- Te, Taiwán, Chung se destaca por la enseñanza con dibujos .
', //1° paragrafos,
                    'texto2' => 'En lugar de realizar lecturas con los estudiantes , que presenta los conceptos del curso con ilustraciones en la pizarra. El profesor introduce una nueva forma de educar y mantener la atención de los estudiantes sin el uso de libros de texto que se requiere .', //2° paragrafos,
                    'texto3' => '" Sí, tenemos los libros de texto . Pero no leemos el sorteo . Los estudiantes de esta área no sólo puede aprender a leer imágenes en los libros . En su lugar , aprendemos como diseñamos algo. En mis clases , los estudiantes deben dibujar lo que estoy mostrando en el bordo " , dijo Chung en una entrevista con agujereado de la panda .', //3° paragrafos,
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
                    'datapub' => '17/06/2016 as 18h16min',
                    'titulo' => 'Niña utiliza el Internet para recoger 94 tarjetas de cumpleaños de la abuela',
                    'resumo' => 'Una joven de Sao Paulo lanzó una campaña en Internet para conmemorar su 94 años de edad abuelas aniversario.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'Sarah Dina Arroyo Amorim no quieren dinero , mucho menos valor presente . El único objetivo es recoger no más de 94 tarjetas de cumpleaños de la señora Olga Amorim .', //1° paragrafos,
                    'texto2' => '"Decidí preguntarle a mi abuela lo que le gustaría recibir un regalo de cumpleaños . La primera respuesta fue" no " . Sin embargo, después de insistir mucho, ella dijo que estaría feliz de recibir una tarjeta . Una tarjeta que era muy poco cerca de él merece " , dijo Sarah , al justificar el video publicado en Facebook para pedir ayuda a conocidos y desconocidos .', //2° paragrafos,
                    'texto3' => '"Creo que todo lo que podíamos conseguir juntos para lograr esto para ella . Serían 94 tarjetas para conmemorar cada año de su vida , " dijo Sarah en el post que ya cuenta con más de 6.600 puntos de vista ', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Doña Olga , al igual que su nieta , ama tarjetas de recepción y almacenar cada uno de ellos, incluso los recibidos por los bancos . " En el Día de la Madre, que escribí en un papel cualquiera : . "Abuela , los días felices de la madre , porque la abuela madre dos veces " A ella le gustó tanto que ha pegado ese lado del papel de la televisión , más grande lugar de visión para ello " recuerda a Sarah ', //4° paragrafos,
                    'texto5' => '" Estoy seguro de que te gusta cada una de las tarjetas y hará todo lo posible y lo imposible para contestar uno por uno. Será una gran y agradable pasatiempo para ella", dice su nieta.', //5° paragrafos
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
                    'datapub' => '01/06/2016 as 14h55min',
                    'titulo' => 'Ducha permite infinitos baños con sólo 10 litros de agua',
                    'resumo' => 'Se podría tomar una ducha con 10 litros de agua? Y varios baños con el agua?',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'El Showerlopp le permite tomar baños sin fin , porque un filtro muy eficaz limpiado a fondo el agua utilizada por reciclarlo en tiempo real cada vez que se bañe .', //1° paragrafos,
                    'texto2' => 'Cuando por el desagüe , el agua pasa a través de un filtro de micro-fibra , arena , carbón activado y luz ultravioleta esteriliza y purifica el agua , por lo que es adecuado para su uso de nuevo. Al terminar la filtración, el agua se bombea de nuevo a la ducha y el proceso comienza de nuevo.', //2° paragrafos,
                    'texto3' => 'El proyecto , realizado por un grupo de técnicos jóvenes finlandeses , está en fase piloto y acepta la contribución de expertos que quieren mejorar el sistema .', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'El Showerlopp se realiza en el sistema de "código abierto" , es decir, su esquema de funcionamiento es de acceso público.', //4° paragrafos,
                    'texto5' => 'Aún así, es posible pedir un kit de instalación , que está a la venta por 1.500 euros , casi 6 mil.', //5° paragrafos
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
                    'datapub' => '15/06/2016 as 20h45min',
                    'titulo' => 'Cuatro universidades brasileñas están entre las 10 mejores de América Latina',
                    'resumo' => 'Las cuatro instituciones brasileñas aparecen en la lista de los 10 mejores universidades.',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'Para los británicos la educación superior consultar Quacquarelli Symonds ( QS ) , USP toma el lugar de la mejor institución de educación superior en América Latina por segundo año consecutivo. Brasil es el país con la mayoría de las instituciones en el ranking publicado el 14 de junio : la lista de las 300 universidades , 76 son brasileñas .', //1° paragrafos,
                    'texto2' => 'Además de la USP , los otros tres brasileña que aparece en el top 10 son la Universidad Estatal de Campinas ( Unicamp ) , Universidad Federal de Río de Janeiro ( UFRJ ) y la Universidad de Brasilia ( UNB ) .', //2° paragrafos,
                    'texto3' => 'La encuesta , uno de los más prestigiosos en el mundo , se hizo sobre la base de siete indicadores de calidad : la reputación académica , reputación entre los empleadores , la relación profesor / alumno , citas por artículo científico , el número de profesores con doctorados y presencia de la institución en La Internet.', //3° paragrafos,
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
                    'titulo' => 'Jefe toma hotel de lujo de vacaciones para los empleados en Cancún',
                    'resumo' => 'Lo que su jefe hacer para motivar a sus empleados cuando la empresa alcanza sus objetivos de facturación ?',
                    'autor' => 'Larissa Rabello',
                    'texto1' => 'En Braga , Portugal , una zona de seguridad empresarial vacaciones pagadas para los empleados en hoteles de lujo , durante 3 años consecutivos , en los que el grupo alcanza su objetivo.
', //1° paragrafos,
                    'texto2' => 'En 2014 , fueron a la República Dominicana el año pasado reunió Cuba y este año el viaje fue a Cancún.', //2° paragrafos,
                    'texto3' => 'La empresa de seguridad BC - Bernardo grupo Costa - ofreció una semana de vacaciones en México a sus 34 empleados .', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Dieciséis aceptada y el resto , que no viajó , recibió un salario extra de 960 euros - unos 3.900 reales - que es el salario promedio en la empresa .', //4° paragrafos,
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
