var pizza = $('#pizza');
var win = $(window);

win.on('scroll', function(){
	var top = win.scrollTop();
	pizza.css('transform', 'rotate(' + top / 4 + 'deg)');
});

var nav = $('.navig');
var testa = $('.testa');
var tnav = $('.top-nav');

nav.waypoint(function(){
	tnav.css({'height': '65px',
	          'position': 'fixed'});
	pizza.css('position', 'fixed');
});


// TO BE CONTINUED...