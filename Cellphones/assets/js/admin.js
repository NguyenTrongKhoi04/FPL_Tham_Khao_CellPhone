$(document).ready(function(){

	// $('.second-muc').slideUp('fast');
	// $('.first-muc').each(function(){
	// 	$(this).click(function(){
	// 		if($(this).parent().hasClass("active"))
	// 		{
	// 			$(this).parent().find(".second-muc").slideUp('fast');
	// 			$(this).parent().removeClass("active");
	// 		}
	// 		else
	// 		{
	// 			$(".muc").removeClass("active");
	// 			$(".second-muc").slideUp('fast');
	// 			$(this).parent().addClass("active");
	// 			$(this).parent().find(".second-muc").slideDown('fast',function(){
	// 				if($(this).parent().find('.second-muc').css('display')=='none')
	// 				{
	// 					$('.muc .phone').css('background','#515763');
	// 				}
	// 				else{
	// 					$('.muc .phone').css('background','#444954');
	// 				}
	// 			});
	// 		}
	// 	});
	// });
	
	$('.muc .order').click(function(){
		$('.follow-order').toggle(200,"swing",function(){

			if($('.follow-order').css('display')=='none')
			{
				$('.muc .order').css('background','#515763');
			}
			else{
				$('.muc .order').css('background','#444954');
			}
		});
	});
	$('.muc .hangcu').click(function(){
		$('.follow-hangcu').toggle(200,"swing",function(){

			if($('.follow-hangcu').css('display')=='none')
			{
				$('.muc .hangcu').css('background','#515763');
			}
			else{
				$('.muc .hangcu').css('background','#444954');
			}
		});
	});
	$('.muc .dongho').click(function(){
		$('.follow-dongho').toggle(200,"swing",function(){

			if($('.follow-dongho').css('display')=='none')
			{
				$('.muc .dongho').css('background','#515763');
			}
			else{
				$('.muc .dongho').css('background','#444954');
			}
		});
	});
	$('.muc .revenue').click(function(){
		$('.follow-revenue').toggle(200,"swing",function(){

			if($('.follow-revenue').css('display')=='none')
			{
				$('.muc .revenue').css('background','#515763');
			}
			else{
				$('.muc .revenue').css('background','#444954');
			}
		});
	});
	$('.muc .phukien').click(function(){
		$('.follow-phukien').toggle(200,"swing",function(){

			if($('.follow-phukien').css('display')=='none')
			{
				$('.muc .phukien').css('background','#515763');
			}
			else{
				$('.muc .phukien').css('background','#444954');
			}
		});
	});
	$('.muc .headphone').click(function(){
		$('.follow-headphone').toggle(200,"swing",function(){

			if($('.follow-headphone').css('display')=='none')
			{
				$('.muc .headphone').css('background','#515763');
			}
			else{
				$('.muc .headphone').css('background','#444954');
			}
		});
	});
	$('.muc .laptop').click(function(){
		$('.follow-laptop').toggle(200,"swing",function(){

			if($('.follow-laptop').css('display')=='none')
			{
				$('.muc .laptop').css('background','#515763');
			}
			else{
				$('.muc .laptop').css('background','#444954');
			}
		});
	});
	$('.muc .phone').click(function(){
		$('.follow-phone').toggle(200,"swing",function(){

			if($('.follow-phone').css('display')=='none')
			{
				$('.muc .phone').css('background','#515763');
			}
			else{
				$('.muc .phone').css('background','#444954');
			}
		});
	});


	$('.muc .users').click(function(){
		$('.follow-users').toggle(200,"swing",function(){
			
			if($('.follow-users').css('display')=='none')
			{
				$('.muc .users').css('background','#515763');
			}
			else{
				$('.muc .users').css('background','#444954');
			}
		});
	});
	$('.muc .nsx').click(function(){
		$('.follow-nsx').toggle(200,"swing",function(){
			
			if($('.follow-nsx').css('display')=='none')
			{
				$('.muc .nsx').css('background','#515763');
			}
			else{
				$('.muc .nsx').css('background','#444954');
			}
		});
	});


	$('.login').click(function(){
		$('.smail-login').toggle();
	});

	// $('.login-sussec').fadeIn(4000);
	$('.login-sussec').fadeOut(4000);

	
});

