// $(window).load(function(){
//  $('img').each(function(){
//   var imgClass = (this.width/this.height < 1) ? 'wide' : 'tall';
//   $(this).addClass(imgClass);
//  })
// })

$(window).load(
	function () 
	{
		$('.profile-image').imagefill();
		$('.monthly-challenge').imagefill();
		$('.program').imagefill();
		$('.post-image').imagefill();
	}
);