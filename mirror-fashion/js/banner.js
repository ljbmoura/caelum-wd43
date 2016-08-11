/**
 * 
 */

var banners = ["img/destaque-home.png","img/destaque-home-2.png"];

var img_banner = document.querySelector(".destaque img");

function trocaBanner() {
	banners.reverse();
	img_banner.src = banners[0];
}

setInterval(trocaBanner, 2000);