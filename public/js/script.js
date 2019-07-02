var slideIndex = 1;

$(".arrow-left").click(function() {
	plusSlides(-1);
})

$(".arrow-right").click(function() {
	plusSlides(1);
})

function plusSlides(n) {
	showSlides(slideIndex += n);
}

function showSlides(n) {

	var slides = $(".slide");
	if (n > slides.length) {
		slideIndex = 1;
	}
	if (n < 1) {
		slideIndex = slides.length;
	}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	slides[slideIndex - 1].style.display = "block";
}

$(window).scroll(function() {

	console.log("ahh");
	console.log($(document).scrollTop());
	if ($(document).scrollTop() > 250) {
		$('#header-top').addClass("sticky");
	} else {
		$('#header-top').removeClass("sticky");
	}

})

$(document).ready(function(){
	$(".loading").hide();
showSlides(slideIndex);
})