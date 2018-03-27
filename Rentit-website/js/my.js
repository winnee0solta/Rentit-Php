$('.navigation').singlePageNav({
	 currentClass: 'active',
	 changeHash  : true,
	 scrollSpeed : 750,
	 offset      : 0,
	 filter      : ':not(.external)',
	 easing      : 'swing',

});
$('.card-expand').click(function(){
$(this).parent().parent().toggleClass('expanded');
})

var cardHeight = $('.card.expanded').innerHeight()
$('.card.expanded .card-inner').css('max-height', cardHeight);
