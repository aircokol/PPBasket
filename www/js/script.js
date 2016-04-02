(function($){
	// настройка выделения пункта Меню
	$('ul.nav').find('a[href="'+ location.pathname +'"]').closest('li').addClass('active');
})(jQuery)