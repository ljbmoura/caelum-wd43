/**
 * 
 */
$('.novidades').addClass('painel-compacto');
$('.mais-vendidos').addClass('painel-compacto');



//um método para cada
//$('.novidades button').on ('click', function() {
//	$('.novidades').removeClass('painel-compacto');
//});
//$('.mais-vendidos button').on ('click', function() {
//	$('.mais-vendidos').removeClass('painel-compacto');
//});



// parametrizando, porém é necessário usar uma função anônima
//$('.novidades button').on ('click', function () {
//	remove(".novidades");
//});
//$('.mais-vendidos button').on ('click', function () {
//	remove(".mais-vendidos");
//});
//function remove(classe) {
//	$(classe).removeClass('painel-compacto');
//}



//dinamicamente acessando via componente pai
$('.painel button').on ('click', function() {
	$(this).parent().removeClass('painel-compacto');
});


