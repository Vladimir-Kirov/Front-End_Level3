$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();


    var progress_value = 70;

	$('.change_progress').click(function () {
		if($(this).attr('id') == 'zoom_btn') 
		{
			if(progress_value <= 95) {
				progress_value = progress_value + 5;
			}
		}
		else 
		{
			if(progress_value >= 5) {
				progress_value = progress_value - 5;
			}
		}

		$('#prg_bar').attr('aria-valuenow', progress_value);
		$('#prg_bar').width($('#prg_bar').attr('aria-valuenow') + '%');
		$('#prg_bar span').text($('#prg_bar').attr('aria-valuenow') + '%');

	});
});