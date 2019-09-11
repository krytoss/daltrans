/* var slideIndex = 1;

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

	var slides = $("#slider .slide");
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
} */

$(window).scroll(function() {

	if ($(document).scrollTop() > 250) {
		$('#header-top').addClass("sticky");
	} else {
		$('#header-top').removeClass("sticky");
	}

})

$(document).ready(function(){

	$('#errorModal').modal('show');

	function isElementInViewport(elem) {
        var $elem = $(elem);

        // Get the scroll position of the page.
        var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
        var viewportTop = $(scrollElem).scrollTop();
        var viewportBottom = viewportTop + $(window).height();
        viewportTop = $(window).scrollTop();
        viewportBottom = viewportTop + $(window).height();

        // Get the position of the element on the page.
        var elemTop = Math.round( $elem.offset().top );
        var elemBottom = elemTop + $elem.height();

        return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
    }

    function assignActiveClassToNav() {
        var scrollDistance = $(window).scrollTop();
        $('section').each(function(i) {
            if ($(this).position().top-200 <= scrollDistance) {
                var $class = $(this).attr("id");
                $('#main-nav a.active').removeClass('active');
                $('#main-nav a.'+$class).addClass('active');
            }
        });
    }

    function setMenuLinks() {
        $(".anchor").on('click', function(event) {
            event.preventDefault();

            var target;

            if ($.attr(this, 'href')) {
                target = $.attr(this, 'href');
            } else {
                target = $(this).data('href');
            }

            $('html, body').animate({
                scrollTop: $(target).offset().top-80
            }, 500);
        })
    }

    setMenuLinks();
    assignActiveClassToNav();
    
    $(window).scroll(function(){
        assignActiveClassToNav();
    });
})

$(window).on('load', function(){
    $(".loading").fadeOut().done(function() {
        $(".loading").remove();
    });
});