/**
 * 
 */

var banners = [ "img/destaque-home.png", "img/destaque-home-2.png",
		"img/destaque_home_3.png" ];

//var img_banner = document.querySelector(".destaque img");
var img_banner = $(".destaque img");
var banner_atual = 0;

var btn_pausa = document.querySelector("#pausa_play");

function trocaBanner() {
	// banners.reverse();
	banner_atual = (banner_atual + 1) % (banners.length);
//	img_banner.src = banners[banner_atual];
	img_banner.attr("src", banners[banner_atual]);
}

var timer = setInterval(trocaBanner, 2000);

btn_pausa.addEventListener("click", function() {
//	setTimeout(callback, delay)
//	btn_pausa.caption = "Play";
	if(btn_pausa.innerHTML == "Pausa"){
		btn_pausa.innerHTML="Play";
		clearInterval(timer);
	} else {
		btn_pausa.innerHTML="Pausa";
		timer = setInterval(trocaBanner, 2000)
	}
}
)
