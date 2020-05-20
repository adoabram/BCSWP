jQuery(function($) {

    "use strict";

    var number = document.querySelector('.description_advertasment_counter'),
		numberTop = number.getBoundingClientRect().top,
		start = +number.innerHTML, end = +number.dataset.max;

		window.addEventListener('scroll', function onScroll() {
			if(window.pageYOffset > numberTop - window.innerHeight) {
				this.removeEventListener('scroll', onScroll);
				var interval = setInterval(function() {
					number.innerHTML = ++start;
					if(start == end) {
						clearInterval(interval);
					}
				}, 5);
			}
		});
		
	//Height conteiners
	function setHeaderHeight() {
		var height = $(".slider_header").height();
		$('.bg_header').css({
		height:height+"px" // приравниванием высоту header'a к высоте блока "carousel"
		});
		$('.cirkle_images').css({
		maxHeight:height+"px" // приравниванием высоту header'a к высоте блока "carousel"
		});
	}
	setHeaderHeight(); // устанавливаем высоту окна при первой загрузке страницы
	$(window).resize( setHeaderHeight ); // обновляем при изменении размеров окна

});

