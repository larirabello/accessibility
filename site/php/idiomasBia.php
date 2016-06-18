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
            'entretenimento' => [
                'index' => [
                    'home' => 'index',
                    'temaName' => 'Entretenimento',
                    /* ------------------- 1° noticia -------------- */
                    'not1alt' => 'Raposa vermelha de boca aberta',
                    'not1text' => 'Heroínas e heróis da DC vão estrelar livros voltados para o público jovem',
                    /* ------------------- 2° noticia -------------- */
                    'not2alt' => 'Raposa vermelha de boca aberta aaaaaaaaaaaaa',
                    'not2text' => 'Música para surdo',
                    /* ------------------- 3° noticia -------------- */
                    'not3alt' => 'Raposa vermelha de boca aberta aaaaaaaaaaaaa',
                    'not3text' => 'Oscar dos quadrinhos bate recorde de indicações a mulheres',
                    /* ------------------- 4° noticia -------------- */
                    'not4text' => 'The Sims 4 agora conta com opções personalizadas de sexo',
                    /* ------------------- 5° noticia -------------- */
                    'not5text' => 'Teclado analógico promete oferecer mais precisão a seus games',
                    /* ------------------- 6° noticia -------------- */
                    'not6text' => 'Quatro filmes feministas que toda mulher precisa assistir',
                    'not6alt' => 'poasj posaj´p posd oiasrp k',
                    /* ------------------- 7° noticia -------------- */
                    'not7alt' => 'POKAS POASPO NAOIS POIDFJ GNAT ',
                    'not7text' => 'Edição especial de ‘Harry Potter e a Pedra Filosofal’ será lançada',
                    /* ------------------- 8° noticia -------------- */
                    'not8text' => 'Cinco filmes que vão te deixar super otimista',
                    /* ------------------- 9° noticia -------------- */
                    'not9text' => '3 motivos para ser otimista',
                    /* ------------------- 10° noticia -------------- */
                    'not10alt' => 'OPA´PS LK ISAIUD OTHJA',
                    'not10text' => 'Inês Brasil aparece em vídeo Orange is the New Black e quebra a internet',
                    /* ------------------- 11° noticia -------------- */
                    'not11alt' => 'ONZE',
                    'not11text' => 'Netflix tem vídeo secreto, saiba como acessá-lo'
                ],
    
    'not1' => [
                    'home' => '../noticia1.php',
                    'temaName' => 'Entretenimento',
                    'datapub' => '12/05/2015 as 09h30min',
                    'titulo' => 'Heroínas e heróis da DC vão estrelar livros voltados para o público jovem',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
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
                    'autor' => 'Beatriz Guedes',
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
        'not3' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Oscar dos quadrinhos bate recorde de indicações a mulheres',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Se você ainda pensa que quadrinhos são coisa de menino, pense de novo. Nos últimos anos, as mulheres têm conquistado cada vez espaço nesse universo, seja como leitoras, seja como produtoras. Toda essa efervescência não passou batida no Prêmio Eisner, o mais importante do ramo: o número de indicações a mulheres mais que dobrou desde o ano passado, batendo o recorde do próprio prêmio. Além disso, em sete das 30 categorias, há muito mais indicadas do que indicados - como em melhor quadrinho para adolescentes e melhor quadrinho digital. Os vencedores serão divulgados no dia 22 de julho, na Comic-Con International, em San Diego.', //1° paragrafos,
                    'texto2' => 'No total, são 49 mulheres, concorrendo em quase todas as categorias do prêmio - exceto em melhor quadrinho jornalístico. Essas artistas receberam 61 nomeações (até o evento do ano passado, esse número nunca havia passado de 30). Muitas das histórias selecionadas, como a nova Miss Marvel, de Gwendolyn Willow Wilson, e a Bitch Planet, de Kelly Sue DeConnick, têm mulheres como figuras centrais, e estão entre as mais cotadas para os maiores prêmios. ', //2° paragrafos,
                    'texto3' => 'Não é exagero dizer que o meio dos quadrinhos é dominado por homens: no ano passado, o Festival de Angoulême Internacional de Quadrinhos (França), que também é um dos prêmios mais importantes dessa área, não tinha nenhuma mulher entre os nomeados - sendo que, em suas 42 edições, apenas uma mulher venceu o maior prêmio (a francesa Florence Cestac, em 2000). A ausência de mulheres levou, no começo deste ano, a um boicote coletivo do evento. Artistas famosos, como Milo Manara, deixaram de participar da premiação.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Aqui no Brasil, as coisas não mudam muito: entre os indicados ao troféu HQ Mix do ano passado, só 13% eram criações exclusivamente femininas - enquanto 82% eram trabalhos feitos por homens e 5% eram colaborações entre os dois sexos. ', //4° paragrafos,
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
        'not4' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'The Sims 4 agora conta com opções personalizadas de sexo',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Jogadores de The Sims 4 terão cada vez menos limites para criar o seu Sims dentro do game lançado em 2014 pela Electronic Arts. O estúdio informou, nessa quinta-feira (2), que a famosa série de simulação conta com opções personalizadas de sexo para os personagens a partir da próxima atualização.
"Pela primeira vez, você poderá personalizar seu Sim sem os limites de gênero previamente estabelecidos", explicou a Electronic Sports por meio de comunicado para a imprensa. "Isso significa que você pode criar Sims com qualquer tipo de físico, estilo de andar e tom de voz que quiser, independente do sexo”.
"Também tornamos as roupas, penteados, joias e outras opções visuais disponíveis para todos os Sims. Mais de 700 itens de conteúdo que antes estavam disponíveis somente para Sims homens ou mulheres agora estão disponíveis para todos os Sims, independente da seleção inicial de sexo. Isso inclui conteúdo do jogo base The Sims 4 e dos pacotes lançados anteriormente."
A grande preocupação, segundo a empresa, é permitir que os jogadores não se sintam limitados e possam ser criativos e se expressar por meio dos jogos da empresa. As novidades já estão valendo a partir de hoje em The Sims 4, lançado exclusivamente para PC no dia 2 de setembro de 2014.', //1° paragrafos,
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
            'not5' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Teclado analógico promete oferecer mais precisão a seus games',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Mesmo que você seja daqueles que não larga a combinação mouse e teclado na hora de jogador, é preciso admitir que ela é inferior aos gamepads em ao menos um quesito: a precisão de movimentos. Mesmo um produto mecânico falha em emular as sutilezas que conseguem determinar se um personagem em tela está se esgueirando ou correndo rapidamente.
Pensando nisso, a Wooting desenvolveu o One, um novo conceito que mistura as qualidades de um teclado mecânico com botões analógicos. Segundo a fabricante, que procura financiamento para tornar a ideia uma realidade, o produto responde a diferentes níveis de pressão para determinar a maneira como você interage com um game.
Demonstrado durante a Computex Taipei, o dispositivo vai ser disponibilizado em duas versões: uma com switch vermelho, mais sensível, e outra com mecanismos azuis com pontos de atuação ajustáveis. Para quem simplesmente deseja um produto com características clássicas, a fabricante promete um mecanismo capaz de desligar seus recursos analógicos.', //1° paragrafos,
                    'texto2' => 'O Wooting One promete funcionar sem grandes dificuldades com a maioria dos games do mercado, que vão detectá-lo como um controle convencional. No entanto, a fabricante alerta que jogos que não fazem a transição automática entre gamepads e teclados podem apresentar problemas, assim como aqueles que não permitem que os dois meios sejam usados de forma simultânea.
A companhia já ultrapassou a marca de 30 mil € (R$ 120 mil) para tornar o produto realidade e é preciso doar no mínimo 100 € (R$ 400) para garantir uma unidade inicial. Caso você queira colaborar com a campanha de arrecadação (ou adquirir uma cópia com preço reduzido), fique atento, pois a etapa de arrecadação termina no dia 22 deste mês.', //2° paragrafos,
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
            'not6' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Quatro filmes feministas que toda mulher precisa assistir',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => '1. Bonequinha de Luxo (Blake Edwards, 1961)
A vida da prostituta de luxo Holly Golightly, interpretada com uma personalidade incomum por Audrey Hepburn, é o mote do filme. Com seu charme e seus figurinos deslumbrantes, Holly não se abre para o amor, tira o que quer dos homens e vive muito bem solitária, na companhia do Gato. O projeto de escritor Paul, seu vizinho, cai de amores, mas ela dá um trabalho danado ao cara. Linda e safa, ela se sente segura e completamente feliz dentro da Tiffany’s, bem pertinho dos diamantes. Ao final, o amor acaba redimindo Holly de sua personalidade excêntrica, mas a mensagem que atravessa gerações é de uma mulher que sabe jogar com os homens e tirar deles o que a interessa.', //1° paragrafos,
                    'texto2' => '2. As Horas (Stephen Daldry, 2002)
Em três épocas diferentes, três mulheres se encontram ligadas de alguma forma ao livro Ms Dalloway, uma das obras primas da escritora inglesa Virginia Woolf. Uma delas, a própria Woolf, interpretada por Nicole Kidman, se vê enclausurada por uma depressão e pela incompreensão de todos à sua volta. Por meio da literatura, ela expressa a inconformidade com a sociedade que a cerca. As outras duas mulheres, interpretadas por Julianne Moore e Meryl Streep, se relacionam com o livro de formas diferentes, mas sempre iluminando a história de Clarissa Dalloway, a protagonista da obra, com suas próprias vivências e anseios enquanto mulheres.', //2° paragrafos,
                    'texto3' => '3. O sorriso de Monalisa (Mike Newell, 2003)
Na década de 1950, uma professora de arte chega à tradicional escola de Wellesley, onde as mulheres mais inteligentes dos Estados Unidos são educadas para se tornarem esposas e mães exemplares, sem jamais questionarem a autoridade masculina e o próprio papel neste arranjo social. A professora Katherine Watson, vivida por Julia Roberts, planta sementes feministas durante as aulas, discutindo o papel da mulher por meio das obras de arte que aborda. É claro que a insubordinação custa caro à Katherine e às alunas que a apoiam.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '4. Frida (Julie Taymor, 2002)
Conta a história da pintora mexicana Frida Kahlo desde a adolescência até sua morte. Vivida por Salma Hayek em interpretação elogiada, Frida é ícone feminista de seu tempo. Viveu um casamento aberto e turbulento com o também artista plástico Diego Rivera, interpretado no filme por Alfred Molina. Também teve um caso com o revolucionário russo Leon Trotsky, que refugiou-se no México no final da década de 1930. O filme retrata a personalidade forte de um dos maiores nomes da pintura surrealista mundial, que tratava de forma aberta sua bissexualidade, mas que não suportou a infidelidade do marido. A força de Frida também fica evidente na maneira como retrata a própria doença e a visão que tinha da feminilidade e de si mesma.', //4° paragrafos,
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
        'not7' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Edição especial de ‘Harry Potter e a Pedra Filosofal’ será lançada',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Chegou a hora de tirar as varinhas do armário, resgatar a sua Firebolt e a capa da invisibilidade. Isso porque, neste domingo (19), os ‘potterheads’ (fãs de Harry Potter), vão poder sentir novamente o gostinho de um lançamento da saga. Trata-se da edição ilustrada do primeiro título da série, ‘Harry Potter e a Pedra Filosofal’.', //1° paragrafos,
                    'texto2' => 'O evento é nacional e vem sendo organizado pela editora dos livros no Brasil, a Rocco, em parceria com a Saraiva MegaStore. Em Manaus, o fã- clube Potterday será o responsável pela mediação do evento e adianta que a programação será voltada para os fãs de todas as idades.', //2° paragrafos,
                    'texto3' => '“Vamos falar sobre o livro e apresentar essa versão ilustrada, que está linda. Além disso, temos algumas brincadeiras programadas, alguns sorteios e um concurso de cosplay”, adianta Bárbara Pinheiro, presidente do Potterday. O evento será gratuito e aberto ao público, a partir das 15h, na Saraiva MegaStore do Manauara Shopping.', //3° paragrafos,
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
        'not8' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Cinco filmes que vão te deixar super otimista',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => '1. Um bom ano
Um filme leve e positivo. O personagem principal é um economista de sucesso que herda um vinhedo em Provença, na França. Quando ele chega ao local, descobre que há outros candidatos. A sequência de descobrimentos faz com que este homem repense o que realmente importa na sua vida.
', //1° paragrafos,
                    'texto2' => '2. O Céu de Outubro
Em Outubro de 1957 a União Soviética lançou o primeiro satélite da história, chamado "Sputnik". Este evento impressionou tanto o menino Homer, que ele decidiu construir seu próprio foguete. Os amigos e a professora o ajudam a realizar este projeto, mas o pai de Homer, incapaz de compreender o entusiasmo do filho, não o apoia. Mesmo sem este apoio, o jovem fará de tudo para que seu sonho se torne realidade.', //2° paragrafos,
                    'texto3' => '3. Quem quer ser um milionário?
Jamal é um candidato no concurso da versão indiana de ’Quem quer ser um milionário?’. Prestes a responder a última pergunta, a polícia suspeita que, pela origem humilde, ele trapaceou. É aí que começa um interrogatório que revela momentos difíceis, dramas e alegrias da vida do rapaz e que mostraram a ele tudo que ele sabe. Um filme inspirador que deixa uma sensação incrível.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '4. Escritores da Liberdade
Baseada em fatos reais, esta história conta a difícil rotina de uma professora de inglês numa escola em Long Beach, na Califórnia. A maioria dos alunos não fala inglês em casa e, além disso, a cidade tem uma alta criminalidade.', //4° paragrafos,
                    'texto5' => '5. Jerry Maguire — A Grande Virada
Ao ser demitido por criticar o chefe, o agente esportivo Jerry Maguire decide fundar sua própria empresa. Apenas duas pessoas acreditam nele: Dorothy, apaixonada por ele, e Rod Tidwell, um atleta talentoso, difícil e insolente. Tudo seria ótimo, não fossem as intrigas dos ex-colegas de Jerry.', //5° paragrafos
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
        'not9' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => '3 motivos para ser otimista',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => '1. A violência está diminuindo

Steven Pinker, psicólogo da Universidade Harvard (EUA), autor de Como o Cérebro Funciona.

"Em Paris, no século 16, uma forma popular de entretenimento era a ‘queima de gatos’, na qual um gato vivo era amarrado e içado num palco e devagar baixado em uma fogueira. De acordo com o historiador Norman Davies, ‘os espectadores, incluindo reis e rainhas, se contorciam de dar gargalhadas enquanto os animais, berrando de dor, eram queimados.’ Por mais horríveis que os fatos de hoje em dia sejam, tal sadismo seria impensável na maior parte do mundo. E esse é só um exemplo da mais importante e subestimada tendência na história da nossa espécie: o declínio da violência. Crueldade como entretenimento popular, sacrifício humano para satisfazer a superstição, escravidão como forma de trabalho barato, tortura e mutilação como formas comuns de punição e homicídio como a mais comum forma de resolução de conflitos – todas essas eram características comuns da vida na maior parte da história humana. Mas hoje elas são raras no Ocidente, menos comuns em outros lugares do que costumavam ser e largamente condenadas quando ocorrem. Meu otimismo está na esperança de que o declínio da violência nos últimos séculos é um fenômeno real e continuará a acontecer."', //1° paragrafos,
                    'texto2' => '2. O amor vai prevalecer

Helen Fisher, professora de Antropologia da universidade Rutgers (EUA), autora de Por que amamos e a natureza química do amor romântico.

"‘O amor vence, sempre vence’, tem sido dito. Mas, ao longo da maior parte do nosso passado, o amor perdeu – ao menos nas classes mais abastadas. Desde que as sociedades começaram a se fixar, 10 mil anos atrás, adquirindo bens imóveis, era preciso cimentar laços e posições sociais. Você poderia se apaixonar por quem fosse, mas só se casaria com o indivíduo certo, com as conexões certas e os valores sociais, políticos e econômicos de acordo. Foram séculos de casamentos arranjados, que só foram mudar recentemente. Mulheres e homens têm agora tempo, oportunidade e saúde para achar o par perfeito. É o que os sociólogos chamam da forma marital do século 21: os casamentos simétricos ou entre companheiros que se amam passionalmente. Dessa maneira a humanidade está ganhando de volta a tradição que é altamente compatível com o antigo espírito humano."
', //2° paragrafos,
                    'texto3' => '3. O ambiente pode ser salvo

Gregory Benford, físico da Universidade da Califórnia em Irvine (EUA).

"Ninguém acredita que nós vamos diminuir a velocidade das mudanças climáticas em meio século a partir de agora. Pelo menos, nenhum economista que olhou o acelerado crescimento das nações em desenvolvimento e a crescente demanda por energia.

Devemos nos desesperar? De forma alguma.

Mas, em vez de tentar apenas um esforço coletivo para diminuir a emissão carbônica dos humanos, meus colaboradores e eu propomos uma alternativa de relativamente baixa tecnologia e baixo custo: experimentos para tentar mudar o clima de propósito, em vez de esperar que isso ocorra por acaso. Talvez a idéia mais simples seja a suspensão de microscópicas e inofensivas partículas a 25 mil metros de altitude, na estratosfera. Um primeiro teste poderia ser sobre o Ártico, já que o aquecimento lá é considerável. Poderíamos usar o suficiente dessas partículas para criar um efeito de escudo considerável. Elas refletiriam os raios ultravioleta de volta ao espaço, reduzindo o aquecimento e impedindo os danos desses raios UV a plantas e animais. Como poucas pes­soas moram naquela região, qualquer efeito colateral seria mínimo. Estou otimista de que um experimento bem-sucedido mudaria o debate sobre aquecimento global para melhor."', //3° paragrafos,
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
        'not10' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Inês Brasil aparece em vídeo Orange is the New Black e quebra a internet',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Inês Brasil, uma das personalidades brasileiras mais carismáticas dos últimos tempos, apareceu no vídeo de divulgação da série “Orange is the New Black”,  produzida pela Netflix. ', //1° paragrafos,
                    'texto2' => 'A quarta temporada da série americana estreia nesta sexta-feira, após um ano de espera dos fãs. Definida como “uma fábrica de memes ambulante” por usuários das redes sociais, a famosa da internet aparece confinada na prisão de Litchfield, enquanto contracena com a personagem Piper Chapman (Taylor Schilling). ', //2° paragrafos,
                    'texto3' => 'As duas têm diálogo surreal através da parede, enquanto Inês aparece com o tradicional uniforme laranja das penitenciárias americanas. Como não poderia ser diferente, a webcelebridade aparece falando suas frases que a deixaram famosa na web.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Em um momento do anúncio da nova temporada, Inês reclama para Piper que o tempo entre elas é muito longo. “Tu sabe (sic) que todo mundo vê tudo num final de semana só. Não dá para soltar 50 temporadas, tudo assim de uma vez?”, dispara.', //4° paragrafos,
                    'texto5' => 'Não é a primeira vez que a Netflix coloca um rosto brasileiro para divulgar a série, no ano passado a funkeira Valesca Popozuda apareceu cantando “Minha Poussey é o poder”. Por sinal, Inês fez menção à cantora no vídeo.', //5° paragrafos
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
        'not11' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Netflix tem vídeo secreto, saiba como acessá-lo',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Há "escondido" no catálogo internacional da Netflix (incluindo o do Brasil) um vídeo que não aparece em nenhuma das categorias fixas do serviço de streaming. Para acessá-lo, o usuário precisa buscar pela palavra-chave correta. Mas o conteúdo não é do tipo ofensivo. ', //1° paragrafos,
                    'texto2' => 'Trata-se de "Lareira Crepitante", ou "Fireplace for Your Home" (Fogueira para a Sua Casa), do diretor George Ford. O vídeo consiste em mais de 60 minutos de uma imagem fixa de uma pilha de madeira queimando sob a chaminé de uma casa. E é só isso. ', //2° paragrafos,
                    'texto3' => 'Há ainda uma versão em resolução 4K e outra com música clássica como trilha sonora. Para os usuários mais antigos do serviço, o vídeo é quase uma piada interna. Tanto que a Netflix chegou a produzir um trailer e até um documentário sobre os bastidores da produção.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'O diretor George Ford também tem outros filmes do mesmo gênero, mas que não estão disponíveis na Netflix. São eles "Aquário para sua casa", "Correira para você passar na televisão" e "Inverno do país das maravilhas" - todos com imagens fixas ou quase imutáveis para você usar como um descanso de tela da TV. Para acessar o vídeo na Netflix, basta procurar por "Lareira", "Fireplace" ou pelo nome do diretor.', //4° paragrafos,
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
  
         'en' => [
            'index' => [
                'titulo' => 'OtimisAAAt',
                'irparaconteudo' => 'Go to content',
                'irparamenu' => 'Go to the menu',
                'acessibilidade' => 'Acessibility',
                'mapadosite' => 'Sitemap'
            ],
            'entretenimento' => [
                'index' => [
                    'home' => 'index',
                    'temaName' => 'Entertainment',
                    /* ------------------- 1° noticia -------------- */
                    'not1alt' => 'Raposa vermelha de boca aberta',
                    'not1text' => 'Heroines and heroes of DC will star oriented books for young people',
                    /* ------------------- 2° noticia -------------- */
                    'not2alt' => 'Raposa vermelha de boca aberta aaaaaaaaaaaaa',
                    'not2text' => 'Music for the deaf',
                    /* ------------------- 3° noticia -------------- */
                    'not3alt' => 'Raposa vermelha de boca aberta aaaaaaaaaaaaa',
                    'not3text' => 'Oscar comics hits record information to women',
                    /* ------------------- 4° noticia -------------- */
                    'not4text' => 'The Sims 4 now has custom sex options',
                    /* ------------------- 5° noticia -------------- */
                    'not5text' => 'Analog keyboard promises to offer more precision to their games',
                    /* ------------------- 6° noticia -------------- */
                    'not6text' => 'Four feminist films that every woman needs to watch',
                    'not6alt' => 'poasj posaj´p posd oiasrp k',
                    /* ------------------- 7° noticia -------------- */
                    'not7alt' => 'POKAS POASPO NAOIS POIDFJ GNAT ',
                    'not7text' => 'Special edition of Harry Potter and the Sorcerers Stone will be released',
                    /* ------------------- 8° noticia -------------- */
                    'not8text' => 'Five films will leave you more optimistic',
                    /* ------------------- 9° noticia -------------- */
                    'not9text' => '3 reasons to be optimistic',
                    /* ------------------- 10° noticia -------------- */
                    'not10alt' => 'OPA´PS LK ISAIUD OTHJA',
                    'not10text' => 'Inês Brasil appears in video Orange is the New Black and break the internet',
                    /* ------------------- 11° noticia -------------- */
                    'not11alt' => 'ONZE',
                    'not11text' => 'Netflix has secret video, learn how to access it'
                ],
                
        'not1' => [
                    'home' => 'Home',
                    'temaName' => 'Entertainment',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Heroines and heroes of DC will star oriented books for young people',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'The army of superheroes of DC Comics is about to conquer more territory. No (more) blockbusters or TV series that explore the universe expanded comics - this time, the company has partnered with publisher Random House to take some of his characters in new literary adventures. Wonder Woman, Batman, Superman and Catwoman will star in a series of books aimed at the young-adult audience.', //1° paragrafos,
                    'texto2' => ' Who will sign the new adventures of the heroines and heroes is a team of authors known for works aimed at the target audience. The first book to reach the gringo shelves in August 2017, will be Wonder Woman: The Story of the Amazon will be written by Leigh Bardugo, author of the trilogy Grisha, made by Sun and Storm books (2012), Shadow and Bone (2013) and Light and Shadow (2014). Then it will be the turn of MORCEGÃO - Batman adventure will be signed by Marie Lu, China rooted in the US and author of trilogies Legend (2011-2013) and Youth Elites (2014 -).', //2° paragrafos,
                    'texto3' => 'Who will face the Man of Steel is Matt de la Peña, award-winning author responsible for works such as The Curse of the Ancients (2013), The Living (2013) and Last Stop on Market Street (2015), still without Brazilian editions. Finally, Sarah J. Maas, author of the Throne of Glass series (2012-), will create the new adventure of the ambiguous anti-hero Selina Kyle (Catwoman a.k.a.). The books still have no release date in Brazil.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'This is not the first literary foray DC. In March this year, was released Wonder Woman at Super Hero High, signed by the author Lisa Yee. This is the first book of childrens series Super Hero High, accompanying super heroines in training dealing both with the development of his powers as the challenges of school life. In addition to Wonder Woman, Supergirl, Katana, Harley Quinn, Batgirl and was Poisonous are some other young characters who are back to school.', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'A', // tema
                    'not1text' => '',  // texto
                    //2° noticia
                    'tema2not' => 'B', // tema
                    'not2text' => '',  // texto
                    //3° noticia
                    'tema3not' => 'C', // tema
                    'not3text' => ''   // texto

                ]
                
                'not2' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entertainment',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Music for the deaf',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
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
                'not3' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entertainment',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Oscar comics hits record information to women',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'If you still think that comics are boy thing, I think again. In recent years, women have been gaining space in this universe, either as readers, whether as producers. All this effervescence has not hit the Eisner Award, the most important in the industry: the number of alerts to women has more than doubled since last year, beating the record of the prize itself. Moreover, in seven of the 30 categories, there is much more suitable than indicated - as best comic for teens and best digital comic. The winners will be announced on July 22 at Comic-Con International in San Diego.
', //1° paragrafos,
                    'texto2' => 'In total, 49 women, competing in almost all categories of the prize - except best journalistic comic. These artists received 61 nominations (to the event last year, that number had never been 30). Many of the stories selected as the new Miss Marvel, Gwendolyn Willow Wilson, and Bitch Planet of Kelly Sue Deconnick have women as central figures, and are among the highest rated for the biggest prizes.', //2° paragrafos,
                    'texto3' => 'It is no exaggeration to say that the medium of comics is dominated by men: last year, the International Angoulême Festival of Comics (France), which is also one of the most important awards in this area, had no woman among the nominees - with in its 42 editions, only one woman won the highest award (the French Cestac Florence in 2000). The absence of women took earlier this year, a collective boycott of the event. Famous artists like Milo Manara, failed to attend the awards.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Here in Brazil, things do not change much: among the nominees for HQ Mix Trophy last year, only 13% were exclusively female creations - while 82% were work done by men and 5% were collaborations between the two sexes.', //4° paragrafos,
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
                'not4' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entertainment',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'The Sims 4 now has custom sex options',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Players of The Sims 4 will have fewer boundaries to create your Sims into the game released in 2014 by Electronic Arts. The studio reported, on Thursday (2), the famous series of simulation has custom sex options for characters from the next update.
"For the first time, you can customize your Sim without gender limits previously established," explained the Electronic Sports in a statement to the press. "This means that you can create Sims with any kind of physical, walking style and tone you want, regardless of sex."
"We also made the clothes, hairstyles, jewelry and other visual options available for all Sims. More than 700 items of content that were previously available only for Sims men or women are now available for all Sims, independent of the initial selection of sex. this includes base game content the Sims 4 and packages previously released. "
The major concern, according to the company, is to allow the players do not feel limited and can be creative and express themselves through the companys games. The new features are already worth starting today in The Sims 4, released exclusively for PC on September 2, 2014.
', //1° paragrafos,
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
                'not5' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entertainment',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Analog keyboard promises to offer more precision to their games',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Even if you are of those who will not let the mouse and keyboard combination in player time, one must admit that it is lower than the gamepads on at least one criterion: the precision of movements. Even a mechanical product fails to emulate the subtleties that can determine whether a character on screen is slipping or running quickly.
Thinking about it, Wooting developed the One, a new concept that combines the qualities of a mechanical keyboard with analog buttons. According to the manufacturer, which seeks funding to make the idea a reality, the product responds to different pressure levels to determine how you interact with a game.
Demonstrated at Computex Taipei, the device will be available in two versions: one with red switch, more sensitive, and the other with blue mechanisms points adjustable performance. For those who simply want a product with classic features, the manufacturer promises a mechanism to turn off their analog features.', //1° paragrafos,
                    'texto2' => 'The Wooting One promises to work without major difficulties with most games on the market that will detect it as a conventional control. However, the manufacturer warns that games that do automatic transition between gamepads and keyboards can present problems, as well as those that do not allow the two media are used simultaneously.
The company has surpassed the mark of 30 000 € (US $ 120,000) to make the product reality and we must donate at least € 100 (R $ 400) to make an initial unit. If you want to contribute to the fundraising campaign (or purchase a copy with reduced price), be aware that the collection phase ends on 22 this month.', //2° paragrafos,
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
                'not6' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entertainment',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Four feminist films that every woman needs to watch',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => '1. Breakfast at Tiffanys (Blake Edwards, 1961)
The life of luxury prostitute Holly Golightly, played with an unusual personality Audrey Hepburn, it is the theme of the film. With its charm and its dazzling costumes, Holly does not open for love, takes whatever men and lives well alone, in the company Cat. The writer Paul project, his neighbor, falls in love, but it takes a lot of work to face. Linda and safa, she feels safe and completely happy inside Tiffanys, very close diamonds. At the end, love fails Holly redeeming his eccentric personality, but the message that crosses generations is a woman who knows how to play with the men and take them what matters.', //1° paragrafos,
                    'texto2' => '2. The Hours (Stephen Daldry, 2002)
In three different times, three women are linked in some way to the book Ms Dalloway, one of the masterpieces of English writer Virginia Woolf. One of them, the very Woolf, played by Nicole Kidman, is seen enclosed by a depression and the incomprehension of those around her. Through literature, it expresses disagreement with the society that surrounds it. The other two women, played by Julianne Moore and Meryl Streep, relate to the book in different ways, but always illuminating the story of Clarissa Dalloway, the protagonist of the work, with their own experiences and concerns as women.', //2° paragrafos,
                    'texto3' => '3. Smile of Monalisa (Mike Newell, 2003)
In the 1950s, an art teacher comes to the traditional school of Wellesley, where the most intelligent women of the United States are educated to become wives and mothers copies, never questioning male authority and their own role in this social arrangement. The teacher Katherine Watson, played by Julia Roberts, feminist plant seeds during class, discussing the role of women through the works of art that addresses. Of course insubordination expensive to Katherine and students who support it.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '4. Frida (Julie Taymor, 2002)
Tells the story of Mexican painter Frida Kahlo from adolescence to his death. Played by Salma Hayek praised interpretation, Frida is a feminist icon of its time. He lived an open and turbulent marriage with fellow artist Diego Rivera, played in the film by Alfred Molina. Also had an affair with Russian revolutionary Leon Trotsky, who took refuge in Mexico in the late 1930. The film portrays the strong personality of one of the biggest names in world surrealist painting, which was openly his bisexuality, but He did not support her husbands infidelity. The Frida strength is also evident in the way portrays the disease itself and the vision he had of femininity and of itself.', //4° paragrafos,
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
                'not7' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entertainment',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Special edition of Harry Potter and the Sorcerers Stone will be released',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Its time to take the cabinet wands, rescue his Firebolt and the cloak of invisibility. This is because, on Sunday (19), the potterheads (Harry Potter fans) will be able to again get a taste of a release of the saga. This is the illustrated edition of the first title in the series, Harry Potter and the Philosophers Stone.', //1° paragrafos,
                    'texto2' => 'The event is national and has been organized by the publisher of books in Brazil, Rocco, in partnership with Saraiva Super Store. In Manaus, the fa- Potterday club will be responsible for mediation of the event and said that the program will be geared toward fans of all ages.', //2° paragrafos,
                    'texto3' => 'Lets talk about the book and present this illustrated version, which is beautiful. Also, we have some scheduled games, some raffles and a cosplay contest ", said Barbara Pinheiro, president of Potterday. The event is free and open to the public from 15h, the Hail Super Store Manauara Shopping.', //3° paragrafos,
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
                'not8' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entertainment',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Five films will leave you more optimistic',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => '1. A good year
A light and positive film. The main character is a successful economist who inherits a vineyard in Provence, France. When he arrives at the site, he discovers that there are other candidates. The discovery sequence makes this man rethinks what really matters in your life.', //1° paragrafos,
                    'texto2' => '2. The October Sky
In October 1957 the Soviet Union launched the first satellite of the story, called "Sputnik". This event so impressed the boy Homer, he decided to build his own rocket. Friends and teacher help carry out this project, but the father Homer, unable to understand the enthusiasm of the child, not the supports. Even without this support, the young will do everything to make your dream come true.', //2° paragrafos,
                    'texto3' => '3. Who wants to be a millionaire?
Jamal is a candidate in the contest of the Indian version of Who Wants to be a Millionaire?. About to answer the last question, the police suspect that the humble origin, he cheated. Therein begins an interrogation that reveals difficult times, dramas and joys of life of the boy and showed him all he knows. An inspiring film that leaves an incredible feeling.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '4. Freedom Writers
Based on real events, the story of the difficult routine of an English teacher at a school in Long Beach, California. Most students do not speak English at home and, in addition, the city has a high crime.', //4° paragrafos,
                    'texto5' => '5. Jerry Maguire - The Great Turning
When fired for criticizing the boss, the sports agent Jerry Maguire decides to found his own company. Only two people believe in it: Dorothy, in love with him, and Rod Tidwell, a talented athlete, hard and insolent. Everything would be fine if it were not the intrigues of the former colleagues of Jerry.', //5° paragrafos
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
                'not9' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entertainment',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => '3 reasons to be optimistic',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => '1. Violence is decreasing

Steven Pinker, a psychologist at Harvard University (USA), author of How the Brain Works.

"In Paris, in the 16th century, a popular form of entertainment was the cats burning, in which a live cat was tied and hoisted on a stage and slowly lowered into a fire. According to historian Norman Davies, viewers including kings and queens, writhed giving laughter as the animals, howling in pain, was burned. "as horrible as the facts of today are such sadism would be unthinkable in most of the world. and this is just a example of the most important and underappreciated trend in the history of our species:. the decline of violence cruelty as popular entertainment, human sacrifice to satisfy superstition, slavery as a form of cheap labor, torture and mutilation as common forms of punishment and murder as the most common form of conflict resolution. - all these were common features of life for most of human history but today they are rare in the West, less common elsewhere than they used to be and widely condemned when they occur. My optimism is the hope that the decline in violence in recent centuries is a real phenomenon and will continue to happen. "', //1° paragrafos,
                    'texto2' => '2. Love will prevail

Helen Fisher, anthropology professor at Rutgers University (USA), author of Why We Love and the chemical nature of romantic love.

" Love conquers always wins, has been told But throughout most of our past love lost -.. At least in the upper classes Since the companies began to settle, 10,000 years ago, acquiring real estate, it was necessary to cement ties and social positions. You could fall in love with who it was, but only marry the right person, with the right connections and the social, political and economic agreement. There were centuries of arranged marriages, which were only change recently Women and men now have the time, opportunity and health to find the perfect pair is what sociologists call the marital shape the 21st century.. symmetrical weddings or between partners who love each other passionately Thus humanity. it is winning back the tradition that is highly compatible with the ancient human spirit. "', //2° paragrafos,
                    'texto3' => '3. The environment can be saved

Gregory Benford, a physicist at the University of California at Irvine (USA).

"No one believes that we will slow down the speed of climate change in half a century from now. At least, no economist who looked at the rapid growth of developing nations and the growing demand for energy.

Should we despair? No way.

But instead of trying just a collective effort to reduce carbonic issue of human, my collaborators and I propose an alternative of relatively low technology and low cost: experiments to try to change the purpose of climate, instead of waiting for this to happen by chance. Perhaps the simplest idea is the suspension of microscopic and harmless particles 25 thousand meters of altitude in the stratosphere. A first test could be on the Arctic, since there is considerable heat. We could use enough of these particles to create a considerable shielding effect. They reflect ultraviolet rays back into space, reducing warming and preventing the damage of these UV rays to plants and animals. How many people live in that area, any side effects would be minimal. I am optimistic that a successful experiment would change the debate on global warming for the better. "', //3° paragrafos,
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
                'not10' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entertainment',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Inês Brasil appears in video Orange is the New Black and break the internet',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Inês Brazil, one of the most charismatic Brazilian personalities of recent times, appeared in the video release of the series "Orange is the New Black," produced by Netflix.', //1° paragrafos,
                    'texto2' => 'The fourth season of the American series premiere on Friday, after a year of waiting fans. Defined as "a walking memes factory" by users of social networks, the famous internet appears confined in prison Litchfield, while co-stars with the character Piper Chapman (Taylor Schilling).', //2° paragrafos,
                    'texto3' => 'The two have surreal dialogue through the wall, while Agnes appears with the traditional orange uniform of the American penitentiaries. How could it be different, webcelebridade appears speaking his phrases that have left famous on the web.
', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'In a time of the new season announcement, Agnes claims to Piper that the time between them is too long. "You know (sic) that everyone sees everything in a weekend only. You can not drop 50 seasons, so all at once? "Triggers.', //4° paragrafos,
                    'texto5' => 'It is not the first time that Netflix puts a Brazilian face to publicize the series last year funkeira valesca popozuda appeared singing "My Poussey is power." By the way, Agnes made mention to the singer in the video.', //5° paragrafos
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
                'not11' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entertainment',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Netflix has secret video, learn how to access it',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'There are "hidden" in the international catalog of Netflix (including in Brazil) a video that does not appear in any of the fixed categories of the streaming service. To access it, you need to get the correct keyword. But the content is not the offensive type.', //1° paragrafos,
                    'texto2' => 'It is "Sizzling Fireplace" or "Fireplace for Your Home" (Bonfire for Your Home), director George Ford. The video consists of more than 60 minutes in a fixed image of a pile of wood burning in the fireplace of a home. And thats it.', //2° paragrafos,
                    'texto3' => 'There is also a version in 4K resolution and another with classical music as a soundtrack. For older users of the service, the video is almost an in-joke. So much so that Netflix came to produce a trailer and even a documentary about the making of the production.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Director George Ford also has others of the same genre films, but that are not available on Netflix. They are "Aquarium to your house," "Correira for you to spend on television" and "Winter Wonderland" - all with fixed or almost unchanged for you to use as a TV screen saver images.

To access the video on Netflix, just search for "Fireplace", "Fireplace" or the directors name.', //4° paragrafos,
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
                      'home' => 'index',
                      'temaName' => 'Entretenimiento',
                      /* ------------------- 1° noticia -------------- */
                      'not1alt' => 'Raposa vermelha de boca aberta',
                      'not1text' => 'Música para sordos',
                      /* ------------------- 2° noticia -------------- */
                      'not2alt' => 'Raposa vermelha de boca aberta aaaaaaaaaaaaa',
                      'not2text' => 'Raaa dda oijasd oisar oias pojh t aaaaaaaaaaaaaaaaaaaaaaaaaa',
                      /* ------------------- 3° noticia -------------- */
                      'not3alt' => 'Raposa vermelha de boca aberta aaaaaaaaaaaaa',
                      'not3text' => 'Oscar cómics golpea información de registro a las mujeres',
                      /* ------------------- 4° noticia -------------- */
                      'not4text' => 'Los Sims 4 ahora tiene opciones sexuales personalizados',
                      /* ------------------- 5° noticia -------------- */
                      'not5text' => 'Teclado analógico promete ofrecer una mayor precisión a sus juegos',
                      /* ------------------- 6° noticia -------------- */
                      'not6text' => 'Cuatro películas feministas que cada mujer tiene que ver',
                      'not6alt' => 'poasj posaj´p posd oiasrp k',
                      /* ------------------- 7° noticia -------------- */
                      'not7alt' => 'POKAS POASPO NAOIS POIDFJ GNAT ',
                      'not7text' => 'Edición especial de Harry Potter y la piedra filosofal se dará a conocer',
                      /* ------------------- 8° noticia -------------- */
                      'not8text' => 'Cinco películas te dejarán muy optimista',
                      /* ------------------- 9° noticia -------------- */
                      'not9text' => '3 razones para ser optimistas',
                      /* ------------------- 10° noticia -------------- */
                      'not10alt' => 'OPA´PS LK ISAIUD OTHJA',
                      'not10text' => 'Inês Brasil aparece en el vídeo Orange is the New Black y break internet',
                      /* ------------------- 11° noticia -------------- */
                      'not11alt' => 'ONZE',
                      'not11text' => 'Netflix tiene vídeo secreto, aprender cómo acceder a él'
                  ],
                  'not1' => [
                      'home' => 'Home',
                      'temaName' => 'Entretenimiento',
                      'datapub' => '12/06/2015 as 09h30min',
                      'titulo' => 'Heroínas y héroes de DC serán los protagonistas de los libros orientada a los jóvenes',
                      'resumo' => '',
                      'autor' => 'Beatriz Guedes',
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
                    'titulo' => 'Música para sordos',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
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
                  'not3' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimiento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Oscar cómics golpea información de registro a las mujeres',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Si usted todavía piensa que los cómics son cosa de chicos, creo que de nuevo. En los últimos años, las mujeres han ido ganando espacio en este universo, ya sea como lectores, ya sea como productores. Toda esta efervescencia no ha tocado el premio Eisner, los más importantes de la industria: el número de alertas a las mujeres se ha más que duplicado desde el año pasado, superando el récord del propio premio. Por otra parte, en siete de las 30 categorías, hay mucho más adecuado que se indica - como el mejor cómico para los adolescentes y el mejor cómic digital. Los ganadores serán anunciados el 22 de julio en la Comic-Con de San Diego.', //1° paragrafos,
                    'texto2' => 'En total, 49 mujeres, compitiendo en casi todas las categorías del premio - excepto mejor cómic periodístico. Estos artistas recibieron 61 nominaciones (para el evento del año pasado, ese número nunca había estado 30). Muchas de las historias seleccionadas como la nueva Miss Marvel, Gwendolyn Willow Wilson, y la perra planeta de Kelly Sue DeConnick tienen las mujeres como figuras centrales, y se encuentran entre los más altos clasificado para los premios más grandes.', //2° paragrafos,
                    'texto3' => 'No es exagerado decir que el medio del cómic está dominado por los hombres: el año pasado, el Festival de Angoulême Internacional de Cómics (Francia), que es también uno de los premios más importantes en esta área, no tenía ninguna mujer entre los candidatos - con en sus 42 ediciones, sólo una mujer ganó el premio más alto (los franceses Cestac Florencia en 2000). La ausencia de mujeres tomó a principios de este año, un boicot colectivo del evento. artistas famosos como Milo Manara, no pudieron asistir a la entrega de premios.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Aquí en Brasil, las cosas no cambian mucho: entre los nominados a HQ Mix trofeo el año pasado, sólo el 13% eran creaciones exclusivamente femeninos - mientras que el 82% eran el trabajo hecho por los hombres y el 5% eran colaboraciones entre los dos sexos.', //4° paragrafos,
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
                  'not4' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimiento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Los Sims 4 ahora tiene opciones sexuales personalizados',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Los jugadores de Los Sims 4 tendrán menos límites para crear tus Sims en el juego lanzado en 2014 por Electronic Arts. El estudio se informó, el jueves (2), la famosa serie de simulación tiene opciones sexuales personalizados para los personajes de la próxima actualización.
"Por primera vez, puede personalizar su Sim sin límites de género establecidas previamente", explicó la Electronic Sports en una declaración a la prensa. "Esto significa que puede crear Sims con cualquier tipo de estilo de caminar física y el tono que desee, sin distinción de sexo."
"También hicimos la ropa, peinados, joyas y otras opciones visuales disponibles para todos los Sims. Más de 700 elementos de contenido que anteriormente sólo estaban disponibles para los hombres o mujeres Sims ya están disponibles para todos los Sims, independiente de la selección inicial de sexo. esto incluye el contenido del juego base de los Sims 4 y los paquetes publicados previamente ".
La mayor preocupación, según la compañía, es permitir que los jugadores no se sienten limitados y pueden ser creativos y expresarse a través de juegos de la compañía. Las nuevas características ya valen a partir de hoy en Los Sims 4, lanzado en exclusiva para PC el 2 de septiembre de 2014.', //1° paragrafos,
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
                  'not5' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimiento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Teclado analógico promete ofrecer una mayor precisión a sus juegos',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Incluso si usted es de los que no permitirá que la combinación de ratón y teclado en tiempo jugador, hay que admitir que es más baja que las consolas de juego en al menos un criterio: la precisión de los movimientos. Incluso un producto mecánico no puede emular las sutilezas que pueden determinar si un carácter en la pantalla se desliza o correr rápidamente.
Pensando en ello, el saqueo desarrolló el Uno, un nuevo concepto que combina las cualidades de un teclado mecánico con botones analógicos. Según el fabricante, que busca fondos para hacer la idea de una realidad, el producto responde a diferentes niveles de presión para determinar la forma de interactuar con un juego.
Demostrado en el Computex de Taipei, el dispositivo estará disponible en dos versiones: una con interruptor rojo, más sensible, y el otro con mecanismos azules puntos de rendimiento ajustable. Para aquellos que simplemente quieren un producto con características clásicas, el fabricante promete un mecanismo para desactivar sus funciones analógicas.', //1° paragrafos,
                    'texto2' => 'El saqueo Uno promete trabajar sin mayores dificultades con la mayoría de los juegos en el mercado que lo detectará como un control convencional. Sin embargo, el fabricante advierte que los juegos que hacen transición automática entre gamepads y teclados pueden presentar problemas, así como aquellos que no permiten los dos medios se utilizan simultáneamente.
La compañía ha superado la marca de 30 000 € (US $ 120.000) para hacer realidad el producto y hay que donar al menos 100 € (R $ 400) para hacer una unidad inicial. Si quieres contribuir a la campaña de recaudación de fondos (o comprar una copia con precio reducido), tenga en cuenta que la fase de recogida hasta el 22 de este mes.', //2° paragrafos,
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
                  'not6' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimiento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Cuatro películas feministas que cada mujer tiene que ver',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => '1. Desayuno con diamantes (Blake Edwards, 1961)
La vida de prostituta de lujo Holly Golightly, jugado con una personalidad inusual Audrey Hepburn, que es el tema de la película. Con su encanto y sus trajes deslumbrantes, Holly no se abre para el amor, toma cualesquiera que sean los hombres y vive en paz, por la categoría de empresa. El proyecto Paul escritor, su vecino, se enamora, pero se necesita mucho trabajo que hacer frente. Linda y SAFA, se siente segura y completamente feliz por dentro, diamantes muy cerca de Tiffany. Al final, el amor no acebo redimiendo a su personalidad excéntrica, pero el mensaje que cruza generaciones es una mujer que sabe cómo jugar con los hombres y llevarlos a lo que importa.', //1° paragrafos,
                    'texto2' => '2. Las horas (Stephen Daldry, 2002)
En tres ocasiones diferentes, tres mujeres están vinculadas de alguna manera con el libro de la Sra Dalloway, una de las obras maestras de la escritora Virginia Woolf Inglés. Uno de ellos, el Woolf, interpretada por Nicole Kidman, se ve rodeada por una depresión y la incomprensión de los que la rodean. A través de la literatura, que se muestra en desacuerdo con la sociedad que lo rodea. Las otras dos mujeres, interpretada por Julianne Moore y Meryl Streep, se relacionan con el libro en diferentes formas, pero siempre iluminando la historia de Clarissa Dalloway, el protagonista de la obra, con sus propias experiencias y preocupaciones como las mujeres.', //2° paragrafos,
                    'texto3' => '3. sonrisa de Monalisa (Mike Newell, 2003)
En la década de 1950, un profesor de arte llega a la escuela tradicional de Wellesley, donde las mujeres más inteligentes de los Estados Unidos se prepara para convertirse en esposas y madres ejemplares, sin cuestionar la autoridad masculina y su propio papel en este arreglo social. El profesor Katherine Watson, interpretada por Julia Roberts, semillas de plantas feministas durante la clase, discutiendo el papel de la mujer a través de las obras de arte que aborda. Por supuesto insubordinación caros de Katherine y los estudiantes que lo apoyan.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '4. Frida (Julie Taymor, 2002)
Cuenta la historia de la pintora mexicana Frida Kahlo desde la adolescencia hasta su muerte. Interpretado por Salma Hayek interpretación alabado, Frida es un icono feminista de su tiempo. Vivió un matrimonio abierto y turbulento con el también artista Diego Rivera, jugó en la película de Alfred Molina. También tuvo un romance con el revolucionario ruso León Trotsky, que se refugió en México a finales del 1930. La película retrata la fuerte personalidad de uno de los grandes nombres de la pintura surrealista mundo, que era abiertamente su bisexualidad, pero no apoyó la infidelidad de su marido. La fuerza Frida es también evidente en la forma en que retrata la enfermedad en sí y la visión que tuvo de la feminidad y de sí mismo.', //4° paragrafos,
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
                  'not7' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimiento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Edición especial de Harry Potter y la piedra filosofal se dará a conocer',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Es hora de tomar las varitas del gabinete, rescatar a su Saeta de Fuego y la capa de invisibilidad. Esto se debe a que, el domingo (19), (fans de Harry Potter) los potterheads '' serán capaces de obtener de nuevo el sabor de un comunicado de la saga. Esta es la edición ilustrada del primer título de la serie, "Harry Potter y la piedra filosofal.', //1° paragrafos,
                    'texto2' => 'El evento es de carácter nacional y ha sido organizada por la editorial de libros en Brasil, Rocco, en asociación con Saraiva Super Store. En Manaos, el club Potterday fa- será responsable de la mediación del evento y dijo que el programa se orientará a los aficionados de todas las edades.', //2° paragrafos,
                    'texto3' => '"Vamos a hablar sobre el libro y la actualidad esta versión ilustrada, que es precioso. Además, tenemos algunos juegos programados, algunas rifas y un concurso de cosplay ", añadió Barbara Pinheiro, presidente de Potterday. El evento es gratuito y abierto al público desde las 15h, el Ave Super Store Manauara compras.', //3° paragrafos,
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
                  'not8' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimiento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Cinco películas te dejarán muy optimista',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => '1. Un buen año
Una luz y la película positiva. El personaje principal es un economista exitoso que hereda un viñedo en Provenza, Francia. Cuando llega al lugar, descubre que hay otros candidatos. La secuencia descubrimiento hace que este hombre vuelve a pensar lo que realmente importa en su vida.', //1° paragrafos,
                    'texto2' => '2. El Cielo de octubre
En octubre de 1957, la Unión Soviética lanzó el primer satélite de la historia, llamada "Sputnik". Este evento impresionó tanto al niño Homero, que decidió construir su propio cohete. Los amigos y la ayuda del maestro llevar a cabo este proyecto, pero el padre de Homer, incapaz de comprender el entusiasmo del niño, no los soportes. Incluso sin este apoyo, el joven va a hacer todo para hacer su sueño hecho realidad.', //2° paragrafos,
                    'texto3' => '3. ¿Quién quiere ser millonario?
Jamal es un candidato en el concurso de la versión india de "¿Quién quiere ser millonario?. A punto de responder a la última pregunta, la policía sospecha que el origen humilde, hizo trampa. En ella comienza un interrogatorio que revela los momentos difíciles, dramas y alegrías de la vida del niño y le mostró todo lo que sabe. Una película inspiradora que deja una sensación increíble.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => '4. Los escritores de la libertad
Basada en hechos reales, la historia de la difícil rutina de un profesor de Inglés en una escuela en Long Beach, California. La mayoría de los estudiantes no hablan Inglés en casa y, además, la ciudad tiene un alto índice de criminalidad.', //4° paragrafos,
                    'texto5' => '5. Jerry Maguire - El Gran Cambio
Cuando se dispara por criticar al jefe, el agente deportivo Jerry Maguire decide fundar su propia compañía. Sólo dos personas creen en ella: Dorothy, en el amor con él, y Rod Tidwell, un atleta de talento, duro e insolente. Todo estaría bien si no fuera las intrigas de los antiguos compañeros de Jerry.', //5° paragrafos
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
                  'not9' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimiento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => '3 razones para ser optimistas',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => '1. La violencia está disminuyendo

Steven Pinker, psicólogo de la Universidad de Harvard (EE.UU.), autor de cómo funciona el cerebro.

"En París, en el siglo 16, una forma popular de entretenimiento era los gatos en llamas, en la que estaba atado a un gato vivo y izada en un escenario y bajó lentamente al fuego. Según el historiador Norman Davies," los espectadores incluyendo reyes y reinas, retorcido que da risa como los animales, aullando de dolor, fue quemado. "tan horrible como los hechos de hoy son tales sadismo sería impensable en la mayoría del mundo. y esto es sólo una ejemplo de la tendencia más importante y poco apreciada en la historia de nuestra especie :. la disminución de la crueldad violencia como entretenimiento popular, el sacrificio humano para satisfacer la superstición, la esclavitud como forma de mano de obra barata, la tortura y la mutilación como formas comunes de castigo y el asesinato como el más forma común de resolución de conflictos -. todos estos fueron características comunes de la vida de la mayor parte de la historia humana pero hoy en día son raras en Occidente, menos común en otras partes de lo que solían ser y están condenadas cuando se producen. Mi optimismo es la esperanza de que la disminución de la violencia en los últimos siglos es un fenómeno real y seguirá pasando ".', //1° paragrafos,
                    'texto2' => '2. El amor prevalecerá

Helen Fisher, profesor de antropología en la Universidad de Rutgers (EE.UU.), autor de ¿Por qué nos gusta y la naturaleza química del amor romántico.

"El amor vence siempre gana, ha dicho, pero en la mayor parte de nuestro amor pasado perdido - .. Por lo menos en las clases altas Dado que las empresas comenzaron a instalarse, hace 10.000 años, la adquisición de bienes raíces, fue necesario lazos de cemento y posiciones sociales. se podía enamorarse de quién era, pero sólo casarse con la persona adecuada, con las conexiones adecuadas y el acuerdo social, político y económico. Hubo siglos de matrimonios arreglados, los cuales fueron recientemente único cambio las mujeres y los hombres tienen ahora el tiempo, la oportunidad y la salud para encontrar el par perfecto es lo que los sociólogos llaman la forma civil del siglo 21 .. bodas simétricos o entre parejas que se aman con pasión lo tanto la humanidad. está ganando de nuevo la tradición que es altamente compatible con el espíritu humano antigua ".', //2° paragrafos,
                    'texto3' => '3. El medio ambiente puede ser salvado

Gregory Benford, un físico de la Universidad de California en Irvine (EE.UU.).

"Nadie cree que vamos a reducir la velocidad del cambio climático en la mitad de un siglo. Por lo menos, ningún economista que se veía en el rápido crecimiento de las naciones en desarrollo y la creciente demanda de energía.

¿Hay que perder la esperanza? De alguna forma.

Pero en lugar de tratar sólo un esfuerzo colectivo para reducir la emisión carbónica humana, mis colaboradores y yo proponen una alternativa de relativamente baja tecnología y de bajo coste: experimentos para tratar de cambiar el propósito del clima, en lugar de esperar a que esto suceda por oportunidad. Quizás la idea más simple es la suspensión de partículas microscópicas e inofensivas 25 mil metros de altura en la estratosfera. Una primera prueba podría estar en el Ártico, ya que hay un calor considerable. Podríamos utilizar suficiente cantidad de estas partículas para crear un considerable efecto de apantallamiento. Reflejan los rayos ultravioleta de vuelta al espacio, lo que reduce el calentamiento y prevenir el daño de estos rayos UV para las plantas y los animales. ¿Cuántas personas viven en esa zona, los efectos secundarios serían mínimos. Soy optimista de que un experimento exitoso cambiaría el debate sobre el calentamiento global para mejor".', //3° paragrafos,
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
                  'not10' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimiento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Inês Brasil aparece en el vídeo Orange is the New Black y break internet',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Inês Brasil, una de las personalidades brasileñas más carismáticos de los últimos tiempos, apareció en la liberación de vídeo de la serie "El naranja es el Nuevo Negro", producido por Netflix.', //1° paragrafos,
                    'texto2' => 'La cuarta temporada de la serie estadounidense estreno el viernes, después de un año de fans esperando. Se define como "una fábrica de memes para caminar" por los usuarios de las redes sociales, el famoso internet parece confinado en la prisión de Litchfield, mientras que co-estrellas con el carácter Piper Chapman (Taylor Schilling).', //2° paragrafos,
                    'texto3' => 'Los dos tienen un diálogo surrealista a través de la pared, mientras Agnes aparece con el uniforme naranja tradicional de los centros penitenciarios de América. Como no podía ser diferente, webcelebridade aparece hablando sus frases famosas que han dejado en la web.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'En un momento del nuevo anuncio de la temporada, Agnes dice Piper que el tiempo entre ellos es demasiado largo. "Usted sabe (sic) que todo el mundo lo ve todo en solamente un fin de semana. No se puede quitar 50 temporadas, por lo que a la vez? "Disparadores.', //4° paragrafos,
                    'texto5' => 'No es la primera vez que Netflix pone una cara de Brasil para dar a conocer la serie del año pasado popozuda funkeira valesca apareció cantando "Mi Poussey es poder". Por cierto, Agnes hizo mención a la cantante en el vídeo.', //5° paragrafos
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
                  'not11' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Entretenimiento',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Netflix tiene vídeo secreto, aprender cómo acceder a él',
                    'resumo' => '',
                    'autor' => 'Beatriz Guedes',
                    'texto1' => 'Hay "oculta" en el catálogo internacional de Netflix (incluso en Brasil) un vídeo que no aparece en ninguna de las categorías fijas del servicio de streaming. Para acceder a ella, es necesario obtener la palabra clave correcta. Pero el contenido no es el tipo ofensivo.', //1° paragrafos,
                    'texto2' => 'Es "chisporrotear chimenea" o "chimenea para su hogar" (hoguera para su hogar), el director George Ford. El vídeo se compone de más de 60 minutos en una imagen fija de una pila de leña en la chimenea de una casa. Y eso es todo.', //2° paragrafos,
                    'texto3' => 'También hay una versión en la resolución 4K y otro con la música clásica como banda sonora. Para los usuarios de más edad del servicio, el video es casi una broma. Tanto es así que Netflix llegó a producir un remolque e incluso un documental sobre la realización de la producción.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'El director George Ford también tiene otros de las mismas películas de género, pero que no están disponibles en Netflix. Son "acuario a su casa", "Correia para pasar en la televisión" y "Winter Wonderland" - todo con fijo o casi sin cambios para su uso como un protector de pantalla del televisor imágenes. Para acceder al video en Netflix, sólo la búsqueda de "chimenea", "chimenea" o el nombre del director.', //4° paragrafos,
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