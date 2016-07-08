$(document).ready(function () {
	$('#new_comment').click(function (e) {
		e.preventDefault();

		$('#stylized').show();
		$('#cancel_comment').show();
		//$('#new_comment').hide();
		$(this).hide();
	});
	$('#cancel_comment').click(function(){
		$('#stylized').hide();
		$('#new_comment').show();
		$(this).hide();
	});
	$('input, textarea').focusin(function(){
		$(this).css('background', '#cecece');
	});
	$('input, textarea').focusout(function(){
		$(this).css('background', '#fff');
	});
	$('label').mouseenter(function(){
		$(this).find('span').css('display', 'block');
	});
	$('label').mouseout(function(){
		$(this).find('span').hide();
	});
	$('#agree').click(function(){
		if($(this).is(':checked')){
			$('#submit').attr('disabled', null).css('background', '#3EB1DD');
		}
		else{
			$('#submit').attr('disabled','disabled').css('background', '#66C1E4');
		}
	});
});

// #3EB1DD;