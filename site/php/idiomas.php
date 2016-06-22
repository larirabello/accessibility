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

    function retIdioma(){
        $idioma = [
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
                    'not1alt' => 'Walmir, homem velho negro, segurando seu troféu',
                    'not1text' => 'Superação no esporte: “Eu pesava 133kg, era viciado em drogas e bebia muito whisky”',
                    /* ------------------- 2° noticia -------------- */
                    'not2alt' => 'Daniel Dias segurando sua medalha de ouro da Paralimpiada de Londres',
                    'not2text' => 'Daniel Dias é destaque no Mundial Paralímpico de Natação',
                    /* ------------------- 3° noticia -------------- */
                    'not3alt' => 'Aparecida Guilhermina, atleta sem visão do Brasil de atletismo, correndo junto com seu guia',
                    'not3text' => 'Brasil pode ter delegação recorde em paraolimpíadas',
                    /* ------------------- 4° noticia -------------- */
                    'not4text' => 'Pan da superação: de filhas de ex-traficante a medalhistas de prata no Pan-Toronto ',
                    /* ------------------- 5° noticia -------------- */
                    'not5text' => 'Dia do Atleta Paraolimpico: conheça um pouco mais sobre esse dia e sua realização',
                    /* ------------------- 6° noticia -------------- */
                    'not6text' => 'Garoto sem braço deixa exemplo de superação no vôlei',
                    'not6alt' => 'Eddie Nogay sentado junto com uma bola de volei',
                    /* ------------------- 7° noticia -------------- */
                    'not7alt' => 'Garoto empresta muleta para colega assistir jogo',
                    'not7text' => 'Garoto empresta muleta para colega assistir jogo: generosidade',
                    /* ------------------- 8° noticia -------------- */
                    'not8text' => 'Dançarina é a primeira professora de zumba com Down',
                    /* ------------------- 9° noticia -------------- */
                    'not9text' => '"É inacreditável", diz comandante de voo que leva Chama Olímpica ao Acre',
                    /* ------------------- 10° noticia -------------- */
                    'not10alt' => 'Emojis desenvolvidos com o tema Olimpíadas',
                    'not10text' => 'Na Olimpíada dos emojis, saltos ornamentais é o único a ficar fora',
                    /* ------------------- 11° noticia -------------- */
                    'not11alt' => 'Frederico durante competição, à esquerda, e seu rival à direita.',
                    'not11text' => 'Maratonista de 99 anos diz que “esporte é farmácia”'
                ],
                    'not1' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Esportes',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Superação no esporte: “Eu pesava 133kg, era viciado em drogas e bebia muito whisky”',
                    'resumo' => 'Vovô, Caolho, Véi ou Criolo, mas o nome de batismo é Walmir da Fonseca Terra. Carioca de Petrópolis, com apenas 7 anos ganhou o mundo e colecionou histórias.',
                    'autor' => 'Raquel Couto',
                    'alt' => 'Walmir, homem velho negro, segurando seu troféul',
                     'texto1' => 'Oito casamentos, seis filhos e seis netos. Mas a vida não foi só sorrisos para Walmir. Um dia qualquer,  o destino lhe pregou uma peça: o médico avisou ao Véi que ele tinha apenas mais 6 meses de vida. “Eu pesava 133kg, era viciado em drogas e bebia muito whisky”, afirmou ciclista.', //1° paragrafos,
                    'texto2' => 'Mas o destino não quis que as coisas fossem assim, e um “anjo” apareceu na vida do Criolo. Um anjo de pele, osso, ciclista e treinador. O treinador, Robson Aloísio, apresentou uma ideia que mudaria para sempre a história de Walmir. “Você precisa pedalar”, disse o treinador. E foi a partir deste conselho, em 2002, que tudo mudou na vida de Walmir. Ele trocou os vícios do álcool e das drogas pela paixão pela bicicleta e colocou uma coisa na cabeça: vou brigar para subir no pódio!', //2° paragrafos,
                    'texto3' => 'No entanto, ele ainda teria que passar por outro desafio e provar mais uma vez sua força e poder de superação. “Eu estava trabalhando com uma roçadeira e uma pedra foi lançada direto no meu olho. Tive um traumatismo e fiquei dias no hospital. Foi uma porrada e um degrau muito ruim na minha vida”, declarou Walmir.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Já acostumado com a vista do topo do pódio, Caolho conquistou mais um ótimo resultado na carreira de atleta vencendo seus próprios limites e conquistando a terceira colocação da categoria PNE da Copa Internacional Levorin de MTB, realizada em Araxá, no dia 24 de Março.', //4° paragrafos,
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Esportes', // tema
                    'not1text' => 'Brasil pode ter delegação recorde em paraolimpíadas',  // texto
                    //2° noticia
                    'tema2not' => 'Esportes', // tema
                    'not2text' => 'Maratonista de 99 anos diz que “esporte é farmácia”',  // texto
                    //3° noticia
                    'tema3not' => 'Esportes', // tema
                    'not3text' => 'Eddie Nogay sentado junto com uma bola de volei'   // texto

                ],
                'not2' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Esportes',
                    'datapub' => '14/06/2016',
                    'titulo' => 'Daniel Dias é destaque no Mundial Paralímpico de Natação',
                    'resumo' => 'O Brasil encerrou Neste domingo SUA Participação no Mundial Paralímpico de Natação , Que Aconteceu em Glasgow, na Escócia , Entre Os Dias 13 e 19 de julho .',
                    'autor' => 'Universidade Presbiteriana Mackenzie',
                    'alt' => 'Daniel Dias segurando sua medalha de ouro da Paralimpiada de Londres',
                    'texto1' => 'O grande nome brasileiro na competição, mais uma vez, foi Daniel Dias atleta patrocinado pelo Mackenzie, que garantiu seis medalhas individuais e duas no revezamento, sendo sete de ouro (50m, 100m e 200m livre, 100m peito, 50m costas, 50m borboleta e 4x50m livre misto) e uma de prata (4x100m livre).', //1° paragrafos,
                    'texto2' =>'O Mundial Paralímpico de Natação contou com a participação de 571 atletas de 67 países e valeu vaga para os Jogos Paralímpicos do Rio-2016. A delegação brasileira é formada por 23 nadadores, garantiu o quarto lugar no quadro geral de medalhas com 23 no total: onze de ouro, oito de prata e quatro de bronze. Além disso, ainda foram conquistadas sete vagas diretas para os Jogos Paralímpicos do Rio-2016.',
                    'texto3' =>'',
                    'texto4' =>'',
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Esportes', // tema
                    'not1text' => 'Garoto empresta muleta para colega assistir jogo: generosidade',  // texto
                    //2° noticia
                    'tema2not' => 'Esportes', // tema
                    'not2text' => 'Na Olimpíada dos emojis, saltos ornamentais é o único a ficar fora',  // texto
                    //3° noticia
                    'tema3not' => 'Esportes', // tema
                    'not3text' => 'Pan da superação: de filhas de ex-traficante a medalhistas de prata no Pan-Toronto '   // texto

                ],
                'not3' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Esportes',
                    'datapub' => '30/05/2016 11h00 ',
                    'titulo' => 'Brasil pode ter delegação recorde em paraolimpíadas',
                    'resumo' => 'A expectativa é de que a delegação brasileira dos Jogos tenha entre 260 e 280 atletas em 23 modalidades',
                    'autor' => 'O Hoje.com',
                    'alt' => 'Aparecida Guilhermina, atleta sem visão do Brasil de atletismo, correndo junto com seu guia',
                    //1° paragrafos,
                    'texto1' => 'Após observações e análises feitas durante o cronograma de eventos-teste de modalidades paralímpicas, o Comitê Paralímpico Brasileiro (CPB) inicia, a 100 dias dos Jogos Paralímpicos Rio 2016, a reta final de preparação. A expectativa é de que a maior delegação brasileira da história dos Jogos tenha entre 260 e 280 atletas em todas as 23 modalidades. Em Londres-2012, o programa paralímpico tinha 20 modalidades, e o Brasil classificou atletas para 18.',
                    'texto2' =>'A partir da definição das últimas vagas para o Rio 2016, é possível planejar e adaptar a parte médica, administrativa, técnica e de suporte ao redor dos atletas. A previsão é de que a delegação brasileira conte com mais de 400 pessoas. Em Londres, foram 316. Nos 100 dias que faltam para a cerimônia de abertura dos Jogos Paralímpicos, marcada para 7 de setembro, a preparação será intensificada à medida que os nomes que vão ocupar cada uma das vagas sejam definidos.',
                    'texto3' =>'"Cada modalidade tem sua programação. Alguns ainda participam de eventos internacionais. Conforme forem chegando os Jogos, a tendência é não ter tantas competições, mas a gente vai ter muito intercâmbio. Temos seleções vindo ao Brasil mesmo antes do período de aclimatação. Então começa agora essa programação", diz Andrew Parsons, presidente do CPB.',
                    'texto4' =>'',
                     //5° paragrafos
                    'texto5' => '',
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Esportes', // tema
                    'not1text' => 'Dia do Atleta Paraolimpico: conheça um pouco mais sobre esse dia e sua realização',  // texto
                    //2° noticia
                    'tema2not' => 'Esportes', // tema
                    'not2text' => 'Na Olimpíada dos emojis, saltos ornamentais é o único a ficar fora',  // texto
                    //3° noticia
                    'tema3not' => 'Esportes', // tema
                    'not3text' => 'Brasil pode ter delegação recorde em paraolimpíadas'   // texto
                ],
                'not4' => [
                   'home' => 'Página Inicial',
                   'temaName' => 'Esportes',
                   'datapub' => '19/07/2015 08h05',
                   'titulo' => 'Pan da superação: de filhas de ex-traficante a medalhistas de prata no Pan-Toronto',
                   'resumo' => 'Conheça as histórias de Lohaynny e Luana Vicente, do badminton',
                   'autor' => 'Flávio Dilascio, Gabriel Fricke, Marcello Pires e Vitor Vieira',
                   'alt' => 'Lohaynny e Luana Vicente vibram ao marcarem um ponto no badminton',
                   'texto1' => 'No meio da madrugada, os tiros que rasgavam o do céu do Morro do Chapadão, no Rio de Janeiro, interrompiam o sono de duas meninas, de quatro e seis anos. Era o sinal de que havia chegado a hora de mudar novamente de casa. Ao todo, foram 15 trocas de endereço. Em uma delas, Lohaynny e Luana Vicente ficaram apenas uma noite. Filhas do ex-chefe do tráfico local, chamado de Bodão, elas hoje representam o Brasil pelo mundo afora, mas já viveram situações delicadas na favela. O pai as carregava para todo lado, e a mãe Cátia Mendes precisava mudar sempre o esconderijo da família.', //1° paragrafos,
                   'texto2' =>'- Meu pai era dono do Chapadão. Os policiais viviam atrás dele, e tínhamos que nos mudar muito, quase o tempo todo. Eu não lembro muito da minha infância em relação à escola, amigos, essas coisas, eu não tinha muito medo porque não entendia muita coisa. Só sei que tinha casa que a gente dormia uma noite - explica Luana. Em 2002, Bodão acabou morto em uma operação policial e foram morar na Chacrinha',
                   'texto3' =>'Morando muito próximo do projeto Miratus, iniciativa de Sebastião Oliveira na comunidade, Luana e Lohaynny conheceram o badminton. Sem dinheiro, amarravam as cordas das raquetes quebradas, colavam as petecas danificadas e, por vezes, treinavam descalças. Mas o talento estava ali. Bruto. Não demorou muito, e a seleção era uma realidade. Hoje, brilham nos Jogos Pan-Americanos. Jogando juntas, elas foram medalha de prata nas duplas femininas, algo inédito para a modalidade. E agora sonham com uma vaga nas Olimpíadas de 2016.',
                   'texto4' =>'- Era bem difícil. Mas o projeto ajudava a gente muito. Pagava tudo. Fomos para o Pan-Americano júnior, ganhamos uma medalha de ouro lá, e conseguimos mais investimentos para o projeto. Todo começo é difícil - se recorda Lohaynny',
                   'texto5' => '', //5° paragrafos
                   // Section de noticia
                   //1° noticia
                   'tema1not' => 'Esportes', // tema
                   'not1text' => 'Maratonista de 99 anos diz que “esporte é farmácia',  // texto
                   //2° noticia
                   'tema2not' => 'Esportes', // tema
                   'not2text' => 'Garoto empresta muleta para colega assistir jogo: generosidade',  // texto
                   //3° noticia
                   'tema3not' => 'Esportes', // tema
                   'not3text' => 'Brasil pode ter delegação recorde em paraolimpíadas'   // texto

                 ],

                'not5' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Esportes',
                    'datapub' => '17/06/2016',
                    'titulo' => 'Dia do Atleta Paraolimpico: conheça um pouco mais sobre esse dia e sua realização',
                    'resumo' => 'Em 22 de setembro é celebrado o Dia Nacional do Atleta Paraolímpico. E não é para menos, já que esse esportistas são exemplos de superação e força de vontade. ',
                    'autor' => ' Redação Doutíssima',
                    'alt' => 'Atleta paraolimpico correndo com sua protese na perna direita',
                    'texto1' => 'O esporte para pessoas com deficiência já existe há mais de 100 anos. Os primeiros clubes desportivos para portadores de deficiência auditiva datam de 1888, em Berlim, na Alemanha.', //1° paragrafos,
                    'texto2' =>'Em 1944, a pedido do governo britânico, Ludwig Guttmann abriu um centro de lesões da coluna vertebral no Mandeville Hospital Stoke e, com o tempo, o esporte de reabilitação evoluiu para esporte recreativo e, então, para o competitivo.',
                    'texto3' =>'A maioria das pessoas com deficiência física não participa de esportes regularmente porque eles podem aumentar as chances de problemas de saúde secundários, mas com a devida instrução esse risco é capaz de ser diminuído.',
                    'texto4' =>'Segundo um estudo publicado no Scandinavian Journal of Medicine & Science in Sports, escolher o esporte adequado também aumenta a extensão da participação esportiva de pessoas com deficiência.',
                    'texto5' => 'Aquelas que optam por participar de esportes adaptados possuem mais qualidade de vida e maiores índices de satisfação se comparadas com indivíduos com deficiência que não estão envolvidos nessa rotina. Essa é a conclusão de um estudo publicado no Disability and Health Journal. E alguns atletas brasileiros são provas disso.', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Esportes', // tema
                    'not1text' => 'Dançarina é a primeira professora de zumba com Down',  // texto
                    //2° noticia
                    'tema2not' => 'Esportes', // tema
                    'not2text' => 'Na Olimpíada dos emojis, saltos ornamentais é o único a ficar fora',  // texto
                    //3° noticia
                    'tema3not' => 'Esportes', // tema
                    'not3text' => 'É inacreditável", diz comandante de voo que leva Chama Olímpica ao Acre'   // texto
                ],

                'not6' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Esportes',
                    'datapub' => '06/06/2013',
                    'titulo' => 'Garoto sem braço deixa exemplo de superação no vôlei',
                    'resumo' => 'Devido a um tumor no cotovelo,     Eddie Nogay não foi impedido de fazer o que realmente gosta, jogar volei. Parece impossivel e após esse feito, o garoto é um exemplo de superação nos Estados Unidos',
                    'autor' => 'UOL Esporte',
                    'alt' => 'Eddie Nogay sentado junto com uma bola de volei',
                    'texto1' => 'Eddie Nogay se tornou um exemplo de superação no esporte dos Estados Unidos. Com 17 anos, o garoto chamou a atenção do país ao disputar um torneio de vôlei escolar após ter ser seu braço amputado devido a um tumor no cotovelo.', //1° paragrafos,
                    'texto2' =>'Nogay teve seu câncer diagnosticado em 2012, passou por cirurgia, mas se recusou a deixar o esporte. Mesmo com seus dois pulmões comprometidos pela doença, disputou toda a temporada 2013 do vôlei colegial e ajudou sua equipe a chegar às quartas de final do torneio municipal disputado em Nova York.
',
                    'texto3' =>'O jovem atleta morreu na última terça-feira, em um hospital de Nova York, devido aos problemas nos pulmões. O falecimento ocorreu um dia após Nogay completar 18 anos.
',
                    'texto4' =>'“Eddie deixou um impacto nas pessoas”, disse Victor Nogay, irmão do atleta, ao New York Post. “Não há nada que eu possa dizer que ele não conseguiu realizar”.
',
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Esportes', // tema
                    'not1text' => 'É inacreditável", diz comandante de voo que leva Chama Olímpica ao Acre',  // texto
                    //2° noticia
                    'tema2not' => 'Esportes', // tema
                    'not2text' => 'Maratonista de 99 anos diz que “esporte é farmácia”',  // texto
                    //3° noticia
                    'tema3not' => 'Esportes', // tema
                    'not3text' => 'Na Olimpíada dos emojis, saltos ornamentais é o único a ficar fora'   // texto

                ],
                  'not7' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Esportes',
                    'datapub' => '06/06/2013',
                    'titulo' => ' Garoto empresta muleta para colega assistir jogo: generosidade',
                    'resumo' => 'A foto impressionante, com um exemplo de generosidade, foi tirada durante a despedida de Diego Milito do futebol, fato que mexeu com quem gosta do esporte.',
                    'autor' => 'Só Noticia Boa',
                    'alt' => 'Garoto deficiente flagrado ao emprestar sua muleta para que amigo enxergue o jogo.',
                    'texto1' => 'As pessoas faziam de tudo para ver a partida do Racing contra o Temperley, no El Cilindro, no último sábado, inclusive Santiago Fretes, de 10 anos, que emprestou uma de suas muletas para o amigo subir no muro ver o jogo do Racing.', //1° paragrafos,
                    'texto2' =>'A foto, tirada do lado de fora do campo, mostrando o menino sem uma das pernas e seu amigo – cada um apoiado em uma muleta – ganhou as manchetes anos jornais Argentinos.',
                    'texto3' =>'Apaixonado por futebol, Santiago Fretes, de 10 anos, conhecia o colega de vista, das partidas que acompanha. Nem sabia o nome dele, mas não pensou duas vezes: simplesmente ajudou.',
                    'texto4' =>'',
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Esportes', // tema
                    'not1text' => 'Garoto empresta muleta para colega assistir jogo: generosidade',  // texto
                    //2° noticia
                    'tema2not' => 'Esportes', // tema
                    'not2text' => 'Dançarina é a primeira professora de zumba com Down',  // texto
                    //3° noticia
                    'tema3not' => 'Esportes', // tema
                    'not3text' => 'Garoto sem braço deixa exemplo de superação no vôlei'   // texto

                ],
                  'not8' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Esportes',
                    'datapub' => '06/06/2013',
                    'titulo' => 'Dançarina é a primeira professora de zumba com Down',
                    'resumo' => 'A foto impressionante, com um exemplo de generosidade, foi tirada durante a despedida de Diego Milito do futebol, fato que mexeu com quem gosta do esporte.',
                    'autor' => 'Só Noticia Boa',
                    'alt' => 'Garoto deficiente flagrado ao emprestar sua muleta para que amigo enxergue o jogo.',
                    'texto1' => 'As pessoas faziam de tudo para ver a partida do Racing contra o Temperley, no El Cilindro, no último sábado, inclusive Santiago Fretes, de 10 anos, que emprestou uma de suas muletas para o amigo subir no muro ver o jogo do Racing.', //1° paragrafos,
                    'texto2' =>'A foto, tirada do lado de fora do campo, mostrando o menino sem uma das pernas e seu amigo – cada um apoiado em uma muleta – ganhou as manchetes anos jornais Argentinos.',
                    'texto3' =>'Apaixonado por futebol, Santiago Fretes, de 10 anos, conhecia o colega de vista, das partidas que acompanha. Nem sabia o nome dele, mas não pensou duas vezes: simplesmente ajudou.',
                    'texto4' =>'',
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Esportes', // tema
                    'not1text' => 'Garoto empresta muleta para colega assistir jogo: generosidade',  // texto
                    //2° noticia
                    'tema2not' => 'Esportes', // tema
                    'not2text' => 'Dançarina é a primeira professora de zumba com Down',  // texto
                    //3° noticia
                    'tema3not' => 'Esportes', // tema
                    'not3text' => 'Garoto sem braço deixa exemplo de superação no vôlei'   // texto

               ],
                  'not9' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Esportes',
                    'datapub' => '06/06/2013',
                    'titulo' => ' "É inacreditável", diz comandante de voo que leva Chama Olímpica ao Acre',
                    'resumo' => 'A foto impressionante, com um exemplo de generosidade, foi tirada durante a despedida de Diego Milito do futebol, fato que mexeu com quem gosta do esporte.',
                    'autor' => 'Só Noticia Boa',
                    'alt' => 'Garoto deficiente flagrado ao emprestar sua muleta para que amigo enxergue o jogo.',
                    'texto1' => 'As pessoas faziam de tudo para ver a partida do Racing contra o Temperley, no El Cilindro, no último sábado, inclusive Santiago Fretes, de 10 anos, que emprestou uma de suas muletas para o amigo subir no muro ver o jogo do Racing.', //1° paragrafos,
                    'texto2' =>'A foto, tirada do lado de fora do campo, mostrando o menino sem uma das pernas e seu amigo – cada um apoiado em uma muleta – ganhou as manchetes anos jornais Argentinos.',
                    'texto3' =>'Apaixonado por futebol, Santiago Fretes, de 10 anos, conhecia o colega de vista, das partidas que acompanha. Nem sabia o nome dele, mas não pensou duas vezes: simplesmente ajudou.',
                    'texto4' =>'',
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Esportes', // tema
                    'not1text' => 'Garoto empresta muleta para colega assistir jogo: generosidade',  // texto
                    //2° noticia
                    'tema2not' => 'Esportes', // tema
                    'not2text' => 'Dançarina é a primeira professora de zumba com Down',  // texto
                    //3° noticia
                    'tema3not' => 'Esportes', // tema
                    'not3text' => 'Garoto sem braço deixa exemplo de superação no vôlei'   // texto

                ],
                  'not10' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Esportes',
                    'datapub' => '06/06/2013',
                    'titulo' => ' Na Olimpíada dos emojis, saltos ornamentais é o único a ficar fora',
                    'resumo' => 'A foto impressionante, com um exemplo de generosidade, foi tirada durante a despedida de Diego Milito do futebol, fato que mexeu com quem gosta do esporte.',
                    'autor' => 'Só Noticia Boa',
                    'alt' => 'Garoto deficiente flagrado ao emprestar sua muleta para que amigo enxergue o jogo.',
                    'texto1' => 'As pessoas faziam de tudo para ver a partida do Racing contra o Temperley, no El Cilindro, no último sábado, inclusive Santiago Fretes, de 10 anos, que emprestou uma de suas muletas para o amigo subir no muro ver o jogo do Racing.', //1° paragrafos,
                    'texto2' =>'A foto, tirada do lado de fora do campo, mostrando o menino sem uma das pernas e seu amigo – cada um apoiado em uma muleta – ganhou as manchetes anos jornais Argentinos.',
                    'texto3' =>'Apaixonado por futebol, Santiago Fretes, de 10 anos, conhecia o colega de vista, das partidas que acompanha. Nem sabia o nome dele, mas não pensou duas vezes: simplesmente ajudou.',
                    'texto4' =>'',
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Esportes', // tema
                    'not1text' => 'Garoto empresta muleta para colega assistir jogo: generosidade',  // texto
                    //2° noticia
                    'tema2not' => 'Esportes', // tema
                    'not2text' => 'Dançarina é a primeira professora de zumba com Down',  // texto
                    //3° noticia
                    'tema3not' => 'Esportes', // tema
                    'not3text' => 'Garoto sem braço deixa exemplo de superação no vôlei'   // texto

            ],
                  'not11' => [
                    'home' => 'Página Inicial',
                    'temaName' => 'Esportes',
                    'datapub' => '06/06/2013',
                    'titulo' => 'Maratonista de 99 anos diz que “esporte é farmácia”',
                    'resumo' => 'A foto impressionante, com um exemplo de generosidade, foi tirada durante a despedida de Diego Milito do futebol, fato que mexeu com quem gosta do esporte.',
                    'autor' => 'Só Noticia Boa',
                    'alt' => 'Garoto deficiente flagrado ao emprestar sua muleta para que amigo enxergue o jogo.',
                    'texto1' => 'As pessoas faziam de tudo para ver a partida do Racing contra o Temperley, no El Cilindro, no último sábado, inclusive Santiago Fretes, de 10 anos, que emprestou uma de suas muletas para o amigo subir no muro ver o jogo do Racing.', //1° paragrafos,
                    'texto2' =>'A foto, tirada do lado de fora do campo, mostrando o menino sem uma das pernas e seu amigo – cada um apoiado em uma muleta – ganhou as manchetes anos jornais Argentinos.',
                    'texto3' =>'Apaixonado por futebol, Santiago Fretes, de 10 anos, conhecia o colega de vista, das partidas que acompanha. Nem sabia o nome dele, mas não pensou duas vezes: simplesmente ajudou.',
                    'texto4' =>'',
                    'texto5' => '', //5° paragrafos
                    // Section de noticia
                    //1° noticia
                    'tema1not' => 'Esportes', // tema
                    'not1text' => 'Garoto empresta muleta para colega assistir jogo: generosidade',  // texto
                    //2° noticia
                    'tema2not' => 'Esportes', // tema
                    'not2text' => 'Dançarina é a primeira professora de zumba com Down',  // texto
                    //3° noticia
                    'tema3not' => 'Esportes', // tema
                    'not3text' => 'Garoto sem braço deixa exemplo de superação no vôlei'   // texto

                    ]

                ]
            ],
            'en' => [
            'index' => [
                'titulo' => 'Otimist',
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
                    'not1alt' => 'Walmir, black old man holding his trophy',
                    'not1text' => 'Overrun in sports: "I weighed 133 kg, was addicted to drugs and drank too much whiskey"',
                    /* ------------------- 2° noticia -------------- */
                    'not2alt' => 'Daniel Dias holding his gold medal of the London Paralimpiada',
                    'not2text' => 'Daniel Dias is featured in the World Paralympic Swimming',
                    /* ------------------- 3° noticia -------------- */
                    'not3alt' => 'Aparecida Guilhermina without athletics Brazil\'s vision athlete, running with guide',
                    'not3text' => 'Brazil may have record delegation to Paralympics',
                    /* ------------------- 4° noticia -------------- */
                    'not4text' => 'Pan overcoming: the former dealer daughters to silver medal in the Pan-Toronto',
                    /* ------------------- 5° noticia -------------- */
                    'not5text' => 'Day Athlete Paralympic: learn a little more about that day and its realization',
                    /* ------------------- 6° noticia -------------- */
                    'not6text' => 'Armless boy leaves example of overcoming in volleyball',
                    'not6alt' => 'Eddie Nogay sitting together with a volley ball',
                    /* ------------------- 7° noticia -------------- */
                    'not7alt' => 'Boy lending his crutch to a friend',
                    'not7text' => 'Boy lends his crutch to a friend so he can see a soccer play',
                    /* ------------------- 8° noticia -------------- */
                    'not8text' => 'Dancing girl is the first Zumba\'s teacher with Down',
                    /* ------------------- 9° noticia -------------- */
                    'not9text' => '"It\'s unbelievable", a flight commander said when taking Olympic flame to Acre ',
                    /* ------------------- 10° noticia -------------- */
                    'not10alt' => 'Emojis developed for Olympic Games',
                    'not10text' => 'On Emojis Olympics, ornamental jumps are the only ones out',
                    /* ------------------- 11° noticia -------------- */
                    'not11alt' => 'Frederico in a competition, to the left, and his competitive on the right.',
                    'not11text' => 'Marathonist aged of 99 years old says "sports are medicine"'
                ],
                'not1' => [
                    'home' => 'Home',
                    'temaName' => 'Sports',
                    'datapub' => '12/06/2015 as 09h30min',
                    'titulo' => 'Overrun in sports: "I weighed 133 kg, was addicted to drugs and drank too much whiskey"',
                    'resumo' => 'Grandpa, Caolho (half eye) Vei or Criolo, but the Christian name is Walmir da Fonseca Terra. Carioca (people from Rio de Janeiro) of  Petrópolis, with only seven years won the world and collected stories.',
                    'autor' => 'Raquel Couto',
                    'alt' => 'Walmir, black old man holding his trophy',
                    'texto1' => 'Eight marriages, six children and six grandchildren. But life was not all smiles for Walmir. Any day, destiny played him a piece: the doctor warned the VEI he had just 6 months. "I weighed 133kg, was addicted to drugs and drank too much whiskey," said cyclist.', //1° paragrafos,
                    'texto2' => 'But fate did not want things to be so, and an "angel" appeared in the life of Creole. Angel skin, bone, cyclist and coach. The coach, Robson Aloisio presented an idea that would forever change the history of Walmir. "You need to ride," said the coach. It was from this council, in 2002, everything changed in the life of Walmir. He shifted the alcohol addictions and drugs by passion for bike and put one thing in mind: I will fight to get on the podium!', //2° paragrafos,
                    'texto3' => 'However, it would still have to go through another challenge and prove again their strength and power to overcome. "I was working with a cutter and a stone was thrown straight in my eye. I had an injury and was days in the hospital. It was a fight and a very bad step in my life, "said Walmir.', //3° paragrafos,
                    //caso nao tenha mais paragrafo coloque apenas as aspas simples.
                    'texto4' => 'Already used to the view from the top of the podium, Caolho won another great result in an athlete\'s career winning their own limits and conquering the third place of the PNE category International Cup Levorin MTB held in Araxá, on 24 March.', //4° paragrafos,
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
                    'temaName' => 'Sports',
                    'datapub' => '14/06/2016',
                    'titulo' => 'Daniel Dias is featured in the World Paralympic Swimming',
                    'resumo' => 'Brazil closed On Sunday his participation in the World Paralympic Swimming, held in Glasgow, Scotland, between 13 and 19 July.',
                    'autor' => 'Mackenzie Presbiterian University',
                    'alt' => 'Daniel Dias holding his gold medal of the London Paralimpiada',
                    'texto1' => 'The great Brazilian name in the competition, once again, was Daniel Dias athlete sponsored by Mackenzie, who earned six individual medals and two in the relay, seven gold (50m, 100m and 200m freestyle, 100m breaststroke, 50m backstroke, 50m butterfly and free mixed 4x50m) and one silver (4x100m freestyle).  ', //1° paragrafos,
                    'texto2' =>'The Paralympic World Swimming with the participation of 571 athletes from 67 countries and earned a position for the Paralympic Games in Rio-2016. The Brazilian delegation consists of 23 swimmers, secured fourth place in the medals table with 23 total: eleven gold, eight silver and four bronze. Moreover, they still won seven direct jobs for the Paralympic Games in Rio-2016.',
                    'texto3' =>'',
                    'texto4' =>'',
                    'texto5' =>'',
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
                      'temaName' => 'Sports',
                      'datapub' => '30/05/2016 11h00 ',
                      'titulo' => 'Brazil may have record delegation to Paralympics',
                      'resumo' => 'The expectation is that the Brazilian delegation at the Games has between 260 and 280 athletes in 23 modalities',
                      'autor' => 'O Hoje.com',
                      'alt' => 'Aparecida Guilhermina without athletics Brazil\'s vision athlete, running with guide',
                      //1° paragrafos,
                      'texto1' => 'After observations and analyzes made during the schedule of test events Paralympic modalities, the Brazilian Paralympic Committee (CPB) starts, the 100 days of the Paralympic Games Rio 2016, the final stages of preparation. The expectation is that Brazil\'s largest delegation in the history of the Games has between 260 and 280 athletes in all 23 sports. In London 2012, the Paralympic program had 20 arrangements, and Brazil ranked athletes to 18.',
                      'texto2' =>'From the definition of the latest vacancies for Rio 2016, you can plan and adapt the medical part, administrative, technical and support around the athletes. The forecast is that the Brazilian delegation has more than 400 people. In London, it was 316. In the 100 days until the opening ceremony of the Paralympic Games, scheduled for September 7, the preparation will be intensified as the names that will occupy each of the positions are defined.',
                      'texto3' =>'"Each mode has its schedule. Some even participate in international events. As they arrive the Games, the trend is not having so many competitions, but we will have much exchange. We have teams coming to Brazil even before the acclimatization period. So begins now this program, "says Andrew Parsons, president of the CPB.',
                      'texto4' =>'',
                       //5° paragrafos
                      'texto5' => '',
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
                    'temaName' => 'Sports',
                    'datapub' => '19/07/2015 08h05',
                    'titulo' => 'Pan overcoming: the former dealer to daughters silver medal in the Pan-Toronto',
                    'resumo' => 'Discover the stories of Lohaynny and Luana Vicente, badminton',
                    'autor' => 'Flávio Dilascio, Gabriel Fricke, Marcello Pires e Vitor Vieira',
                    'alt' => 'Lohaynny and Luana Vicente vidram to score a point in badminton',
                    'texto1' => 'In the middle of the night, the shots tore the sky Hill Chapadao, in Rio de Janeiro, interrupted sleep two girls, four and six years. It was the signal that the time had come to move house again. In all, 15 exchanges address. In one, Lohaynny and Luana Vicente stayed only one night. Daughters of the former head of the local traffic, called Bodão, they now represent Brazil around the world, but have lived difficult situations in the slum. The father carried them everywhere, and Catia Mendes mother always had to change the family\'s hiding place.', //1° paragrafos,
                    'texto2' =>'- My father owned the Chapadao. The officers lived after him, and we have to move a lot, almost all the time. I do not remember much of my childhood about school, friends, these things, I was not really scared because I did not understand much. Just know that home had we slept one night - explains Luana. In 2002, Bodão eventually killed in a police raid and were living in the get-together',
                    'texto3' =>'Living very close to Miratus project, Sebastião Oliveira initiative in the community, Luana and Lohaynny knew badminton. No money, tied the strings of broken racquets, shuttlecocks glued damaged and sometimes trained barefoot. But the talent was there. Gross. It was not long, and the selection was a reality. Today, shine in the Pan American Games. Playing together, they were silver medal in women\'s doubles, a first for the sport. And now dream of a place in the 2016 Olympics.',
                    'texto4' =>'- It was very difficult. But the project helped us a lot. He paid everything. We went to the Pan American junior, won a gold medal there, and got more investment for the project. Every beginning is difficult - remember Lohaynny',
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
                    'temaName' => 'Sports',
                    'datapub' => '17/06/2016',
                    'titulo' => 'Day Athlete Paralympic: learn a little more about that day and its realization',
                    'resumo' => 'On September 22 marks the National Day of Paralympian. And no wonder, since that athletes are examples of resilience and willpower.',
                    'autor' => 'Redação Doutíssima',
                    'alt' => 'Paralympian running with his prosthetic right leg',
                    'texto1' => 'Sport for people with disabilities has existed for over 100 years. The first sports clubs for hearing impaired dating back to 1888, in Berlin, Germany.', //1° paragrafos,
                    'texto2' =>'In 1944, at the request of the British government, Ludwig Guttmann opened a spinal injuries center at Stoke Mandeville Hospital and, with time, the rehabilitation of sport evolved to recreational sport and then to competitive.',
                    'texto3' =>'Most people with disabilities do not participate in sports regularly because they can increase the chances of secondary health problems, but with proper instruction this risk can be reduced.',
                    'texto4' =>'According to a study published in the Scandinavian Journal of Medicine & Science in Sports, choosing the right sport also increases the extent of sports participation of people with disabilities.',
                    'texto5' => 'Those who choose to participate in adapted sports have more quality of life and higher levels of satisfaction compared with individuals with disabilities who are not involved in this routine. That\'s the conclusion of a study published in Disability and Health Journal. And some Brazilian athletes are proof of that.', //5° paragrafos
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
                    'temaName' => 'Sports',
                    'datapub' => '06/06/2013',
                    'titulo' => 'Armless boy leaves example of overcoming in volleyball',
                    'resumo' => 'Due to a tumor on his elbow, Eddie Nogay was not prevented from doing what you really like, play volleyball. It seems impossible and after this done, the boy is an example of overcoming in the United States',
                    'autor' => 'UOL Esporte',
                    'alt' => 'Eddie Nogay sitting together with a volley ball',
                    'texto1' => 'Eddie Nogay became an overcoming example in US sport. 17, the boy caught the attention of the country to compete in a tournament of volleyball after school be his arm amputated due to a tumor on her elbow.', //1° paragrafos,
                    'texto2' =>'Nogay had their cancer diagnosed in 2012, underwent surgery, but refused to leave the sport. Even with its two lungs affected by the disease, he played the entire 2013 season of high school volleyball and helped his team reach the quarterfinals of the disputed city tournament in New York.',
                    'texto3' =>'The young athlete dies on the last Tuesday in a New York hospital due to lung problems. The death came a day after Nogay turned 18.',
                    'texto4' =>'"Eddie left an impact on people," said Victor in Gay, athlete\'s brother, the New York Post. "There is nothing I can say that he did not achieve."',
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
                    'temaName' => 'Sports',
                    'datapub' => '06/06/2013',
                    'titulo' => 'Armless boy leaves example of overcoming in volleyball',
                    'resumo' => 'Due to a tumor on his elbow, Eddie Nogay was not prevented from doing what you really like, play volleyball. It seems impossible and after this done, the boy is an example of overcoming in the United States',
                    'autor' => 'UOL Esporte',
                    'alt' => 'Eddie Nogay sitting together with a volley ball',
                    'texto1' => 'Eddie Nogay became an overcoming example in US sport. 17, the boy caught the attention of the country to compete in a tournament of volleyball after school be his arm amputated due to a tumor on her elbow.', //1° paragrafos,
                    'texto2' =>'Nogay had their cancer diagnosed in 2012, underwent surgery, but refused to leave the sport. Even with its two lungs affected by the disease, he played the entire 2013 season of high school volleyball and helped his team reach the quarterfinals of the disputed city tournament in New York.',
                    'texto3' =>'The young athlete dies on the last Tuesday in a New York hospital due to lung problems. The death came a day after Nogay turned 18.',
                    'texto4' =>'"Eddie left an impact on people," said Victor in Gay, athlete\'s brother, the New York Post. "There is nothing I can say that he did not achieve."',
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
                    'temaName' => 'Sports',
                    'datapub' => '06/06/2013',
                    'titulo' => 'Armless boy leaves example of overcoming in volleyball',
                    'resumo' => 'Due to a tumor on his elbow, Eddie Nogay was not prevented from doing what you really like, play volleyball. It seems impossible and after this done, the boy is an example of overcoming in the United States',
                    'autor' => 'UOL Esporte',
                    'alt' => 'Eddie Nogay sitting together with a volley ball',
                    'texto1' => 'Eddie Nogay became an overcoming example in US sport. 17, the boy caught the attention of the country to compete in a tournament of volleyball after school be his arm amputated due to a tumor on her elbow.', //1° paragrafos,
                    'texto2' =>'Nogay had their cancer diagnosed in 2012, underwent surgery, but refused to leave the sport. Even with its two lungs affected by the disease, he played the entire 2013 season of high school volleyball and helped his team reach the quarterfinals of the disputed city tournament in New York.',
                    'texto3' =>'The young athlete dies on the last Tuesday in a New York hospital due to lung problems. The death came a day after Nogay turned 18.',
                    'texto4' =>'"Eddie left an impact on people," said Victor in Gay, athlete\'s brother, the New York Post. "There is nothing I can say that he did not achieve."',
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
                    'temaName' => 'Sports',
                    'datapub' => '06/06/2013',
                    'titulo' => 'Armless boy leaves example of overcoming in volleyball',
                    'resumo' => 'Due to a tumor on his elbow, Eddie Nogay was not prevented from doing what you really like, play volleyball. It seems impossible and after this done, the boy is an example of overcoming in the United States',
                    'autor' => 'UOL Esporte',
                    'alt' => 'Eddie Nogay sitting together with a volley ball',
                    'texto1' => 'Eddie Nogay became an overcoming example in US sport. 17, the boy caught the attention of the country to compete in a tournament of volleyball after school be his arm amputated due to a tumor on her elbow.', //1° paragrafos,
                    'texto2' =>'Nogay had their cancer diagnosed in 2012, underwent surgery, but refused to leave the sport. Even with its two lungs affected by the disease, he played the entire 2013 season of high school volleyball and helped his team reach the quarterfinals of the disputed city tournament in New York.',
                    'texto3' =>'The young athlete dies on the last Tuesday in a New York hospital due to lung problems. The death came a day after Nogay turned 18.',
                    'texto4' =>'"Eddie left an impact on people," said Victor in Gay, athlete\'s brother, the New York Post. "There is nothing I can say that he did not achieve."',
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
                    'temaName' => 'Sports',
                    'datapub' => '06/06/2013',
                    'titulo' => 'Armless boy leaves example of overcoming in volleyball',
                    'resumo' => 'Due to a tumor on his elbow, Eddie Nogay was not prevented from doing what you really like, play volleyball. It seems impossible and after this done, the boy is an example of overcoming in the United States',
                    'autor' => 'UOL Esporte',
                    'alt' => 'Eddie Nogay sitting together with a volley ball',
                    'texto1' => 'Eddie Nogay became an overcoming example in US sport. 17, the boy caught the attention of the country to compete in a tournament of volleyball after school be his arm amputated due to a tumor on her elbow.', //1° paragrafos,
                    'texto2' =>'Nogay had their cancer diagnosed in 2012, underwent surgery, but refused to leave the sport. Even with its two lungs affected by the disease, he played the entire 2013 season of high school volleyball and helped his team reach the quarterfinals of the disputed city tournament in New York.',
                    'texto3' =>'The young athlete dies on the last Tuesday in a New York hospital due to lung problems. The death came a day after Nogay turned 18.',
                    'texto4' =>'"Eddie left an impact on people," said Victor in Gay, athlete\'s brother, the New York Post. "There is nothing I can say that he did not achieve."',
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
                    'temaName' => 'Sports',
                    'datapub' => '06/06/2013',
                    'titulo' => 'Armless boy leaves example of overcoming in volleyball',
                    'resumo' => 'Due to a tumor on his elbow, Eddie Nogay was not prevented from doing what you really like, play volleyball. It seems impossible and after this done, the boy is an example of overcoming in the United States',
                    'autor' => 'UOL Esporte',
                    'alt' => 'Eddie Nogay sitting together with a volley ball',
                    'texto1' => 'Eddie Nogay became an overcoming example in US sport. 17, the boy caught the attention of the country to compete in a tournament of volleyball after school be his arm amputated due to a tumor on her elbow.', //1° paragrafos,
                    'texto2' =>'Nogay had their cancer diagnosed in 2012, underwent surgery, but refused to leave the sport. Even with its two lungs affected by the disease, he played the entire 2013 season of high school volleyball and helped his team reach the quarterfinals of the disputed city tournament in New York.',
                    'texto3' =>'The young athlete dies on the last Tuesday in a New York hospital due to lung problems. The death came a day after Nogay turned 18.',
                    'texto4' =>'"Eddie left an impact on people," said Victor in Gay, athlete\'s brother, the New York Post. "There is nothing I can say that he did not achieve."',
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
