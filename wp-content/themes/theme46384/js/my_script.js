$(document).ready(function($) {
	var items = $('.camera_pag_ul > li');
	var itemWidth = (100 / items.length);


	items.css({width:itemWidth+'%'});

});