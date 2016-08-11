/**
 * 
 */
var num = document.querySelector('#num');
var h1 = document.querySelector('h1');

h1.onclick = mostra;

function mostra() {
	console.log('clicou no h1');
	console.log(num.value);
}