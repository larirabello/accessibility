// Para usar coloque o comando:
// "javascript:mudatamanhoa('tag_ou_id_alvo', -1);" para diminuir
// e o comando "javascript:mudatamanhoa('tag_ou_id_alvo', +1);" para aumentar

var tagAlvoa = new Array('p'); //pega todas as tags p//

// Especificando os possíveis tamanhoasa de fontes, poderia ser: x-small, small...
var tamanhoasa = new Array( '1em','1.5em','2em','2.5em' );
var tamanhoaIniciala = 0;

function mudaTamanhoa( idAlvoa,acaoa ){
if (!document.getElementById) return
var selecionadosa = null,tamanhoa = tamanhoaIniciala,i,j,tagsAlvoa;
tamanhoa += acaoa;
if ( tamanhoa < 0 ) tamanhoa = 0;
if ( tamanhoa > 4 ) tamanhoa = 4;
tamanhoaIniciala = tamanhoa;
if ( !( selecionadosa = document.getElementById( idAlvoa ) ) ) selecionadosa = document.getElementsByTagName( idAlvoa )[ 0 ];

selecionadosa.style.fontSize = tamanhoasa[ tamanhoa ];

for ( i = 0; i < tagAlvoa.length; i++ ){
tagsAlvoa = selecionadosa.getElementsByTagName( tagAlvoa[ i ] );
for ( j = 0; j < tagsAlvoa.length; j++ ) tagsAlvoa[ j ].style.fontSize = tamanhoasa[ tamanhoa ];
}
}
// Fim do código de Aumentar/ Diminuir a letra
