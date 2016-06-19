<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Acessibilidade</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/acessibilidade.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    
    <?php
        include'partes/nav.php';
  ?>

  <header class="jumbotron subhead">
      <div class="container center">
          <!-- Falar sobre acessibilidade no site colocar botões e atalhos -->
          
    <h1>Acessibilidade</h1>
          </header>
    <body>
      <p class="text-justify">HTML5 – Acessibilidade com o Atributo accesskey
24 de janeiro de 2012 por Carlos Eduardo - Kadu | 1 Comentário
acessibilidade com atributo accesskey
A nova linguagem HTML5 prevê reformulação no atributo accesskey. Uma delas é: “todos os elementos HTML podem receber o atributo accesskey“. Apesar dos navegadores atuais não aplicarem tudo que a documentação do W3c sugere, ainda sim podemos usar para incrementar a acessibilidade das nossas páginas web.

Você já parou para pensar que seus visitantes podem ter algum tipo de deficiência ou mobilidade reduzida e podem ter dificuldades de controlar o mouse para clicar em links, campos de formulários, etc. E uma navegação utilizando a tecla tab pode acabar sendo um processo bem lento para dar foco em um link…
O atributo accesskey é utilizado para criar uma tecla de atalho para dar foco em um elemento HTML, facilitando assim a navegação do usuário pelo teclado.
A especificação da HTML5 recomenda que a combinação de teclas para acionar o atributo accesskey seja ctrl + alt + tecla e que o valor do atributo accesskey seja case sensitive, ou seja, sensível ao tamanho da letra. Porém os navegadores não implementam essa recomendação, a maioria dos navegadores usam a tecla alt + tecla e/ou shift + alt + tecla
A maioria dos navegadores não suporta duplicar o atributo accesskey. Por exemplo, uma página não pode ter dois atalhos com accesskey = "N". A maioria dos irá ignorar um dos atalhos. Alguns navegadores vão ignorar a primeira accesskey, e outros navegadores ignoram a segunda instância. O navegador que aceita accesskey duplicado é o Internet Explorer.</p>
        </div>
      <div class="container">
      <div class="sitemap tree well">
      <!-- Mapa do site -->
          <!--  Css family tree for map site-->
          <h2>Mapa do site</h2>
              <ul>
                  
          <a href="">Home</a>
            <li>
                <a href="">Acessibilidade</a>
            </li>            
            <li>
                <a href="">Entretenimento</a>
            </li>            
            <li>
                <a href="">Esportes</a>
            </li>
            <li>
                <a href="">Tecnologia</a>
            </li>
            <li>
                <a href="">Games</a>
            </li>
            <li>
                <a href="">Lifestyle</a>
            </li>
            <li>
                <a href="">Mundo Pet</a>
            </li>                        
          </ul>
      </div>
          </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <?php
    include'partes/footer.php';
    ?>
  </body>
</html>