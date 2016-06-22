/**
 * Created by Caio S Nepomuceno on 21/06/2016.
 */

function mudaParaClaro(imgSrc)
{
    $('#texto>.container, .thumbnail, body, a, p, h1, h2, .textto-noti, .menu-ac, .menu-ac2, .breadcrumb')
        .removeClass('contraste-bgescuro contraste-corletra contraste-nav1escuro contraste-nav2escuro contraste-corborda');

    $('.menu-ac2 img').attr('src', imgSrc+'logo.png');

    $('footer').css('background-image', 'url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/93/noise-bg.png)');
}

function mudaParaEscuro(imgSrc)
{
    console.log(imgSrc);

    $('#texto>.container, body, .breadcrumb, a, h1, h2, p, .texto-noti, .menu-ac, .menu-ac2, .thumbnail, #b')
        .addClass('contraste-transicao');

    $('#texto>.container, body, .breadcrumb').addClass('contraste-bgescuro');
    $('a, h1, h2, p, .texto-noti').addClass('contraste-corletra');

    $('.menu-ac').addClass('contraste-nav1escuro');
    $('.menu-ac2, .thumbnail').addClass('contraste-nav2escuro');

    $('.thumbnail, .menu-ac2, #b').addClass('contraste-corborda');

    $('.breadcrumb').addClass('contraste-nav2escuro');

    $('.menu-ac2 img').attr('src', imgSrc+'logo2.png');

    $('footer').css('background-image', 'none');
}