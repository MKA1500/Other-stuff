var pizza = $('#pizza');
var win = $(window);

win.on('scroll', function(){
	var top = win.scrollTop();
	pizza.css('transform', 'rotate(' + top / 4 + 'deg)');
}); 

// smooth scrolling:

$('.navig').localScroll();

var navig = $('.navig');
var testa = $('.testa');
var tnav = $('.top-nav');
var welcome = $('#welcome');
var ferrara = $('#ferrara');
var ristorante = $('#ristorante');

navig.waypoint(function(direction){
	var top = win.scrollTop();
	if (direction == 'down') {
	// pizza.css('margin-top', '-2px').css('position', 'fixed');
	navig.css('margin-top', '0px');
	tnav.css('position', 'fixed');
	testa.css('height', '53px').css('position', 'fixed');
	// welcome to Ferrara:
	welcome.css('margin-top', '12px').css('position', 'fixed');
	ferrara.css('display', 'inline-block').css('font-size', '1.4em');
	ristorante.css('display', 'inline-block').css('margin-left', '4px').css('font-size', '0.7em');
	
	} else {
	// pizza.css('margin-top', '10px').css('position', 'absolute');	
    tnav.css('position', 'absolute');
	navig.css('margin-top', '167px');	
	testa.css('height', '220px').css('position', 'absolute');
	// welcome to Ferrara:
	welcome.css('margin-top', '38px').css('position', 'absolute');
	ferrara.css('display', 'block').css('font-size', '5em');
	ristorante.css('display', 'block').css('margin-left', '0px').css('font-size', '0.9em');
	}
});

var a1 = $('#a-one');
var a2 = $('#a-two');
var a3 = $('#a-three');
var a4 = $('#a-four');
var a5 = $('#a-five');
var a6 = $('#a-six');

a1.waypoint(function(direction){
	if (direction == 'down') {
	a1.addClass('js-articles-animation');
	} else {
	a1.removeClass('js-articles-animation');
	}
}, {offset: '75%'});

a2.waypoint(function(direction){
	if (direction == 'down') {
	a2.addClass('js-articles-animation');
	} else {
	a2.removeClass('js-articles-animation');
	}
}, {offset: '75%'});

a3.waypoint(function(direction){
	if (direction == 'down') {
	a3.addClass('js-articles-animation');
	} else {
	a3.removeClass('js-articles-animation');
	}
}, {offset: '75%'});

a4.waypoint(function(direction){
	if (direction == 'down') {
	a4.addClass('js-articles-animation');
	} else {
	a4.removeClass('js-articles-animation');
	}
}, {offset: '75%'});

a5.waypoint(function(direction){
	if (direction == 'down') {
	a5.addClass('js-articles-animation');
	} else {
	a5.removeClass('js-articles-animation');
	}
}, {offset: '75%'});

a6.waypoint(function(direction){
	if (direction == 'down') {
	a6.addClass('js-articles-animation');
	} else {
	a6.removeClass('js-articles-animation');
	}
}, {offset: '75%'});
